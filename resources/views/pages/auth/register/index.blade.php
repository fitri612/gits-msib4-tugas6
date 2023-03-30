<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    @include('includes.styleV2')

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url({{ asset('images/bg-1.jpg') }});">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>
                            <form action="{{ route('register.handle') }}" class="signin-form" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" name="email" id="email" aria-describedby="emailHelp"
                                        required>
                                    @error('email')
                                        <div class="invalid-feedback" id="emailHelp">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" aria-describedby="nameHelp" placeholder="Name"
                                        required>
                                    @error('name')
                                        <div class="invalid-feedback" id="nameHelp">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password" placeholder="Password" required>
                                    @error('password')
                                        <div class="invalid-feedback" id="passwordHelp">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Confirm Password</label>
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" id="password_confirmation"
                                        placeholder="Confirm Password" required>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback" id="password_confirmationHelp">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        Up</button>
                                </div>
                            </form>
                            <p class="text-center">You have account? <a data-toggle="tab"
                                    href="{{ route('login.index') }}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
