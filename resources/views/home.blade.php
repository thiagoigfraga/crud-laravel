
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ToDo</title>
</head>
<body>
    <h1>ToDo</h1>

    <form action="/create" method="POST">
        <label for="tarefa">Nome da Tarefa:</label>
        <br>
        <input type="text" name="tarefa" id="tarefa">
        <br>
        <input type="submit" value="Create">
    </form>

    <br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tarefa 1</td>
            </tr>
        </tbody>
    </table>

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
