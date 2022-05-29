@extends('layout')
    @section('content')
    Hello World
    @unless($models == null)
        @foreach($models as $model)
        {{ $model->name }} <br>
        {{ $model->genre }} <br>
        {{ $model->description }} <br>
    @endforeach
    @endunless
@endsection