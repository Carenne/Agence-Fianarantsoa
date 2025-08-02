@extends('admin.admin')

@section('title', 'Toutes les biens')

@section('content')

        <div class="d-flex justify-content-between align-items-center">
            <h1>@yield('title')</h1>
            <a href="{{ route('admin.propriete.create') }}" class="btn btn-primary">Ajouter un bien</a>
        </div>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proprietes as $propriete)
                    <tr>
                        <td>{{ $propriete->id }}</td>
                        <td>{{ $propriete->nom }}</td>
                        <td>{{ $propriete->description }}</td>
                        <td>
                            <!-- Actions can be added here -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection