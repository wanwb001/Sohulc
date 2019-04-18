@extends('layouts.app')
@section('title','提示')

@section('content')
    <div>
        <div class="panel-heading">提示</div>
        <div class="panel-body text-center">
            <h1>请先验证邮箱</h1>
            <a class="btn btn-promary" href="{{ route('home') }}">返回首页</a>
        </div>
    </div>
@endsection