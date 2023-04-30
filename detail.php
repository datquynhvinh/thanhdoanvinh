<?php
	session_start();
	include_once('db/connect.php');
	
    $url = $_SERVER['REQUEST_URI'];
    $url_parts = explode("/", $url);
    $url_slug = end($url_parts);
    
    // Truy vấn cơ sở dữ liệu để lấy thông tin bài viết tương ứng với URL
    $sql = "SELECT * FROM `news` WHERE url = '$url_slug'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $title = $row['title'];
      $content = $row['content'];
      $image = $row['image'];
      $category_id = $row['category_id'];
      $created_at = $row['created_at'];
      $updated_at = $row['updated_at'];
    
      // Hiển thị chi tiết bài viết trên trang web
      // // echo "<img src='$image' alt='$title'>";
      // echo "<p>$content</p>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="./assets/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick-theme.css">
    <script src="./assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="./assets/slick/slick.js"></script>
    
</head>
<body>
<?php echo $title; ?>
<div class="section_header">
    <div class="header_pc">
        <div class="header_page">
            <div class="container">
                <div class="row">
                    <ul class="menu_top">
                        <li><a href="" title="">GIỚI THIỆU</a></li>
                        <li><a href="" title="">TIN TỨC</a></li>
                        <li><a href="" title="">THƯ VIỆN</a></li>
                        <li><a href="" title="">SỔ TAY ĐOÀN ĐỘI</a></li>
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
                        <a href="" title="">
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
                        <ul class="menu_top">
                            <li><a href="" title="">GIỚI THIỆU</a></li>
                            <li><a href="" title="">TIN TỨC</a></li>
                            <li><a href="" title="">THƯ VIỆN</a></li>
                            <li><a href="" title="">SỔ TAY ĐOÀN ĐỘI</a></li>
                        </ul>

                        
                        <li><a href="" title=""><img src="./assets/img/home.png" alt=""></a></li>
                        <li class="hightline">
                            <a href="" title="">Lịch công tác</a>
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
                        <li><a href="" title="">Hướng dẫn, khen thưởng</a></li>
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

