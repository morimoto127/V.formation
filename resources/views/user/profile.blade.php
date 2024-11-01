@extends('layouts.front')
@section('title', 'プロフィール編集')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>プロフィール編集</h1>
                <form action="{{ route('##') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profiles_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ $profiles_form->gendre }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">プロフィール文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ $profiles_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profiles_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection