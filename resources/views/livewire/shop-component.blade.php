<div class="holder">
    <div class="container">
        <div class="title-wrap text-center">
            <h2 class="h1-style">New arrival</h2>
            <div class="h-sub maxW-825">Hurry up! Limited</div>
        </div>
        <div class="prd-grid-wrap position-relative">
            <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                @foreach ($products as $product) 
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" class="prd-img image-hover-scale image-container">
                                    <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="{{ asset('images/products')}}/{{$product->image}}"
                                        alt="{{ $product->name}}"
                                        class="js-prd-img lazyload fade-up"
                                    />
                                    <div class="foxic-loader"></div>
                                    <div class="prd-big-squared-labels">
                                        <div class="label-new"><span>New</span></div>
                                        <div class="label-sale">
                                            <span>-10% <span class="sale-text">Sale</span></span>
                                            <div class="countdown-circle">
                                                <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a>
                                    <a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active">
                                        <a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
                                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-1.webp" class="lazyload fade-up" alt="Color Name" />
                                        </a>
                                    </li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp">
                                        <a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
                                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-2.webp" class="lazyload fade-up" alt="Color Name" />
                                        </a>
                                    </li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp">
                                        <a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
                                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-3.webp" class="lazyload fade-up" alt="Color Name" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating">
                                            <i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
                                        </div>
                                    </div>
                                    <div class="prd-rating justify-content-center">
                                        <i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag"><a href="{{route('product.details',['slug'=>$product->slug])}}">{{ $product->name}}</a></div>
                                    <h2 class="prd-title"><a href="{{route('product.details',['slug'=>$product->slug])}}">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="#">
                                            {{-- <button class="btn js-prd-addtocart" data-product='{ "name": "Oversized Cotton Blouse", "path":"images/skins/fashion/products/product-03-1.webp", "url":"#", "aspect_ratio:0.778"}' wire:click.prevent="store({{$product->id,'{{$product->name}}'}},{{$product->regular_price}})">
                                                Add To Cart
                                            </button> --}}
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div>
                                            <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a>
                                            <a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                        </div>
                                        <div class="prd-hide-mobile">
                                            <a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                                        </div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-old">$ {{$product->regular_price}}</div>
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="#">
                                                <button class="btn js-prd-addtocart" data-product='{"name": "Oversized Cotton Blouse", "path":"images/skins/fashion/products/product-03-1.webp", "url":"product.html", "aspect_ratio":0.778}'>
                                                    Add To Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>