<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request['username'];
        $user->email = $request['email'];
        $user->password = $request['password'];
       // $user->remember_token = 'j,hsbdljhcbdsyclysdhbclysdcbjxnč';
        $user->save();

        return redirect()->route('users.index')->withFlashMessage('Uspješno ste dodali novog korisnika.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
       
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user_1 = $this->show($id);

      //dd($user_1);


      $user->name = $user_1['name'];
      $user->email = $user_1['email'];
      $user->password = $user_1['password'];
     // $user->remember_token = 'j,hsbdljhcbdsyclysdhbclysdcbjxnč';
      $user->save();

      return redirect()->route('users.index')->withFlashMessage('Uspješno ste editirali postojećeg korisnika.');
    }
       
      //  $user->save();

      //  return redirect()->route('users.index')->withFlashMessage('Uspješno ste dodali starog korisnika.');
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
