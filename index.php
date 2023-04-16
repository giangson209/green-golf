<?php include 'header.php';?>
<main>
    <section class="box-banner">
        <div class="slide-banner">
            <div class="item-slide">
                <div class="item-banner">
                    <div class="avarta"><a href=""><img src="images/banner.jpg" class="img-fluid w-100" alt=""></a></div>
                </div>
            </div>
            <div class="item-slide">
                <div class="item-banner">
                    <div class="avarta"><a href=""><img src="images/banner.jpg" class="img-fluid w-100" alt=""></a></div>
                </div>
            </div>
            <div class="item-slide">
                <div class="item-banner">
                    <div class="avarta"><a href=""><img src="images/banner.jpg" class="img-fluid w-100" alt=""></a></div>
                </div>
            </div>
        </div>
        <div class="service-bn">
            <div class="container">
                <div class="list-service">
                    <ul>
                        <li>
                            <h3>GreenGolf Cam Kết</h3>
                        </li>
                        <li>
                            <div class="icon-srv">
                                <div class="icon"><img src="images/srv-1.svg" class="img-fluid" alt=""></div>
                                <p>Bảo hành 12 tháng chính hãng </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-srv">
                                <div class="icon"><img src="images/srv-2.svg" class="img-fluid" alt=""></div>
                                <p>1 đổi 1 trong 7 ngày</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-srv">
                                <div class="icon"><img src="images/srv-3.svg" class="img-fluid" alt=""></div>
                                <p>Freeship toàn quốc</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="box-banner-cate">
        <div class="container">
            <div class="slide-banner-cate">
                <div class="item-slide">
                    <div class="item-bn-cate"><a href=""><img src="images/bn-1.png" class="img-fluid w-100" alt=""></a></div>
                </div>
                <div class="item-slide">
                    <div class="item-bn-cate"><a href=""><img src="images/bn-2.png" class="img-fluid w-100" alt=""></a></div>
                </div>
                <div class="item-slide">
                    <div class="item-bn-cate"><a href=""><img src="images/bn-1.png" class="img-fluid w-100" alt=""></a></div>
                </div>
                <div class="item-slide">
                    <div class="item-bn-cate"><a href=""><img src="images/bn-2.png" class="img-fluid w-100" alt=""></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-product-hot">
        <div class="container">
            <div class="content-product">
                <div class="title">
                    <h2><span>Sản phẩm</span> Giá tốt</h2>
                </div>
                <div class="slide-product">
                    <?php
                    for ($x = 0; $x <= 5; $x++) { ?>
                        <div class="item-slide">
                            <div class="item-product">
                                <div class="avarta"><a href=""><img src="images/prd-1-2.png" class="img-fluid w-100" alt=""></a></div>
                                <div class="info">
                                    <h3><a href="">Combo Bọc Đầu Gậy Golf Driver + túi đựng bóng</a></h3>
                                    <div class="price">2.490.000<span>đ</span></div>
                                    <div class="del">3.210.000<span>đ</span> <label>-70%</label></div>
                                    <div class="numb-vote">4.3*</div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php';?>

