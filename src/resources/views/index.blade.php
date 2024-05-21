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
                            <input type="text" class="inputbox" name="first_name" value="{{ old('first_name')}}"/>
                            @error('first_name')
                            {{$message}}
                            @enderror
                        </td>
                        <td>
                            <input type="text" class="inputbox" name="last_name" value="{{ old('last_name')}}"/>
                            @error('last_name')
                            {{$message}}
                            @enderror
                        </td>
                        
                    </tr>

            
                    <tr >
                        <th>
                            <lavel>性別<span style="color:red;">※</span></lavel>
                        </th>
                        <td class="selecttable">
                            <input type="radio"name="gender" value="男性" id="man" value="{{ old('gender')}}"/>
                            <label for="man">男性</label>
                        </td>
                        <td class="selecttable">
                            <input type="radio" name="gender" value="女性" id="woman" value="{{ old('gender')}}"/>
                            <label for="woman">女性</label>
                        </td>
                        <td class="selecttable">
                            <input type="radio" name="gender" value="その他" id="others" value="{{ old('gender')}}"/>
                            <label for="others">その他</label>
                        </td>
                        @error('gender')
                            {{$message}}
                        @enderror
                        
                    </tr>
    
                    <tr>
                        <th>
                            <label>メールアドレス<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="inputbox" type="email" name="email" value="{{ old('email')}}"/>
                        </td>
                        @error('email')
                            {{$message}}
                        @enderror
                    </tr>

                    <tr>
                        <th>
                            <label>電話番号<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="inputbox" type="text" name="tell1" maxlength="4" value="{{ old('tell')}}" required/> -
                        </td>
                        <td>
                            <input class="inputbox" type="text" name="tell2" maxlength="4" value="{{ old('tell')}}" required/> -
                        </td>
                        <td>
                            <input class="inputbox" type="text" name="tell3" maxlength="4" value="{{ old('tell')}}" required/>
                        </td>
                        <td>
                            <input type="hidden">
                        </td>
                        @error('tell')
                            {{$message}}
                        @enderror

                    </tr>

                    <tr>
                        <th>
                            <label>住所<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="inputbox" type="text" name="address" value="{{ old('adress')}}"/>
                        </td>
                        @error('adress')
                            {{$message}}
                        @enderror
                    </tr>

                    <tr>
                        <th>
                            <label>建物名</label>
                        </th>
                        <td>
                            <input class="inputbox" type="text" name="building"/>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label>お問い合わせの種類<span style="color:red;">※</span></label>
                            
                        </th>
                        <td>
                            <select name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category['content'] }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label>お問い合わせ内容<span style="color:red;">※</span></label>
                        </th>
                        <td>
                            <input class="textbox" type="textarea" name="detail" value="{{ old('detail')}}"/>
                        </td>
                        @error('detail')
                            {{$message}}
                        @enderror
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