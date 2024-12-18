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
        <a class="btn btn-warning" href="{{url('/recipe')}}">レシピ一覧</a>
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
<div class="r-contents"> 
    @foreach($recipes as $recipe)
        <div class="r-cont">
            <a href="{{ route('recipe.show', ['id' => $recipe->id]) }}" class="">
                @if ($recipe->image_path)
                    <div class="r-img"><img src="{{ asset('storage/image/' . $recipe->image_path) }}" class="card-img-top"></div>
                @endif
                <div class="r-body">
                    <div class="card-title">
                        {{ Str::limit($recipe->title, 20) }}
                    </div>
                    <div>
                        <img src="{{ asset('/image/Free Clock icon part 2無料の時計のアイコン 2.png') }}">
                        {{ Str::limit($recipe->time, 10) }}
                    </div>
                    <a href="{{ route('user.recipes.index', ['id' => $recipe->id]) }}">{{ $recipe->user->nickname }}</a>
                </div>
            </a>
        </div>
    @endforeach 
</div>      
@endsection