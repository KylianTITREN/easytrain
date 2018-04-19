<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;
use App\Exercices;
use App\Muscles;
use App\Publication;
use Intervention\Image\Facades\Image;

class MyController extends Controller
{

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function timer() {
        return view('timer');
    }

    public function edit(){
        return view('auth/edit', ['utilisateur'=>Auth::user()]);
    }

    public function followers($id) {
        $utilisateur = User::find($id);

        return view('followers', ['utilisateur' => $utilisateur]);
    }

    public function follows($id) {
        $utilisateur = User::find($id);

        return view('follows', ['utilisateur' => $utilisateur]);
    }

    public function accueil(){

        $ids = Auth::user()->follow->pluck('id');

        $publication = Publication::whereIn('utilisateur_id', $ids)->orWhere('utilisateur_id', '=', Auth::user()->id)->get();

        return view('accueil', ['publication' => $publication, 'utilisateur' => User::all()]);
    }

    public function nouvelle(){
        return view('nouvelle');
    }

    public function nouvelle2(){
        return view('nouvelle2');
    }

    public function prog($id){
        $utilisateur = User::find($id);
        $programmes = Program::all();

        return view('programmes', ['programmes'=>$programmes, 'utilisateur' => $utilisateur]);
    }

    public function creer(Request $req){

        $p = new Publication();
        $p->title = $req->input('nom');
        $p->utilisateur_id = Auth::id();

        if($req->hasFile('photo') && $req->file('photo')->isValid()){

            $p->photo = $req->file('photo');
            $filename = time() . '.' . $p->photo->getClientOriginalExtension();
            Image::make($p->photo)->orientate()->save( public_path('/uploads/publi_photo/' . $filename ) );
            $p->photo = $filename;

        }

        $p->save();

        $ids = Auth::user()->follow->pluck('id');

        $publication = Publication::whereIn('utilisateur_id', $ids)->orWhere('utilisateur_id', '=', Auth::user()->id)->get();

        return redirect('/accueil')->with(['publication' => $publication]);
    }

    public function programmeur(Request $req){

        $p = new Program();
        $p->nom = $req->input('nom');
        $p->description = $req->input('desc');
        $p->niveau = $req->input('niveau');
        $p->objectif = $req->input('objectif');
        $p->durée = $req->input('time');
        $p->utilisateur_id = Auth::id();

        if($req->hasFile('cover')){

            $p->cover = $req->file('cover');
            $filename = time() . '.' . $p->cover->getClientOriginalExtension();
            Image::make($p->cover)->orientate()->save( public_path('/uploads/program_photo/' . $filename ) );
            $p->cover = $filename;

        }

        $p->save();

        $id = $p->id;

        return redirect('/programmes/'.$id);
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
            Image::make($banniere)->brightness(-15)->orientate()->save( public_path('/uploads/banniere/' . $filename ) );


            $user = Auth::user();
            $user->banniere = $filename;
            $user->save();
        }

        if($request->has('name')){
            $user = Auth::user();
            $user->update([
                'name' => $request->input('name')
            ]);
        }

        if($request->has('biographie')){
            $user = Auth::user();
            $user->update([
                'biographie' => $request->input('biographie')
            ]);
        }

        if($request->has('niveau_id')){
            $user = Auth::user();
            $user->update([
                'niveau_id' => $request->input('niveau_id')
            ]);
        }

        if($request->has('objectif_id')){
            $user = Auth::user();
            $user->update([
                'objectif_id' => $request->input('objectif_id')
            ]);
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
        $exercices = Exercices::whereRaw('nom LIKE CONCAT(?, "%")', [$s])->get();
        $programmes = Program::whereRaw('nom LIKE CONCAT(?, "%")', [$s])->get();

        return view('recherche', ['utilisateur'=>$users, 'publication'=>$publication, 'exercices'=>$exercices, 'programmes'=>$programmes]);
    }

    public function muscles()
    {
        $muscles = Muscles::all();
        $programmes = Program::where('niveau', '=', Auth::user()->niveau_id)->orWhere('objectif', '=', Auth::user()->objectif_id)->get();

        if($muscles == false) abort(404);

        return view('program', ['muscles'=>$muscles, 'programmes'=>$programmes]);
    }

    public function exercices($id)
    {
        $muscle= Muscles::find($id);

        if($muscle == false) abort(404);

        return view('exercices', [ 'muscle'=>$muscle]);
    }

    public function fiche_exercices($id)
    {
        $exercices= Exercices::find($id);

        if($exercices == false) abort(404);

        return view('fiche_exercices', [ 'exercices'=>$exercices]);
    }

    public function fiche_programmes($id)
    {
        $programmes = Program::find($id);

        if($programmes == false) abort(404);

        return view('fiche_programmes', [ 'programmes'=>$programmes]);
    }

    public function delete($id)
    {

        Publication::where('id', $id)->delete();

        return back();

    }

    public function deleteprog($id)
    {

        $idd = Auth::user()->id;

        Program::where('id', $id)->delete();

        return redirect('/prog/'.$idd);

    }

    public function liker($id){

        $publication = Publication::find($id);

        $utilisateur = Auth::user();

        $utilisateur->like($publication);
        $publication->likeBy(); // current user
        $publication->likeBy($utilisateur->id);

        return back();

    }

    public function unliker($id){

        $publication = Publication::find($id);

        $utilisateur = Auth::user();

        $utilisateur->unlike($publication);
        $publication->unlikeBy(); // current user
        $publication->unlikeBy($utilisateur->id);

        return back();

    }public function liker2($id){

    $programme = Program::find($id);

    $utilisateur = Auth::user();

    $utilisateur->like($programme);
    $programme->likeBy(); // current user
    $programme->likeBy($utilisateur->id);

    return back();

}

    public function unliker2($id){

        $programme = Program::find($id);

        $utilisateur = Auth::user();

        $utilisateur->unlike($programme);
        $programme->unlikeBy(); // current user
        $programme->unlikeBy($utilisateur->id);

        return back();

    }
}
