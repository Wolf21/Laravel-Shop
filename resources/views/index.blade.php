@extends('layouts.main')
@section('title')
    <title>Mobile Shop</title>
@stop
@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('styles/responsive.css')}}">
@stop
@section('content')
    <div class="banner">
        <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">new era of smartphones</h1>
                        <div class="banner_price"><span>$530</span>$460</div>
                        <div class="banner_product_name">Apple Iphone 6s</div>
                        <div class="button banner_button"><a href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="images/char_1.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Miễn Phí Vận Chuyển</div>
                            <div class="char_subtitle">Từ 10,000,000 VNĐ</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="images/char_2.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Miễn Phí Vận Chuyển</div>
                            <div class="char_subtitle">Dưới 15 KM</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="images/char_3.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Miễn Phí Vận Chuyển</div>
                            <div class="char_subtitle">Khách Hàng Thân Thiết</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="images/char_4.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Miễn Phí Vận Chuyển</div>
                            <div class="char_subtitle">Đổi Trả Do Lỗi Shop</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->
    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    <!-- Deals -->
                    <div class="deals">
                        <div class="deals_title">Deals Của Tuần</div>
                        <div class="deals_slider_container">
                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">
                            @foreach($productDeals as $product)
                                <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img
                                                src="{{ url('/') .'/uploads/products/'. $product->images }}" alt="">
                                        </div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a
                                                        href="#">{{ $product->cat_name }}</a>
                                                </div>
                                                <div
                                                    class="deals_item_price_a ml-auto price_old">{{ number_format($product->price) }}
                                                    VNĐ
                                                </div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">{{ $product->product_name }}</div>
                                                <div
                                                    class="deals_item_price ml-auto">{{ number_format($product->price * (100 - $product->sale) / 100) }}
                                                    VNĐ
                                                </div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available:
                                                        <span>{{ $product->quantity }}</span></div>
                                                    <div class="sold_title ml-auto">Already sold:
                                                        <span>{{ 100 - $product->quantity }}</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Hurry Up</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i>
                            </div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    <li class="active">Khuyễn Mãi</li>
                                    <li>Yêu Thích</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>
                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="featured_slider slider">
                                @foreach($productOnSale as $product)
                                    <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ url('') .'/uploads/products/'. $product->images }}"
                                                         alt="">
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <div><a href="product.blade.php">{{ $product->name }}</a></div>
                                                    </div>
                                                    <div class="product_price discount">
                                                        {{ number_format($product->price * (100 - $product->sale) / 100) }}
                                                        VNĐ
                                                    </div>
                                                    <div class="price_old">{{ number_format($product->price) }} VNĐ
                                                    </div>
                                                    <div class="product_extras">
                                                        <button class="product_cart_button">Thêm Vào Giỏ Hàng</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-{{$product->sale}}%</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>
                            <!-- Product Panel -->
                            <div class="product_panel panel">
                                <div class="featured_slider slider">
                                @foreach($productRate as $product)
                                    <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ url('') .'/uploads/products/'. $product->images }}"
                                                         alt="">
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <div><a href="product.blade.php">{{ $product->name }}</a></div>
                                                    </div>
                                                    @if($product->sale > 0)
                                                        <div class="product_price discount">
                                                            {{ number_format($product->price * (100 - $product->sale) / 100) }}
                                                            VNĐ
                                                        </div>
                                                        <div class="product_old">{{ number_format($product->price) }}VNĐ
                                                        </div>
                                                    @else
                                                        <div class="product_price discount">
                                                            {{ number_format($product->price) }} VNĐ
                                                        </div>
                                                    @endif
                                                    <div class="product_extras">
                                                        <button class="product_cart_button">Thêm Vào Giỏ Hàng</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                @if($product->sale > 0)
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-{{$product->sale}}%
                                                        </li>
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->
            <div class="owl-carousel owl-theme banner_2_slider">
                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">Laptops</div>
                                        <div class="banner_2_title">MacBook Air 13</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit. Maecenas fermentum laoreet.
                                        </div>
                                        <div class="rating_r rating_r_4 banner_2_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="images/banner_2_product.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Sản Phẩm Hot</div>
                            <ul class="clearfix">
                                <li class="active">IOS</li>
                                <li>ANDROID</li>
                                <li>WINDOW PHONE</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9" style="z-index:1;">
                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                    @foreach($productIOSNew as $product)                                        <!-- Slider Item -->
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ url('') .'/uploads/products/'. $product->images }}"
                                                         alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <div><a href="product.html">{{ $product->name }}</a></div>
                                                    </div>
                                                    <div class="product_price">{{ number_format($product->price) }}
                                                        VNĐ
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Thêm Vào Giỏ Hàng</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">
                                    @foreach($productAndroidNew as $product)
                                        <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="{{ url('') .'/uploads/products/'. $product->images }}"
                                                             alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_name">
                                                            <div><a href="product.html">{{ $product->name }}</a></div>
                                                        </div>
                                                        <div class="product_price">{{ number_format($product->price) }}
                                                            VNĐ
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Thêm Vào Giỏ Hàng
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">
                                    @foreach($productWindowNew as $product)
                                        <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="{{ url('') .'/uploads/products/'. $product->images }}"
                                                             alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_name">
                                                            <div><a href="product.html">{{ $product->name }}</a></div>
                                                        </div>
                                                        <div class="product_price">{{ number_format($product->price) }}
                                                            VNĐ
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Thêm Vào Giỏ Hàng
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="arrivals_single clearfix">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div class="arrivals_single_image"><img src="images/new_single.png" alt="">
                                        </div>
                                        <div class="arrivals_single_content">
                                            <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                                            <div class="arrivals_single_name_container clearfix">
                                                <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a>
                                                </div>
                                                <div class="arrivals_single_price text-right">$379</div>
                                            </div>
                                            <div class="rating_r rating_r_4 arrivals_single_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <form action="#">
                                                <button class="arrivals_single_button">Thêm Vào Giỏ Hàng</button>
                                            </form>
                                        </div>
                                        <div class="arrivals_single_fav product_fav active"><i
                                                class="fas fa-heart"></i>
                                        </div>
                                        <ul class="arrivals_single_marks product_marks">
                                            <li class="arrivals_single_mark product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Bán Chạy Nhất</div>
                            <ul class="clearfix">
                                <li class="active">Top 10</li>
                                <li>IPHONE</li>
                                <li>SAMSUNG</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="bestsellers_panel panel active">
                            <div class="bestsellers_slider slider">
                            @foreach($top10BestSell as $product)
                                <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img
                                                    src="{{ url('') .'/uploads/products/'. $product->images }}" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a
                                                        href="#">{{ $product->cat_name }}</a>
                                                </div>
                                                <div class="bestsellers_name"><a
                                                        href="product.blade.php">{{ $product->product_name }}</a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                @if($product->sale > 0)
                                                    <div class="bestsellers_price discount">
                                                        {{ number_format($product->price * (100 - $product->sale) / 100) }}
                                                        VNĐ <br>
                                                        <span style="margin-left: 0;">{{ number_format($product->price) }} VNĐ</span></div>
                                                @else
                                                    <div
                                                        class="bestsellers_price discount">{{ number_format($product->price) }}
                                                        VNĐ <span style="color: #b8daff; !important;"></span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            @if($product->sale > 0)
                                                <li class="bestsellers_mark bestsellers_discount">-{{ $product->sale }}%
                                                </li>
                                            @else
                                                <li class="bestsellers_mark bestsellers_new">new</li>
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="bestsellers_panel panel">
                            <div class="bestsellers_slider slider">
                            @foreach($ipBestSell as $product)
                                <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img
                                                    src="{{ url('') .'/uploads/products/'. $product->images }}" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a
                                                        href="#">{{ $product->cat_name }}</a>
                                                </div>
                                                <div class="bestsellers_name"><a
                                                        href="product.blade.php">{{ $product->product_name }}</a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                @if($product->sale > 0)
                                                    <div class="bestsellers_price discount">
                                                        {{ number_format($product->price * (100 - $product->sale) / 100) }}
                                                        VNĐ <br>
                                                        <span style="margin-left: 0;">{{ number_format($product->price) }} VNĐ</span></div>
                                                @else
                                                    <div
                                                        class="bestsellers_price discount">{{ number_format($product->price) }}
                                                        VNĐ <span></span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            @if($product->sale > 0)
                                                <li class="bestsellers_mark bestsellers_discount">-{{ $product->sale }}%
                                                </li>
                                            @else
                                                <li class="bestsellers_mark bestsellers_new">new</li>
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="bestsellers_panel panel">
                            <div class="bestsellers_slider slider">
                            @foreach($samsungBestSell as $product)
                                <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img
                                                    src="{{ url('') .'/uploads/products/'. $product->images }}" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a
                                                        href="#">{{ $product->cat_name }}</a>
                                                </div>
                                                <div class="bestsellers_name"><a
                                                        href="product.blade.php">{{ $product->product_name }}</a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                @if($product->sale > 0)
                                                    <div class="bestsellers_price discount">
                                                        {{ number_format($product->price * (100 - $product->sale) / 100) }}
                                                        VNĐ <br>
                                                        <span style="margin-left: 0;">{{ number_format($product->price) }} VNĐ</span></div>
                                                @else
                                                    <div
                                                        class="bestsellers_price discount">{{ number_format($product->price) }}
                                                        VNĐ <span></span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            @if($product->sale > 0)
                                                <li class="bestsellers_mark bestsellers_discount">-{{ $product->sale }}%
                                                </li>
                                            @else
                                                <li class="bestsellers_mark bestsellers_new">new</li>
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Adverts -->

    <div class="adverts">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 advert_col">
                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="images/adv_3.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 advert_col">
                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="images/adv_3.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 advert_col">
                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="images/adv_3.png" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Reviews -->
    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="reviews_title_container">
                        <h3 class="reviews_title">Bình Luận Mới Nhất</h3>
                        <div class="reviews_all ml-auto"><a href="#">Xem Tất Cả <span>Bình Luận</span></a></div>
                    </div>
                    <div class="reviews_slider_container">
                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">
                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="review_image"><img src="images/review_3.jpg" alt=""></div>
                                    </div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brands -->
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">
                        <!-- Brands Slider -->
                        <div class="owl-carousel owl-theme brands_slider">
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_1.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_2.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_3.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_4.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_5.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_6.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_7.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_8.jpg" alt=""></div>
                            </div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ url('plugins/slick-1.8.0/slick.js') }}"></script>
    <script src="{{ url('plugins/easing/easing.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
@stop
