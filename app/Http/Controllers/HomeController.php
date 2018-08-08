<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelNotice;
use App\User;
use Gate;

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
    public function index(modelNotice $notices)
    {
        $notices = $notices->all(); 

       // $notices = $notices->where('user_id', auth()->user()->id)->get();

        return view('home',compact('notices'));
    }

    public function update($idNotice){
       
        $notice = ModelNotice::find($idNotice);

        //$this->authorize('update', $notice);

         if(Gate::denies('autorizar', $notice))
              abort(403,'unauthorized');
          

        return view('update',compact('notice'));
    }


}
