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
    
        <h3>Confirm</h3>

        <div class="form">
            <div class="form_content">
                <form class="form_text" action="/contacts" method="POST">
                    @csrf
                    <table>
                        <tbody>
                            <tr>
                                <th>お名前
                                    <td>          
                                        {{ $contact['first_name'] }} {{ $contact['last_name'] }}
                                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}"/>
                                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}"/>
                                    </td>
                                </th>
                            </tr>
                            <tr>
                                <th>性別
                                    <td>
                                        {{ $contact['gender'] }}
                                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}"/>
                                    </td>
                                </th>
                            </tr>
                            <tr>
                                <th>メールアドレス
                                    <td>
                                        <input type="text" name="email" value="{{ $contact['email'] }}"/>
                                    </td>
                                </th>
                            </tr>
                            <tr>
                                <th>電話番号
                                    <td>
                                        {{ $contact['tell1'] }}{{ $contact['tell2'] }}{{ $contact['tell3'] }}
                                        <input type="hidden" name="tell1" value="{{ $contact['tell1'] }}"/>
                                        <input type="hidden" name="tell2" value="{{ $contact['tell2'] }}"/>
                                        <input type="hidden" name="tell3" value="{{ $contact['tell3'] }}"/>
                                    </td>
                                </th>
                            </tr>
                            <tr>
                                <th>住所
                                    <td>
                                        {{ $contact['address'] }}
                                        <input type="hidden" name="address" value="{{ $contact['address'] }}"/>
                                    </td>
                                </th>
                            </tr>
                            <tr>
                                <th>建物名
                                    <td>
                                        <input type="text" name="building" value="{{ $contact['building'] }}"/>
                                    </td>
                                </th>
                            </tr>
                            <tr>
                                <th>お問い合わせの種類
                                    <td>
                                        <p>{{ $contact['category_content'] }}</p>            
                                    </td>
                                </th>
                            </tr> 
                            <tr>
                                <th>お問い合わせの内容
                                    <td>
                                        <input type="text" name="detail" value="{{ $contact['detail'] }}"/>
                                        <input type="hidden" name="category" value="{{ $contact['category'] }}"/>
                                    </td>
                                </th>
                            </tr>    
                        </tbody>   
                    </table>

                    <div class="formbutton">
                        <button type="submit">
                            送信
                        </button>
                    </div>

                    <div class="formbutton">
                        <button type="submit">
                            修正
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>