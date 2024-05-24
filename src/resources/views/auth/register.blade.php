<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <div class="title">
        <div class="title_box"></div>
        <h2 class="title_logo">FashionablyLate</h2>

        <a class="title_link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    </div>
</head>

   

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">{{ __('Register') }}</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}"class="card-body">
                        @csrf

                        <div class="row mb-3" style="
                             margin:10%;
                             background-color: white;
                            ">

                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('お名前') }}</label>

                            <div class="col-md-6" style="background-color: white;">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="山田太郎"  style="background-color: rgb(245, 246, 247);">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="
                             margin:5%;
                             background-color: white;
                            ">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6" style="background-color: white;">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="例:test@example.come"   style="background-color: rgb(245, 246, 247);">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="
                             margin:5%;
                             background-color: white;
                            ">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

                            <div class="col-md-6" style="background-color: white;">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="coachtech1106"  autocomplete="new-password"  style="background-color: rgb(245, 246, 247);">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="background-color: white;">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6" style="background-color: white;">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: rgb(245, 246, 247);">
                            </div>
                        </div>

                        <div class="row mb-0" style="
                             margin:10%;
                             background-color: white;
                            ">
                            <div class="col-md-6 offset-md-4" style="background-color: white;">
                                <button type="submit" class="btn btn-primary" style="
                                border: none;
                                color: white;
                                background: rgb(141, 120, 92);
                                padding: 5px 25px;
                                ">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>

