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
    <header  calss="container">
        <h2 class="container_header">FashionablyLate</h2>

        <button>logout</button>
    </header>

    <main>
        <h3>Admin</h3>

        <div class="balance">
            <table>
                    <tr>
                        <input type="text">
                        性別<select name="" id=""></select>
                        お問い合わせの種類<select name="" id=""></select>
                        <input type="date" id="date" name="date">
                        <button>検索</button>
                        <button>リセット</button>
                    </tr>
            </table>
        </div>

        <div>
            <table>
                <tr>
                    <button>エクスポート</button>

                    <!-- ここにページ -->
                </tr>
            </table>
        </div>

        <div class="balance">
            <table>
                <thead>
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 支出データのループ処理 -->
                    @foreach($contacts as $contact)
                    <tr>
                        <td>
                            {{$contact -> first_name }}
                        </td>

                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>


</html>

