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
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>





<body>
    <header  calss="container">
        <div></div>

        <h2 class="container_header" style="transform: translate(20px, 10px);">FashionablyLate</h2>

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

    </header>

    <main>
        <h3>Admin</h3>

        <div class="contentbox">
        <div class="balance">
            <table>
                <div class="search">
                    <tr>
                        <form action="" value="{{request('search')}}" method="get">
                            @csrf

                            <input placeholder="名前やメールアドレスを入力してください" type="text" name="keyword" value="{{ old('keyword') }}" >

                            <select class="textbox_gender" placeholder="性別" name="" id="" style="border: none; background: rgb(245, 246, 247);">
                            <option value="">男性</option>
                            <option value="">女性</option>
                            <option value="">その他</option>
                            </select>
                            
                            <select class="textbox_content" placeholder="お問い合わせの種類" name="" id="" style="border: none; background: rgb(245, 246, 247);">
                            <option value="">商品のお届けについて</option>
                            <option value="">商品の交換について</option>
                            <option value="">商品トラブル</option>
                            <option value="">ショップへのお問い合わせ</option>
                            <option value="">その他</option>
                            </select>
                            

                            <input type="date" id="date" name="date">

                            <input class="subitbutoon" type="submit" value="検索"></input>

                            <input class="rsettobutton" type="submit" value="リセット"></input>
                        </form>
                    </tr>
                </div>
            </table>
        </div>

        <div class="balance">
           <button class="blancebutton">エクスポート</button>
           <div class="page-numbers">
               <style>
                svg.w-5.h-5 {

                 width: 30px;
                 height: 30px;
                }                 
               </style>
                {!! $users->render() !!}
           </div>
        </div>

        <form action="" method="get">
        @csrf
        <div class="contentbox">
            <table>
                <thead>
                    <tr class="text" style="
                      border-bottom: 1px solid rgb(141, 120, 92);
                    ">
                        <div class="textth">
                            <th>
                                <span style="color:white;">お名前</span>
                            </th>
                            <th>
                                <span style="color:white;">性別</span>
                            </th>
                            <th>
                                <span style="color:white;">メールアドレス</span>
                            </th>
                            <th>
                                <span style="color:white;">お問い合わせの種類</span>
                            </th>
                            <th></th>
                        </div>
                    </tr>
                </thead>
                <tbody>  
                    @foreach($data as $contactData)                      
                    <tr style="
                      border-bottom: 1px solid rgb(141, 120, 92);
                    ">
                        <td>    
		                   {{ $contactData->first_name }}{{ $contactData->last_name }}
                        </td>
                        <td> 
		                   {{ $contactData->gender }}
                        </td>
                        <td> 
		                   {{ $contactData->email }}
                       </td>  
                       <td> 
		                   {{ $contactData->category}}
                       </td>
                       <td>
                        @livewireStyles
                            <div class="btn-wrap" class="primary-btn">
                                <button type="submit">詳細</button>
                            </div>
                        @livewireScripts
                       </td>                         
                    </tr>  
                    @endforeach 
                </tbody>
            </table>
        </div>
        </form>
    </main>

    
</body>


</html>

