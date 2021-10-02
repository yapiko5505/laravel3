<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('customers')->get();
        return view('customer.index', ['items' => $items]);
    }


    public function add(Request $request)
    {
        return view('customer.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'postal' => $request->postal,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'todo' => $request->todo,
            
        ];
        DB::table('customers')->insert($param);
        return redirect('/customer');
    }

    public function edit(Request $request) 
    {
        $item = DB::table('customers')
            ->where('id', $request->id)->first();
            return view('customer.edit',['form' => $item]);       
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'postal' => $request->postal,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'todo' => $request->todo,
            
        ];
        DB::table('customers')
            ->where('id', $request->id)
            ->update($param);
            return redirect('/customer');
    }

    public function del(Request $request) 
    {
        $item = DB::table('customers')
            ->where('id', $request->id)->first();
            return view('customer.edit',['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('customers')
            ->where('id', $request->id)->delete();
            return redirect('/customer');
    }
}
