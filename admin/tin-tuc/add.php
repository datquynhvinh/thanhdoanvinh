<?php
	include_once('../include/top.php');
 
        $sql_show = "SELECT news.*, categories.*, users.*
                FROM news
                INNER JOIN categories ON news.category_id = categories.id
                INNER JOIN users ON news.author_id = users.id
                WHERE news.id = $id";
		$qr_show = mysqli_query($con, $sql_show);
		
		$sql_cate = "SELECT news.category_id, categories.cate_name 
        FROM news 
        JOIN categories 
        ON news.category_id = categories.id";
        
        $sql_post = "SELECT news.author_id, users.id 
        FROM news 
        JOIN users 
        ON news.author_id = users.id";
 
	if(isset($_POST['add'])) {
		$title = $_POST['title'];
		$url = $_POST['url'];
		$danhmuc = $_POST['danhmuc'];
		$author = $_POST['author'];
		$image = $_POST['image'];
		$content = $_POST['content'];
		
		$sql = "insert into news(title, url, content, image, category_id, author_id) 
		values('$title', '$url', '$content', '$image', '$danhmuc', '$author')";
		$qr = mysqli_query($con, $sql);
		header("location: index.php");
	}

 ?>

        <div class="app-container">
           
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        
                        <div class="d-flex">
                            <ul class="navbar-nav">
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
    								    <select class="form-select" aria-label="Default select example" name="danhmuc">
        								 	<?php while ($row = mysqli_fetch_assoc($qr_show)) { ?>
        									 <option value="<?php echo $row["categories_id"] ?>"><?php echo $row_cate["categories_id"] ?></option>
        							    	<?php } ?>
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
    								 	<?php while ($row_user = mysqli_fetch_assoc($qr_user)) { ?>
    									 <option value="<?php echo $row_user["author_id"] ?>"><?php echo $row_user["author_id"] ?></option>
    							    	<?php } ?>
									</select>
								 </div>
								</div>

								<div class="col-md-12">
								 	<div class="item">
								 	<label for="validationCustom01" class="form-label">Ảnh</label>
								    <input type="text" class="form-control" name="image" required>
							   	 	<div class="invalid-feedback">
							        	Không được để trống phần này
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
	</script>
<?php
	include_once('../include/top.php');
 ?>
