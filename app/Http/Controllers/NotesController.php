<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class NotesController extends Controller
{

    public function getIndex(){
      // Conseguir notas
      $notes = DB::table('notes')->orderBy('id','desc')->get();

      return view('notes.index', array(
        "notes"=>$notes
      ));

    }
    public function getNote($id){
      //Conseguir una nota concreta
      $note = DB::table('notes')->select('id','title','description')->where('id',$id)->first();

      if(empty($note)){
        return redirect()->action('NotesController@getIndex');
      }
      return view('notes.note', array(
        'note'=>$note
      ));
    }
    public function postNote(Request $request){
    $note= DB::table('notes')->insert(array(
        'title'=>$request->input('title'),
        'description'=>$request->input('description')
      ));
      return redirect()->action('NotesController@getIndex');
    }
    public function getSaveNote(){
      return view('notes.saveNote');
    }
    public function getDeleteNote($id){
      //Eliminar una nota concreta
      $note = DB::table('notes')->where('id',$id)->delete();

        return redirect()->action('NotesController@getIndex')->with('status','Nota borrada con exito');
      }
  }
