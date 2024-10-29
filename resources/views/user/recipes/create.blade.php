@extends('layouts.front')
@section('title', 'レシピの新規作成')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>レシピ新規作成</h1>
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
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">料理の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">材料</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="ingredient" rows="20">{{ old('ingredient') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">調理時間</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="time" value="{{ old('time') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">作り方</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="recipe" rows="30">{{ old('recipe') }}</textarea>
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection