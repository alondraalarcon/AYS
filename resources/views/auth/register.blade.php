<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/assets/css/login/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/login/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">

</head>

<body>
<div id="auth">
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="assets/images/ayslogo.jpg" height="85">
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="col-md-12 col-12">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Account Type</label>
                                    <div class="position-relative">
                                        <select class="form-select" id="account" type="text" class="form-control @error('account') is-invalid @enderror" name="account" 
                                                value="{{ old('account') }}" required autocomplete="account" autofocus>
                                            <option value="1">Admin</option>
                                            <option value="2">E-Franchisee</option>
                                        </select>
                                        @error('account')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                    
                                    </div>
                                </div>


                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">First Name</label>
                                    <div class="position-relative">
                                        <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                                        @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fas fa-user-tag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Last Name</label>
                                    <div class="position-relative">
                                        <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                        @error('lname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fas fa-user-tag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="form-group position-relative has-icon-left">
                                <label for="username">Email</label>
                                <div class="position-relative">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div class="form-group position-relative has-icon-left">
                                        <div class="clearfix">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="position-relative">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror    
                                            <div class="form-control-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group position-relative has-icon-left">
                                        <div class="clearfix">
                                            <label for="password">Confirm Password</label>
                                        </div>
                                        <div class="position-relative">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            <div class="form-control-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="clearfix">
                            <button class="btn btn-default float-end" style="font-weight: 500;">{{ __('Register') }}</button>
                        </div>
                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/feather-icons/feather.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/loginmain.js"></script>

    <style>
        .btn-default
        {
        background-color: #f48c14;
        color:#FFF;
        border-color: #f48c14;
        }
    </style>
</body>

</html>