<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
// Inside NotesController.php

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'content' => 'required|string',
        'tags' => 'nullable|string',
    ]);

    $note = new Note;
    $note->name = $validatedData['name'];
    $note->content = $validatedData['content'];
    
    // Handle tags if provided
    $tags = $validatedData['tags'] ? explode(',', $validatedData['tags']) : [];
    $note->tags = implode(',', $tags); // Assign the string of tags to the model
    
    $note->save();

    return redirect()->route('notes.index')->with('success', 'Note added successfully!');
}

    public function index()
    {
        $notes = Note::all();
    
        return view('notes.index', ['notes' => $notes]);
    }

public function show($id)
{
    try {
        $note = Note::findOrFail($id);
        return view('note', ['note' => $note]);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        // Tratar o caso em que a nota com o ID especificado não existe
        return redirect()->route('notes.index')->with('error', 'Note not found.');
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

public function destroy(Request $request)
{
    return view('deleteView', ['note' => $notes]);
}

public function deleteById(Request $request)
{
    $noteId = $request->input('note_id');
    $note = Note::find($noteId);

    if ($note) {
        $note->delete();
        return redirect()->back()->with('success', 'Note deleted successfully.');
    }

    return redirect()->back()->with('error', 'Note does not exist.');
}


    // In the migration file
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->string('name');
        });
    }
}
