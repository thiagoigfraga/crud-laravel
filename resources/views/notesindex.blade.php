
<h1>Todas as Notas</h1>
<ul>
    @foreach($notes as $note)
        <li>
            <h2>{{ $note->name }}</h2>
            <p><strong>Conteúdo:</strong> {{ $note->content }}</p>
            <p><strong>Tags:</strong> {{ $note->tags }}</p>
        </li>
    @endforeach
</ul>