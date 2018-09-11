<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exercices;
use App\Program;
use App\Publication;

class SearchController extends Controller

{

    public function search(Request $request)

    {

        $search = $request->id;

        if (is_null($search))
        {
            return view('search');
        }
        else
        {
            $users = User::whereRaw("name LIKE CONCAT(?,'%')", [$search])->get();
            $publication = Publication::whereRaw("title LIKE CONCAT(?,'%')", [$search])->get();
            $exercices = Exercices::whereRaw('nom LIKE CONCAT(?, "%")', [$search])->get();
            $programmes = Program::whereRaw('nom LIKE CONCAT(?, "%")', [$search])->get();

            return view('_search', ['utilisateur' => $users, 'publication' => $publication, 'exercices' => $exercices, 'programmes' => $programmes]);
        }

    }

}
