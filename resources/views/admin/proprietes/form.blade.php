@extends('admin.admin')

@section('title', $propriete->exists? 'Modifier de Propriété' : 'Ajouter une Propriété')

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($propriete->exists ? 'admin.propriete.update' : 'admin.propriete.store', $propriete)}}" method="POST">

        @csrf   

        @method($propriete->exists ? 'PUT' : 'POST') 

        <div class="row">
            <div class="col row">
                @include('partage.input', ['class'=>'col', 'label' => 'Titre','name' => 'titre','value' => $propriete->titre])
            </div>
            <div class="col row">
                @include('partage.input', ['class'=>'col', 'label' => 'surface','name' => 'surface','value' => $propriete->surface])
            </div>
        </div>
    
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