@extends('layouts.front')
@section('title', 'レシピ詳細')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h1>{{$recipe->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="caption mx-auto">
                        <div class="image">
                            <img src="{{ asset('storage/image/' . $recipe->image_path) }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="material col-md-1" for="ingredient">材料</label>
                    <p class="ingredient">{{ Str::limit($recipe->ingredient, 100)}}</p>
                </div>
            </div>
            <div class="row">
                <label class="col-md-1" for="time">調理時間</label>
                <div class="col-md-4">
                    {{ $recipe->time}}
                </div>
            </div>
            <div class="row">
                <label class="cook col-md-8 mx-auto" for="recipe">作り方</label>
                <div class="col-md-8 mx-auto">
                    <p class="recipe">{{ Str::limit($recipe->recipe, 650)}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection   