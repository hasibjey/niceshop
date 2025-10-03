<x-frontend.layouts.app>
    <x-slot name="title">Register</x-slot>

    <section>
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Register</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Register</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Register Section -->
        <section id="register" class="register section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="registration-form-wrapper">
                            <div class="form-header text-center">
                                <h2>Create Your Account</h2>
                                <p>Create your account and start shopping with us</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="fullName" name="name"
                                                placeholder="Full Name" autocomplete="name"
                                                value="{{ old('name') }}">
                                            <label for="fullName">Full Name</label>
                                            @error('name')
                                                <p class="text-sm text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Address" autocomplete="email"
                                                value="{{ old('email') }}">
                                            <label for="email">Email Address</label>
                                            @error('email')
                                                <p class="text-sm text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Password" minlength="8"
                                                        autocomplete="new-password">
                                                    <label for="password">Password</label>
                                                </div>
                                                @error('password')
                                                    <p class="text-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="password" class="form-control" id="confirmPassword"
                                                        name="password_confirmation" placeholder="Confirm Password"
                                                        minlength="8" autocomplete="new-password">
                                                    <label for="confirmPassword">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-grid mb-4">
                                            <button type="submit" class="btn btn-register">Create Account</button>
                                        </div>

                                        <div class="login-link text-center">
                                            <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="decorative-elements">
                                <div class="circle circle-1"></div>
                                <div class="circle circle-2"></div>
                                <div class="circle circle-3"></div>
                                <div class="square square-1"></div>
                                <div class="square square-2"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </section>
</x-frontend.layouts.app>
