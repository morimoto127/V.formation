@extends('layouts.front')
@section('title', 'レシピの編集')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>レシピの編集</h1>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>レシピ編集・削除</h1>
                <form action="{{ route('user.recipes.create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">レシピタイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $recipes_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">料理の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                            設定中: {{ $recipes_form->image_path }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">材料</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="ingredient" rows="20">{{ $recipes_form->ingredient }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">調理時間</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="time" value="{{ $recipes_form->time }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">作り方</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="recipe" rows="30">{{ $recipes_form->recipe }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <div style="text-align: right">
                                <input type="hidden" name="id" value="{{ $recipes_form->id }}">
                                @csrf
                                <input type="submit" class="btn btn-primary" value="更新">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <a class="btn btn-primary" href="{{ route('user.recipes.delete', ['id' => $recipes_form->id]) }}" role="button">削除</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection