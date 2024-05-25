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
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    
</head>

<body style="
    margin-top: 15%;
">

    <div class="baseBox">
        <!-- <div class="backStr">Thank you</div> -->
        <div class="frontStr">
            <h2>お問い合わせありがとうございました</h2>
        </div>
        <div class="formbutton">
            <a class="rounded-md bg-gray-800 text-white px-4 py-2" href="{{ route('index') }}">
            Home
            </a>
        </div>
    </div>

    

</div>
</body>

</html>