@extends('layouts.app')

@section('title-block')Страница контакты@endsection

@section('content')
    <h1>Страница контакты</h1>
yy={{route('contact-form')}}
    @endsection

@section('info')
    @parent
    ETO KONTAKTI

@endsection
@section('form')
    <form action="{{route('foot-form')}}" method="post" >
        {{csrf_field() }}

        <div class="form-group">
            <label for="name">VVedite imja</label>
            <input type="text" name="email" placeholder="vvimja" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">VVedite email</label>
            <input type="text" name="fname" placeholder="vvemail" id="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection