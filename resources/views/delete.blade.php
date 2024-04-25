{{-- resources/views/delete-note-form.blade.php --}}

@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('notes.deleteById') }}" method="POST">
    @csrf
    <div>
        <label for="note_id">Note ID:</label>
        <input type="number" name="note_id" id="note_id" required>
    </div>
    <div>
        <button type="submit">Delete Note</button>
    </div>
</form>