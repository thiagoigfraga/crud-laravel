
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ToDo</title>
</head>
<body>
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

    <br>

    <form action="/update" method="POST">
        <label for="id">ID:</label>
        <br>
        <input type="number" name="id" id="id">
        <br>
        <label for="tarefa">Alteração:</label>
        <br>
        <input type="text" name="name" id="name">
        <br>
        <input type="submit" value="Update">
    </form>

    <br>

    <form action="/delete" method="POST">
        <label for="id">ID:</label>
        <br>
        <input type="number" name="id" id="id">
        <br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>
