<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/login/bootstrap.css">
    <link rel="shortcut icon" href="/assets/images/ayslogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/login/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">


</head>

<body>

<div id="auth">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="../assets/images/ayslogo.jpg" height="80" class='mb-4'>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Email</label>
                            <div class="position-relative">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-control-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="clearfix">
                            <button type="submit" class="btn btn-default float-end" style="font-weight: 500;">
                                Submit
                            </button>
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