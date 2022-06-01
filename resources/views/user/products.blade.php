@extends('layout.master')

@section('content')

{{-- <div id="page-content"> --}}
    <!--Collection Banner-->
    {{-- <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{ asset('user/assets/images/cat-women.jpg') }}" src="{{ asset('assets/images/cat-women.jpg') }}" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Shop Left Sidebar</h1></div>
          </div>
    </div> --}}
    <!--End Collection Banner-->
    
    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filter-widget">
                        <div class="widget-title"><h2>Categories</h2></div>
                        <div class="widget-content">
                            <ul class="sidebar_categories">
                                <li class="level1 sub-level"><a href="#;" class="site-nav">Necklace</a>
                                    <ul class="sublinks">
                                        <li class="level2"><a href="products?category_id=6" class="site-nav">Sindhi Necklace</a></li>
                                        {{-- <li class="level2"><a href="#;" class="site-nav">Women</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">Child</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">View All Clothing</a></li> --}}
                                    </ul>
                                </li>
                                <li class="level1 sub-level"><a href="#;" class="site-nav">Earrings</a>
                                    <ul class="sublinks">
                                        <li class="level2"><a href="products?category_id=7" class="site-nav">Thai Earrings</a></li>
                                        <li class="level2"><a href="products?category_id=7" class="site-nav">Itlian Earrings</a></li>
                                        <li class="level2"><a href="products?category_id=7" class="site-nav">Sindhi Eaarings</a></li>
                                        {{-- <li class="level2"><a href="#;" class="site-nav">View All Jewellery</a></li> --}}
                                    </ul>
                                </li>
                                <li class="level1 sub-level"><a href="#;" class="site-nav">Rings</a>
                                    <ul class="sublinks">
                                        <li class="level2"><a href="products?category_id=4" class="site-nav">Itlian Rings</a></li>
                                        <li class="level2"><a href="products?category_id=5" class="site-nav">Sindhi Rings</a></li>
                                        <li class="level2"><a href="products?category_id=8" class="site-nav">New Collaction</a></li>
                                        {{-- <li class="level2"><a href="#;" class="site-nav">View All Jewellery</a></li> --}}
                                    </ul>
                                </li>
                                {{-- <li class="lvl-1"><a href="#;" class="site-nav">Rings</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Itlian Rings</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Sindhi Rings</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">New Collaction</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Page</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form action="#" method="post" class="price-filter">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button class="btn btn-secondary btn--small">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    {{-- <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn checked">X</span></li>
                                <li><span class="swacth-btn">XL</span></li>
                                <li><span class="swacth-btn">XLL</span></li>
                                <li><span class="swacth-btn">M</span></li>
                                <li><span class="swacth-btn">L</span></li>
                                <li><span class="swacth-btn">S</span></li>
                                <li><span class="swacth-btn">XXXL</span></li>
                                <li><span class="swacth-btn">XXL</span></li>
                                <li><span class="swacth-btn">XS</span></span></li>
                            </ul>
                        </div>
                    </div> --}}
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    {{-- <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Color</h2></div>
                        <div class="filter-color swacth-list clearfix">
                            <span class="swacth-btn black"></span>
                            <span class="swacth-btn white checked"></span>
                            <span class="swacth-btn red"></span>
                            <span class="swacth-btn blue"></span>
                            <span class="swacth-btn pink"></span>
                            <span class="swacth-btn gray"></span>
                            <span class="swacth-btn green"></span>
                            <span class="swacth-btn orange"></span>
                            <span class="swacth-btn yellow"></span>
                            <span class="swacth-btn blueviolet"></span>
                            <span class="swacth-btn brown"></span>
                            <span class="swacth-btn darkGoldenRod"></span> 
                            <span class="swacth-btn darkGreen"></span> 
                            <span class="swacth-btn darkRed"></span> 
                            <span class="swacth-btn dimGrey"></span>
                            <span class="swacth-btn khaki"></span> 
                        </div>
                    </div> --}}
                    <!--End Color Swatches-->
                    <!--Brand-->
                    {{-- <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Brands</h2></div>
                        <ul>
                            <li>
                              <input type="checkbox" value="allen-vela" id="check1">
                              <label for="check1"><span><span></span></span>Allen Vela</label>
                            </li>
                            <li>
                              <input type="checkbox" value="oxymat" id="check3">
                              <label for="check3"><span><span></span></span>Oxymat</label>
                            </li>
                            <li>
                              <input type="checkbox" value="vanelas" id="check4">
                              <label for="check4"><span><span></span></span>Vanelas</label>
                            </li>
                            <li>
                              <input type="checkbox" value="pagini" id="check5">
                              <label for="check5"><span><span></span></span>Pagini</label>
                            </li>
                            <li>
                              <input type="checkbox" value="monark" id="check6">
                              <label for="check6"><span><span></span></span>Monark</label>
                            </li>
                        </ul>
                    </div> --}}
                    <!--End Brand-->
                    <!--Popular Products-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Popular Products</h2></div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                              <div class="grid">
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image">
                                        <a class="grid-view-item__link" href="#">
                                            <img class="grid-view-item__image" src="assets/images/product-images/mini-product-img.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img1.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img2.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img3.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <!--End Popular Products-->
                    <!--Banner-->
                    <div class="sidebar_widget static-banner">
                        <img src="{{ asset('user/assets/images/jewellery-collection2.jpg') }}" alt="" />
                    </div>
                    <!--Banner-->
                    <!--Information-->
                    {{-- <div class="sidebar_widget">
                        <div class="widget-title"><h2>Information</h2></div>
                        <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                    </div> --}}
                    <!--end Information-->
                    <!--Product Tags-->
                    {{-- <div class="sidebar_widget">
                      <div class="widget-title">
                        <h2>Product Tags</h2>
                      </div>
                      <div class="widget-content">
                        <ul class="product-tags">
                          <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                          <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                          <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                          <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                          <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                          <li><a href="#" title="Show products matching tag Black">Black</a></li>
                          <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                          <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                          <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                          <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                          <li><a href="#" title="Show products matching tag Green">Green</a></li>
                          <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                          <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                          <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                          <li><a href="#" title="Show products matching tag L">L</a></li>
                          <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                          <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                          <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                          <li><a href="#" title="Show products matching tag M">M</a></li>
                          <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                          <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                          <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                          <li><a href="#" title="Show products matching tag new">new</a></li>
                          <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                          <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                          <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                          <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                        </ul>
                        <span class="btn btn--small btnview">View all</span> </div>
                    </div> --}}
                    <!--end Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                <div class="category-description">
                    <h3>Category Description</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                </div>
                @if(session('success'))
                    <div class="alert alert-success text-uppercase" role="alert">
                        <strong>Congratulations!</strong> {{ session('success') }}!
                    </div>
                @endif
                <hr>
                <div class="productList product-load-more">
                    <!--Toolbar-->
                    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    <div class="toolbar">
                        <div class="filters-toolbar-wrapper">
                            <div class="row">
                                <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                        <img src="{{ asset('user/assets/images/grid.jpg') }}" alt="Grid" />
                                    </a>
                                    <a href="shop-listview.html" title="List View" class="change-view">
                                        <img src="{{ asset('user/assets/images/list.jpg') }}" alt="List" />
                                    </a>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <span class="filters-toolbar__product-count">Showing: 22</span>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-right">
                                    <div class="filters-toolbar__item">
                                          <label for="SortBy" class="hidden">Sort</label>
                                          <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                            <option value="title-ascending" selected="selected">Sort</option>
                                            <option>Best Selling</option>
                                            <option>Alphabetically, A-Z</option>
                                            <option>Alphabetically, Z-A</option>
                                            <option>Price, low to high</option>
                                            <option>Price, high to low</option>
                                            <option>Date, new to old</option>
                                            <option>Date, old to new</option>
                                          </select>
                                          <input class="collection-header__default-sort" type="hidden" value="manual">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Toolbar-->
                    <div class="grid-products grid--view-items">
                        <div class="row">
                            @foreach ($products as $product)
                            {{-- @dd($product->category_id) --}}
                            @if( $product->category_id == $category_id)
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('img/'.$product->image_path) }}" src="{{ asset('img/'.$product->image_path) }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        @foreach ($product_images as $image)
                                            @if($product->product_id == $image->product_id)
                                                <img class="hover blur-up lazyload" data-src="{{ asset('img/'.$image->image_path) }}" src="{{ asset('img/'.$image->image_path) }}" alt="image" title="product" />
                                                @break
                                            @endif
                                        @endforeach
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='{{ route('add-to-cart', $product->product_id) }}'"method="post">
                                        <button class="btn btn-addto-cart" type="button">Add To Cart</button>
                                    </form>
                                    {{-- <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-detail?product_id={{ $product->product_id }}">{{$product->title}}</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">{{"Rs ".$product->price}}</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        @foreach ($product_images as $image)
                                        @if($product->product_id == $image->product_id)
                                        <li class="swatch medium rounded"><img src="{{ asset('img/'.$image->image_path) }}" alt="image" /></li>
                                        {{-- <li class="swatch medium rounded"><img src="assets/images/product-images/variant5-1.jpg" alt="image" /></li> --}}
                                        {{-- <li class="swatch medium rounded"><img src="assets/images/product-images/variant5-1.jpg" alt="image" /></li> --}}
                                        {{-- <li class="swatch medium rounded"><img src="assets/images/product-images/variant5-1.jpg" alt="image" /></li> --}}
                                        @endif
                                        @endforeach
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="infinitpaginOuter">
                    <div class="infinitpagin">	
                        <a href="#" class="btn loadMore">Load More</a>
                    </div>
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>
    
{{-- </div> --}}

<div class="modal fade quick-view-popup" id="content_quickview">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="ProductSection-product-template" class="product-template__container prstyle1">
            <div class="product-single">
            <!-- Start model close -->
            <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
            <!-- End model close -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="product-details-img">
                        <div class="pl-20">
                            <img class="blur-up lazyload" data-src="assets/images/product-detail-page/camelia-reversible-big1.jpg" src="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-single__meta">
                            <h2 class="product-single__title">Product Quick View Popup</h2>
                            <div class="prInfoRow">
                                <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                            </div>
                            <p class="product-single__price product-single__price-product-template">
                                <span class="visually-hidden">Regular price</span>
                                <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                </span>
                            </p>
                            <div class="product-single__description rte">
                                Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                            </div>
                            
                        <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                            <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                <div class="product-form__item">
                                  <label class="header">Color: <span class="slVariant">Red</span></label>
                                  <div data-value="Red" class="swatch-element color red available">
                                    <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                    <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);" title="Red"></label>
                                  </div>
                                  <div data-value="Blue" class="swatch-element color blue available">
                                    <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                    <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);" title="Blue"></label>
                                  </div>
                                  <div data-value="Green" class="swatch-element color green available">
                                    <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                    <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);" title="Green"></label>
                                  </div>
                                  <div data-value="Gray" class="swatch-element color gray available">
                                    <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                    <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);" title="Gray"></label>
                                  </div>
                                </div>
                            </div>
                            <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                <div class="product-form__item">
                                  <label class="header">Size: <span class="slVariant">XS</span></label>
                                  <div data-value="XS" class="swatch-element xs available">
                                    <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                    <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                  </div>
                                  <div data-value="S" class="swatch-element s available">
                                    <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                    <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                  </div>
                                  <div data-value="M" class="swatch-element m available">
                                    <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                    <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                  </div>
                                  <div data-value="L" class="swatch-element l available">
                                    <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                    <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                  </div>
                                </div>
                            </div>
                            <!-- Product Action -->
                            <div class="product-action clearfix">
                                <div class="product-form__item--quantity">
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="product-form__item--submit">
                                    <button type="button" name="add" class="btn product-form__cart-submit">
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                            </div>
                            <!-- End Product Action -->
                        </form>
                        <div class="display-table shareRow">
                                <div class="display-table-cell">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
            <!--End-product-single-->
            </div>
        </div>
            </div>
        </div>
    </div>
</div>

@endsection