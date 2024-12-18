@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Liste des Cours</h1>
        <a href=" {{route('courses.create')}} " class="btn btn-info">Ajouter Un Cours</a>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($courses as $course)
            <tr>
                <th scope="row">{{ $course->id }}</th>
                <td>{{ $course->name }} </td>
                <td>{{ $course->description}} </td>
                <td>
                    <a href="" class="btn btn-info">Voir</a>
                    <a href="" class="btn btn-info">Modifier</a>
                    <a href="" class="btn btn-info">Supprimer</a>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
   </div>
@endsection
