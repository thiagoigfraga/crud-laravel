
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ToDo</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Criar Nota</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('notes.index') }}">Todas as Notas</a></li>
        </ul>
    </nav>

    <h1>ToDo</h1>

    <form action="{{ route('notes.store') }}" method="post">
    @csrf <!-- Include CSRF token for Laravel -->
    <label for="name">Nome:</label><br>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="content">Conteúdo:</label><br>
    <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
    
    <label for="tags">Tags (separadas-por-vírgula):</label><br>
    <input type="text" id="tags" name="tags"><br><br>
    
    <input type="submit" value="Enviar">
</form>

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


<br>

</body>
</html>
