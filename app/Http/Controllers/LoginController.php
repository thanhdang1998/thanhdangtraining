<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\tabuser;
use Carbon\Carbon;

class LoginController extends Controller
{
    /**
     * Show display page logout 
     *
     * @param 
     * @param 
     * @return view
     */
    public function Login()
    {
        if(Auth::user())
        {
            return redirect()->route('sanpham');
        }
        else
        {
            return view('backend.dangnhap.dangnhap');
        }
        
    }

    /**
    * Check login
    *
    * @param varchar email
    * @param varchar pass
    * @param formloginRequest $rq
    * @return 
    */
    public function postLogin(Request $rq)
    {
        $rq->validate
        (
            [
                'email' =>'required|email',
                'pass' =>'required',
            ],

            [
                'email.required' => 'Thuộc tính không được để trống',
                'email.email' => 'Phải đúng định dạng email',
                'pass.required' => 'Thuộc tính không được để trống',
            ],
        );
        $remember = $rq->remember_me;
        if(Auth::attempt(['email' => $rq->email, 'password' => $rq->pass],$remember))
        {
            $rq->session()->regenerate();
            $tim = tabuser::where('email','=',$rq->email)->first();
            if($tim->group_role == 'Admin')
            {
                $tim->last_login_at = Carbon::now('Asia/Ho_Chi_Minh');
                $tim->last_login_ip = $rq->ip();
                $tim->save();
            }
            return redirect()->route('sanpham');
        }
        else
        {
            $tim = tabuser::where('email','=',$rq->email)->first();
            if(!$tim)
            {
                return redirect()->route('login')->withErrors([
                    'loimail' => 'Email hoặc mật khẩu không chính xác.',
                ]);
            }
            else
            {
                return back()->withErrors([
                    'loimail' => 'Email hoặc mật khẩu không chính xác.',
                ]);
            }
        }
    }

    /**
    * Logout account
    *
    * @param 
    * @param 
    * @return RedirectRoute
    */
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
