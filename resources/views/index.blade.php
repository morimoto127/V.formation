@extends('layouts.front')
@section('title', 'V.formation')
@section('content')
    <div class="container">
        <div class="box">
            <div id="vegetable-image">
                <img src="{{asset('image/gabriel-gurrola-fcgPRZmTM5w-unsplash.jpg')}}">
                <h3>V.formation</h3>
            </div>    
        </div>
    </div>
    <div class="container">
        <div Class="card-contents">
            <h2 class="text">V.formationはヴィーガンやグルテンフリーのレシピを共有する場所です。
                体に優しい、環境に優しい食生活をシェアしましょう！</h2>
            <P>動物性の食品、小麦、大麦、ライ麦不使用のレシピを投稿して皆で共有しましょう。</p>
            <button type="button" class="btn btn-warning">マイページ</button>
        </div>  
@endsection