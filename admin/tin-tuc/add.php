<?php
	require_once '../../app/config/config.php';
	require_once '../../app/helpers/lib.php';
	include_once('../include/top.php');

	if(isset($_POST['add'])) {
		$title = $_POST['title'];
		$url = $_POST['url'];
		$danhmuc = $_POST['danhmuc'];
		$author = $_POST['author'];
		$content = $_POST['content'];
		$fileName = null;

		if (isset($_FILES["image"])) {
			$project = explode('/', $_SERVER['REQUEST_URI'])[1];
			$targetDir = ROOT_DIR . $project . TIN_TUC_UPLOAD_DIR;
			if (!is_dir($targetDir)) {
				mkdir($targetDir, 0777, true);
			}

			$fileName = basename($_FILES["image"]["name"]);
			$targetFile = $targetDir . $fileName;
			move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
		}

		$sql = "insert into news(title, url, content, image, category_id, author_id) 
		values('$title', '$url', '$content', '$fileName', '$danhmuc', '$author')";
		$qr = mysqli_query($con, $sql);
		
		if ($qr) {
            header("location: index.php");
        }
	}

 ?>
	<style>
		input[type="file"] {
			display: none;
		}

		.custom-upload-button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			margin: 0; /* Bỏ margin mặc định của button */
			display: inline-block; /* Chuyển button thành block-inline element */
			line-height: 1; /* Đặt line-height bằng 1 để căn giữa chữ */
			text-align: center; /* Canh giữa chữ trong button */
		}

		.custom-upload-button:hover {
			background-color: #3e8e41;
		}

		#preview {
			margin-top: 8px;
			margin-bottom: 8px;
			margin-left: 0px;
			margin-right: auto;
			display: block;
			width: 650px;
			height: 300px;
			object-fit: cover; /* giữ tỷ lệ khung hình */
			border-radius: 3%;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			border-color: beige;
		}
	</style>
        <div class="app-container">
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
					 	<div class="row">
					    	<form class="row needs-validation" novalidate method="POST" action="" enctype="multipart/form-data" onsubmit="return validateForm()">
							    <div class="col-md-6">
								    <div class="item">
									    <label for="validationCustom01" class="form-label">Title</label>
									    <input type="text" class="form-control" name="title" required>
									    <div class="invalid-feedback">
									        Không được để trống phần này
									    </div>
									 </div>
								 </div>
								 
								 <div class="col-md-6">
								    <div class="item">
									    <label for="validationCustom01" class="form-label">URL</label>
									    <input type="text" class="form-control" name="url" required>
									    <div class="invalid-feedback">
									        Không được để trống phần này
									    </div>
									 </div>
								 </div>
								 
								 <div class="col-md-6">
								 	<div class="item">
    								 	<label for="validationCustom01" class="form-label">Danh mục</label>
    								 	<select class="form-select" name="danhmuc">
    								 	    <?php
												// Lấy danh sách các danh mục
												$sql2 = "SELECT id, cate_name FROM categories";
												$result2 = mysqli_query($con, $sql2);
											
												// Hiển thị các option
												while ($row2 = mysqli_fetch_assoc($result2)) {
													echo "<option value='".$row2['id']."'>".$row2['cate_name']."</option>";
												}
                                            ?>
                                        </select>
								    </div>
								 </div>
								 
								 	
								 <div class="col-md-6">
								 	<div class="item">
								 	<label for="validationCustom01" class="form-label">Tác giả</label>
							   	 	<div class="invalid-feedback">
							        	Không được để trống phần này
							    	</div>
							    	<select class="form-select" aria-label="Default select example" name="author">
    								 	<?php
                                          // Lấy danh sách các tác giả
                                          $sql3 = "SELECT id, username FROM users";
                                          $result3 = mysqli_query($con, $sql3);
                                    
                                          // Hiển thị các option
                                          while ($row3 = mysqli_fetch_assoc($result3)) {
                                            echo "<option value='".$row3['id']."'>".$row3['username']."</option>";
                                          }
                                        ?>
									</select>
								 </div>
								</div>

								<div class="col-md-12">
								 	<div class="item">
								 	<label for="validationCustom01" class="form-label">Ảnh</label>
									<div>
										<input class="custom-upload-button" value="Chọn ảnh" onclick="document.getElementById('file-input').click()" readonly />
										<input type="file" id="file-input" onchange="previewImage(event)" name="image" />
										<div class="invalid-feedback">
											Không được để trống phần này
										</div>
										<img id="preview" src="#" alt="Ảnh xem trước">
									</div>
								 </div>
								</div>
								 	
								 <div class="col-md-12">
								 	<div class="item">
									    <label for="validationCustom01" class="form-label">Nội dung</label>
									    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
									    <div class="invalid-feedback">
									        Không được để trống phần này
									    </div>
									 </div>
							  	</div>
								 <div class="col-12">
								 	<div class="item">
								    <button class="btn btn-primary" name="add" type="submit">Thêm</button>
								    </div>
								 </div>
							</form>
						</div>
					 </div>
                </div>
            </div>
        </div>
     <script>
    	// Example starter JavaScript for disabling form submissions if there are invalid fields
		(() => {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  const forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.from(forms).forEach(form => {
		    form.addEventListener('submit', event => {
		      if (!form.checkValidity()) {
		        event.preventDefault()
		        event.stopPropagation()
		      }
		      form.classList.add('was-validated')
		    }, false)
		  })
		})()

		function previewImage(event) {
			var reader = new FileReader();
			reader.onload = function(){
				var output = document.getElementById('preview');
				output.src = reader.result;
				output.style.display = 'block'; // hiển thị thẻ <img>
			};
			reader.readAsDataURL(event.target.files[0]);
		}

		function validateForm() {
			var file = document.getElementById("file-input").files[0];
			if (!file) {
				alert("Vui lòng chọn ảnh");
				return false;
			}

			var img = new Image();
			img.src = window.URL.createObjectURL(file);
			img.onload = function() {
				if (this.width === 0 || this.height === 0) {
					alert("Ảnh không hợp lệ");
					return false;
				}
				// Ảnh hợp lệ, submit form
				return true;
			};
		}

		// ẩn thẻ <img> khi không có ảnh được chọn
		document.getElementById('preview').style.display = 'none';
	</script>
<?php
	include_once('../include/top.php');
 ?>

