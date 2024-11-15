@extends('layouts.front')
@section('title', 'レシピ一覧')
@section('content')
<div class="container">
    <div class="row">
        <h1 align="center">レシピ一覧</h1>
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
</div>
@endsection