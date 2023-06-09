<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">

    <link rel="stylesheet" href="css/style.css">
    @include('includes.styleV2')

</head>

<body>
    <section class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
              <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                  <h6 class="mb-0 pb-3">
                    <span>Log In </span>
                    <span>Sign Up</span>
                  </h6>
                  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                  <label for="reg-log"></label>

                  <div class="card-3d-wrap mx-auto">
                    <div class="card-3d-wrapper">
                      <div class="card-front">
                        <form action="{{ route('login.handle') }}"  method="POST">
                            @csrf
                            <div class="center-wrap">
                                <div class="section text-center">
                                    <h4 class="mb-4 pb-3">Log In</h4>
                                    <div class="form-group">
                                    <input type="email" class="form-style @error('email') is-invalid @enderror"
                                    name="email" id="email"" placeholder="Your Email"  autocomplete="off" required>
                                    <i class="input-icon uil uil-at"></i>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                    <input type="password" class="form-style @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Your Password" autocomplete="off" required>
                                    <i class="input-icon uil uil-lock-alt"></i>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    </div>

                                    <button type="submit" class="form-control btn mt-4">Sign
                                        In</button>
                                    <p class="mb-0 mt-4 text-center">
                                        <a href="#0" class="link">Forgot your password?</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                      </div>


                      <div class="card-back">
                        <form action="{{ route('register.handle') }}" method="POST">
                            @csrf
                            <div class="center-wrap">
                                <div class="section text-center">
                                    <h4 class="mb-4 pb-3">Sign Up</h4>
                                    <div class="form-group">
                                    <input type="email" class="form-style @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email"  autocomplete="off" required>
                                    <i class="input-icon uil uil-at"></i>
                                    @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-style @error('name') is-invalid @enderror"
                                        name="name" id="name" placeholder="Name" autocomplete="off" required>
                                        <i class="input-icon uil uil-at"></i>
                                        @error('name')
                                        <div class="invalid-feedback" id="nameHelp">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                        </div>
                                    <div class="form-group mt-2">
                                    <input type="password" class="form-style @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Your Password"autocomplete="off" required>
                                    <i class="input-icon uil uil-lock-alt"></i>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="password" class="form-style @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" autocomplete="off" required>
                                        <i class="input-icon uil uil-lock-alt"></i>
                                        @error('password_confirmation')
                                        <div class="invalid-feedback" id="password_confirmationHelp">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <button type="submit" class="btn mt-4">Sign
                                        In</button>
                                </div>
                            </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</body>

</html>
