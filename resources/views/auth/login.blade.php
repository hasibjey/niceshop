<x-frontend.layouts.app>
    <x-slot name="title">Login</x-slot>

    <section>
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Login</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Login</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Login Section -->
        <section id="login" class="login section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="auth-container" data-aos="fade-in" data-aos-delay="200">

                            <!-- Login Form -->
                            <div class="auth-form login-form active">
                                <div class="form-header">
                                    <h3>Welcome Back</h3>
                                    <p>Sign in to your account</p>
                                </div>

                                <form class="auth-form-content" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="input-group mb-1">
                                            <span class="input-icon">
                                                <i class="bi bi-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" placeholder="Email address"
                                                required autocomplete="email" name="email" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <p class="text-red-500 text-sm">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="input-group mb-1">
                                            <span class="input-icon">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" placeholder="Password"
                                                required autocomplete="current-password" name="password">
                                            <span class="password-toggle">
                                                <i class="bi bi-eye"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                            <p class="text-red-500 text-sm">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-options mb-4">
                                        <div class="remember-me">
                                            <input type="checkbox" id="rememberLogin" name="remember">
                                            <label for="rememberLogin">Remember me</label>
                                        </div>
                                        <a href="{{ route('password.request') }}" class="forgot-password">Forgot password?</a>
                                    </div>

                                    <button type="submit" class="auth-btn primary-btn mb-3">
                                        Sign In
                                        <i class="bi bi-arrow-right"></i>
                                    </button>

                                    <div class="divider">
                                        <span>or</span>
                                    </div>

                                    <button type="button" class="auth-btn social-btn">
                                        <i class="bi bi-google"></i>
                                        Continue with Google
                                    </button>

                                    <div class="switch-form">
                                        <span>Don't have an account?</span>
                                        <a href="{{ route('register') }}" type="button" class="switch-btn" data-target="register">Create
                                            account</a>
                                    </div>
                                </form>
                            </div>

                            <!-- Register Form -->
                            <div class="auth-form register-form">
                                <div class="form-header">
                                    <h3>Create Account</h3>
                                    <p>Join us today and get started</p>
                                </div>

                                <form class="auth-form-content">
                                    <div class="name-row">
                                        <div class="input-group">
                                            <span class="input-icon">
                                                <i class="bi bi-person"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="First name"
                                                required="" autocomplete="given-name">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-icon">
                                                <i class="bi bi-person"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                required="" autocomplete="family-name">
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-icon">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Email address"
                                            required="" autocomplete="email">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-icon">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" placeholder="Create password"
                                            required="" autocomplete="new-password">
                                        <span class="password-toggle">
                                            <i class="bi bi-eye"></i>
                                        </span>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-icon">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input type="password" class="form-control" placeholder="Confirm password"
                                            required="" autocomplete="new-password">
                                        <span class="password-toggle">
                                            <i class="bi bi-eye"></i>
                                        </span>
                                    </div>

                                    <div class="terms-check mb-4">
                                        <input type="checkbox" id="termsRegister" required="">
                                        <label for="termsRegister">
                                            I agree to the <a href="#">Terms of Service</a> and <a
                                                href="#">Privacy Policy</a>
                                        </label>
                                    </div>

                                    <button type="submit" class="auth-btn primary-btn mb-3">
                                        Create Account
                                        <i class="bi bi-arrow-right"></i>
                                    </button>

                                    <div class="divider">
                                        <span>or</span>
                                    </div>

                                    <button type="button" class="auth-btn social-btn">
                                        <i class="bi bi-google"></i>
                                        Sign up with Google
                                    </button>

                                    <div class="switch-form">
                                        <span>Already have an account?</span>
                                        <button type="button" class="switch-btn" data-target="login">Sign
                                            in</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>
    </section>
</x-frontend.layouts.app>
