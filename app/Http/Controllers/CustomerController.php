<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function getIndex(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Customer::query();

        if(!empty($keyword))
        {
             $query->where('name', 'like', '%'.$keyword.'%');
        }
        $items = $query->orderBy('id')->simplepaginate(5);
        return view('customer.list')->with('items', $items)->with('keyword', $keyword);
    }

    public function new_index()
    {
        return view('customer.new_index');
    }

    public function new_confirm(\App\Http\Requests\CustomerRequest $request)
    {
        $data = $request->all();
        return view('customer.new_confirm')->with($data);
    }

    public function new_finish(Request $request)
    {
        // customerオブジェクト生成
        $item = new Customer;
 
        // 値の登録
        $item->name = $request->name;
        $item->postal = $request->postal;
        $item->address = $request->address;
        $item->phone = $request->phone;
        $item->email = $request->email;
        $item->todo = $request->todo;
 
        // 保存
        $item->save();
 
        // 一覧にリダイレクト
        return redirect()->to('customer/list');
    }

    public function edit_index($id)
    {
        $form = Customer::findOrFail($id);
        return view('customer.edit_index')->with('form',$form);
    }

    public function edit_confirm(\App\Http\Requests\CustomerRequest $request)
    {
        $data = $request->all();
        return view('customer.edit_confirm')->with($data);
    }

    public function edit_finish(Request $request, $id)
    {
        // customerオブジェクト生成
        $item = Customer::findOrFail($id);

        // 値の登録
        $item->name = $request->name;
        $item->postal = $request->postal;
        $item->address = $request->address;
        $item->phone = $request->phone;
        $item->email = $request->email;
        $item->todo = $request->todo;

        // 保存
        $item->save();

        // 一覧にリダイレクト
        return redirect()->to('customer/list');
    }

    public function delete(Request $request)
    {
        $customer = Customer::find($request->id);
        return view('customer.delete', ['form' => $customer]);
    }   

    public function remove(Request $request)
    {   
        $customer = Customer::find($request->id);
        $customer->delete();
        return redirect()->to('customer/list');
    }
}