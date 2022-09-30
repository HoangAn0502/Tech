@extends('client.master')
@section('title','TechStore')
@section('content')
<!--================Home Banner Area =================-->
<section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="col-lg-12">
                    <p class="sub text-uppercase">Bộ sưu tập đàn ông</p>
                    <h3><span>Thể hiện</span> phong cách <br />Personal <span>của bạn</span></h3>
                    <h4>Fowl thấy khô mà ở trên cùng một chỗ.</h4>
                    <a class="main_btn mt-40" href="#">Xem bộ sưu tập</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!-- Start feature Area -->
<section class="feature-area section_gap_bottom_custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-money"></i>
                        <h3>Người nhận tiền hoàn lại</h3>
                    </a>
                    <p>Sẽ mở chia một</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-truck"></i>
                        <h3>Giao hàng miễn phí</h3>
                    </a>
                    <p>Sẽ mở chia một</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-support"></i>
                        <h3>Luôn hỗ trợ</h3>
                    </a>
                    <p>Sẽ mở chia một</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-blockchain"></i>
                        <h3>Thanh toán an toàn</h3>
                    </a>
                    <p>Sẽ mở chia một</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->

<!--================ Feature Product Area =================-->
<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Sản phẩm nổi bật</span></h2>
                    <p>Mang được gọi là hạt giống đầu tiên của thứ ba cho chính nó bây giờ đề cập</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/feature-product/f-p-1.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/feature-product/f-p-2.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Ví nữ màu đỏ</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/feature-product/f-p-3.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Đồng hồ thông minh dành cho nam tạo mẫu</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Feature Product Area =================-->

<!--================ Offer Area =================-->
<section class="offer_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="offset-lg-4 col-lg-6 text-center">
                <div class="offer_content">
                    <h3 class="text-uppercase mb-40">Bộ sưu tập của tất cả nam giới</h3>
                    <h2 class="text-uppercase">50% off</h2>
                    <a href="#" class="main_btn mb-20 mt-5">Khám phá ngay</a>
                    <p>Ưu đãi trong thời gian có hạn</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Offer Area =================-->

<!--================ New Product Area =================-->
<section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Sản phẩm mới</span></h2>
                    <p>Mang được gọi là hạt giống đầu tiên của thứ ba cho chính nó bây giờ đề cập</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="new_product">
                    <h5 class="text-uppercase">Bộ sưu tập năm 2019</h5>
                    <h3 class="text-uppercase">Áo thun nam mùa hè</h3>
                    <div class="product-img">
                        <img class="img-fluid" src="../img/product/new-product/new-product1.png" alt="" />
                    </div>
                    <h4>$120.70</h4>
                    <a href="#" class="main_btn">Thêm vào giỏ hàng</a>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="../img/product/new-product/n1.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Giày thể thao mới nhất của Nike</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="../img/product/new-product/n2.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Quần jean nam denim</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="../img/product/new-product/n3.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>đồng hồ thạch anh</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="../img/product/new-product/n4.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>giày thể thao adidas</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End New Product Area =================-->

<!--================ Inspired Product Area =================-->
<section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Sản phẩm truyền cảm hứng</span></h2>
                    <p>Mang được gọi là hạt giống đầu tiên của thứ ba cho chính nó bây giờ đề cập</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i1.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i2.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i3.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i4.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i5.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i6.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i7.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../img/product/inspired-product/i8.jpg" alt="" />
                        <div class="p_icon">
                            <a href="#">
                                <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                                <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Giày sneaker nam mới nhất</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Inspired Product Area =================-->

<!--================ Start Blog Area =================-->
<section class="blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>blog mới nhất</span></h2>
                    <p>Mang được gọi là hạt giống đầu tiên của thứ ba cho chính nó bây giờ đề cập</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="../img/b1.jpg" alt="">
                    </div>
                    <div class="short_details">
                        <div class="meta-top d-flex">
                            <a href="#">Bởi quản trị viên</a>
                            <a href="#"><i class="ti-comments-smiley"></i>2 Bình luận</a>
                        </div>
                        <a class="d-block" href="single-blog.html">
                            <h4>Chiếc giường thông minh của Ford ngăn đối tác ngủ của bạn làm vướng bận toàn bộ</h4>
                        </a>
                        <div class="text-wrap">
                            <p>
                                Hãy để một phần năm tôi mang bay đến mặt chia để mang chia cho hạt giống có cánh chia rẽ ánh sáng Forth.
                            </p>
                        </div>
                        <a href="#" class="blog_btn">Tìm hiểu thêm <span class="ml-2 ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="../mg/b2.jpg" alt="">
                    </div>
                    <div class="short_details">
                        <div class="meta-top d-flex">
                            <a href="#">Bởi quản trị viên</a>
                            <a href="#"><i class="ti-comments-smiley"></i>2 Bình luận</a>
                        </div>
                        <a class="d-block" href="single-blog.html">
                            <h4>Chiếc giường thông minh của Ford ngăn đối tác ngủ của bạn làm vướng bận toàn bộ</h4>
                        </a>
                        <div class="text-wrap">
                            <p>
                                Hãy để một phần năm tôi mang bay đến mặt chia để mang chia cho hạt giống có cánh chia rẽ ánh sáng Forth.
                            </p>
                        </div>
                        <a href="#" class="blog_btn">Tìm hiểu thêm <span class="ml-2 ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="../img/b3.jpg" alt="">
                    </div>
                    <div class="short_details">
                        <div class="meta-top d-flex">
                            <a href="#">Bởi quản trị viên</a>
                            <a href="#"><i class="ti-comments-smiley"></i>2 Bình luận</a>
                        </div>
                        <a class="d-block" href="single-blog.html">
                            <h4>Chiếc giường thông minh của Ford ngăn đối tác ngủ của bạn làm vướng bận toàn bộ</h4>
                        </a>
                        <div class="text-wrap">
                            <p>
                                Hãy để một phần năm tôi mang bay đến mặt chia để mang chia cho hạt giống có cánh chia rẽ ánh sáng Forth.
                            </p>
                        </div>
                        <a href="#" class="blog_btn">Tìm hiểu thêm <span class="ml-2 ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Blog Area =================-->

@endsection