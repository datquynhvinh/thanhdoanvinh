<?php 
	$sql_lichcongtac = mysqli_query($con,'SELECT * FROM `lich-cong-tac` ORDER BY ngay DESC');
?>
<div class="section_banner">
    <div class="img">
        <img src="./assets/img/lichcongtac.png" alt="">
    </div>
    <h2><span>LỊCH CÔNG TÁC</span></h2>
</div>

<div class="bg_color">
    <div class="section_content_width_sidebar bg_color wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="element_content_box element_content_box_color">
                    <ul class="element_breadcrumb">
                        <li><a href="https://congnghephanmem.online/"><img src="./assets/img/homapgebreadcumb.png" alt="home"></a></li>
                        <li><a href="<?php "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">Lịch công tác</a></li>
                    </ul>
                    <div class="element_news_large wow fadeInUp" data-wow-delay="200ms">
                        <table class="download">
                            <tr>
                                <th>Ngày</th>
                                <th>Giờ</th>
                                <th>Nội dung</th>
                                <th>Địa điểm</th>
                            </tr>
                            <?php 
                                $sql_ilichcongtac = mysqli_query($con,'SELECT * FROM `lich-cong-tac` ORDER BY id DESC');
                                while($sql_ilichcongtac = mysqli_fetch_array($sql_lichcongtac)){ ?>
                                <tr>
                                    <td><?php echo $sql_ilichcongtac['ngay']; ?></td>
                                    <td><?php echo $sql_ilichcongtac['gio']; ?></td>
                                    <td><?php echo $sql_ilichcongtac['noidung']; ?></td>
                                    <td>
                                        <p><?php echo $sql_ilichcongtac['diadiem']; ?></p>
                                        <a href="<?php echo $sql_ilichcongtac['taixuong']; ?>" title="" class="btn btn_download"></a>
                                    </td>
                                </tr>
                                <?php } 
        					?>
                        </table>
                        <?php
                            // Số bản ghi hiển thị trên mỗi trang
                            $records_per_page = 10;
                            
                            // Tính toán vị trí bắt đầu của bản ghi trên trang hiện tại
                            $start_record = ($current_page - 1) * $records_per_page;
                            
                            // Truy vấn danh sách bản ghi với LIMIT và OFFSET
                            $sql_ilichcongtac = mysqli_query($con, "SELECT * FROM `lich-cong-tac` ORDER BY id DESC LIMIT $start_record, $records_per_page");
                            
                            // Tính toán tổng số trang
                            $total_records = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `lich-cong-tac`"));
                            $total_pages = ceil($total_records / $records_per_page);
                            
                            // Hiển thị phân trang
                            if ($total_pages > 1) {
                                ?>
                                <div class="pagination_clean">
                                    <ul>
                                        <?php
                                        // Nút "Trang trước"
                                        if ($current_page > 1) {
                                            ?>
                                            <li class="">
                                                <a href="?page=<?php echo $current_page - 1; ?>" title=""> &lt; </a>
                                            </li>
                                            <?php
                                        }
                            
                                        // Hiển thị các nút phân trang
                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            if ($i == $current_page) {
                                                ?>
                                                <li class="active-pagination">
                                                    <a href="?page=<?php echo $i; ?>" title=""> <?php echo $i; ?> </a>
                                                </li>
                                                <?php
                                            } else {
                                                ?>
                                                <li class="">
                                                    <a href="?page=<?php echo $i; ?>" title=""> <?php echo $i; ?> </a>
                                                </li>
                                                <?php
                                            }
                                        }
                            
                                        // Nút "Trang sau"
                                        if ($current_page < $total_pages) {
                                            ?>
                                            <li class="">
                                                <a href="?page=<?php echo $current_page + 1; ?>" title=""> &gt; </a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                            }
                            ?>
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
</div>