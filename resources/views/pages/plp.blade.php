    @extends('layouts.app-public')
    @section('title', 'Shop')
    @section('content')
    <div class="site-wrapper-reveal">
        <!-- Product Area Start -->
        <div class="product-wrapper section-space--ptb_90 border-bottom pb-5 mb-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-3 order-md-1 order-2 small-mt__40">
                        <div class="shop-widget widget-shop-styles mt-3">
                            <div class="product-filter">
                                <h6 class="mb-20">Product</h6>
                                <select class="_filter form-select form-select-sm" name="_style" onchange="getData()">
                                    <option value="" selected>Filter</option>
                                    <option value="Artistic Line">Artistic Line</option>
                                    <option value="Basic Line">Basic Line</option>
                                    <option value="Collaboration Line">Collaboration Line</option>
                                    <option value="Mousepad">Mousepad</option>
                                    <option value="Mini Scrollworks">Mini Scrollworks</option>
                                    <option value="Styles">Styles</option>
                                </select>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="shop-widget widget-color">
                            <div class="product-filter">
                                <h6 class="mb-20">Availability</h6>
                                <ul class="widget-nav-list">
                                    <li><a href="#">In Stock</a></li>
                                    <li><a href="#">Out of stock</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="shop-widget">
                            <div class="product-filter widget-price">
                                <h6 class="mb-20">Price</h6>
                                <ul class="widget-nav-list">
                                    <li><a href="#">Under IDR 100K</a></li>
                                    <li><a href="#">IDR 100-500K</a></li>
                                    <li><a href="#">IDR 501-1000K</a></li>
                                    <li><a href="#">Above IDR 1000K</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Filter -->

                        <div class="shop-widget">
                            <div class="product-filter">
                                <h6 class="mb-20">Tags</h6>
                                <div class="blog-tagcloud">
                                    <a href="#" class="selected">Desk</a>
                                    <a href="#">Tenjin</a>
                                    <a href="#">Scrollworks</a>
                                    <a href="#">Mousepad</a>
                                    <a href="#">Deskmat</a>
                                    <a href="#">Byakko</a>
                                    <a href="#">Kisetsu</a>
                                    <a href="#">Raijuu</a>
                                    <a href="#">Kikko</a>
                                    <a href="#">Asanoha</a>
                                    <a href="#">Kamon</a>
                                    <a href="#">Tengaiha</a>
                                    <a href="#">Kunai</a>
                                    <a href="#">Kansha</a>
                                    <a href="#">Raijin</a>
                                    <a href="#">Faith</a>
                                    <a href="#">Iso</a>
                                    <a href="#">Sapphire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 order-md-2 order-1">
                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-8">
                                <div class="shop-toolbar__items shop-toolbar__item--left">
                                    <div class="shop-toolbar__item shop-toolbar__item--result">
                                        <p class="result-count"> 
                                            Showing <span id="products_count_start"></span>–<span id="products_count_end"></span> 
                                            of <span id="products_count_total"></span>
                                        </p>
                                    </div>
                                    <div class="shop-toolbar__item">
                                        <select class="_filter form-select form-select-sm" name="_sort_by" onchange="getData()">
                                            <option value="title_asc">Sort by A-Z</option>
                                            <option value="title_desc">Sort by Z-A</option>
                                            <option value="latest_publication">Sort by latest</option>
                                            <option value="latest_added">Sort by time added</option>
                                            <option value="price_asc">Sort by price: low to high</option>
                                            <option value="price_desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4">
                                <div class="header-right-search">
                                    <div class="header-search-box">
                                        <input class="_filter search-field" name="_search" type="text" 
                                            onkeypress="getDataOnEnter(event)"
                                            placeholder="Search by product...">
                                        <button class="search-icon"><i class="icon-magnifier"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row" id="product-list"></div>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="page-pagination text-center mt-40" id="product-list-pagination"></ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Product Area End -->
    </div>
    @endsection

    @section('addition_css')
    @endsection

    @section('addition_script')
    <script src="{{ asset('pages/js/plp.js') }}"></script>
    @endsection