<div class="section_breadcrumb">
    <div class="container container_width">
        <div class="row">
            <ul class="element_breadcrumb">
                <li><img src="./assets/img/homapgebreadcumb.png" alt=""></li>
                <li><a href="" title="">Tin tức</a></li>
                <li><a href="" title="">Tin tức cơ sở đoàn</a></li>
                <li><a href="" title="">Cơ sở đoàn quận Hồng Bàng</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="section_content_width_sidebar page_news_3 wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="element_content_box">
                <h2 class="title_post">Hơn 1.000 đoàn viên Hải Phòng hưởng ứng Ngày hội Thanh niên với Văn hoá giao thông</h2>
                <div class="date_print">
                    <p><img src="./assets/img/lock.png" alt=""><span>30</span><span>03</span><span>2020</span></p>
                    <a href="" class="btn btn_print"><img src="./assets/img/print.png" alt="">in trang</a>
                </div>
                <p><strong>Sáng 24/9, tại trường THPT Lê Quý Đôn (quận Hải An, TP Hải Phòng), Ban Thường vụ Thành đoàn tổ chức Ngày hội Thanh niên với Văn hoá giao thông, phát động Cuộc thi “Tìm hiểu các kỳ Đại hội Đảng bộ thành phố Hải Phòng và Đại hội Đảng toàn quốc” với sự tham gia của hơn 1.000 đoàn viên thanh thiếu nhi.</strong></p>
                <img src="./assets/img/img5.png" alt="" class="img_post">
                <p>Tới dự chương trình có các đồng chí: Nguyễn Ngọc Tuất - Phó Bí thư thường trực Quận ủy Hải An; Hoàng Triệu Hùng - Phó Giám đốc Sở Giao thông vận tải; Vương Toàn Thu Thủy, Ủy viên BCH Trung ương Đoàn, Phó Bí thư Thành đoàn, Chủ tịch Hội Sinh viên Việt Nam thành phố, Chủ tịch Hội đồng Đội thành phố... cùng hơn 1000 đoàn viên, thanh niên và nhân dân trên địa bàn thành phố.</p>

                <p>Ngày hội Thanh niên với Văn hoá giao thông được tổ chức nhằm đẩy mạnh tuyên truyền, xây dựng văn hóa giao thông trong đoàn viên thanh thiếu nhi. Qua đó, tạo nên một môi trường giao thông văn minh, an toàn, đây cũng là hoạt động thiết thực chào mừng Đại hội đại biểu Đảng bộ thành phố Hải Phòng lần thứ XVI.</p>
                <img src="./assets/img/img6.png" alt="" class="img_post">
                <p>Phát biểu khai mạc Ngày hội, đồng chí Vương Toàn Thu Thủy - Ủy viên BCH Trung ương Đoàn,  Phó Bí thư Thành đoàn, Chủ tịch Hội Sinh viên Việt Nam thành phố bày tỏ vui mừng trước sự nỗ lực của các cấp bộ Đoàn thành phố trong thời gian qua đã triển khai tốt các hoạt động tuyên truyền an toàn giao thông, duy trì hiệu quả các mô hình tham gia giữ gìn trật tự an toàn giao thông, tiêu biểu như: Đội thanh niên tình nguyện xử lý tình huống bất thường về giao thông, “Cổng trường An toàn giao thông”, “Tắt máy chờ tàu”, “Điểm giao cắt đường bộ - đường sắt an toàn”, “Bến đò ngang an toàn”. Đồng chí nhấn mạnh, các cấp bộ Đoàn trong toàn thành phố cần tiếp tục chủ động làm tốt công tác tuyên truyền, giáo dục đoàn viên, thanh niên, xây dựng văn hóa giao thông và ý thức tự giác chấp hành các quy định của pháp luật về an toàn giao thông, góp phần cùng các cấp lãnh đạo thành phố giảm thiểu tai nạn giao thông trên cả 3 mặt: số vụ, số người chết và bị thương, hướng tới chào mừng Đại hội Đảng bộ thành phố lần thứ XVI và Đại hội đại biểu toàn quốc lần thứ XIII của Đảng.</p>

                <p>Tại chương trình, Ban Thường vụ Thành đoàn – Ban An toàn giao thông thành phố hỗ trợ cơ sở vật chất gồm mũ bảo hiểm và các sản phẩm tuyên truyền an toàn giao thông với tổng trị giá 10 triệu đồng cho 5 mô hình “Cổng trường an toàn giao thông” tiêu biểu của quận đoàn Hải An.</p>

                <p>Trước đó, mô hình này được các quận, huyện đoàn và đoàn trực thuộc Thành đoàn TP Hải Phòng triển khai đã mang lại hiệu quả tích cực như cải thiện tình hình giao thông khu vực cổng trường, nâng cao ý thức tham gia giao thông của phụ huynh, học sinh và sinh viên. Hiện, toàn thành phố có gần 140 mô hình trên với sự tham gia tích cực của lực lượng đoàn viên thanh niên.</p>

                <p>Ban Thường vụ Thành đoàn cũng trao tặng cho quận đoàn Hải An 1 tủ sách xanh gồm hơn 200 cuốn</p>

                <p>Cũng tại chương trình, thực hiện cuộc vận động “Nghĩa tình biên giới, hải đảo”, giai đoạn 2018-2022, nhằm động viên, chia sẻ với người thân các chiến sĩ đang công tác nơi biên giới hải đảo, Ban Thường vụ Thành đoàn đã tặng quà cho 4 em học sinh trường THPT Lê Quý Đôn với tổng trị giá gần 3 triệu đồng.</p>
                <p class="author">Admin</p>

                <div class="share_item">
                    <p>Chia sẻ:</p>
                    <a href="" title=""><img src="./assets/img/face.png" alt=""></a>
                    <a href="" title=""><img src="./assets/img/gg.png" alt=""></a>
                    <a href="" title=""><img src="./assets/img/mail.png" alt=""></a>
                </div>
            </div>

            <div class="sidebar_box wow fadeInUp" data-wow-delay="200ms">
                <div class="element_title">
                    <div class="title">
                        <span><img src="./assets/img/saovang.png" alt=""></span>
                        <h2><a href="" title="">TIN TỨC CƠ SỞ ĐOÀN</a></h2>
                    </div>
                </div>
                <ul class="cate_post cate_post_line">
                    <li class="hightline active">
                        <a href="" title="">CHUYÊN MỤC</a>
                        <ul class="list_mimi">
                            <li><a href="" title="">Đoàn</a></li>
                            <li><a href="" title="">Đội</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" title="">HỘI LHTN VIỆT NAM THÀNH PHỐ</a>
                    </li>
                    <li>
                        <a href="" title="">HỘI SINH VIÊN VIỆT NAM THÀNH PHỐ</a>
                    </li>
                    <li class="hightline">
                        <a href="" title="">HỘI ĐỒNG ĐỘI THÀNH PHỐ</a>
                        <ul class="list_mimi">
                            <li><a href="" title="">Đoàn</a></li>
                            <li><a href="" title="">Đội</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="element_title">
                    <div class="title">
                        <span><img src="./assets/img/saovang.png" alt=""></span>
                        <h2><a href="" title="">TIN TỨC LIÊN QUAN</a></h2>
                    </div>
                </div>
                <div class="sidebar_list_news">
                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news56.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news6.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news7.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news8.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news7.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news8.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                        </div>
                    </div>
                </div>

                <div class="element_title">
                    <div class="title">
                        <span><img src="./assets/img/saovang.png" alt=""></span>
                        <h2><a href="" title="">LIÊN KẾT</a></h2>
                    </div>
                </div>

                <div class="img_sideber">
                    <a href="" title=""><img src="./assets/img/sb1.png" alt=""></a>
                </div>
                <div class="img_sideber">
                    <a href="" title=""><img src="./assets/img/sb2.png" alt=""></a>
                </div>
                <div class="img_sideber">
                    <a href="" title=""><img src="./assets/img/sb3.png" alt=""></a>
                </div>
                <div class="img_sideber">
                    <a href="" title=""><img src="./assets/img/sb4.png" alt=""></a>
                </div>
                <div class="img_sideber">
                    <a href="" title=""><img src="./assets/img/sb5.png" alt=""></a>
                </div>
                <div class="img_sideber">
                    <a href="" title=""><img src="./assets/img/sb6.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>



