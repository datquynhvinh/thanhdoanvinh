<?php 
		$sql_category = mysqli_query($con,'SELECT * FROM menu ORDER BY idMenu DESC');
        $sql_category_top = mysqli_query($con,'SELECT * FROM `menu-top` ORDER BY idMenuTop ASC');
	?>

<style>
	

	
</style>
<div class="section_header">
    <div class="header_pc">
        <div class="header_page">
            <div class="container">
                <div class="row">
                    <ul class="menu_top">
					<?php 
                        $sql_idmenutop = mysqli_query($con,'SELECT * FROM `menu-top` ORDER BY idMenuTop ASC');
                        while($sql_idmenutop = mysqli_fetch_array($sql_category_top)){ ?>
                            <li>
                                <a class="text-uppercase" href="<?php echo $sql_idmenutop['slug']; ?>.php">
                                        <?php echo $sql_idmenutop['title']; ?>
                                </a>
                            </li>
                        <?php } 
					?>
                    </ul>

                    <ul class="icon_headertop">
                        <li><a href="" title=""><img src="./assets/img/icon1.png" alt=""></a></li>
                        <li><a href="" title=""><img src="./assets/img/icon2.png" alt=""></a></li>
                        <li><a href="" title=""><img src="./assets/img/icon3.png" alt=""></a></li>
                        <li><a href="" title=""><img src="./assets/img/icon4.png" alt=""></a></li>
                        <li><a href="" title=""><img src="./assets/img/icon5.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_page">
            <div class="container">
                <div class="row">
                    <div class="element_bar_menu">
                        <a href="https://congnghephanmem.online/" title="">
                            <img src="./assets/img/logo.png" alt="">
                        </a>
                        <div class="icon_bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span><img src="./assets/img/bgheader.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_page">
            <div class="container">
                <div class="row">
                    <ul class="main_menu main_menu_mobi">
                        <ul class="icon_headertop">
                            <li><a href="" title=""><img src="./assets/img/icon1.png" alt=""></a></li>
                            <li><a href="" title=""><img src="./assets/img/icon2.png" alt=""></a></li>
                            <li><a href="" title=""><img src="./assets/img/icon3.png" alt=""></a></li>
                            <li><a href="" title=""><img src="./assets/img/icon4.png" alt=""></a></li>
                            <li><a href="" title=""><img src="./assets/img/icon5.png" alt=""></a></li>
                        </ul>
                       
                            <li><a href="https://congnghephanmem.online/" title=""><img src="./assets/img/home.png" alt=""></a></li>
                            <?php 
                                $sql_category_danhmuc = mysqli_query($con,'SELECT * FROM menu ORDER BY idMenu ASC');
                                while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){ ?>
                                <li class="hightline">
                                    <a href="<?php echo $row_category_danhmuc['slug']; ?>.php">
                                        <?php echo $row_category_danhmuc['title']; ?>
                                    </a>
                                </li>
                                <?php } 
                            ?>
                         <!--    <div class="mega_menu">
                                <ul class="submenu">
                                    <li><a href="" title="">Lịch công tác</a></li>
                                    <li><a href="" title="">Văn bản Đoàn - Hội - Đội</a></li>
                                    <li><a href="" title="">Học lý luận, chính trị</a></li>
                                    <li><a href="" title="">Mỗi tuần 1 câu chuyện</a></li>
                                    <li><a href="" title="">Theo dấu chân Bác</a></li>
                                    <li><a href="" title="">Hướng dẫn, khen thưởng</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hightline">
                            <a href="" title="">Văn bản Đoàn - Hội - Đội</a>
                            <div class="mega_menu">
                                <ul class="submenu">
                                    <li><a href="" title="">Lịch công tác</a></li>
                                    <li><a href="" title="">Văn bản Đoàn - Hội - Đội</a></li>
                                    <li><a href="" title="">Học lý luận, chính trị</a></li>
                                    <li><a href="" title="">Mỗi tuần 1 câu chuyện</a></li>
                                    <li><a href="" title="">Theo dấu chân Bác</a></li>
                                    <li><a href="" title="">Hướng dẫn, khen thưởng</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hightline">
                            <a href="" title="">Học lý luận, chính trị</a>
                            <div class="mega_menu">
                                <ul class="submenu">
                                    <li><a href="" title="">Lịch công tác</a></li>
                                    <li><a href="" title="">Văn bản Đoàn - Hội - Đội</a></li>
                                    <li><a href="" title="">Học lý luận, chính trị</a></li>
                                    <li><a href="" title="">Mỗi tuần 1 câu chuyện</a></li>
                                    <li><a href="" title="">Theo dấu chân Bác</a></li>
                                    <li><a href="" title="">Hướng dẫn, khen thưởng</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hightline">
                            <a href="" title="">Mỗi tuần 1 câu chuyện</a>
                            <div class="mega_menu">
                                <ul class="submenu">
                                    <li><a href="" title="">Lịch công tác</a></li>
                                    <li><a href="" title="">Văn bản Đoàn - Hội - Đội</a></li>
                                    <li><a href="" title="">Học lý luận, chính trị</a></li>
                                    <li><a href="" title="">Mỗi tuần 1 câu chuyện</a></li>
                                    <li><a href="" title="">Theo dấu chân Bác</a></li>
                                    <li><a href="" title="">Hướng dẫn, khen thưởng</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hightline">
                            <a href="" title="">Theo dấu chân Bác</a>
                            <div class="mega_menu">
                                <ul class="submenu">
                                    <li><a href="" title="">Lịch công tác</a></li>
                                    <li><a href="" title="">Văn bản Đoàn - Hội - Đội</a></li>
                                    <li><a href="" title="">Học lý luận, chính trị</a></li>
                                    <li><a href="" title="">Mỗi tuần 1 câu chuyện</a></li>
                                    <li><a href="" title="">Theo dấu chân Bác</a></li>
                                    <li><a href="" title="">Hướng dẫn, khen thưởng</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="" title="">Hướng dẫn, khen thưởng</a></li> -->
                        <li>
                            <a href="" title=""><img src="./assets/img/search.png" alt=""></a>
                            <div class="mega_menu search_header">
                                <form class="form_search">
                                    <input type="text" name="">
                                    <a href="" class="btn btn_search" title=""><img src="./assets/img/search.png" alt=""></a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_page">
            <div class="container">
                <div class="row">
                    <div class="cicrle">
                        <span></span>
                    </div>
                    <div class="post_marquee">
                        <marquee>
                            <a href="" title="">Bế mạc Trại huấn luyện Nguyễn Chí Thanh khu vực phía Bắc</a>
                            <a href="" title="">Hơn 800 em thiếu nhi tham gia Ngày hội “Chiến sĩ nhỏ Điện Biên - Làm theo lời Bác dạy"</a>
                            <a href="" title="">Ngày hội “Chiến sĩ nhỏ Điện Biên - Làm theo lời Bác dạy"</a>
                        </marquee>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>