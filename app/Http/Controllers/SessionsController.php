<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SessionsController extends Controller
{
    /**
     * 用户登录
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        //dd($credentials);
        if(Auth::attempt($credentials)) {
            session()->flash('success', '欢迎回来');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '邮箱或密码错误，请重试~');
            return redirect()->back()->withInput();
        }
    }
}
