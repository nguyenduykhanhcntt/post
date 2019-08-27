<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
	protected $rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:6'
    		];

    protected $messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    	];


    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->get('email');
		$pass = $request->get('password');
		$this->validate($request, $this->rules, $this->messages);

		if( Auth::attempt(['email' => $email, 'password' =>$pass])) {
			return view('index');
		}else {
			return 'Tài khoản không tồn tại để đăng nhập <a href="login">Quay Lại</a>';
		}
	}
}
