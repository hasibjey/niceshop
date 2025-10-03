<x-frontend.layouts.app>
    <x-slot name="title">Category</x-slot>

    <section>
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Category</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Category</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Product Categories Widget -->
                        <div class="product-categories-widget widget-item">

                            <h3 class="widget-title">Categories</h3>

                            <ul class="category-tree list-unstyled mb-0">
                                <!-- Clothing Category -->
                                <li class="category-item">
                                    <div class="d-flex justify-content-between align-items-center category-header collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#categories-1-clothing-subcategories"
                                        aria-expanded="false" aria-controls="categories-1-clothing-subcategories">
                                        <a href="javascript:void(0)" class="category-link">Clothing</a>
                                        <span class="category-toggle">
                                            <i class="bi bi-chevron-down"></i>
                                            <i class="bi bi-chevron-up"></i>
                                        </span>
                                    </div>
                                    <ul id="categories-1-clothing-subcategories"
                                        class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                        <li><a href="#" class="subcategory-link">Men's Wear</a></li>
                                        <li><a href="#" class="subcategory-link">Women's Wear</a></li>
                                        <li><a href="#" class="subcategory-link">Kids' Clothing</a></li>
                                        <li><a href="#" class="subcategory-link">Accessories</a></li>
                                    </ul>
                                </li>

                                <!-- Electronics Category -->
                                <li class="category-item">
                                    <div class="d-flex justify-content-between align-items-center category-header collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#categories-1-electronics-subcategories" aria-expanded="false"
                                        aria-controls="categories-1-electronics-subcategories">
                                        <a href="javascript:void(0)" class="category-link">Electronics</a>
                                        <span class="category-toggle">
                                            <i class="bi bi-chevron-down"></i>
                                            <i class="bi bi-chevron-up"></i>
                                        </span>
                                    </div>
                                    <ul id="categories-1-electronics-subcategories"
                                        class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                        <li><a href="#" class="subcategory-link">Smartphones</a></li>
                                        <li><a href="#" class="subcategory-link">Laptops</a></li>
                                        <li><a href="#" class="subcategory-link">Tablets</a></li>
                                        <li><a href="#" class="subcategory-link">Accessories</a></li>
                                    </ul>
                                </li>

                                <!-- Home & Kitchen Category -->
                                <li class="category-item">
                                    <div class="d-flex justify-content-between align-items-center category-header collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#categories-1-home-subcategories"
                                        aria-expanded="false" aria-controls="categories-1-home-subcategories">
                                        <a href="javascript:void(0)" class="category-link">Home &amp; Kitchen</a>
                                        <span class="category-toggle">
                                            <i class="bi bi-chevron-down"></i>
                                            <i class="bi bi-chevron-up"></i>
                                        </span>
                                    </div>
                                    <ul id="categories-1-home-subcategories"
                                        class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                        <li><a href="#" class="subcategory-link">Furniture</a></li>
                                        <li><a href="#" class="subcategory-link">Kitchen Appliances</a></li>
                                        <li><a href="#" class="subcategory-link">Home Decor</a></li>
                                        <li><a href="#" class="subcategory-link">Bedding</a></li>
                                    </ul>
                                </li>

                                <!-- Beauty & Personal Care Category -->
                                <li class="category-item">
                                    <div class="d-flex justify-content-between align-items-center category-header collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#categories-1-beauty-subcategories"
                                        aria-expanded="false" aria-controls="categories-1-beauty-subcategories">
                                        <a href="javascript:void(0)" class="category-link">Beauty &amp; Personal
                                            Care</a>
                                        <span class="category-toggle">
                                            <i class="bi bi-chevron-down"></i>
                                            <i class="bi bi-chevron-up"></i>
                                        </span>
                                    </div>
                                    <ul id="categories-1-beauty-subcategories"
                                        class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                        <li><a href="#" class="subcategory-link">Skincare</a></li>
                                        <li><a href="#" class="subcategory-link">Makeup</a></li>
                                        <li><a href="#" class="subcategory-link">Hair Care</a></li>
                                        <li><a href="#" class="subcategory-link">Fragrances</a></li>
                                    </ul>
                                </li>

                                <!-- Sports & Outdoors Category -->
                                <li class="category-item">
                                    <div class="d-flex justify-content-between align-items-center category-header collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#categories-1-sports-subcategories"
                                        aria-expanded="false" aria-controls="categories-1-sports-subcategories">
                                        <a href="javascript:void(0)" class="category-link">Sports &amp; Outdoors</a>
                                        <span class="category-toggle">
                                            <i class="bi bi-chevron-down"></i>
                                            <i class="bi bi-chevron-up"></i>
                                        </span>
                                    </div>
                                    <ul id="categories-1-sports-subcategories"
                                        class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                        <li><a href="#" class="subcategory-link">Fitness Equipment</a></li>
                                        <li><a href="#" class="subcategory-link">Outdoor Gear</a></li>
                                        <li><a href="#" class="subcategory-link">Sports Apparel</a></li>
                                        <li><a href="#" class="subcategory-link">Team Sports</a></li>
                                    </ul>
                                </li>

                                <!-- Books Category (no subcategories) -->
                                <li class="category-item">
                                    <div class="d-flex justify-content-between align-items-center category-header">
                                        <a href="#" class="category-link">Books</a>
                                    </div>
                                </li>

                                <!-- Toys & Games Category -->
                                <li class="category-item">
                                    <div class="d-flex justify-content-between align-items-center category-header collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#categories-1-toys-subcategories"
                                        aria-expanded="false" aria-controls="categories-1-toys-subcategories">
                                        <a href="javascript:void(0)" class="category-link">Toys &amp; Games</a>
                                        <span class="category-toggle">
                                            <i class="bi bi-chevron-down"></i>
                                            <i class="bi bi-chevron-up"></i>
                                        </span>
                                    </div>
                                    <ul id="categories-1-toys-subcategories"
                                        class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                        <li><a href="#" class="subcategory-link">Board Games</a></li>
                                        <li><a href="#" class="subcategory-link">Puzzles</a></li>
                                        <li><a href="#" class="subcategory-link">Action Figures</a></li>
                                        <li><a href="#" class="subcategory-link">Educational Toys</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div><!--/Product Categories Widget -->

                        <!-- Pricing Range Widget -->
                        <div class="pricing-range-widget widget-item">

                            <h3 class="widget-title">Price Range</h3>

                            <div class="price-range-container">
                                <div class="current-range mb-3">
                                    <span class="min-price">$0</span>
                                    <span class="max-price float-end">$1000</span>
                                </div>

                                <div class="range-slider">
                                    <div class="slider-track"></div>
                                    <div class="slider-progress"></div>
                                    <input type="range" class="min-range" min="0" max="1000"
                                        value="0" step="10">
                                    <input type="range" class="max-range" min="0" max="1000"
                                        value="500" step="10">
                                </div>

                                <div class="price-inputs mt-3">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text">$</span>
                                                <input type="number" class="form-control min-price-input"
                                                    placeholder="Min" min="0" max="1000" value="0"
                                                    step="10">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text">$</span>
                                                <input type="number" class="form-control max-price-input"
                                                    placeholder="Max" min="0" max="1000" value="500"
                                                    step="10">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-actions mt-3">
                                    <button type="button" class="btn btn-sm btn-primary w-100">Apply Filter</button>
                                </div>
                            </div>

                        </div><!--/Pricing Range Widget -->

                        <!-- Brand Filter Widget -->
                        <h3 class="brand-filter-widget widget-item">Filter by Brand</h3><!--/Brand Filter Widget -->

                        <!-- Color Filter Widget -->
                        <div class="color-filter-widget widget-item">

                            <h3 class="widget-title">Filter by Color</h3>

                            <div class="color-filter-content">
                                <div class="color-options">
                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="black"
                                            id="color-black">
                                        <label class="form-check-label" for="color-black">
                                            <span class="color-swatch" style="background-color: #000000;"
                                                title="Black"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="white"
                                            id="color-white">
                                        <label class="form-check-label" for="color-white">
                                            <span class="color-swatch" style="background-color: #ffffff;"
                                                title="White"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="red"
                                            id="color-red">
                                        <label class="form-check-label" for="color-red">
                                            <span class="color-swatch" style="background-color: #e74c3c;"
                                                title="Red"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="blue"
                                            id="color-blue">
                                        <label class="form-check-label" for="color-blue">
                                            <span class="color-swatch" style="background-color: #3498db;"
                                                title="Blue"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="green"
                                            id="color-green">
                                        <label class="form-check-label" for="color-green">
                                            <span class="color-swatch" style="background-color: #2ecc71;"
                                                title="Green"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="yellow"
                                            id="color-yellow">
                                        <label class="form-check-label" for="color-yellow">
                                            <span class="color-swatch" style="background-color: #f1c40f;"
                                                title="Yellow"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="purple"
                                            id="color-purple">
                                        <label class="form-check-label" for="color-purple">
                                            <span class="color-swatch" style="background-color: #9b59b6;"
                                                title="Purple"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="orange"
                                            id="color-orange">
                                        <label class="form-check-label" for="color-orange">
                                            <span class="color-swatch" style="background-color: #e67e22;"
                                                title="Orange"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="pink"
                                            id="color-pink">
                                        <label class="form-check-label" for="color-pink">
                                            <span class="color-swatch" style="background-color: #fd79a8;"
                                                title="Pink"></span>
                                        </label>
                                    </div>

                                    <div class="form-check color-option">
                                        <input class="form-check-input" type="checkbox" value="brown"
                                            id="color-brown">
                                        <label class="form-check-label" for="color-brown">
                                            <span class="color-swatch" style="background-color: #795548;"
                                                title="Brown"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="filter-actions mt-3">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Clear All</button>
                                    <button type="button" class="btn btn-sm btn-primary">Apply Filter</button>
                                </div>
                            </div>

                        </div><!--/Color Filter Widget -->

                        <!-- Brand Filter Widget -->
                        <div class="brand-filter-widget widget-item">

                            <h3 class="widget-title">Filter by Brand</h3>

                            <div class="brand-filter-content">
                                <div class="brand-search">
                                    <input type="text" class="form-control" placeholder="Search brands...">
                                    <i class="bi bi-search"></i>
                                </div>

                                <div class="brand-list">
                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand1">
                                            <label class="form-check-label" for="brand1">
                                                Nike
                                                <span class="brand-count">(24)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand2">
                                            <label class="form-check-label" for="brand2">
                                                Adidas
                                                <span class="brand-count">(18)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand3">
                                            <label class="form-check-label" for="brand3">
                                                Puma
                                                <span class="brand-count">(12)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand4">
                                            <label class="form-check-label" for="brand4">
                                                Reebok
                                                <span class="brand-count">(9)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand5">
                                            <label class="form-check-label" for="brand5">
                                                Under Armour
                                                <span class="brand-count">(7)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand6">
                                            <label class="form-check-label" for="brand6">
                                                New Balance
                                                <span class="brand-count">(6)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand7">
                                            <label class="form-check-label" for="brand7">
                                                Converse
                                                <span class="brand-count">(5)</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="brand-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand8">
                                            <label class="form-check-label" for="brand8">
                                                Vans
                                                <span class="brand-count">(4)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="brand-actions">
                                    <button class="btn btn-sm btn-outline-primary">Apply Filter</button>
                                    <button class="btn btn-sm btn-link">Clear All</button>
                                </div>
                            </div>

                        </div><!--/Brand Filter Widget -->

                    </div>

                </div>

                <div class="col-lg-8">

                    <!-- Category Header Section -->
                    <section id="category-header" class="category-header section">

                        <div class="container" data-aos="fade-up">

                            <!-- Filter and Sort Options -->
                            <div class="filter-container mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="filter-item search-form">
                                            <label for="productSearch" class="form-label">Search Products</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="productSearch"
                                                    placeholder="Search for products..."
                                                    aria-label="Search for products">
                                                <button class="btn search-btn" type="button">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="filter-item">
                                            <label for="priceRange" class="form-label">Price Range</label>
                                            <select class="form-select" id="priceRange">
                                                <option selected="">All Prices</option>
                                                <option>Under $25</option>
                                                <option>$25 to $50</option>
                                                <option>$50 to $100</option>
                                                <option>$100 to $200</option>
                                                <option>$200 &amp; Above</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="filter-item">
                                            <label for="sortBy" class="form-label">Sort By</label>
                                            <select class="form-select" id="sortBy">
                                                <option selected="">Featured</option>
                                                <option>Price: Low to High</option>
                                                <option>Price: High to Low</option>
                                                <option>Customer Rating</option>
                                                <option>Newest Arrivals</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="filter-item">
                                            <label class="form-label">View</label>
                                            <div class="d-flex align-items-center">
                                                <div class="view-options me-3">
                                                    <button type="button" class="btn view-btn active"
                                                        data-view="grid" aria-label="Grid view">
                                                        <i class="bi bi-grid-3x3-gap-fill"></i>
                                                    </button>
                                                    <button type="button" class="btn view-btn" data-view="list"
                                                        aria-label="List view">
                                                        <i class="bi bi-list-ul"></i>
                                                    </button>
                                                </div>
                                                <div class="items-per-page">
                                                    <select class="form-select" id="itemsPerPage"
                                                        aria-label="Items per page">
                                                        <option value="12">12 per page</option>
                                                        <option value="24">24 per page</option>
                                                        <option value="48">48 per page</option>
                                                        <option value="96">96 per page</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                                        <div class="active-filters">
                                            <span class="active-filter-label">Active Filters:</span>
                                            <div class="filter-tags">
                                                <span class="filter-tag">
                                                    Electronics <button class="filter-remove"><i
                                                            class="bi bi-x"></i></button>
                                                </span>
                                                <span class="filter-tag">
                                                    $50 to $100 <button class="filter-remove"><i
                                                            class="bi bi-x"></i></button>
                                                </span>
                                                <button class="clear-all-btn">Clear All</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </section><!-- /Category Header Section -->

                    <!-- Category Product List Section -->
                    <section id="category-product-list" class="category-product-list section">

                        <div class="container" data-aos="fade-up" data-aos-delay="100">

                            <div class="row g-4">
                                <!-- Product 1 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-f-1.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-f-2.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Women's Fashion</div>
                                            <h4 class="product-title"><a href="product-details.html">Tempor
                                                    Incididunt</a></h4>
                                            <div class="product-meta">
                                                <div class="product-price">$129.00</div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.8 <span>(42)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-m-1.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-m-2.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-badge new">New</div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Men's Collection</div>
                                            <h4 class="product-title"><a href="product-details.html">Elit
                                                    Consectetur</a></h4>
                                            <div class="product-meta">
                                                <div class="product-price">$95.00</div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.6 <span>(28)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 3 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in" data-aos-delay="200">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-f-3.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-f-4.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-badge sale">-25%</div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Accessories</div>
                                            <h4 class="product-title"><a href="product-details.html">Adipiscing
                                                    Magna</a></h4>
                                            <div class="product-meta">
                                                <div class="product-price">
                                                    $75.00
                                                    <span class="original-price">$99.00</span>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.9 <span>(56)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 4 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in" data-aos-delay="300">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-m-3.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-m-4.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Footwear</div>
                                            <h4 class="product-title"><a href="product-details.html">Labore Dolore</a>
                                            </h4>
                                            <div class="product-meta">
                                                <div class="product-price">$145.00</div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.7 <span>(35)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 5 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in" data-aos-delay="400">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-f-5.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-f-6.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Men's Fashion</div>
                                            <h4 class="product-title"><a href="product-details.html">Magna Aliqua</a>
                                            </h4>
                                            <div class="product-meta">
                                                <div class="product-price">$89.00</div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.5 <span>(23)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 6 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in" data-aos-delay="500">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-m-5.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-m-6.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-badge sale">-15%</div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Women's Fashion</div>
                                            <h4 class="product-title"><a href="product-details.html">Eiusmod
                                                    Tempor</a></h4>
                                            <div class="product-meta">
                                                <div class="product-price">
                                                    $110.00
                                                    <span class="original-price">$129.00</span>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.8 <span>(47)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 7 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in" data-aos-delay="600">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-f-7.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-f-8.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Accessories</div>
                                            <h4 class="product-title"><a href="product-details.html">Incididunt
                                                    Labore</a></h4>
                                            <div class="product-meta">
                                                <div class="product-price">$55.00</div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.6 <span>(31)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 8 -->
                                <div class="col-6 col-xl-4">
                                    <div class="product-card" data-aos="zoom-in" data-aos-delay="700">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-m-7.webp') }}"
                                                class="main-image img-fluid" alt="Product">
                                            <img src="{{ asset('img/product/product-m-8.webp') }}"
                                                class="hover-image img-fluid" alt="Product Variant">
                                            <div class="product-overlay">
                                                <div class="product-actions">
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Quick View">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="action-btn"
                                                        data-bs-toggle="tooltip" title="Add to Cart">
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-badge new">New</div>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-category">Men's Fashion</div>
                                            <h4 class="product-title"><a href="product-details.html">Aliqua Magna</a>
                                            </h4>
                                            <div class="product-meta">
                                                <div class="product-price">$79.00</div>
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    4.7 <span>(39)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </section><!-- /Category Product List Section -->

                    <!-- Category Pagination Section -->
                    <section id="category-pagination" class="category-pagination section">

                        <div class="container">
                            <nav class="d-flex justify-content-center" aria-label="Page navigation">
                                <ul>
                                    <li>
                                        <a href="#" aria-label="Previous page">
                                            <i class="bi bi-arrow-left"></i>
                                            <span class="d-none d-sm-inline">Previous</span>
                                        </a>
                                    </li>

                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="ellipsis">...</li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">9</a></li>
                                    <li><a href="#">10</a></li>

                                    <li>
                                        <a href="#" aria-label="Next page">
                                            <span class="d-none d-sm-inline">Next</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </section><!-- /Category Pagination Section -->

                </div>

            </div>
        </div>
    </section>
</x-frontend.layouts.app>
