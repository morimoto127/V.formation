@extends('layouts.front')
@section('title', 'マイページ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>マイページ</h1>
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
            <h2>レシピ投稿一覧</h2>
        </div>
        <div class="row row-cols-3 row-cols-md-3 g-4">
            @foreach($recipes as $recipe)
            <a href="{{ route('user.recipes.edit', ['id' => $recipe->id]) }}">
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
                        <p class="user">{{ $user_form->nickname }}</p>
                    </div>
                    
                </div>
            </a> 
            @endforeach    
        </div>
    </div>
@endsection