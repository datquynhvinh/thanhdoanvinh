<?php
    require_once 'app/config/config.php';

	session_start();
	include_once('db/connect.php');
 ?>
<!DOCTYPE html>
<html lang="vi">

<head>

    <title><?php echo SITENAME ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
    </script>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&family=Roboto:wght@300;500&display=swap" rel="stylesheet">

</head>
<body>
	<?php
	    include('include/menu.php');
	?>
<div class="section_hot_news wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="element_hot_news">
                <div class="item">
                    <div class="box_item">
                        <a href="" title=""><img src="./assets/img/news1.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="box_item">
                        <a href="" title=""><img src="./assets/img/news2.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>

                    <div class="box_item">
                        <a href="" title=""><img src="./assets/img/news3.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>

                    <div class="box_item">
                        <a href="" title=""><img src="./assets/img/newa4.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section_list_news wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="element_news_large">
                <div class="element_title">
                    <div class="title">
                        <span><img src="./assets/img/saovang.png" alt=""></span>
                        <h2><a href="" title="">tin TỨC CƠ SỞ ĐOÀN</a></h2>
                    </div>

                    <div class="choose_seemore">
                        <span>
                            <select>
                                <option>Lựa chọn đơn vị</option>
                                <option>Đơn vị cơ sở doàn</option>
                                <option>Đơn vị ban lãnh đạo</option>
                            </select>
                        </span>

                        <a href="" class="btn btn_seeall">Xem tất cả</a>
                    </div>
                </div>

                <div class="box_list_new">
                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news56.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news6.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news7.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>

                    <div class="news_item">
                        <a href="" title=""><img src="./assets/img/news8.png" alt=""></a>
                        <div class="content">
                            <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                            <p><a href="" title="">Tin chính trị - xã hội</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="element_news_more">
                <div class="element_title">
                    <div class="title">
                        <span><img src="./assets/img/saovang.png" alt=""></span>
                        <h2><a href="" title="">TIN TỨC MỚI NHẤT</a></h2>
                    </div>
                </div>

                <div class="box_list_new_scroll">
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
            </div>
            
        </div>
    </div>
</div>

