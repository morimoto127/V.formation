@extends('layouts.front')
@section('title', 'レシピ一覧')
@section('content')
<div class="container">
    <div class="row">
        <h1>レシピ一覧</h1>
    </div>
    <div class="row row-cols-3 row-cols-md-3 g-4">
        @foreach($recipes as $recipe)
        <div class="menu">
            <div class="col card">
                @if ($recipe->image_path)
                    <img src="{{ asset('storage/image/' . $recipe->image_path) }}" class="card-img-top">
                @endif
                <div class="card-body">
                    <div class="card-title">
                        {{ Str::limit($recipe->title, 20) }}
                    </div>
                    <div class="time">
                        <img src="{{ asset('/image/Free Clock icon part 2無料の時計のアイコン 2.png') }}">
                        {{ Str::limit($recipe->time, 10) }}
                    </div>
                    <a href="{{ route('user.recipes.index', ['id' => $recipe->id]) }}" class="card-link">{{ $recipe->user->nickname }}</a>
                </div>
                <a href="{{ route('recipe.show', ['id' => $recipe->id]) }}" class="stretched-link"></a> 
            </div>
        </div>
        @endforeach    
    </div>
</div>
@endsection