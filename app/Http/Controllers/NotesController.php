<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function store(Request $request)
    {
        $note = new Note;
        $note->name = $request->input('name');
        $note->content = $request->input('content');
        
        $tags = $request->input('tags');
        if (is_string($tags)) {
            $tags = explode(',', $tags);
        }
        
        $tagsString = implode(',', $tags); // Convert the array of tags back to a string
        
        $note->tags = $tagsString; // Assign the string of tags to the model
        
        $note->save();
    
        return "Note added successfully!";
    }

    public function index()
    {
        $notes = Note::all();
    
        return view('notes.index', ['notes' => $notes]);
    }

    public function show($id)
    {
        $note = Note::find($id);
    
        if ($note) {
            // Note found, return a view with the note data
            return view('notes', ['note' => $note]);
        } else {
            // Note not found, return a 404 error
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->name = $request->input('name');
        $note->content = $request->input('content');
        $note->tags = $request->input('tags');
        $note->save();
    
        return "Note updated successfully!";
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();
    
        return "Note deleted successfully!";
    }

    // In the migration file
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->string('name');
        });
    }
}
