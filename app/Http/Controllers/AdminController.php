<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
                //echo "Falhou";
                //die;
                return redirect('/admin')->with('flash_message_error',  'Usuário e/ou senha inválidos');
            }
        }
            return view('admin.admin_login');
        }

        public function dashboard()
        {
            //echo "teste";die;
            return view('admin.dashboard');
        }

    public function logout()
    {
        Session::flush();
        return \redirect('/admin')->with('flash_message_success',  'Usuário deslogado com sucesso.');
    }
}