<footer>
    <div class="section_footer_pc">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="img">
                        <img src="./assets/img/logo_footer.png" alt="">
                    </div>
                </div>

                <div class="footer">
                    <h3>ĐOÀN THANH NIÊN CỘNG SẢN THÀNH PHỐ HẢI PHÒNG</h3>
                    <ul>
                        <li>
                            <span><img src="./assets/img/img1.png" alt=""></span>Số 22 Trần Hưng Đạo, Hồng Bàng, Hải Phòng
                        </li>
                        <li>
                            <span><img src="./assets/img/img2.png" alt=""></span>02253.745.001
                        </li>
                        <li>
                            <span><img src="./assets/img/img3.png" alt=""></span>thanhdoanhaiphong@gmail.com
                        </li>
                    </ul>
                </div>

                <div class="footer">
                    <h3>THÔNG TIN</h3>
                    <ul>
                        <li>
                            <a href="" title="">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="" title="">Tin tức</a>
                        </li>
                        <li>
                            <a href="" title="">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <div class="footer">
                    <h3>THỐNG KÊ TRUY CẬP</h3>
                    <ul>
                        <li>
                            Tổng số lượt truy cập: 123456
                        </li>
                        <li>
                            Đang truy cập: 05
                        </li>
                        <li>
                            Lượt ghé thăm trong ngày: 120
                        </li>
                    </ul>
                </div>

                <div class="footer">
                    <p>@2020 Bản quyền thuộc Đoàn TNCS Hồ Chí Minh thành phố Hải Phòng</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="icon_allpage">
    <a href="#" class="icon_backtotop" title="" style="display: block;"> <img src="./assets/img/41.png"> </a>
</div>

<script src="./assets/fancybox/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="./assets/js/wow.min.js"></script>
<script type="text/javascript" src="./assets/js/custrom-tr.js"></script>

</body>
</html>


                        