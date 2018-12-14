@extends('layouts.main')
@section('title')
    <title>Product</title>
@stop
@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/product_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/product_responsive.css') }}">
@stop
@section('content')
    <!-- Single Product -->

    <div class="single_product">
        <div class="container">
            <div class="row">
                <!-- Images -->
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        @foreach($productImg as $img)
                            <li data-image="{{url('') . '/uploads/products/' . $img->images_url}}"><img
                                    src="{{url('') . '/uploads/products/' . $img->images_url}}" alt=""></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Selected Image -->
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="image_selected"><img src="{{ url('') .'/uploads/products/'. $productDetails->images }}"
                                                     alt=""></div>
                </div>

                <!-- Description -->
                <div class="col-lg-5 order-3">
                    <div class="product_description">
                        <div class="product_category">{{ $productDetails->cat_name }}</div>
                        <div class="product_name">{{ $productDetails->name }}</div>
                        <div class="product_text"><p>{{ $productDetails->intro }}</p></div>
                        <div class="order_info d-flex flex-row">
                            {{Form::open()}}
                                <div class="clearfix" style="z-index: 1000;">

                                    <!-- Product Quantity -->
                                    <div class="product_quantity clearfix">
                                        <span>Số Lượng: </span>
                                        <input id="quantity_input" name="quantity" type="text" pattern="[0-9]*" value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                    class="fas fa-chevron-up"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                    class="fas fa-chevron-down"></i></div>
                                        </div>
                                    </div>

                                    <!-- Product Color -->
                                    <ul class="product_color">
                                        <li>
                                            <span>Màu: </span>
                                            <div class="color_mark_container">
                                                <div id="selected_color" class="color_mark"></div>
                                            </div>
                                            <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                            <ul class="color_list">
                                                <li>
                                                    <div class="color_mark" style="background: #999999;"></div>
                                                </li>
                                                <li>
                                                    <div class="color_mark" style="background: #b19c83;"></div>
                                                </li>
                                                <li>
                                                    <div class="color_mark" style="background: #000000;"></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div>

                                <div class="product_price">
                                    {{ number_format($productDetails->price * (100 - $productDetails->sale) / 100)}} VNĐ
                                </div>
                                <div class="button_container">
                                    <button type="button" class="button cart_button">Thêm Vào Giỏ Hàng</button>
                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
@section('script')
    <script type="text/javascript" src="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('plugins/easing/easing.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/product_custom.js') }}"></script>
    @parent
    <script type="text/javascript" >
        $(document).ready(function () {
            $('#quantity_input').on('change paste keyup', function () {
                this.value = this.value.replace("/[^0-9]/g", "")
            })
        });
    </script>
@stop
