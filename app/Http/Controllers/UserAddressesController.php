<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        //我们把当前用户下的所有地址作为变量 $addresses 注入到模板 user_addresses.index 中并渲染
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }
}
