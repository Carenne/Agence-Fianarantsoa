@extends('admin.admin')

@section('content')
    
        <h1>Liste des bien</h1>
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