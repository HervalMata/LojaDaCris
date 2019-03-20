<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(
                [
                    'email' => $data['email'],
                    'password' => $data['password'],
                    'admin' => '1'
                ]
            )
            ) {
                //echo "Sucesso";
                //die;
                return redirect::action('AdminController@dashboard');
            } else {
                echo "Falhou";
                die;
            }
        }
            return view('admin.admin_login');
        }

        public function dashboard()
        {
            //echo "teste";die;
            return view('admin.dashboard');
        }
}
