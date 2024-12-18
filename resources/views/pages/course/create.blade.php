@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{route('courses.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Entrez le nom du cours" required>
                <span class="text-small text-warning">@error('name') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Telecharger une image:</label>
                <input type="file" class="form-control" id="image" accept="image/*" value="{{old('image')}}" name="image" placeholder="Ajoutez une image" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description du cours</label>
                <textarea class="form-control" id="description" name="description" value="{{old('description')}}" rows="3"></textarea>
            </div>

            <div class="mb-5">
                <button class="btn btn-info" type="submit">Enregistrer</button>
            </div>
        </form>
    </div>

@endsection

