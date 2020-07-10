@extends('layouts.layout-menu')

@section('title', 'Tạo sản phẩm')

@section('content')
    @if(isset($message))
        <div class="alert alert-success" role="alert">{{ $message }}</div>
    @endif
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif

    {!! Form::open(array('url' => '/product', 'class' => 'form-horizontal')) !!}
    <div class="form-group">
        {!! Form::label('name', 'Tên sản phẩm', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('name', '', array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Giá sản phẩm', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-3">
            {!! Form::text('price', '', array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Nội dung sản phẩm', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::textarea('content', '', array('class' => 'form-control', 'rows' => 3)) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('image_path', 'Ảnh sản phẩm', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('image_path', '', array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('active', 'Active', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('active', '', true) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Tạo sản phẩm', array('class' => 'btn btn-success')) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection
