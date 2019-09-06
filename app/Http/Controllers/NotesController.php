<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class NotesController extends Controller
{

    public function getIndex(){
      // Conseguir notas
      $notes = DB::table('notes')->get();

      return view('notes.index', array(
        "notes"=>$notes
      ));

    }
}
