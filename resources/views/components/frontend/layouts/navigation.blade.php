<div class="header-nav">
    <div class="container-fluid container-xl position-relative">
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('category') }}">Category</a></li>
                <li><a href="{{ route('product.details') }}">Product Details</a></li>
                <li><a href="{{ route('cart') }}">Cart</a></li>
                <li><a href="{{ route('checkout') }}">Checkout</a></li>


                <!-- Products Mega Menu 1 -->
                <li class="products-megamenu-1"><a href="#"><span>Smart Products</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>

                    <!-- Products Mega Menu 1 Mobile View -->
                    <ul class="mobile-megamenu">

                        <li><a href="#">Featured Products</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Sale Items</a></li>

                        <li class="dropdown"><a href="#"><span>Clothing</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Men's Wear</a></li>
                                <li><a href="#">Women's Wear</a></li>
                                <li><a href="#">Kids Collection</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Electronics</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Audio Devices</a></li>
                                <li><a href="#">Smart Home</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Home &amp; Living</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Furniture</a></li>
                                <li><a href="#">Decor</a></li>
                                <li><a href="#">Kitchen</a></li>
                                <li><a href="#">Bedding</a></li>
                                <li><a href="#">Lighting</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Beauty</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Skincare</a></li>
                                <li><a href="#">Makeup</a></li>
                                <li><a href="#">Haircare</a></li>
                                <li><a href="#">Fragrances</a></li>
                                <li><a href="#">Personal Care</a></li>
                            </ul>
                        </li>

                    </ul><!-- End Products Mega Menu 1 Mobile View -->

                    <!-- Products Mega Menu 1 Desktop View -->
                    <div class="desktop-megamenu">

                        <div class="megamenu-tabs">
                            <ul class="nav nav-tabs" id="productMegaMenuTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="featured-tab" data-bs-toggle="tab"
                                        data-bs-target="#featured-content-1862" type="button" aria-selected="true"
                                        role="tab">Featured</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="new-tab" data-bs-toggle="tab"
                                        data-bs-target="#new-content-1862" type="button" aria-selected="false"
                                        tabindex="-1" role="tab">New Arrivals</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="sale-tab" data-bs-toggle="tab"
                                        data-bs-target="#sale-content-1862" type="button" aria-selected="false"
                                        tabindex="-1" role="tab">Sale</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="category-tab" data-bs-toggle="tab"
                                        data-bs-target="#category-content-1862" type="button" aria-selected="false"
                                        tabindex="-1" role="tab">Categories</button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tabs Content -->
                        <div class="megamenu-content tab-content">

                            <!-- Featured Tab -->
                            <div class="tab-pane fade show active" id="featured-content-1862" role="tabpanel"
                                aria-labelledby="featured-tab">
                                <div class="product-grid">
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-1.webp') }}" alt="Featured Product"
                                                loading="lazy">
                                        </div>
                                        <div class="product-info">
                                            <h5>Premium Headphones</h5>
                                            <p class="price">$129.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-2.webp') }}" alt="Featured Product"
                                                loading="lazy">
                                        </div>
                                        <div class="product-info">
                                            <h5>Smart Watch</h5>
                                            <p class="price">$199.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-3.webp') }}" alt="Featured Product"
                                                loading="lazy">
                                        </div>
                                        <div class="product-info">
                                            <h5>Wireless Earbuds</h5>
                                            <p class="price">$89.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-4.webp') }}" alt="Featured Product"
                                                loading="lazy">
                                        </div>
                                        <div class="product-info">
                                            <h5>Bluetooth Speaker</h5>
                                            <p class="price">$79.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- New Arrivals Tab -->
                            <div class="tab-pane fade" id="new-content-1862" role="tabpanel"
                                aria-labelledby="new-tab">
                                <div class="product-grid">
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-5.webp') }}" alt="New Arrival"
                                                loading="lazy">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>Fitness Tracker</h5>
                                            <p class="price">$69.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-6.webp') }}" alt="New Arrival"
                                                loading="lazy">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>Wireless Charger</h5>
                                            <p class="price">$39.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-7.webp') }}" alt="New Arrival"
                                                loading="lazy">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>Smart Bulb Set</h5>
                                            <p class="price">$49.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-8.webp') }}" alt="New Arrival"
                                                loading="lazy">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>Portable Power Bank</h5>
                                            <p class="price">$59.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sale Tab -->
                            <div class="tab-pane fade" id="sale-content-1862" role="tabpanel"
                                aria-labelledby="sale-tab">
                                <div class="product-grid">
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-9.webp') }}" alt="Sale Product"
                                                loading="lazy">
                                            <span class="badge-sale">-30%</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>Wireless Keyboard</h5>
                                            <p class="price"><span class="original-price">$89.99</span> $62.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-10.webp') }}" alt="Sale Product"
                                                loading="lazy">
                                            <span class="badge-sale">-25%</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>Gaming Mouse</h5>
                                            <p class="price"><span class="original-price">$59.99</span> $44.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-11.webp') }}" alt="Sale Product"
                                                loading="lazy">
                                            <span class="badge-sale">-40%</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>Desk Lamp</h5>
                                            <p class="price"><span class="original-price">$49.99</span> $29.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('img/product/product-12.webp') }}" alt="Sale Product"
                                                loading="lazy">
                                            <span class="badge-sale">-20%</span>
                                        </div>
                                        <div class="product-info">
                                            <h5>USB-C Hub</h5>
                                            <p class="price"><span class="original-price">$39.99</span> $31.99</p>
                                            <a href="#" class="btn-view">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Categories Tab -->
                            <div class="tab-pane fade" id="category-content-1862" role="tabpanel"
                                aria-labelledby="category-tab">
                                <div class="category-grid">
                                    <div class="category-column">
                                        <h4>Clothing</h4>
                                        <ul>
                                            <li><a href="#">Men's Wear</a></li>
                                            <li><a href="#">Women's Wear</a></li>
                                            <li><a href="#">Kids Collection</a></li>
                                            <li><a href="#">Sportswear</a></li>
                                            <li><a href="#">Accessories</a></li>
                                        </ul>
                                    </div>
                                    <div class="category-column">
                                        <h4>Electronics</h4>
                                        <ul>
                                            <li><a href="#">Smartphones</a></li>
                                            <li><a href="#">Laptops</a></li>
                                            <li><a href="#">Audio Devices</a></li>
                                            <li><a href="#">Smart Home</a></li>
                                            <li><a href="#">Accessories</a></li>
                                        </ul>
                                    </div>
                                    <div class="category-column">
                                        <h4>Home &amp; Living</h4>
                                        <ul>
                                            <li><a href="#">Furniture</a></li>
                                            <li><a href="#">Decor</a></li>
                                            <li><a href="#">Kitchen</a></li>
                                            <li><a href="#">Bedding</a></li>
                                            <li><a href="#">Lighting</a></li>
                                        </ul>
                                    </div>
                                    <div class="category-column">
                                        <h4>Beauty</h4>
                                        <ul>
                                            <li><a href="#">Skincare</a></li>
                                            <li><a href="#">Makeup</a></li>
                                            <li><a href="#">Haircare</a></li>
                                            <li><a href="#">Fragrances</a></li>
                                            <li><a href="#">Personal Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!-- End Products Mega Menu 1 Desktop View -->

                </li><!-- End Products Mega Menu 1 -->
                <!-- Products Mega Menu 2 -->
                <li class="products-megamenu-2"><a href="#"><span>Cloth product</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>

                    <!-- Products Mega Menu 2 Mobile View -->
                    <ul class="mobile-megamenu">

                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Kids'</a></li>

                        <li class="dropdown"><a href="#"><span>Clothing</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Shirts &amp; Tops</a></li>
                                <li><a href="#">Coats &amp; Outerwear</a></li>
                                <li><a href="#">Underwear</a></li>
                                <li><a href="#">Sweatshirts</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Swimwear</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Shoes</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">Heels</a></li>
                                <li><a href="#">Loafers</a></li>
                                <li><a href="#">Slippers</a></li>
                                <li><a href="#">Oxfords</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Accessories</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Handbags</a></li>
                                <li><a href="#">Eyewear</a></li>
                                <li><a href="#">Hats</a></li>
                                <li><a href="#">Watches</a></li>
                                <li><a href="#">Jewelry</a></li>
                                <li><a href="#">Belts</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Specialty Sizes</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Plus Size</a></li>
                                <li><a href="#">Petite</a></li>
                                <li><a href="#">Wide Shoes</a></li>
                                <li><a href="#">Narrow Shoes</a></li>
                            </ul>
                        </li>

                    </ul><!-- End Products Mega Menu 2 Mobile View -->

                    <!-- Products Mega Menu 2 Desktop View -->
                    <div class="desktop-megamenu">

                        <div class="megamenu-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="womens-tab" data-bs-toggle="tab"
                                        data-bs-target="#womens-content-1883" type="button" aria-selected="true"
                                        role="tab">WOMEN</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="mens-tab" data-bs-toggle="tab"
                                        data-bs-target="#mens-content-1883" type="button" aria-selected="false"
                                        tabindex="-1" role="tab">MEN</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="kids-tab" data-bs-toggle="tab"
                                        data-bs-target="#kids-content-1883" type="button" aria-selected="false"
                                        tabindex="-1" role="tab">KIDS</button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tabs Content -->
                        <div class="megamenu-content tab-content">

                            <!-- Women Tab -->
                            <div class="tab-pane fade show active" id="womens-content-1883" role="tabpanel"
                                aria-labelledby="womens-tab">
                                <div class="category-layout">
                                    <div class="categories-section">
                                        <div class="category-headers">
                                            <h4>Clothing</h4>
                                            <h4>Shoes</h4>
                                            <h4>Accessories</h4>
                                            <h4>Specialty Sizes</h4>
                                        </div>

                                        <div class="category-links">
                                            <div class="link-row">
                                                <a href="#">Shirts &amp; Tops</a>
                                                <a href="#">Boots</a>
                                                <a href="#">Handbags</a>
                                                <a href="#">Plus Size</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Coats &amp; Outerwear</a>
                                                <a href="#">Sandals</a>
                                                <a href="#">Eyewear</a>
                                                <a href="#">Petite</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Underwear</a>
                                                <a href="#">Heels</a>
                                                <a href="#">Hats</a>
                                                <a href="#">Wide Shoes</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Sweatshirts</a>
                                                <a href="#">Loafers</a>
                                                <a href="#">Watches</a>
                                                <a href="#">Narrow Shoes</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Dresses</a>
                                                <a href="#">Slippers</a>
                                                <a href="#">Jewelry</a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Swimwear</a>
                                                <a href="#">Oxfords</a>
                                                <a href="#">Belts</a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">View all</a>
                                                <a href="#">View all</a>
                                                <a href="#">View all</a>
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-section">
                                        <div class="featured-image">
                                            <img src="{{ asset('img/product/product-f-1.webp') }}"
                                                alt="Women's Heels Collection">
                                            <div class="featured-content">
                                                <h3>Women's<br>Bags<br>Collection</h3>
                                                <a href="#" class="btn-shop">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Men Tab -->
                            <div class="tab-pane fade" id="mens-content-1883" role="tabpanel"
                                aria-labelledby="mens-tab">
                                <div class="category-layout">
                                    <div class="categories-section">
                                        <div class="category-headers">
                                            <h4>Clothing</h4>
                                            <h4>Shoes</h4>
                                            <h4>Accessories</h4>
                                            <h4>Specialty Sizes</h4>
                                        </div>

                                        <div class="category-links">
                                            <div class="link-row">
                                                <a href="#">Shirts &amp; Polos</a>
                                                <a href="#">Sneakers</a>
                                                <a href="#">Watches</a>
                                                <a href="#">Big &amp; Tall</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Jackets &amp; Coats</a>
                                                <a href="#">Boots</a>
                                                <a href="#">Belts</a>
                                                <a href="#">Slim Fit</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Underwear</a>
                                                <a href="#">Loafers</a>
                                                <a href="#">Ties</a>
                                                <a href="#">Wide Shoes</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Hoodies</a>
                                                <a href="#">Dress Shoes</a>
                                                <a href="#">Wallets</a>
                                                <a href="#">Extended Sizes</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Suits</a>
                                                <a href="#">Sandals</a>
                                                <a href="#">Sunglasses</a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Activewear</a>
                                                <a href="#">Slippers</a>
                                                <a href="#">Hats</a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">View all</a>
                                                <a href="#">View all</a>
                                                <a href="#">View all</a>
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-section">
                                        <div class="featured-image">
                                            <img src="{{ asset('img/product/product-m-4.webp') }}"
                                                alt="Men's Footwear Collection">
                                            <div class="featured-content">
                                                <h3>Men's<br>Footwear<br>Collection</h3>
                                                <a href="#" class="btn-shop">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Kids Tab -->
                            <div class="tab-pane fade" id="kids-content-1883" role="tabpanel"
                                aria-labelledby="kids-tab">
                                <div class="category-layout">
                                    <div class="categories-section">
                                        <div class="category-headers">
                                            <h4>Clothing</h4>
                                            <h4>Shoes</h4>
                                            <h4>Accessories</h4>
                                            <h4>By Age</h4>
                                        </div>

                                        <div class="category-links">
                                            <div class="link-row">
                                                <a href="#">T-shirts &amp; Tops</a>
                                                <a href="#">Sneakers</a>
                                                <a href="#">Backpacks</a>
                                                <a href="#">Babies (0-24 months)</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Outerwear</a>
                                                <a href="#">Boots</a>
                                                <a href="#">Hats &amp; Caps</a>
                                                <a href="#">Toddlers (2-4 years)</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Pajamas</a>
                                                <a href="#">Sandals</a>
                                                <a href="#">Socks</a>
                                                <a href="#">Kids (4-7 years)</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Sweatshirts</a>
                                                <a href="#">Slippers</a>
                                                <a href="#">Gloves</a>
                                                <a href="#">Older Kids (8-14 years)</a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Dresses</a>
                                                <a href="#">School Shoes</a>
                                                <a href="#">Scarves</a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">Swimwear</a>
                                                <a href="#">Sports Shoes</a>
                                                <a href="#">Hair Accessories</a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="link-row">
                                                <a href="#">View all</a>
                                                <a href="#">View all</a>
                                                <a href="#">View all</a>
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-section">
                                        <div class="featured-image">
                                            <img src="{{ asset('img/product/product-9.webp') }}" alt="Kids' New Arrivals">
                                            <div class="featured-content">
                                                <h3>Kids<br>New<br>Arrivals</h3>
                                                <a href="#" class="btn-shop">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!-- End Products Mega Menu 2 Desktop View -->

                </li><!-- End Products Mega Menu 2 -->

                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('team') }}">Our Team</a></li>

            </ul>
        </nav>
    </div>
</div>
