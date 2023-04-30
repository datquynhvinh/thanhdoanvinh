<?php
	include_once('../include/top.php');
	
 	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT news.*, categories.*, users.*
                FROM news
                INNER JOIN categories ON news.category_id = categories.id
                INNER JOIN users ON news.author_id = users.id
                WHERE news.id = $id";
		$qr = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($qr);
	}

	if(isset($_POST['add'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$image = $_POST['image'];
		if($title == '' || $content == '' || $image == '') {
			echo "Vui lòng nhập đầy đủ thông tin";
		} else {
			$sql = "update news set title ='$title', content = '$content', image = '$image' where id = $id";
			$qr = mysqli_query($con, $sql);
			header("location: index.php");
		}
	}

 ?>

        <div class="app-container">
           
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link active" href="#">Admin</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Tin tức</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Thêm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
					 	<div class="row">
					    	<form class="row needs-validation" novalidate method="POST" action="">
								<div class="item">
									 <div class="col-md-12">
									    <label for="validationCustom01" class="form-label">Title</label>
									    <input value="<?php echo $row['title'] ?>" type="text" class="form-control" name="title" required>
									    <div class="invalid-feedback">
									        Không được để trống phần này
									    </div>
									 </div>
								 </div>
								 <div class="col-md-6">
								 	<div class="item">
    								 	<label for="validationCustom01" class="form-label">Danh mục</label>
    								    <select  class="form-select" aria-label="Default select example" name="category">
    									  <option value="<?php echo $row["cate_name"] ?>"><?php echo $row["cate_name"] ?></option>
    									</select>
								    </div>
								 </div>
								 	
								 <div class="col-md-6">
								 	<div class="item">
								 	<label for="validationCustom01" class="form-label">Tác giả</label>
								    <select  class="form-select" aria-label="Default select example" name="category">
    									  <option value="<?php echo $row["author_id"] ?>"><?php echo $row["username"] ?></option>
    								</select>
								 </div>
								</div>

								<div class="col-md-12">
								 	<div class="item">
								 	<label for="validationCustom01" class="form-label">Ảnh</label>
								    <input value="<?php echo $row['image'] ?>" type="text" class="form-control" name="image" required>
							   	 	<div class="invalid-feedback">
							        	Không được để trống phần này
							    	</div>
								 </div>
								</div>
								 	
								 <div class="col-md-12">
								 	<div class="item">
									    <label for="validationCustom01" class="form-label">Nội dung</label>
									    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" required=""><?php echo $row['content'] ?></textarea>
									    <div class="invalid-feedback">
									        Không được để trống phần này
									    </div>
									 </div>
							  	</div>
								<div class="col-12">
								 	<div class="item">
								    <div class="form-check">
								      	<input class="form-check-input" type="checkbox" value="" name="state" id="invalidCheck">
								      	<label class="form-check-label" for="invalidCheck">
								        	Trạng thái
								      	</label>
								    </div>
								   </div>
								 </div>
								 <div class="col-12">
								 	<div class="item">
								    <button class="btn btn-primary" name="add" type="submit">Sửa</button>
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
	</script>
<?php
	include_once('../include/top.php');
 ?>
