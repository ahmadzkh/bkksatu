<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link
            href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{asset ('/assets/css/style.css')}}" >
        <link rel="shortcut icon" href="{{asset ('/assets/img/bkk-icon.png')}}" type="image/x-icon">
        <style>
            body {
                height: 100vh;
            }

            .login-wrapper {
                z-index: 10;
                /* border: 2px solid rgb(99, 99, 99); */
                height: 70vh;
                margin-top: 15vh;
            }

            .login-left         {
                width: 430px;
            }

            .login-left form button {
                height: 50px;
                font-size: 20px;
            }

            .login-left .welcoming-text h2 {
                margin-bottom: -4px;
                font-weight: 900!important;
            }

            .login-left input {
                font-weight: 600!important;
            }

            .login-right {
                width: 350px;
            }

            .login-right img {
                width: 100%;
            }

            .bg-strip {
                position: absolute;
                background-image: linear-gradient(#b9c7f7, #3759d6);
                width: 50vw;
                height: 100vh;
                z-index: -1;
            }

            @media only screen and (max-width: 400px) {
                .login-right {
                    display: none;
                }
            }
        </style>
    </head>

    <body class="overflow-hidden">
        <div class="d-flex justify-content-end">
            <div class="bg-strip"></div>
        </div>
        <div class="container d-flex login-wrapper justify-content-evenly align-items-center rounded-20 py-5 bg-white shadow-custom">
            <div class="login-left mx-2">
                <div class="forms py-4">
                    <div class="welcoming-text">
                        <h2 class="fw-bold">BKK SMKN 1</h2>
                        <p class="fw-bold">Kota Bekasi</p>
                    </div>
                    <p>Selamat datang!</p>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="login" class="form-control rounded-20 {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" id="username" placeholder="Username or Email" autocomplete="on" autofocus value="{{ old('username') ?: old('email') }}"/>
                            <label for="username">Username or Email</label>
                            @if ($errors->has('username') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control rounded-20 {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Password" value="{{ old('password') }}"/>
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        @if (session()->has('login'))
                            <p class="stong text-danger text-center">{{ session('login') }}</p>
                        @endif
                        <button type="submit" class="btn btn-primary w-100 rounded-20 my-3 fw-bold">
                            Login
                        </button>
                    </form>
                </div>
            </div>
            <div class="login-right text-center align-self-center ms-5 mx-2">
                <img src="{{asset ('/assets/img/bkk-icon.png')}}" alt="Bkk Icon" draggable="false"/>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
