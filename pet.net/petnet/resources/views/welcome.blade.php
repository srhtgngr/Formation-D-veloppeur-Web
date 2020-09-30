@extends('layouts.app')

@section('content')

<div class="container-fluid justify-content-between">
    <div class="row">
        <div class="col-lg p-3 mb-3">
            <img src="{{URL::asset('/img/logo.png')}}" alt="logo pet.net" width="50%">
            <p>Voici la liste non exhaustive des services que nous pouvons fournir à vos compagnons:</p>
            <ul>
                <dt>Veterinaire</dt>
                    <ul>
                        <li>Interventions chirurgicales</li>
                        <li>Vaccinations</li>
                        <li>Traitements médicamenteux</li>
                        <li>Soins esthétiques</li>
                    </ul>
                <dt>Nourriture</dt>
                    <ul>
                        <span class="text-muted"><em>Vous pourrez choisir sa nourriture préférée</em></span>
                    </ul>
                <dt>Nettoyage</dt>
                    <ul>
                        <span class="text-muted"><em>En fonction du besoin</em></span>
                    </ul>
                <dt>Quotidien</dt>
                    <ul>
                        <li>Surveillance vidéo du box ou de la cage</li>
                        <li>Surveillance vidéo du parc</li>
                        <li>Visio Maître/Animal sur rendez-vous</li>
                        <li>Géolocalisation de votre animal</li>
                    </ul>
            </ul>
        </div>
        <aside class="col-sd rounded mt-4 ml-4 mb-5 mr-2 p-3 ">
            <div class="calendar p-4">
            <iframe src="http://winky.fr/winky_widget_calendar/?wid=0" style="width: 300px; height: 400px; border: none; border-radius: 10px;"></iframe>
            </div>
        </aside>
    </div>
</div>
    

@endsection




