@extends('layouts.layoutapp')

@section('title', 'Customers.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="" method="post" class="form-horizontal">
        @csrf
        <table>
        {{ csrf_field() }}
        {{ method_field('patch') }}
            @if ($errors->has('name'))
            <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>名称: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @if ($errors->has('postal'))
            <tr><th>ERROR</th><td>{{$errors->first('postal')}}</td></tr>
            @endif
            <tr><th>郵便番号: </th><td><input type="text" name="postal" value="{{old('postal')}}"></td></tr>
            @if ($errors->has('address'))
            <tr><th>ERROR</th><td>{{$errors->first('address')}}</td></tr>
            @endif
            <tr><th>住所: </th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
            @if ($errors->has('phone'))
            <tr><th>ERROR</th><td>{{$errors->first('phone')}}</td></tr>
            @endif
            <tr><th>電話番号: </th><td><input type="text" name="phone" value="{{old('phone')}}"></td></tr>
            @if ($errors->has('email'))
            <tr><th>ERROR</th><td>{{$errors->first('email')}}</td></tr>
            @endif
            <tr><th>eメール: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
            @if ($errors->has('todo'))
            <tr><th>ERROR</th><td>{{$errors->first('todo')}}</td></tr>
            @endif
            <tr><th>用途: </th><td><input type="text" name="todo" value="{{old('todo')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="登録"></td></tr>
        </table>
    </form>



@endsection

@section('footer')
copyright 2021
yasuko.
@endsection