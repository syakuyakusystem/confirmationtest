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
        <h3>Contact</h3>

        <div class="form">
            <div class="form_content">
                <form class="form_text" action="{{route('store')}}" method="POST">
                @csrf
                <table>

                    <tr>
                        <th>
                            <label for="name">お名前<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input type="text" class="inputbox" name="first_name">
                            <!-- @if($errors->has('first_name'))
                            <span>{{$errors->first('first_name')}}</span>
                            @endif -->
                        </td>
                        <td>
                            <input type="text" class="inputbox" name="last_name">
                            <!-- @if($errors->has('last_name'))
                            <span>{{$errors->first('last_name')}}</span>
                            @endif -->
                        </td>
                        
                    </tr>

            
                    <tr >
                        <th>
                            <lavel>性別<span style="color:red;">※</span></lavel>
                        </th>
                        <td class="selecttable">
                            <input type="radio"name="gender" value="男性" id="man">
                            <label for="man">男性</label>
                        </td>
                        <td class="selecttable">
                            <input type="radio" name="gender" value="女性" id="woman">
                            <label for="woman">女性</label>
                        </td>
                        <td class="selecttable">
                            <input type="radio" name="gender" value="その他" id="others">
                            <label for="others">その他</label>
                        </td>
                    </tr>
    
                    <tr>
                        <th>
                            <label>メールアドレス<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="inputbox" type="email" name="email">
                            <!-- @if($errors->has('email'))
                            <span>{{$errors->first('email')}}</span>
                            @endif -->
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label>電話番号<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="inputbox" type="text" name="tell1" maxlength="4" required/> -
                        </td>
                        <td>
                            <input class="inputbox" type="text" name="tell2" maxlength="4" required/> -
                        </td>
                        <td>
                            <input class="inputbox" type="text" name="tell3" maxlength="4" required/>
                        </td>
                        <td>
                            <input type="hidden">
                        </td>

                    </tr>

                    <tr>
                        <th>
                            <label>住所<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="inputbox" type="text" name="adress">
                            <!-- @if($errors->has('adress'))
                            <span>{{$errors->first('adress')}}</span>
                            @endif -->
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label>建物名</label>
                        </th>
                        <td>
                            <input class="inputbox" type="text" name="building">
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label>お問い合わせの種類<span style="color:red;">※</span></label>
                            <select name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category['content'] }}</option>
                                @endforeach
                        </th>
                        <td>
                            <select name="category" id="category">
                                @foreach($categories as $category)
                                <option class="inputbox"  value="{{$category->id}}">{{$category->content}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label>お問い合わせ内容<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="textbox" type="textarea" name="detail">
                            <!-- @if($errors->has('detail'))
                            <span>{{$errors->first('detail')}}</span>
                            @endif
                        </td> -->
                    </tr>

                    
                </table>
                <div class="formbutton">
                    <button>確認画面</button>
                </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>