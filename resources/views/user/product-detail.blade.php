@extends('layout.master')

@section('content')

<div id="ProductSection-product-template" class="product-template__container prstyle2 container">
    <!--#ProductSection-product-template-->
    {{-- @dd($product) --}}
    @foreach ($product as $product)
    <div class="product-single product-single-1">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="product-details-img product-single__photos bottom">
                    <div class="zoompro-wrap product-zoom-right pl-20">
                        <div class="zoompro-span">
                            <img class="blur-up lazyload zoompro" data-zoom-image="{{ asset('img/'.$product->image_path) }}" alt="" src="{{ asset('img/'.$product->image_path) }}" />               
                        </div>
                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                        <div class="product-buttons">
                            <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                            <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-thumb product-thumb-1">
                        <div id="gallery" class="product-dec-slider-1 product-tab-left">
                            @foreach ($product_images as $image) 
                            <a data-image="{{ asset('img/'.$image->image_path) }}" data-zoom-image="{{ asset('img/'.$image->image_path) }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="{{ asset('img/'.$image->image_path) }}" alt="" />
                            </a>
                            {{-- <a data-image="assets/images/product-detail-page/cape-dress-2.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-2.jpg" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-2.jpg" alt="" />
                            </a>
                            <a data-image="assets/images/product-detail-page/cape-dress-3.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-3.jpg" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-3.jpg" alt="" />
                            </a>
                            <a data-image="assets/images/product-detail-page/cape-dress-4.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-4.jpg" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-4.jpg" alt="" />
                            </a>
                            <a data-image="assets/images/product-detail-page/cape-dress-5.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-5.jpg" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-5.jpg" alt="" />
                            </a>
                            <a data-image="assets/images/product-detail-page/cape-dress-6.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-6.jpg" class="slick-slide slick-cloned" data-slick-index="1" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-6.jpg" alt="" />
                            </a>
                            <a data-image="assets/images/product-detail-page/cape-dress-7.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-7.jpg" class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-7.jpg" alt="" />
                            </a>
                            <a data-image="assets/images/product-detail-page/cape-dress-8.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-8.jpg" class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1">
                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-8.jpg" alt="" />
                            </a> --}}
                            @endforeach
                        </div>
                    </div>
                    <div class="lightboximages">
                        {{-- <a href="{{ asset('img/'.$image->image_path) }}" data-size="1462x2048"></a> --}}
                        {{-- <a href="assets/images/product-detail-page/camelia-reversible-big2.jpg" data-size="1462x2048"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big3.jpg" data-size="1462x2048"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible7-big.jpg" data-size="1462x2048"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big4.jpg" data-size="1462x2048"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big5.jpg" data-size="1462x2048"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big6.jpg" data-size="731x1024"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big7.jpg" data-size="731x1024"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big8.jpg" data-size="731x1024"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big9.jpg" data-size="731x1024"></a>
                        <a href="assets/images/product-detail-page/camelia-reversible-big10.jpg" data-size="731x1024"></a> --}}
                    </div>

                </div>
                <!--Product Feature-->
                {{-- <div class="prFeatures">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                            <img src="assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                            <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                            <img src="assets/images/shield.png" alt="Confidence" title="Confidence" />
                            <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                            <img src="assets/images/worldwide.png" alt="Worldwide Delivery" title="Worldwide Delivery" />
                            <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                            <img src="assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                            <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                        </div>
                    </div>
                </div> --}}
                <!--End Product Feature-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                @if(session('success'))
                    <div class="alert alert-success text-uppercase" role="alert">
                        <i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> {{ session('success') }}!
                    </div>
                @endif
                <div class="product-single__meta">
                    <h1 class="product-single__title">{{ $product->title }}</h1>
                    <div class="product-nav clearfix">					
                        <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="prInfoRow">
                        {{-- <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div> --}}
                        {{-- <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div> --}}
                        <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                    </div>
                    <p class="product-single__price product-single__price-product-template">
                        <span class="visually-hidden">Regular price</span>
                        {{-- <s id="ComparePrice-product-template"><span class="money">$900.00</span></s> --}}
                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                            <span id="ProductPrice-product-template"><span class="money">{{ 'RS.'.$product->price }}</span></span>
                        </span>
                        {{-- <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                            <span>You Save</span>
                            <span id="SaveAmount-product-template" class="product-single__save-amount">
                            <span class="money">$100.00</span>
                            </span>
                            <span class="off">(<span>16</span>%)</span>
                        </span>   --}}
                    </p>
                <div class="product-single__description rte">
                    <p>{{ $product->description }}</p>
                </div>
                {{-- <form method="post" action="{{ route('add-to-cart', $product->id) }}" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data"> --}}
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
                            <a href="{{ route('add-to-cart', $product->id) }}">
                                <button type="button" name="add" class="btn product-form__cart-submit">
                                    <span>Add to cart</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- End Product Action -->
                {{-- </form> --}}
                {{-- <div class="display-table shareRow">
                        <div class="display-table-cell medium-up--one-third">
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                            </div>
                        </div>
                        <div class="display-table-cell text-right">
                            <div class="social-sharing">
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                </a>
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                </a>
                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                </a>
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                </a>
                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                </a>
                             </div>
                        </div>
                    </div> --}}
            </div>
                <!--Product Tabs-->
                <div class="tabs-listing">
                    <div class="tab-container">
                        <h3 class="acor-ttl active" rel="tab1">Product Details</h3>
                        <div id="tab1" class="tab-content">
                            <div class="product-description rte">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <ul>
                                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                  <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                  <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                  <li>Lorem Ipsum is not simply random text.</li>
                                  <li>Free theme updates</li>
                                </ul>
                                <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                <p>You can change the position of any sections such as slider, banner, products, collection and so on by just dragging and dropping.&nbsp;</p>
                                <h3>Lorem Ipsum is not simply random text.</h3>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                <p>Change colors, fonts, banners, megamenus and more. Preview changes are live before saving them.</p>
                            </div>
                        </div>
                        <h3 class="acor-ttl" rel="tab2">Product Reviews</h3>
                        <div id="tab2" class="tab-content">
                            <div id="shopify-product-reviews">
                                <div class="spr-container">
                                    <div class="spr-header clearfix">
                                        <div class="spr-summary">
                                            <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                            <span class="spr-summary-actions">
                                                <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="spr-content">
                                        <div class="spr-form clearfix">
                                            <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                <h3 class="spr-form-title">Write a review</h3>
                                                <fieldset class="spr-form-contact">
                                                    <div class="spr-form-contact-name">
                                                      <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                      <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                    </div>
                                                    <div class="spr-form-contact-email">
                                                      <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                      <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                    </div>
                                                </fieldset>
                                                <fieldset class="spr-form-review">
                                                  <div class="spr-form-review-rating">
                                                    <label class="spr-form-label">Rating</label>
                                                    <div class="spr-form-input spr-starrating">
                                                      <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                    </div>
                                                  </div>
                                            
                                                  <div class="spr-form-review-title">
                                                    <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                    <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                  </div>
                                            
                                                  <div class="spr-form-review-body">
                                                    <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                    <div class="spr-form-input">
                                                      <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                    </div>
                                                  </div>
                                                </fieldset>
                                                <fieldset class="spr-form-actions">
                                                    <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="spr-reviews">
                                            <div class="spr-review">
                                                <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                    <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                                </div>
                                                <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                            <div class="spr-review">
                                              <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                              </div>
                                        
                                              <div class="spr-review-content">
                                                <p class="spr-review-content-body"><br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br><br>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                                </p>
                                              </div>
                                            </div>
                                            <div class="spr-review">
                                              <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                              </div>
                                        
                                              <div class="spr-review-content">
                                                <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        {{-- <h3 class="acor-ttl" rel="tab3">Size Chart</h3> --}}
                        {{-- <div id="tab3" class="tab-content">
                            <h3>WOMEN'S BODY SIZING CHART</h3>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Size</th>
                                  <th>XS</th>
                                  <th>S</th>
                                  <th>M</th>
                                  <th>L</th>
                                  <th>XL</th>
                                </tr>
                                <tr>
                                  <td>Chest</td>
                                  <td>31" - 33"</td>
                                  <td>33" - 35"</td>
                                  <td>35" - 37"</td>
                                  <td>37" - 39"</td>
                                  <td>39" - 42"</td>
                                </tr>
                                <tr>
                                  <td>Waist</td>
                                  <td>24" - 26"</td>
                                  <td>26" - 28"</td>
                                  <td>28" - 30"</td>
                                  <td>30" - 32"</td>
                                  <td>32" - 35"</td>
                                </tr>
                                <tr>
                                  <td>Hip</td>
                                  <td>34" - 36"</td>
                                  <td>36" - 38"</td>
                                  <td>38" - 40"</td>
                                  <td>40" - 42"</td>
                                  <td>42" - 44"</td>
                                </tr>
                                <tr>
                                  <td>Regular inseam</td>
                                  <td>30"</td>
                                  <td>30½"</td>
                                  <td>31"</td>
                                  <td>31½"</td>
                                  <td>32"</td>
                                </tr>
                                <tr>
                                  <td>Long (Tall) Inseam</td>
                                  <td>31½"</td>
                                  <td>32"</td>
                                  <td>32½"</td>
                                  <td>33"</td>
                                  <td>33½"</td>
                                </tr>
                              </tbody>
                            </table>
                            <h3>MEN'S BODY SIZING CHART</h3>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Size</th>
                                  <th>XS</th>
                                  <th>S</th>
                                  <th>M</th>
                                  <th>L</th>
                                  <th>XL</th>
                                  <th>XXL</th>
                                </tr>
                                <tr>
                                  <td>Chest</td>
                                  <td>33" - 36"</td>
                                  <td>36" - 39"</td>
                                  <td>39" - 41"</td>
                                  <td>41" - 43"</td>
                                  <td>43" - 46"</td>
                                  <td>46" - 49"</td>
                                </tr>
                                <tr>
                                  <td>Waist</td>
                                  <td>27" - 30"</td>
                                  <td>30" - 33"</td>
                                  <td>33" - 35"</td>
                                  <td>36" - 38"</td>
                                  <td>38" - 42"</td>
                                  <td>42" - 45"</td>
                                </tr>
                                <tr>
                                  <td>Hip</td>
                                  <td>33" - 36"</td>
                                  <td>36" - 39"</td>
                                  <td>39" - 41"</td>
                                  <td>41" - 43"</td>
                                  <td>43" - 46"</td>
                                  <td>46" - 49"</td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="text-center">
                                <img src="assets/images/size.jpg" alt="" />
                            </div>
                      </div> --}}
                        <h3 class="acor-ttl" rel="tab4">Shipping &amp; Returns</h3>
                        <div id="tab4" class="tab-content">
                            <h4>Returns Policy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                            <h4>Shipping</h4>
                            <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                        </div>
                    </div>
                </div>
                <!--End Product Tabs-->
            </div>
        </div>
    <!--End-product-single-->
    
    <!--Related Product Slider-->
    {{-- <div class="related-product grid-products">
        <header class="section-header">
            <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
            <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
        </header>
        <div class="productPageSlider">
            <div class="col-12 item">
                <!-- start product image -->
                <div class="product-image">
                    <!-- start product image -->
                    <a href="#">
                        <!-- image -->
                        <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image1-1.jpg" src="assets/images/product-images/product-image1-1.jpg" alt="image" title="product">
                        <!-- End hover image -->
                        <!-- product label -->
                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                        <!-- End product label -->
                    </a>
                    <!-- end product image -->

                    <!-- Start product button -->
                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                    </form>
                    <div class="button-set">
                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                            <i class="icon anm anm-search-plus-r"></i>
                        </a>
                        <div class="wishlist-btn">
                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                <i class="icon anm anm-heart-l"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end product button -->
                </div>
                <!-- end product image -->
                <!--start product details -->
                <div class="product-details text-center">
                    <!-- product name -->
                    <div class="product-name">
                        <a href="#">Edna Dress</a>
                    </div>
                    <!-- End product name -->
                    <!-- product price -->
                    <div class="product-price">
                        <span class="old-price">$500.00</span>
                        <span class="price">$600.00</span>
                    </div>
                    <!-- End product price -->
                    
                    <div class="product-review">
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star-o"></i>
                        <i class="font-13 fa fa-star-o"></i>
                    </div>
                    <!-- Variant -->
                    <ul class="swatches">
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant1.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant2.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant4.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant5.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant6.jpg" alt="image" /></li>
                    </ul>
                    <!-- End Variant -->
                </div>
                <!-- End product details -->
            </div>
            <div class="col-12 item">
                <!-- start product image -->
                <div class="product-image">
                    <!-- start product image -->
                    <a href="#">
                        <!-- image -->
                        <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image2.jpg" src="assets/images/product-images/product-image2.jpg" alt="image" title="product">
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image2-1.jpg" src="assets/images/product-images/product-image2-1.jpg" alt="image" title="product">
                        <!-- End hover image -->
                    </a>
                    <!-- end product image -->

                    <!-- Start product button -->
                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                    </form>
                    <div class="button-set">
                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                            <i class="icon anm anm-search-plus-r"></i>
                        </a>
                        <div class="wishlist-btn">
                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                <i class="icon anm anm-heart-l"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end product button -->
                </div>
                <!-- end product image -->

                <!--start product details -->
                <div class="product-details text-center">
                    <!-- product name -->
                    <div class="product-name">
                        <a href="#">Elastic Waist Dress</a>
                    </div>
                    <!-- End product name -->
                    <!-- product price -->
                    <div class="product-price">
                        <span class="price">$748.00</span>
                    </div>
                    <!-- End product price -->
                    <div class="product-review">
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                    </div>
                    <!-- Variant -->
                    <ul class="swatches">
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-1.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-2.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-3.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-4.jpg" alt="image" /></li>
                    </ul>
                    <!-- End Variant -->
                </div>
                <!-- End product details -->
            </div>
            <div class="col-12 item">
                <!-- start product image -->
                <div class="product-image">
                    <!-- start product image -->
                    <a href="#">
                        <!-- image -->
                        <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image3.jpg" src="assets/images/product-images/product-image3.jpg" alt="image" title="product">
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image3-1.jpg" src="assets/images/product-images/product-image3-1.jpg" alt="image" title="product">
                        <!-- End hover image -->
                        <!-- product label -->
                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                        <!-- End product label -->
                    </a>
                    <!-- end product image -->

                    <!-- Start product button -->
                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                    </form>
                    <div class="button-set">
                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                            <i class="icon anm anm-search-plus-r"></i>
                        </a>
                        <div class="wishlist-btn">
                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                <i class="icon anm anm-heart-l"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end product button -->
                </div>
                <!-- end product image -->

                <!--start product details -->
                <div class="product-details text-center">
                    <!-- product name -->
                    <div class="product-name">
                        <a href="#">3/4 Sleeve Kimono Dress</a>
                    </div>
                    <!-- End product name -->
                    <!-- product price -->
                    <div class="product-price">
                        <span class="price">$550.00</span>
                    </div>
                    <!-- End product price -->
                    
                    <div class="product-review">
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star-o"></i>
                    </div>
                    <!-- Variant -->
                    <ul class="swatches">
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                    </ul>
                    <!-- End Variant -->
                </div>
                <!-- End product details -->
            </div>
            <div class="col-12 item">
                <!-- start product image -->
                <div class="product-image">
                    <!-- start product image -->
                    <a href="#">
                        <!-- image -->
                        <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image4.jpg" src="assets/images/product-images/product-image4.jpg" alt="image" title="product" />
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image4-1.jpg" src="assets/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                        <!-- End hover image -->
                        <!-- product label -->
                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                        <!-- End product label -->
                    </a>
                    <!-- end product image -->

                    <!-- Start product button -->
                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                    </form>
                    <div class="button-set">
                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                            <i class="icon anm anm-search-plus-r"></i>
                        </a>
                        <div class="wishlist-btn">
                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                <i class="icon anm anm-heart-l"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end product button -->
                </div>
                <!-- end product image -->

                <!--start product details -->
                <div class="product-details text-center">
                    <!-- product name -->
                    <div class="product-name">
                        <a href="#">Cape Dress</a>
                    </div>
                    <!-- End product name -->
                    <!-- product price -->
                    <div class="product-price">
                        <span class="old-price">$900.00</span>
                        <span class="price">$788.00</span>
                    </div>
                    <!-- End product price -->
                    
                    <div class="product-review">
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star-o"></i>
                        <i class="font-13 fa fa-star-o"></i>
                    </div>
                    <!-- Variant -->
                    <ul class="swatches">
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                    </ul>
                    <!-- End Variant -->
                </div>
                <!-- End product details -->
            </div>
            <div class="col-12 item">
                <!-- start product image -->
                <div class="product-image">
                    <!-- start product image -->
                    <a href="#">
                        <!-- image -->
                        <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg" src="assets/images/product-images/product-image5.jpg" alt="image" title="product" />
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image5-1.jpg" src="assets/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                        <!-- End hover image -->
                        <!-- product label -->
                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                        <!-- End product label -->
                    </a>
                    <!-- end product image -->

                    <!-- Start product button -->
                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                    </form>
                    <div class="button-set">
                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                            <i class="icon anm anm-search-plus-r"></i>
                        </a>
                        <div class="wishlist-btn">
                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                <i class="icon anm anm-heart-l"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end product button -->
                </div>
                <!-- end product image -->

                <!--start product details -->
                <div class="product-details text-center">
                    <!-- product name -->
                    <div class="product-name">
                        <a href="#">Paper Dress</a>
                    </div>
                    <!-- End product name -->
                    <!-- product price -->
                    <div class="product-price">
                        <span class="price">$550.00</span>
                    </div>
                    <!-- End product price -->
                    
                    <div class="product-review">
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                    </div>
                    <!-- Variant -->
                    <ul class="swatches">
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                        <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                    </ul>
                    <!-- End Variant -->
                </div>
                <!-- End product details -->
            </div>
            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image6.jpg" src="assets/images/product-images/product-image6.jpg" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image6-1.jpg" src="assets/images/product-images/product-image6-1.jpg" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Zipper Jacket</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$788.00</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image7-1.jpg" src="assets/images/product-images/product-image7-1.jpg" alt="image" title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Zipper Jacket</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
        </div>
        </div> --}}
    <!--End Related Product Slider-->
    
    </div>
    @endforeach
    <!--#ProductSection-product-template-->
</div>

@endsection

