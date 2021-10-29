@extends('layouts.layoutapp')

@section('title', 'Customer.Edit')

@section('menubar')
    @parent
    編集ページ
@endsection



@section('content')
    <form action="" method="post" class="form-horizontal">
        @csrf
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$id}}">
        <input type="hidden" name="name" value="{{$name}}">
        <input type="hidden" name="postal" value="{{$postal}}">
        <input type="hidden" name="address" value="{{$address}}">
        <input type="hidden" name="phone" value="{{$phone}}">
        <input type="hidden" name="email" value="{{$email}}">
        <input type="hidden" name="todo" value="{{$todo}}">
        <div class="row">
            <label class="col-sm-4 control-label">id:</label>
            <div class="col-sm-8">{{$id}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">名称:</label>
            <div class="col-sm-8">{{$name}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">郵便番号:</label>
            <div class="col-sm-8">{{$postal}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">住所:</label>
            <div class="col-sm-8">{{$address}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">電話番号:</label>
            <div class="col-sm-8">{{$phone}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">eメール:</label>
            <div class="col-sm-8">{{$email}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">用途:</label>
            <div class="col-sm-8">{{$todo}}</div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-offset-4 col-sm-8">
                <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
            </div>
        </div>
    </form>
@endsection

@section('footer')
copyright 2021
yasuko.
@endsection