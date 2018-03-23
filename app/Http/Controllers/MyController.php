<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Image;
use Auth;
use App\User;
use App\Exercices;
use App\Muscles;
use App\Publication;

class MyController extends Controller
{

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function edit(){
        return view('auth/edit');
    }

    public function accueil(){
        return view('accueil', ['publication' => Publication::all(), 'utilisateur'=>User::all()]);
    }

    public function nouvelle(){
        return view('nouvelle');
    }

    public function creer(Request $req){

        $validator = Validator::make($req->all(), [
            'nom'=>'required|min:6'
        ]);

        if($validator->fails()){
            return redirect('/nouvelle')
                ->withErrors($validator)
                ->withInput();
        }

        if($req->hasFile('photo') && $req->file('photo')->isValid()){
            $p = new Publication();
            $p->title = $req->input('nom');
            $p->album_id = 1;
            $p->size = 1;
            $p->utilisateur_id= Auth::id();

            $p->photo = $req->file('photo')->store('public/photo/'.Auth::id());
            $p->photo = str_replace("public/", "/storage/", $p->photo);
            $p->save();

        }
        return view('accueil', ['publication' => Publication::all()]);
    }

    public function utilisateur($id){
        $utilisateur = User::find($id);

        if($utilisateur==false)
            abort('404');

        return view('profile', ['utilisateur'=>$utilisateur, 'publication'=> Publication::all()]);
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
        $publication = Publication::whereRaw("title LIKE CONCAT(?,'%')", [$s])->get();

        return view('recherche', ['utilisateur'=>$users, 'publication'=>$publication]);
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

    public function delete($id)
    {

        Publication::where('id', $id)->delete();

        return back();

    }

}
