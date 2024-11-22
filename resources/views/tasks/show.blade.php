@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la Tâche</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $task->description }}</p>
            <p class="card-text"><strong>Priorité:</strong> {{ $task->priority }}</p>
            <p class="card-text"><strong>Date limite:</strong> {{ $task->due_date }}</p>
            <p class="card-text"><strong>Statut:</strong> {{ $task->status ? 'Terminée' : 'Ouverte' }}</p>
            <p class="card-text"><strong>Créée le:</strong> {{ $task->created_at }}</p>
            <p class="card-text"><strong>Dernière mise à jour:</strong> {{ $task->updated_at }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Modifier</a>
        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')">Supprimer</button>
        </form>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
</div>
@endsection

