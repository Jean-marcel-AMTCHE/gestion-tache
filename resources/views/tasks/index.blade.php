@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mes Tâches</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Nouvelle Tâche</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Priorité</th>
                <th>Date limite</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ Str::limit($task->description, 30) }}</td>
                <td>{{ $task->priority }}</td>
                <td>{{ $task->due_date }}</td>
                <td>
                    <form action="{{ route('tasks.toggle-status', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-sm {{ $task->status ? 'btn-success' : 'btn-secondary' }}">
                            {{ $task->status ? 'Terminée' : 'Ouverte' }}
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('tasks.show', $task) }}" class="btn btn-sm btn-info">Voir</a>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

