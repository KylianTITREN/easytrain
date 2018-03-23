<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Auth;
use App\User;
use App\Exercices;
use App\Muscles;

class MyController extends Controller
{

    public function login() {
        // C est ici que l on met le code
        return view('login');
    }

    public function register() {
        // C est ici que l on met le code
        return view('register');
    }

    public function edit(){
        return view('auth/edit');
    }

    public function utilisateur($id){
        $utilisateur = User::find($id);

        if($utilisateur==false)
            abort('404');

        return view('profile', ['utilisateur'=>$utilisateur]);
    }

    public function update_pics(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->orientate()->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }


        // Handle the user upload of bannier
        if($request->hasFile('banniere')){
            $banniere = $request->file('banniere');
            $filename = time() . '.' . $banniere->getClientOriginalExtension();
            Image::make($banniere)->orientate()->blur(40)->save( public_path('/uploads/banniere/' . $filename ) );


            $user = Auth::user();
            $user->banniere = $filename;
            $user->save();
        }

        return view('profile', ['utilisateur'=>$user] );

    }

    public function suivi($id){
        $utilisateur = User::find($id);

        if($utilisateur==false){
            return redirect('/');
        }

        Auth::user()->follow()->toggle($id);
        return back();
    }

    public function recherche($s){
        $users = User::whereRaw("name LIKE CONCAT(?,'%')", [$s])->get();

        return view('recherche', ['utilisateur'=>$users]);
    }

    public function program()
    {
        return view('program');
    }

    public function muscles()
    {
        $muscles = Muscles::all();
        if($muscles == false) abort(404);
        return view('muscles', ['muscles'=>$muscles]);
    }

    public function exercices($id)
    {
        $exercices = Exercices::find($id);
        if($exercices == false) abort(404);
        return view('exercices', ['exercices'=>$exercices]);
    }

}
