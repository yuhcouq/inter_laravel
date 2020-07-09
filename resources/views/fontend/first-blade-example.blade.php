@extends('layouts.layout-menu')

@section('title', 'Ví dụ đầu tiên về Blade template')

@section('sidebar')
@parent

    <p>Phần phụ của sidebar.</p>
    @for($i=0;$i<=5;$i++)
        {{$i}}
    @endfor
    <br><br>
@endsection

@section('content')
    <p>Phần nội dung chính của trang ở đây.</p>
@endsection
