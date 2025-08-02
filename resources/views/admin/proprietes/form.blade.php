@extends('admin.admin')

@section('title', $propriete->exists? 'Modifier de Propriété' : 'Ajouter une Propriété')

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($propriete->exists ? 'admin.propriete.update' : 'admin.propriete.store', $propriete)}}" method="POST">

        @csrf   

        @method($propriete->exists ? 'PUT' : 'POST') 

        @include('partage.input', ['label' => 'Titre','name' => 'titre','value' => $propriete->titre])

        <div>
            <button class="btn btn-primary">
                @if($propriete->exists)
                    Modifier
                @else
                    Ajouter     
                @endif
            </button>
        </div>
     </form>

@endsection