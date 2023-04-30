<div class="section_banner">
    <div class="img">
        <img src="./assets/img/tintuc.png" alt="">
    </div>
    <h2><span>TIN TỨC</span></h2>
</div>

<div class="section_breadcrumb">
    <div class="container container_width">
        <div class="row">
            <ul class="element_breadcrumb">
                <li><a href="https://congnghephanmem.online/"><img src="./assets/img/homapgebreadcumb.png" alt="home"></a></li>
                <li><a href="<?php "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">Tin tức</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="section_content_width_sidebar wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="element_content_box">
                <div class="element_news_lagre wow fadeInUp" data-wow-delay="200ms">
                    <div class="element_title">
                        <div class="title">
                            <span><img src="./assets/img/saovang.png" alt=""></span>
                            <h2><a href="" title="">TIN MỚI</a></h2>
                        </div>
                    </div>
                    <div class="item_full">
                        <div class="box_item_full">
                            <a href="" title=""><img src="./assets/img/news1.png" alt=""></a>
                            <div class="content">
                                <h2><a href="" title="">Lễ trao tặng huân chương lao động hạng nhất cung văn hóa thiếu nhi thành phố</a></h2>
                                <p><a href="" title="">Tin chính trị - xã hội</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                    <div class="box_list_new">
                        <?php
                                $sql_tintuc = 
                                        "SELECT news.id, news.image, news.title, news.url, categories.cate_name, categories.cate_url, news.content 
                                        FROM news 
                                        INNER JOIN categories 
                                        ON news.category_id = categories.id
                                        ORDER BY news.id DESC";
                                $result = mysqli_query($con, $sql_tintuc);

                                while($row = mysqli_fetch_assoc($result)) {?>
                                <div class="news_item">
                                    <a href="<?php echo $row['url']; ?>"><img src="<?php echo $row['image']; ?>"></a>
                                    <div class="content">
                                        <h2><a href="<?php echo $row['url']; ?>"><?php echo $row['title'];?></a></h2>
                                        <p><a href="<?php echo $row['cate_url']; ?>"><?php echo $row['cate_name'];?></a></p>
                                    </div>
                                </div>
                            <?php
                        } ?>
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
                            <h2><a href="" title="">VĂN BẢN</a></h2>
                        </div>

                        <div class="choose_seemore">

                            <a href="https://congnghephanmem.online/van-ban-doan-hoi-dang.php" class="btn btn_seeall">Xem tất cả</a>
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
                                        <td>2020-09-25</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>2020-09-25</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>2020-09-25</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>2020-09-25</td>
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
                                        <td>2020-09-25</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>2020-09-25</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>2020-09-25</td>
                                        <td>
                                            <p>Thông báo kết quả xét tuyển viên chức Cơ sở cai nghiện ma túy Gia Minh năm 2020</p>
                                            <a href="" title="" class="btn btn_download"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>247-TB/TĐTN-BTC</td>
                                        <td>2020-09-25</td>
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