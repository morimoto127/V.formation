@extends('layouts.front')
@section('title', 'レシピ投稿一覧')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 >プロフィール</h1>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="nickname">ニックネーム</label>
        <div class="col-md-10">
            {{ $user_form->nickname }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="gender">性別</label>
        <div class="col-md-10">
            {{ $user_form->gender }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="introduction">プロフィール文</label>
        <div class="col-md-10">
            {{ $user_form->introduction }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>レシピ投稿一覧</h2>
        </div>
    </div>
    <div class="col-md-8">
        <form action="{{ route('user.recipes.index') }}" method="get">
            <div class="form-group row">
                <label class="col-md-2">タイトル</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                </div>
                <div class="col-md-2">
                    @csrf
                    <input type="submit" class="btn btn-primary" value="検索">
                </div>
            </div>
        </form>
    </div>
    <div class="r-contents"> 
        @foreach($recipes as $recipe)
            <div class="r-cont">
                <a href="{{ route('user.recipes.edit', ['id' => $recipe->id]) }}" class="">
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