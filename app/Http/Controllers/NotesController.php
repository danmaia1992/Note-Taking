<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Note;
use App\Http\Requests;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('pages.home', compact('notes'));
    }

    public function show(Note $note)
    {
        return view('pages.show', compact('note'));
    }

    public function submission(Request $request, Note $note)
    {
        $note->name = $request->input('body');
        $note->save();
        return back();
    }

}