<div class="section-video-pp wow fadeInUp" data-wow-delay="200ms">
    <div class="container container_width">
        <div class="row">
            <div class="element_title">
                <div class="title">
                    <span><img src="./assets/img/saovang.png" alt=""></span>
                    <h2><a href="" title="">PHÓNG SỰ</a></h2>
                </div>

                <div class="choose_seemore">
                    <a href="" class="btn btn_seeall">Xem tất cả</a>
                </div>
            </div>
            
            <div class="slider_video_hotro">

                <div class="item">
                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=wAQnEYVcOq4">
                        <div class="img">
                            <img src="./assets/img/S3.png" alt="News Thumbnail">
                        </div>
                        <h4 class="news-title">Phóng sự K15 bản hùng ca trên biển (Lớp 10 Tin, THPT Chuyên</h4>
                        <p><a href="" title="">Tin chính trị - xã hội</a></p>
                    </a>
                </div>

                <div class="item">
                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=wAQnEYVcOq4"
                    class="fancybox fancybox.iframe general-news video-type">
                        <div class="img">
                            <img src="./assets/img/S4.png" alt="News Thumbnail">
                        </div>
                        <h4 class="news-title">Phóng sự K15 bản hùng ca trên biển (Lớp 10 Tin, THPT Chuyên</h4>
                        <p><a href="" title="">Tin chính trị - xã hội</a></p>
                    </a>
                </div>

                <div class="item">
                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=wAQnEYVcOq4">
                        <div class="img">
                            <img src="./assets/img/S5.png" alt="News Thumbnail">
                        </div>
                        <h4 class="news-title">Phóng sự K15 bản hùng ca trên biển (Lớp 10 Tin, THPT Chuyên</h4>
                        <p><a href="" title="">Tin chính trị - xã hội</a></p>
                    </a>
                </div>

                <div class="item">
                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=wAQnEYVcOq4">
                        <div class="img">
                            <img src="./assets/img/S6.png" alt="News Thumbnail">
                        </div>
                        <h4 class="news-title">Phóng sự K15 bản hùng ca trên biển (Lớp 10 Tin, THPT Chuyên</h4>
                        <p><a href="" title="">Tin chính trị - xã hội</a></p>
                    </a>
                </div>

                <div class="item">
                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=wAQnEYVcOq4">
                        <div class="img">
                            <img src="./assets/img/S5.png" alt="News Thumbnail">
                        </div>
                        <h4 class="news-title">Phóng sự K15 bản hùng ca trên biển (Lớp 10 Tin, THPT Chuyên</h4>
                        <p><a href="" title="">Tin chính trị - xã hội</a></p>
                    </a>
                </div>
            </div>
        </div>  
    </div>
</div>

<div class="section_content_width_sidebar wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="element_content_box">
                <div class="img_content">
                    <img src="./assets/img/img_content.png" alt="">
                </div>

                <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                    <div class="element_title">
                        <div class="title">
                            <span><img src="./assets/img/saovang.png" alt=""></span>
                            <h2><a href="" title="">CHUYÊN MỤC</a></h2>
                        </div>

                        <div class="choose_seemore">
                            <span>
                                <select>
                                    <option>Lựa chọn chuyên mục</option>
                                    <option>chuyên mục 1</option>
                                    <option>chuyên mục 2</option>
                                </select>
                            </span>

                            <a href="" class="btn btn_seeall">Xem tất cả</a>
                        </div>
                    </div>

                    <div class="box_list_new">
                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news56.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news6.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news7.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news8.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                    <div class="element_title">
                        <div class="title">
                            <span><img src="./assets/img/thanhnienvn.png" alt=""></span>
                            <h2><a href="" title="">HỘI LIÊN HIỆP THANH NIÊN VIỆT NAM THÀNH PHỐ</a></h2>
                        </div>

                        <div class="choose_seemore">
                            <a href="" class="btn btn_seeall">Xem tất cả</a>
                        </div>
                    </div>

                    <div class="box_list_new">
                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news9.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news6.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news7.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news8.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                    <div class="element_title">
                        <div class="title">
                            <span><img src="./assets/img/sinhvienvn.png" alt=""></span>
                            <h2><a href="" title="">HỘI SINH VIÊN VIỆT NAM THÀNH PHỐ</a></h2>
                        </div>

                        <div class="choose_seemore">
                            <a href="" class="btn btn_seeall">Xem tất cả</a>
                        </div>
                    </div>

                    <div class="box_list_new">
                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news10.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news6.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news7.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news8.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                    <div class="element_title">
                        <div class="title">
                            <span><img src="./assets/img/hoidongdoi.png" alt=""></span>
                            <h2><a href="" title="">HỘI ĐỒNG ĐỘI THÀNH PHỐ</a></h2>
                        </div>

                        <div class="choose_seemore">
                            <a href="" class="btn btn_seeall">Xem tất cả</a>
                        </div>
                    </div>

                    <div class="box_list_new">
                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news11.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news6.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news7.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>

                        <div class="news_item">
                            <a href="" title=""><img src="./assets/img/news8.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                    <div class="element_title">
                        <div class="title">
                            <span><img src="./assets/img/saovang.png" alt=""></span>
                            <h2><a href="" title="">THƯ VIỆN</a></h2>
                        </div>

                        <div class="choose_seemore">
                            <ul class="nav nav-tabs nav_tabs_choose">
                                <li class="active"><a data-toggle="tab" href="#infographic">Inforgraphic</a></li>
                                <li><a data-toggle="tab" href="#images">Hình ảnh</a></li>
                            </ul>

                            <a href="" class="btn btn_seeall">Xem tất cả</a>
                        </div>
                    </div>

                    <div class="element_content_tab">
                        <div class="tab-content">
                            <div id="infographic" class="tab-pane fade in active">
                                <div class="slider_image_1">
                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/3.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="images" class="tab-pane fade">
                                <div class="slider_image_2">
                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/3.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="img">
                                            <img src="./assets/img/2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><a href="" title="">Phát triển năng lượng sạch: Xu thế và thách thức</a></h4>
                                            <p>Inforgraphic</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                    <div class="element_title">
                        <div class="title">
                            <span><img src="./assets/img/saovang.png" alt=""></span>
                            <h2><a href="" title="">VĂN BẢN</a></h2>
                        </div>

                        <div class="choose_seemore">
                            <ul class="nav nav-tabs nav_tabs_choose">
                                <li class="active"><a data-toggle="tab" href="#home">Văn bản thành đoàn</a></li>
                                <li><a data-toggle="tab" href="#menu1">Văn bản cơ sở</a></li>
                            </ul>

                            <a href="" class="btn btn_seeall">Xem tất cả</a>
                        </div>
                    </div>

                    <div class="element_content_tab">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <table>
                                    <tr>
                                        <th>Số/Ký hiệu</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Trích yếu</th>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <table>
                                    <tr>
                                        <th>Số/Ký hiệu</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Trích yếu</th>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>25-09-2020</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                
                
            </div>

            <div class="sidebar_box wow fadeInUp" data-wow-delay="200ms">
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

<div class="img_fixed_homepage_1">
    <img src="./assets/img/ixed1.png" alt="">
</div>
<div class="img_fixed_homepage_2">
    <img src="./assets/img/ixed1.png" alt="">
</div>
</body>
<?php include('include/footer.php') ?>
</html>


                        