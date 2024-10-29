@extends('layouts.front')
@section('title', 'V.formation')
@section('content')
<div class="container">
    <div class="box">
        <div id="vegetable-image">
            <img src="{{asset('image/gabriel-gurrola-fcgPRZmTM5w-unsplash.jpg')}}">
            <h1>V.formation</h1>
        </div>    
    </div>
</div>
<div class="container">
    <div class="card-contents">
        <p class="bold">V.formationはヴィーガンやグルテンフリーのレシピを共有する場所です。<br>体に優しい、環境に優しい食生活をシェアしましょう！</p>
        <P class="bold">動物性の食品、小麦、大麦、ライ麦不使用のレシピを投稿して皆で共有しましょう。</p>
        <button type="button" class="btn btn-warning">レシピ一覧</button>
    </div> 
</div> 
<div class="w-50">
    <h3>ヴィーガン</h3>
    <div class="bl">
        <p>肉・魚・卵・乳製品・ハチミツのあらゆる動物由来の<br>製品を口にしないライフスタイル</p>
        <p>”動物の命をいただかないこと”は環境を守ることにつながると言われている</p>
    </div>
    <h3>グルテンフリー</h3>
    <div class="bl">
        <p>小麦や大麦、ライ麦などに含まれるタンパク質であるグルテンを<br>一定レベルで摂取しない食事法</p>
    </div>
</div>
<div class="row row-cols-3 row-cols-md-3 g-4">
    @for ($i = 0; $i < 6; $i++)
        <div class="col">
            <div class="card">
                <img src="{{asset('/image/もちもち米粉とお豆腐ドーナツ.jpeg')}}" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title">米粉のお豆腐ドーナツ</h2>
                    <p><img src="{{asset('/image/Free Clock icon part 2無料の時計のアイコン 2.png')}}" alt="時計の画像">10分以内</p>
                    <p class="user">名前</p>
                </div>
            </div>
        </div> 
    @endfor    
@endsection