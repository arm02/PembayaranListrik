<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome(){
        return view('welcome');
    }
    public function index()
    {
        return view('home');
    }

    public function user(){
        $user = User::All();
        return view('user.index')->with('user',$user);
    }

    public function add(){
        return view('user.add');
    }

    public function save(Request $r){
        $user = new User;
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->save();
        return redirect(url('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.edit')->with('user',$user);
    }

    public function update(Request $r)
    {
        $user = User::find($r->input('id'));
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->save();
        return redirect(url('user'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect(url('user'));
    }
}
