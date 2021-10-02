@extends('layouts.layoutapp')

@section('title', 'Customer.Edit')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    <form action="" method="post" class="form-horizontal">
        <table>
        {{ csrf_field() }}
        {{ method_field('patch') }}
            <tr><th>id: </th><td><input type="text" name="id" value="{{$form->id}}"></td></tr>
            @if ($errors->has('name'))
            <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>名称: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
            @if ($errors->has('postal'))
            <tr><th>ERROR</th><td>{{$errors->first('postal')}}</td></tr>
            @endif
            <tr><th>郵便番号: </th><td><input type="text" name="postal" value="{{$form->postal}}"></td></tr>
            @if ($errors->has('address'))
            <tr><th>ERROR</th><td>{{$errors->first('address')}}</td></tr>
            @endif
            <tr><th>住所: </th><td><input type="text" name="address" value="{{$form->address}}"></td></tr>
            @if ($errors->has('phone'))
            <tr><th>ERROR</th><td>{{$errors->first('phone')}}</td></tr>
            @endif           
            <tr><th>電話番号: </th><td><input type="text" name="phone" value="{{$form->phone}}"></td></tr>
            @if ($errors->has('email'))
            <tr><th>ERROR</th><td>{{$errors->first('email')}}</td></tr>
            @endif
            <tr><th>eメール: </th><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
            @if ($errors->has('todo'))
            <tr><th>ERROR</th><td>{{$errors->first('todo')}}</td></tr>
            @endif
            <tr><th>用途: </th><td><input type="text" name="todo" value="{{$form->todo}}"></td></tr>
            <tr><th></th><td><input type="submit" value="編集"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2021
yasuko.
@endsection