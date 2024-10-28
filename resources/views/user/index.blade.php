@extends('layouts.front')
@section('title', 'マイページ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイページ</h2>
            </div>
        </div>
        <div class="row">
            <h1>レシピ投稿一覧</h1>
        </div>
        <div class="row row-cols-3 row-cols-md-3 g-4">
            @foreach($posts as $recipes)
                <div class="col">
                    <div class="card">
                        @if ($recipes->image_path)
                            <img src="{{ asset('storage/image/' . $recipes->image_path) }}" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <div class="card-title">
                                {{ Str::limit($recipes->title, 20) }}
                            </div>
                            <div class="time">
                                <img src="{{ asset('/image/Free Clock icon part 2無料の時計のアイコン 2.png') }}">
                                {{ Str::limit($recipes->time, 10) }}
                            </div>
                            <p class="user">名前</p>
                        </div>
                    </div>
                </div> 
            @endforeach    
        </div>
    </div>
@endsection