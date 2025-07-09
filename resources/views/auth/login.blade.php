<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- important for responsiveness -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Envoi Express</title>
    <!-- SVG -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/svg/LOGO.svg') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 2rem;
            margin-top: 20px;
        }
        @media (max-width: 576px) {
            .card {
                margin: 20px 10px;
            }
            h1 {
                font-size: 1.5rem;
            }
            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<div class="container">
    <center>
        <img src="images/logo.png" alt="" width="120px">
    </center>

    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header text-center font-weight-bold">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-sm-right">{{ __('Email Address') }}</label>
                            <div class="col-sm-8">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label text-sm-right">{{ __('Password') }}</label>
                            <div class="col-sm-8">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required>
                                @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8 offset-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           name="remember" id="remember"
                                           {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-8 offset-sm-4">
                                <button type="submit" class="btn text-light bg-dark">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>