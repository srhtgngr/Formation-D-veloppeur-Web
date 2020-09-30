@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>Bienvenue {{ Auth::user()->name }} </h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#newAnimal">Enregistrer un animal</button>
                    <button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#newMessage">Nous contacter</button>
                    <hr>
                    <h4>Vos informations personelles : </h4><br>
                    <h5>Nom : {{ Auth::user()->name }} </h5>
                    <h5>email : {{ Auth::user()->email }} </h5>
                    <h5>Compte crée le : {{ Auth::user()->created_at }}</h5>
                    <img src="{{ asset('img/profil/'.Auth::user()->avatar) }}" alt="">

                </div>
            </div>                 
        </div>
    </div>
</div>

@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="container">
    <div class="row justify-content-around mt-5">
    @if (isset($animals))
    <div class="col-12 ">
    <h4 class="row justify-content-center mb-5" >Vos compagnons</h4>
    </div>
        @foreach ($animals as $animal)
            <div class="col-12 m-2">
                <div class="card border-secondary mb-3" style="height: 300px;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4 style="text-transform: capitalize;">{{$animal->name}}</h4>
                            </div>
                            <div class="col">                            
                                <button type="button" class="btn btn-secondary " data-target="#updateAnimal">Modifier</button>
                                <button type="button" class="btn btn-secondary " data-target="#deleteAnimal">Supprimer</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-secondary">
                        <div class="row mt-2">
                            <div class="col">
                            <p>Type : {{$animal->type}}</p>
                            <p>Race : {{$animal->race}}</p>
                            </div>
                            <div class="col" style="max-width: 100%; max-height: 100%">  
                                <a href="{{asset('img/'.$animal->photoprofil)}}" alt="avatar" target="_blank">                      
                                <img src="{{asset('img/'.$animal->photoprofil)}}" width="200px" max-width="100%" max-height="100%" alt="avatar" >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>                                        
        @else
            <p>Aucun animal lié à ce compte</p>
        @endif
    <form action="" method="POST">
        {{ csrf_field() }}
        <div class="modal fade" id="newAnimal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content text-center" style="border-radius: 20px">
                    <div class="modal-body">
                        <h5 class="modal-title font-weight-bold text-white " id="exampleModalCenteredLabel">Formulaire d'enregistrement</h5>
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup"></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Nom de l'animal</div>
                            </div>
                            <input type="text" class="form-control" id="animalName" name="animalName" placeholder="Rex">
                        </div>
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup"></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Race</div>
                            </div>
                            <input type="text" class="form-control" id="animalRace" name="animalRace" placeholder="Berger Allemand">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">photo</div>
                            </div>
                            <input type="file" class="form-control" id="animalPic" name="animalPic">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-6 ml-3 text-left">
                        <div class="input-group-prepend col-8 mr-n3 h-50">
                            <div class="btn-group">
                                <div class="form-group">
                                    <label for="animalType">Choix du type de l'animal</label>
                                    <select class="form-control" name="animalType" id="animalType">
                                    <option value="chat">Chat</option>
                                    <option value="chien">Chien</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <button type="submit" name="addAnimal" class="btn btn-success col-10">Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center" style="border-radius: 20px">
                <div class="modal-body">
                    <h5 class="modal-title font-weight-bold text-white " id="exampleModalCenteredLabel">Nous contacter</h5>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup"></label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Sujet du message</div>
                        </div>
                        <input type="text" class="form-control" id="messageSujet" name="messageSujet" placeholder="Contact">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup"></label>
                    <div class="input-group mb-2">
                        <input type="textarea" class="form-control" id="messageTexte" name="messageTexte" placeholder="votre message">
                    </div>
                </div>
            <div class="row">
                <div class="modal-body">
                <button type="submit" name="sendMessage" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
