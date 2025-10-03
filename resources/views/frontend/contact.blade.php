<x-frontend.layouts.app>
    <x-slot name="title">Contact Us</x-slot>

    <section>

        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Contact</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Contact</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Contact 2 Section -->
        <section id="contact-2" class="contact-2 section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Contact Info Boxes -->
                <div class="row gy-4 mb-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Our Address</h4>
                                <p> Uttara. Dhaka, Bangladesh </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>Email Address</h4>
                                <p>info@example.com</p>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div class="info-content">
                                <h4>Hours of Operation</h4>
                                <p>Sunday-Fri: 9 AM - 6 PM</p>
                                <p>Saturday: 9 AM - 4 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Google Maps (Full Width) -->
            <div class="map-section" data-aos="fade-up" data-aos-delay="200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29186.916621790784!2d90.35768842388667!3d23.876687422377795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1755840255101!5m2!1sen!2sbd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Contact Form Section (Overlapping) -->
            <div class="container form-container-overlap">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-10">
                        <div class="contact-form-wrapper">
                            <h2 class="text-center mb-4">Get in Touch</h2>

                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-person"></i>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="First Name" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-envelope"></i>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-text-left"></i>
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="Subject" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-chat-dots message-icon"></i>
                                                <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </section>
</x-frontend.layouts.app>
