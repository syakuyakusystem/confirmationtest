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
</head>



<body>
    <header calss="container">
        <h2 class="container_header">FashionablyLate</h2>
    </header>

    <main>
        <h3>Confirm/h3>

        <div class="form">
            <div class="form_content">
                <form class="form_text" action="/contacts/order" method="POST">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th>お名前</th>
                            <th>性別</th>
                            <th>メールアドレス</th>
                            <th>電話番号</th>
                            <th>住所</th>
                            <th>建物名</th>
                            <th>お問い合わせの種類</th>
                            <th>お問い合わせの内容</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ループ処理 -->
                    </tbody>   
                </table>
                <div class="formbutton">
                    <button>送信</button>
                </div>

                <div class="">
                    <button>修正</button>
                </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>