<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    .btn-primary {
        background-color: orangered;
        border-color: orangered;
        margin: 0 auto;
        display: flex;
        text-align: center;
        justify-content: center;
        font-family: 'Montserrat', sans-serif;
    }

    .btn-primary:hover {
        background-color: orange;
        border-color: orange;
    }

    .link {
        text-decoration: none;
        color: orangered;
        margin: 0 auto;
        display: flex;
        text-align: center;
        justify-content: center;
        font-family: 'Montserrat', sans-serif;
    }

    .link:hover {
        color: orange;
    }

    .card {
        border-color: black;
        border: 3px;
        border-radius: 20px;
        border-style: solid;
    }

    .bgvid {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
    }

    .logimg {
        margin: 0 auto;
        display: flex;
        text-align: center;
        justify-content: center;
    }

    .form-control {
        border-radius: 15px;
        border: 1px;
        border-style: double;
        margin: 0 auto;
        display: flex;
        text-align: center;
        justify-content: center;
        font-family: 'Montserrat', sans-serif;
        color: orangered;
    }

    b {
        font-family: 'Montserrat', sans-serif;
        color: orangered;
        font-size: 30px;
    }

    .form-label {
        font-family: 'Montserrat', sans-serif;
        color: orangered;
    }
</style>

<body>

    <video class="bgvid" width="320" height="240" muted autoplay loop>
        <source src="{{URL::asset('vid.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <br>
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @if(Session::get('success'))
                            <div class="alert alert-success">{{ Session::get('success')}}</div>
                            @endif
                            @if(Session::get('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <img src="{{URL::asset('start_logo.jpg')}}" alt="logo" width="100" height="100" class="logimg">
                            <center>
                                <h2><b>Login</b></h2>
                            </center>
                            <br>
                            <div class="form-floating">
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="basic-addon2" value="{{old('email')}}" required autofocus>
                                <label class="form-label" for="email">Email</label>
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="Password" aria-describedby="basic-addon2" value="{{old('password')}}" required autocomplete="current-password">
                                <label class="form-label" for="password">Password</label>
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" class="remember" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600" style="font-family: 'Montserrat', sans-serif; color: orangered;">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <div>
                                @if (Route::has('password.request'))
                                <a class="link" href="{{ route('password.request') }}">
                                    {{ __('Forgot password?') }}
                                </a>
                                @endif
                            </div>
                            <br>
                                <a href="register" class="link">Register instead</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

</body>