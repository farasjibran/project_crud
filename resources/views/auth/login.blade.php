<x-auth-layout>
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <img src="{{ asset('logo.png')}}" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Pena</span></h4>
                <p class="text-muted mb-3">Before you get started, you must login or register if you don't already have an
                    account.</p>

                <x-jet-validation-errors class="mb-4 mt-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login')}}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <x-jet-input class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <x-jet-input class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                id="remember-me">
                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="float-left mt-3">
                            Forgot Password?
                        </a>
                        @endif

                        <x-jet-button class="btn btn-primary btn-lg btn-icon icon-right">
                            {{ __('Login') }}
                        </x-jet-button>
                    </div>

                    <div class="mt-5 text-center">
                        Don't have an account? <a href="{{ route('register')}}">Create new one</a>
                    </div>
                </form>

                <div class="text-center mt-5 text-small">
                    Copyright &copy; Eggless. Made with 💙 by Team
                    <div class="mt-2">
                        <a href="#">Privacy Policy</a>
                        <div class="bullet"></div>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
            data-background="https://images.unsplash.com/photo-1516553174826-d05833723cd4?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDJ8fG1vdW50YWlufGVufDB8MHwwfHB1cnBsZXw%3D&ixlib=rb-1.2.1"
            style="background-size: cover">
        </div>
    </div>
</x-auth-layout>
