<x-frontend.layouts.app>
    <x-slot name="title">Home</x-slot>


    <section>
        <!-- Hero Section -->
        <x-frontend.layouts.hero />
        <!-- /Hero Section -->

        <!-- Promo Cards Section -->
        <x-frontend.layouts.promo />
        <!-- /Promo Cards Section -->

        <!-- Best Sellers Section -->
        <section id="best-sellers" class="best-sellers section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Best Sellers</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <!-- Product 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item">
                            <div class="product-image">
                                <div class="product-badge">Limited</div>
                                <img src="{{ asset('/img/product/product-1.webp') }}" alt="Product Image"
                                    class="img-fluid" loading="lazy">
                                <div class="product-actions">
                                    <button class="action-btn wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <button class="action-btn compare-btn">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </button>
                                    <button class="action-btn quickview-btn">
                                        <i class="bi bi-zoom-in"></i>
                                    </button>
                                </div>
                                <button class="cart-btn">Select Options</button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Premium Collection</div>
                                <h4 class="product-name"><a href="product-details.html">Mauris blandit aliquet elit</a>
                                </h4>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <span class="rating-count">(24)</span>
                                </div>
                                <div class="product-price">$189.00</div>
                                <div class="color-swatches">
                                    <span class="swatch active" style="background-color: #2563eb;"></span>
                                    <span class="swatch" style="background-color: #059669;"></span>
                                    <span class="swatch" style="background-color: #dc2626;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product 1 -->

                    <!-- Product 2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item">
                            <div class="product-image">
                                <div class="product-badge sale-badge">25% Off</div>
                                <img src="{{ asset('/img/product/product-4.webp') }}" alt="Product Image"
                                    class="img-fluid" loading="lazy">
                                <div class="product-actions">
                                    <button class="action-btn wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <button class="action-btn compare-btn">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </button>
                                    <button class="action-btn quickview-btn">
                                        <i class="bi bi-zoom-in"></i>
                                    </button>
                                </div>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Best Sellers</div>
                                <h4 class="product-name"><a href="product-details.html">Sed do eiusmod tempor
                                        incididunt</a></h4>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <span class="rating-count">(38)</span>
                                </div>
                                <div class="product-price">
                                    <span class="old-price">$240.00</span>
                                    <span class="current-price">$180.00</span>
                                </div>
                                <div class="color-swatches">
                                    <span class="swatch active" style="background-color: #1f2937;"></span>
                                    <span class="swatch" style="background-color: #f59e0b;"></span>
                                    <span class="swatch" style="background-color: #8b5cf6;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product 2 -->

                    <!-- Product 3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item">
                            <div class="product-image">
                                <img src="{{ asset('/img/product/product-7.webp') }}" alt="Product Image"
                                    class="img-fluid" loading="lazy">
                                <div class="product-actions">
                                    <button class="action-btn wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <button class="action-btn compare-btn">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </button>
                                    <button class="action-btn quickview-btn">
                                        <i class="bi bi-zoom-in"></i>
                                    </button>
                                </div>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">New Arrivals</div>
                                <h4 class="product-name"><a href="product-details.html">Lorem ipsum dolor sit amet
                                        consectetur</a></h4>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <span class="rating-count">(12)</span>
                                </div>
                                <div class="product-price">$95.00</div>
                                <div class="color-swatches">
                                    <span class="swatch active" style="background-color: #ef4444;"></span>
                                    <span class="swatch" style="background-color: #06b6d4;"></span>
                                    <span class="swatch" style="background-color: #10b981;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product 3 -->

                    <!-- Product 4 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item">
                            <div class="product-image">
                                <div class="product-badge trending-badge">Trending</div>
                                <img src="{{ asset('/img/product/product-10.webp') }}" alt="Product Image"
                                    class="img-fluid" loading="lazy">
                                <div class="product-actions">
                                    <button class="action-btn wishlist-btn active">
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                    <button class="action-btn compare-btn">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </button>
                                    <button class="action-btn quickview-btn">
                                        <i class="bi bi-zoom-in"></i>
                                    </button>
                                </div>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Designer Series</div>
                                <h4 class="product-name"><a href="product-details.html">Ut enim ad minim veniam
                                        quis</a></h4>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="rating-count">(56)</span>
                                </div>
                                <div class="product-price">$165.00</div>
                                <div class="color-swatches">
                                    <span class="swatch" style="background-color: #64748b;"></span>
                                    <span class="swatch active" style="background-color: #7c3aed;"></span>
                                    <span class="swatch" style="background-color: #f59e0b;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product 4 -->

                </div>

            </div>

        </section><!-- /Best Sellers Section -->

        <!-- Cards Section -->
        <section id="cards" class="cards section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-category">
                            <h3 class="category-title">
                                <i class="bi bi-fire"></i> Trending Now
                            </h3>
                            <div class="product-list">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-1.webp') }}"
                                            alt="Premium Leather Tote" class="img-fluid">
                                        <div class="product-badges">
                                            <span class="badge-new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Premium Leather Tote</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                            <span>(24)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$87.50</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-3.webp') }}" alt="Statement Earrings"
                                            class="img-fluid">
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Statement Earrings</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span>(41)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$39.99</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-5.webp') }}"
                                            alt="Organic Cotton Shirt" class="img-fluid">
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Organic Cotton Shirt</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                            <span>(18)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-category">
                            <h3 class="category-title">
                                <i class="bi bi-award"></i> Best Sellers
                            </h3>
                            <div class="product-list">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-2.webp') }}" alt="Slim Fit Denim"
                                            class="img-fluid">
                                        <div class="product-badges">
                                            <span class="badge-sale">-15%</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Slim Fit Denim</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span>(87)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$68.00</span>
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-6.webp') }}" alt="Designer Handbag"
                                            class="img-fluid">
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Designer Handbag</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                            <span>(56)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$129.99</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-8.webp') }}" alt="Leather Crossbody"
                                            class="img-fluid">
                                        <div class="product-badges">
                                            <span class="badge-hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Leather Crossbody</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span>(112)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$95.50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-category">
                            <h3 class="category-title">
                                <i class="bi bi-star"></i> Featured Items
                            </h3>
                            <div class="product-list">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-7.webp') }}"
                                            alt="Pleated Midi Skirt" class="img-fluid">
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Pleated Midi Skirt</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                            <span>(32)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$75.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-4.webp') }}"
                                            alt="Geometric Earrings" class="img-fluid">
                                        <div class="product-badges">
                                            <span class="badge-limited">Limited</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Geometric Earrings</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                            <span>(47)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$42.99</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="{{ asset('/img/product/product-9.webp') }}"
                                            alt="Structured Satchel" class="img-fluid">
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-name">Structured Satchel</h4>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span>(64)</span>
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">$89.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Cards Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="main-content text-center" data-aos="zoom-in" data-aos-delay="200">
                            <div class="offer-badge" data-aos="fade-down" data-aos-delay="250">
                                <span class="limited-time">Limited Time</span>
                                <span class="offer-text">50% OFF</span>
                            </div>

                            <h2 data-aos="fade-up" data-aos-delay="300">Exclusive Flash Sale</h2>

                            <p class="subtitle" data-aos="fade-up" data-aos-delay="350">Don't miss out on our biggest
                                sale of the year. Premium quality products at unbeatable prices for the next 48 hours
                                only.</p>

                            <div class="countdown-wrapper" data-aos="fade-up" data-aos-delay="400">
                                <div class="countdown d-flex justify-content-center" data-count="2025/12/31">
                                    <div>
                                        <h3 class="count-days"></h3>
                                        <h4>Days</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-hours"></h3>
                                        <h4>Hours</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-minutes"></h3>
                                        <h4>Minutes</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-seconds"></h3>
                                        <h4>Seconds</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="action-buttons" data-aos="fade-up" data-aos-delay="450">
                                <a href="#" class="btn-shop-now">Shop Now</a>
                                <a href="#" class="btn-view-deals">View All Deals</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row featured-products-row" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="product-showcase">
                            <div class="product-image">
                                <img src="{{ asset('/img/product/product-5.webp') }}" alt="Featured Product"
                                    class="img-fluid">
                                <div class="discount-badge">-45%</div>
                            </div>
                            <div class="product-details">
                                <h6>Premium Wireless Headphones</h6>
                                <div class="price-section">
                                    <span class="original-price">$129</span>
                                    <span class="sale-price">$71</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-count">(324)</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Product Showcase -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="150">
                        <div class="product-showcase">
                            <div class="product-image">
                                <img src="{{ asset('/img/product/product-7.webp') }}" alt="Featured Product"
                                    class="img-fluid">
                                <div class="discount-badge">-60%</div>
                            </div>
                            <div class="product-details">
                                <h6>Smart Fitness Tracker</h6>
                                <div class="price-section">
                                    <span class="original-price">$89</span>
                                    <span class="sale-price">$36</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <span class="rating-count">(198)</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Product Showcase -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="product-showcase">
                            <div class="product-image">
                                <img src="{{ asset('/img/product/product-11.webp') }}" alt="Featured Product"
                                    class="img-fluid">
                                <div class="discount-badge">-35%</div>
                            </div>
                            <div class="product-details">
                                <h6>Luxury Travel Backpack</h6>
                                <div class="price-section">
                                    <span class="original-price">$159</span>
                                    <span class="sale-price">$103</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-count">(267)</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Product Showcase -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="250">
                        <div class="product-showcase">
                            <div class="product-image">
                                <img src="{{ asset('/img/product/product-1.webp') }}" alt="Featured Product"
                                    class="img-fluid">
                                <div class="discount-badge">-55%</div>
                            </div>
                            <div class="product-details">
                                <h6>Artisan Coffee Mug Set</h6>
                                <div class="price-section">
                                    <span class="original-price">$75</span>
                                    <span class="sale-price">$34</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <span class="rating-count">(142)</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Product Showcase -->
                </div>

            </div>

        </section>
    </section>
</x-frontend.layouts.app>
