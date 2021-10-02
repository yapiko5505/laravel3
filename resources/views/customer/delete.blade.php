@extends('layouts.layoutapp')

@section('title', 'Customer.Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>id: </th><td><input type="text" name="id" value="{{$form->id}}"></td></tr>
            <tr><th>名称: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
            <tr><th>郵便番号: </th><td><input type="text" name="postal" value="{{$form->postal}}"></td></tr>
            <tr><th>住所: </th><td><input type="text" name="address" value="{{$form->address}}"></td></tr>
            <tr><th>電話番号: </th><td><input type="text" name="phone" value="{{$form->phone}}"></td></tr>
            <tr><th>eメール: </th><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
            <tr><th>用途: </th><td><input type="text" name="todo" value="{{$form->todo}}"></td></tr>
            <tr><th></th><td><input type="submit" value="削除"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2021
yasuko.
@endsection
