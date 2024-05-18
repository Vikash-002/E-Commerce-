@extends('frontend/layout.app')

@section('content')


<body>

    <form action="" method="">
        <div class="page-wrapper">

            <main class="main">
                <div class="intro-section">
                    <div class="intro-section-slider">
                        <div class="container">
                            <div class="intro-slider-container slider-container-ratio mb-0">
                                <div class="intro-slider owl-carousel owl-simple owl-light" data-toggle="owl"
                                    data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "responsive": {
                                        "1200": {
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                                    @foreach($sliders as $slider)
                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)"
                                                    srcset="asset/images/demos/demo-9/slider/slide-1-480w.jpg">
                                                <img src="{{ asset('image/').'/'.$slider->image}}" alt="Banner_image">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Jssor slider</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title text-white">hd slider <br>The WordPress slider plugin
                                                supports images</h1><!-- End .intro-title -->

                                            <div class="intro-text text-white">2019</div><!-- End .intro-text -->

                                            <a href="category.html" class="btn btn-primary">
                                                <span>DISCOVER NOW</span>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    @endforeach

                                </div><!-- End .intro-slider owl-carousel owl-simple -->

                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div><!-- End .container -->

                    </div><!-- End .intro-section-slider -->

                    <div class="icon-boxes-container pt-0 pb-0">
                        <div class="container">
                            <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": false,
                                "margin": 30,
                                "loop": false,
                                "autoplay": true,
                                "autoplayTimeout": 8000,
                                "responsive": {
                                    "0": {
                                        "items":1
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-rocket"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                        <p>Orders $50 or more</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->

                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-rotate-left"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                        <p>Within 30 days</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->

                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-info-circle"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                        <p>When you sign up</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->

                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-life-ring"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                        <p>24/7 amazing services</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .container -->
                    </div><!-- End .icon-boxes-container -->
                </div><!-- End .intro-section -->

                <button id="scroll-down" title="Back to top"><i class="icon-arrow-down"></i></button>
                <div class="pt-3 pb-3">
                    <div class="container">

                        <div class="banner-group">

                            <div class="row">
                                @foreach($products as $product)
                                @if($product->price <=2+ 000) <div class="col-sm-6 col-lg-4">
                                    <div class="banner banner-overlay banner-lg">
                                        <a href="#">
                                            <img src="{{asset('/image/').'/'.$product->image}}" width='50' height='50'
                                                class="img img-responsive">
                                        </a>

                                        <div class="banner-content banner-content-bottom">
                                            <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4>
                                            <!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Waterproof</a></h3>
                                            <!-- End .banner-title -->
                                            <div class="banner-text text-white"><a href="#">from $19.00</a></div>
                                            <!-- End .banner-text -->
                                            <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->
                            @endif
                            @endforeach
                        </div><!-- End .row -->

                    </div><!-- End .banner-group -->

                    <div class="owl-carousel mt-4 mb-3 owl-simple" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>

                        @foreach($brands as $brand)
                        <a href="#" class="brand">
                            <img src="{{asset('/image_path/').'/'.$brand->image_path}}" alt="Brand Name">
                        </a>


                        @endforeach


                    </div><!-- End .owl-carousel -->

                </div><!-- End .container -->

        </div><!-- End .bg-lighter -->

        <div class="bg-lighter pt-6">
            <div class="container">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Trending Now</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="trending-men-link" data-toggle="tab"
                                    href="#trending-men-" role="tab" aria-controls="trending-men-tab"
                                    aria-selected="true">Men's Clothing</a>
                            </li>
                        </ul>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trending-women-tab" role="tabpanel"
                        aria-labelledby="trending-women-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                            data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "dots": false
                                        }
                                    }
                                }'>

                            @foreach($products as $product)
                            <div class="product product-7 text-center">


                                <figure class="product-media">
                                    <a href="product.html">

                                        <img src="{{asset('/image/').'/'.$product->image}}" width='50' height='50'
                                            class="img img-responsive">

                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->


                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">{{$product->category->name}}</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                       {{$product->price}}
                                    </div><!-- End .product-price -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->


                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            @endforeach







                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel"
                        aria-labelledby="trending-men-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                            data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "dots": false
                                        }
                                    }
                                }'>

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->
        </div>

        <div class="container featured mt-4 pb-2">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Featured Footwear</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="featured-women-link" data-toggle="tab"
                                href="#featured-men-tab" role="tab" aria-controls="featured-men-tab"
                                aria-selected="true">Men's Shoes</a>
                        </li>
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            @foreach( $categories as $category)
            <div class="row">

                <div class="col-lg-3">
                    <div class="banner banner-overlay product-banner">
                        <a href="#">

                            <img src="{{ asset('image_path/').'/'.$category->image_path}}"  width="200" height="400" alt = "image name">

                        </a>
                        <div class="banner-content">
                            <div class="banner-top">
                                <div class="banner-title text-white text-center">
                                    
                                </div>
                            </div>
                            <div class="banner-bottom">
                                
                                <div class="product-price">
                                  
                                </div>
                               
                                <a href="{{url('productList/'.$category->id)}}" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div>
                        </div>
                    </div><!-- End .banner banner-overlay -->

                </div><!-- End .col-lg-3 -->

                <div class="col-lg-9">
                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel"
                            aria-labelledby="featured-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":3,
                                                "nav": true,
                                                  "dots": false
                                            }
                                        }
                                    }'>

                                @foreach($products as $product)
                                @if($product->category_id == $category->id)
                                <div class="product product-7">
                                    <figure class="product-media">
                                       
                                        <a href="{{url('productList/'.$product->id)}}">
                                            <img src="{{asset('/image/').'/'.$product->image}}" width='50' height='50'
                                                class="img img-responsive">
                                        </a>

                                        <div class="product-action-vertical">
                                            
                                            
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">{{$product->name}}</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">{{$product->price}}</span>
                                            
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                @endif
                                @endforeach

                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel"
                            aria-labelledby="featured-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":3,
                                                "dots": false
                                            }
                                        }
                                    }'>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
            @endforeach
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-3 mb-4">
        </div><!-- End .container -->

        <div class="container pb-2">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Bags & Accessories</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="bags-women-link" data-toggle="tab" href="#bags-women-tab"
                                role="tab" aria-controls="bags-women-tab" aria-selected="true">Women's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bags-men-link" data-toggle="tab" href="#bags-men-tab" role="tab"
                                aria-controls="bags-men-tab" aria-selected="false">Men's</a>
                        </li>
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="banner banner-overlay product-banner">
                        <a href="#">
                            <img src="{{asset('front/images/demos/demo-9/banners/banner-6.jpg')}}" alt="banner image">
                        </a>
                        <div class="banner-content">
                            <div class="banner-top">
                                <div class="banner-title text-white text-center">
                                    <i class="la la-star-o"></i>
                                    <h3 class="text-white">Our Experts<br>Recommend</h3>
                                </div>
                            </div>
                            <div class="banner-bottom">
                                <div class="product-cat">
                                    <h4 class="text-white">Sale</h4>
                                </div>
                                <div class="product-price">
                                    <h4 class="text-white">$129.99</h4>
                                </div>
                                <div class="product-txt">
                                    <p class="text-white">Cross Body Bag</p>
                                </div>
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div>
                        </div>
                    </div><!-- End .banner banner-overlay -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-9">
                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="bags-women-tab" role="tabpanel"
                            aria-labelledby="bags-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "1200": {
                                                "items":3,
                                                "nav": true,
                                                "dots": false
                                            }
                                        }
                                    }'>
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{asset('front/images/demos/demo-9/products/product-8-1.jpg')}}"
                                                alt="Product image" class="product-image">
                                            <img src="{{asset('frontimages/demos/demo-9/products/product-8-2.jpg')}}"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                    to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Small shoulder bag</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $14.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{asset('front/images/demos/demo-9/products/product-9-1.jpg')}}"
                                                alt="Product image" class="product-image">
                                            <img src="{{asset('front/images/demos/demo-9/products/product-9-2.jpg')}}"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                    to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Loafers</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $9.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 1 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{asset('front/images/demos/demo-9/products/product-10-1.jpg')}}"
                                                alt="Product image" class="product-image">
                                            <img src="{{asset('front/images/demos/demo-9/products/product-10-2.jpg')}}"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                    to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Small bucket bag</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $14.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 3 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="{{asset('front/images/demos/demo-9/products/product-10-thumb.jpg')}}"
                                                    alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{asset('front/images/demos/demo-9/products/product-10-2-thumb.jpg')}}"
                                                    alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="bags-men-tab" role="tabpanel"
                            aria-labelledby="bags-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":4,
                                                "nav": true,
                                                "dots": false
                                            }
                                        }
                                    }'>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div>
            </div>
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-3 mt-xl-1 mb-0">
        </div><!-- End .container -->

        <div class="cta pt-4 pt-lg-6 pb-5 pb-lg-7 mb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <div class="cta-heading text-center">
                            <h3 class="cta-title">Sign Up for updates from Molla</h3><!-- End .cta-title -->
                            <p class="cta-desc">and receive <span class="font-weight-normal">$20 coupon</span> for first
                                shopping</p><!-- End .cta-desc -->
                        </div><!-- End .text-center -->

                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your Email Address"
                                    aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" title="Sing up"><i
                                            class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                    </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->

        <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "items": 6,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "360": {
                            "items":2
                        },
                        "600": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        },
                        "1500": {
                            "items":6
                        }
                    }
                }'>
            <div class="instagram-feed">
                <img src="{{asset('front/images/demos/demo-9/instagram/1.jpg')}}" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>466</a>
                    <a href="#"><i class="icon-comments"></i>65</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="{{asset('front/images/demos/demo-9/instagram/2.jpg')}}" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>39</a>
                    <a href="#"><i class="icon-comments"></i>78</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="{{asset('front/images/demos/demo-9/instagram/3.jpg')}}" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>691</a>
                    <a href="#"><i class="icon-comments"></i>87</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="{{asset('front/images/demos/demo-9/instagram/4.jpg')}}" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>508</a>
                    <a href="#"><i class="icon-comments"></i>124</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="{{asset('front/images/demos/demo-9/instagram/5.jpg')}}" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>433</a>
                    <a href="#"><i class="icon-comments"></i>27</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="{{asset('front/images/demos/demo-9/instagram/6.jpg')}}" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>122</a>
                    <a href="#"><i class="icon-comments"></i>55</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->
        </div><!-- End .owl-carousel -->
        </main><!-- End .main -->

        <footer class="footer footer-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="widget widget-about">
                                <img src="{{asset('front/images/demos/demo-9/logo-footer.png')}}" class="footer-logo"
                                    alt="Footer Logo" width="82" height="25">
                                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate
                                    magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
                                    porttitor, facilisis luctus, metus. </p>

                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <span class="widget-about-title">Got Question? Call us 24/7</span>
                                            <a href="tel:123456789">+0123 456 789</a>
                                        </div><!-- End .col-sm-6 -->
                                        <div class="col-sm-6 col-md-8">
                                            <span class="widget-about-title">Payment Method</span>
                                            <figure class="footer-payments">
                                                <img src="{{asset('front/images/payments.png')}}"
                                                    alt="Payment')}} methods" width="272" height="20">
                                            </figure><!-- End .footer-payments -->
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget-about-info -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-12 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">About Molla</a></li>
                                    <li><a href="#">How to shop on Molla</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="login.html">Log in</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-64 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">Social Media</span>

                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                                class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                                class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                                class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
        </div><!-- End .page-wrapper -->
        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        <!-- Mobile Menu -->
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

        <div class="mobile-menu-container">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>

                <form action="#" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Search</label>
                    <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                        placeholder="Search in..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>

                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="index-32.html">=</a>

                            <ul>
                                <li><a href="index-1.html">01 - furniture store</a></li>
                                <li><a href="index-2.html">02 - furniture store</a></li>
                                <li><a href="index-3.html">03 - electronic store</a></li>
                                <li><a href="index-4.html">04 - electronic store</a></li>
                                <li><a href="index-5.html">05 - fashion store</a></li>
                                <li><a href="index-6.html">06 - fashion store</a></li>
                                <li><a href="index-7.html">07 - fashion store</a></li>
                                <li><a href="index-8.html">08 - fashion store</a></li>
                                <li><a href="index-9.html">09 - fashion store</a></li>
                                <li><a href="index-10.html">10 - shoes store</a></li>
                                <li><a href="index-11.html">11 - furniture simple store</a></li>
                                <li><a href="index-12.html">12 - fashion simple store</a></li>
                                <li><a href="index-13.html">13 - market</a></li>
                                <li><a href="index-14.html">14 - market fullwidth</a></li>
                                <li><a href="index-15.html">15 - lookbook 1</a></li>
                                <li><a href="index-16.html">16 - lookbook 2</a></li>
                                <li><a href="index-17.html">17 - fashion store</a></li>
                                <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                <li><a href="index-19.html">19 - games store</a></li>
                                <li><a href="index-20.html">20 - book store</a></li>
                                <li><a href="index-21.html">21 - sport store</a></li>
                                <li><a href="index-22.html">22 - tools store</a></li>
                                <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                <li><a href="index-24.html">24 - extreme sport store</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html">Shop</a>
                            <ul>
                                <li><a href="category-list.html">Shop List</a></li>
                                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                                class="tip tip-hot">Hot</span></span></a></li>
                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                                class="tip tip-new">New</span></span></a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="#">Lookbook</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html" class="sf-with-ul">Product</a>
                            <ul>


                                <li><a href="product-centered.html">a</a></li>
                                <li><a href="product-extended.html"><span>Extended Info<span
                                                class="tip tip-new">New</span></span></a></li>
                                <li><a href="product-gallery.html">Gallery</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                <li><a href="product-fullwidth.html">Full Width</a></li>
                                <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li>
                                    <a href="about.html">About</a>

                                    <ul>
                                        <li><a href="about.html">About 01</a></li>
                                        <li><a href="about-2.html">About 02</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>

                                    <ul>
                                        <li><a href="contact.html">Contact 01</a></li>
                                        <li><a href="contact-2.html">Contact 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>

                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="#">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Single Post</a>
                                    <ul>
                                        <li><a href="single.html">Default with sidebar</a></li>
                                        <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                        <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements-list.html">Elements</a>
                            <ul>
                                <li><a href="elements-products.html">Products</a></li>
                                <li><a href="elements-typography.html">Typography</a></li>
                                <li><a href="elements-titles.html">Titles</a></li>
                                <li><a href="elements-banners.html">Banners</a></li>
                                <li><a href="elements-product-category.html">Product Category</a></li>
                                <li><a href="elements-video-banners.html">Video Banners</a></li>
                                <li><a href="elements-buttons.html">Buttons</a></li>
                                <li><a href="elements-accordions.html">Accordions</a></li>
                                <li><a href="elements-tabs.html">Tabs</a></li>
                                <li><a href="elements-testimonials.html">Testimonials</a></li>
                                <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                <li><a href="elements-portfolio.html">Portfolio</a></li>
                                <li><a href="elements-cta.html">Call to Action</a></li>
                                <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->

                <div class="social-icons">
                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->

        <!-- Sign in / Register Modal -->
        <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="icon-close"></i></span>
                        </button>

                        <div class="form-box">
                            <div class="form-tab">
                                <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                            role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                                            role="tab" aria-controls="register" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tab-content-5">
                                    <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                        aria-labelledby="signin-tab">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="singin-email">Username or email address *</label>
                                                <input type="text" class="form-control" id="singin-email"
                                                    name="singin-email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="singin-password">Password *</label>
                                                <input type="password" class="form-control" id="singin-password"
                                                    name="singin-password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>LOG IN</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="signin-remember">
                                                    <label class="custom-control-label" for="signin-remember">Remember
                                                        Me</label>
                                                </div><!-- End .custom-checkbox -->

                                                <a href="#" class="forgot-link">Forgot Your Password?</a>
                                            </div><!-- End .form-footer -->
                                        </form>
                                        <div class="form-choice">
                                            <p class="text-center">or sign in with</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Login With Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Login With Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice -->
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="register" role="tabpanel"
                                        aria-labelledby="register-tab">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="register-name">Your full name*</label>
                                                <input type="text" class="form-control" id="register-name" name="name"
                                                    required>
                                                <span class="text-danger">
                                                    @error('register-name')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>


                                            <div class="form-group">
                                                <label for="register-email">Your email address *</label>
                                                <input type="email" class="form-control" id="register-email"
                                                    name="email" required>
                                                <span class="text-danger">
                                                    @error('register-email')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-password">Password *</label>
                                                <input type="password" class="form-control" id="register-password"
                                                    name="password" required>
                                                <span class="text-danger">
                                                    @error('password')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-password">Conform Password *</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password_confirmation" required>
                                                <span class="text-danger">
                                                    @error('password_confirmation')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>SIGN UP</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="register-policy" required>
                                                    <label class="custom-control-label" for="register-policy">I agree to
                                                        the <a href="#">privacy policy</a> *</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .form-footer -->
                                        </form>
                                        <div class="form-choice">
                                            <p class="text-center">or sign in with</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Login With Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login  btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Login With Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice -->
    </form>
    </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
    </div><!-- End .form-tab -->
    </div><!-- End .form-box -->
    </div><!-- End .modal-body -->
    </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->


    <!-- Plugins JS File -->
</body>

@endsection