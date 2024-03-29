@extends('client.layout')
@section('header_bottom')
<div class="header_bottom">
    <div class="row align-items-center">
        <div class="column1 col-lg-3 col-md-6">
            <div class="categories_menu categories_three">
                <div class="categories_title">
                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                </div>
                <div class="categories_menu_toggle">
                    <ul>
                        @foreach($category as $categoryItem)
                             <li><a href="{{ route('route_Frontend_Category_At_Time',['id' => $categoryItem->id]) }}"> {{ $categoryItem->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="column2 col-lg-6 ">
            <div class="search_container">
                <form action="#">
                    <div class="hover_category">
                        <select class="select_option" name="select" id="categori2">
                            <option selected value="">All Categories</option>
                            @foreach($category as $categoryItem){
                                <option value="{{ $categoryItem->id }}">{{ $categoryItem->name }}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                    <div class="search_box">
                        <input placeholder="Search product..." type="text">
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="column3 col-lg-3 col-md-6">
            <div class="header_bigsale">
                <a href="#">BIG SALE BLACK FRIDAY</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

    <!--header area end-->

    <!--slider area start-->
    <section class="slider_section slider_s_three mb-60 mt-20">
        <div class="slider_area slider3_carousel owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('img/slider/slider9.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>new Arrivals <br> cellphone new model 2019</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="{{ route('shop') }}">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('img/slider/slider10.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>happy summer <br> vagetable organic food 2019</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('img/slider/slider11.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>new collection <br> sport clothes for men,s</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->


    <!--shipping area start-->
    <div class="shipping_area mb-60">
        <div class="container">
            <div class="shipping_inner">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{ asset('img/about/shipping1.png') }}" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{ asset('img/about/shipping2.png') }}" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{ asset('img/about/shipping3.png') }}" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{ asset('img/about/shipping4.png') }}" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{ asset('img/about/shipping5.png') }}" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--banner area start-->
    <!--banner area end-->

    <!--banner area start-->
    <div class="banner_area banner_three_bottom mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="{{ route('shop') }}"><img src="{{ asset('img/bg/banner-quang-cao-dien-thoai_103211774.jpg') }}" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="{{ route('shop') }}"><img src="{{ asset('img/bg/mau-banner-quang-cao-khuyen-mai.jpg') }}" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--home section bg area start-->
    <div class="home_section_bg">
        <!--Categories product area start-->
        <div class="categories_product_area mb-55">
            <div class="container">
                <div class="categories_product_inner">
                    @foreach($category as $categoryItem)
                        @if($categoryItem->quantity)
                            <div class="single_categories_product">
                                <div class="categories_product_content">
                                    <h4><a href="{{ route('route_Frontend_Category_At_Time',['id' => $categoryItem->id]) }}">{{ $categoryItem->name }}</a></h4>
                                    <p>{{ $categoryItem->quantity }}</p>
                                </div>
                                <div class="categories_product_thumb">
                                    <a href="{{ route('route_Frontend_Category_At_Time',['id' => $categoryItem->id]) }}"><img src="{{ asset('img/s-product/category1.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--Categories product area end-->
        <!--product area start-->
        <div class="product_area deals_product">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="section_title s_title_style3">
                                <h2>Deals Of The Month</h2>

                            </div>
                            <div class="product_tab_btn">
                                <ul class="nav" role="tablist" id="nav-tab">
                                    <li>
                                        <a data-toggle="tab" href="#Games" role="tab" aria-controls="Games" aria-selected="false">
                                            Games & Consoles
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Speaker" role="tab" aria-controls="Speaker" aria-selected="false">
                                            Headphone & Speaker
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Mobile" role="tab" aria-controls="Mobile" aria-selected="false">
                                            Mobile & Tablets
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Fashion" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            @foreach($list['item'] as $product)
                                @foreach($sale as $saleItem)
                                    @if($saleItem->id_sale == 2 && $saleItem->id_product == $product->id)
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('storage/product/'.$product->image) }}" alt=""></a>
                                                <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('storage/product/'.$product->image) }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">{{ $product->name }}</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">${{ $product->price }}</span>
                                                        <span class="id_product" hidden>{{ $product->id }}</span>
                                                        <span class="current_price"> @foreach($sale as $saleItem)
                                                            @if($saleItem->id_product == $product->id)
                                                            <p class="sale_product" hidden>{{ $saleItem->id_sale }}</p>
                                                               ${{($product->price *( $saleItem->price / 100)) }}
                                                            @endif
                                                        @endforeach</span>
                                                    </div>
                                                    <div class="countdown_text">
                                                        <p><span>Hurry Up!</span> Offers ends in: </p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="add_to_cart" name="add_to_cart">
                                                    {{-- <button title="Add to cart">Add to cart</button> --}}
                                                    <button title="Add to cart">Add to cart</button>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                @endif
                            @endforeach
                        @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Games" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            @foreach($list['item'] as $product)
                            @foreach($sale as $saleItem)
                                @if($saleItem->id_sale == 1 && $saleItem->id_product == $product->id)
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('storage/app/public/product/'.$product->image) }}" alt=""></a>
                                            <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('storage/product/'.$product->image) }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">{{ $product->name }}</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">${{ $product->price }}</span>
                                                    <span class="id_product" hidden>{{ $product->id }}</span>
                                                    <span class="current_price"> @foreach($sale as $saleItem)
                                                        @if($saleItem->id_product == $product->id)
                                                            <p class="sale_product" hidden>{{ $saleItem->id_sale }}</p>
                                                           ${{$product->price *( $saleItem->price / 100) }}
                                                        @endif
                                                    @endforeach</span>
                                                </div>
                                                <div class="countdown_text">
                                                    <p><span>Hurry Up!</span> Offers ends in: </p>
                                                </div>
                                                
                                            </div>
                                            <div class="add_to_cart" name="add_to_cart" name="add_to_cart">
                                                {{-- <button title="Add to cart">Add to cart</button> --}}
                                                <button title="Add to cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            @endif
                        @endforeach
                    @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Speaker" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price"> @foreach($sale as $saleItem)
                                                    @if($saleItem->id_product == $product->id)
                                                        <p class="sale_product" hidden>{{ $saleItem->id_sale }}</p>
                                                       ${{$product->price *( $saleItem->price / 100) }}
                                                    @endif
                                                @endforeach</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            {{-- <button title="Add to cart">Add to cart</button> --}}
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            {{-- <button title="Add to cart">Add to cart</button> --}}
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                             
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Mobile" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                              
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                             
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--product area end-->

        <!--product area start-->
        <div class="product_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="section_title s_title_style3">
                                <h2>Featured Products</h2>

                            </div>
                            <div class="product_tab_btn">
                                <ul class="nav" role="tablist" id="nav-tab2">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#Computer3" role="tab" aria-controls="Computer3" aria-selected="true">
                                            Computer
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Networking2" role="tab" aria-controls="Networking2" aria-selected="false">
                                            Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Networking3" role="tab" aria-controls="Networking3" aria-selected="false">
                                            Computer & Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Audio2" role="tab" aria-controls="Audio2" aria-selected="false">
                                            Television & Audio
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            @foreach($list['item'] as $product)
                            @foreach($sale as $saleItem)
                                @if($saleItem->id_sale == 1 && $saleItem->id_product == $product->id)
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('storage/product/'.$product->image) }}" alt=""></a>
                                            <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('storage/product/'.$product->image) }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">{{ $product->name }}</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">${{ $product->price }}</span>
                                                    <span class="id_product" hidden>{{ $product->id }}</span>
                                                    <span class="current_price"> @foreach($sale as $saleItem)
                                                        @if($saleItem->id_product == $product->id)
                                                        <p class="sale_product" hidden>{{ $saleItem->id_sale }}</p>
                                                           ${{$product->price *( $saleItem->price / 100) }}
                                                        @endif
                                                    @endforeach</span>
                                                </div>
                                                <div class="countdown_text">
                                                    <p><span>Hurry Up!</span> Offers ends in: </p>
                                                </div>
                                                
                                            </div>
                                            <div class="add_to_cart" name="add_to_cart">
                                                <button title="Add to cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            @endif
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Networking2" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Networking3" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Audio2" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{ route('route_Frontend_Product_Detail',['id'=>$product->id]) }}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart" name="add_to_cart">
                                            <button title="Add to cart">Add to cart</button>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--product area end-->

        <!--product area start-->
        
        <!--product area end-->

        <!--product area start-->
       
        <!--blog area start-->
          <div class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title s_title_style3">
                            <h2>Our Latest Posts</h2>
                        </div>
                        <div class="blog_container blog_column4 owl-carousel">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog1.jpg') }}" alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h4><a href="{{ route('blogfull') }}">Post with Gallery</a></h4>
                                        <div class="post_meta">
                                            <p>By <a href="#">admin</a> Date <a href="#">April 24, 2018</a></p>
                                        </div>
                                        <div class="post_desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                        </div>
                                        <footer class="post_readmore">
                                            <a href="#">Read more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog2.jpg') }}" alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h4><a href="{{ route('blogfull') }}">Post with Gallery</a></h4>
                                        <div class="post_meta">
                                            <p>By <a href="#">admin</a> Date <a href="#">April 24, 2018</a></p>
                                        </div>
                                        <div class="post_desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                        </div>
                                        <footer class="post_readmore">
                                            <a href="#">Read more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog3.jpg') }}" alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h4><a href="{{ route('blogfull') }}">Post with Gallery</a></h4>
                                        <div class="post_meta">
                                            <p>By <a href="#">admin</a> Date <a href="#">April 24, 2018</a></p>
                                        </div>
                                        <div class="post_desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                        </div>
                                        <footer class="post_readmore">
                                            <a href="#">Read more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog4.jpg') }}" alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h4><a href="{{ route('blogfull') }}">Post with Gallery</a></h4>
                                        <div class="post_meta">
                                            <p>By <a href="#">admin</a> Date <a href="#">April 24, 2018</a></p>
                                        </div>
                                        <div class="post_desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                        </div>
                                        <footer class="post_readmore">
                                            <a href="#">Read more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog2.jpg') }}" alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h4><a href="{{ route('blogfull') }}">Post with Gallery</a></h4>
                                        <div class="post_meta">
                                            <p>By <a href="#">admin</a> Date <a href="#">April 24, 2018</a></p>
                                        </div>
                                        <div class="post_desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                        </div>
                                        <footer class="post_readmore">
                                            <a href="#">Read more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br>
      <br>
    <!--footer area start-->
    <footer class="footer_widgets">
        <!--newsletter area start-->
        <div class="newsletter_area">
            <div class="container">
                <div class="newsletter_inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="newsletter_sing_up">
                                <h3>Newsletter Sign Up</h3>
                                <p>(Get <span>30% OFF</span> coupon today subscibers)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="subscribe_content">
                                <p><strong>Join 226.000+ subscribers</strong> and get a new discount coupon on every Monday.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter area end-->
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="widgets_container contact_us">
                            <h3>GET THE APP</h3>
                            <div class="aff_content">
                                <p><strong>ANTOMI</strong> App is now available on Google Play & App Store. Get it now.</p>
                            </div>
                            <div class="app_img">
                                <figure class="app_img">
                                    <a href="#"><img src="{{ asset('img/icon/icon-appstore.png') }}" alt=""></a>
                                </figure>
                                <figure class="app_img">
                                    <a href="#"><img src="{{ asset('img/icon/icon-googleplay.png') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">International Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-12">
                        <div class="widgets_container">
                            <h3>CONTACT INFO</h3>
                            <div class="footer_contact">
                                <div class="footer_contact_inner">
                                    <div class="contact_icone">
                                        <img src="{{ asset('img/icon/icon-phone.png') }}" alt="">
                                    </div>
                                    <div class="contact_text">
                                        <p>Hotline Free 24/24: <br> <strong>0123456789</strong></p>
                                    </div>
                                </div>
                                <p>Your address goes here. <br> demo@example.com</p>
                            </div>

                            <div class="footer_social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>&copy; 2021 <a href="index.html" class="text-uppercase">ANTOMI</a>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com/">HasThemes</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <img src="{{ asset('img/icon/payment.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('img/product/productbig2.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('img/product/productbig3.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('img/product/productbig4.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('img/product/productbig5.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ asset('img/product/product14.jpg') }}" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
    <!-- modal area end-->





    <!-- JS
============================================ -->

    <!-- Plugins JS -->


    <!-- Main JS -->
    
    {{-- <script src="assets/js/main.js"></script> --}}"



</body>
@endsection