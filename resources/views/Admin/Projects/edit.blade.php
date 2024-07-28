@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-12">
            <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST" id="creation_form">
                @method("PUT")
                @csrf

                <div class="input-group-sm container mb-5 w-50">

                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome progetto" id="nome" name="nome" value="{{ old('nome', $project->nome) }}">


                    <label for="linguaggio">linguaggio</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="linguaggio" id="linguaggio" name="linguaggio" value="{{ old('linguaggio', $project->linguaggio) }}">

                    <label for="url_repository">url repository</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="url repository" id="url_repository" name="url_repository" value="{{ old('url_repository', $project->url_repository) }}">



                    <div class="d-flex justify-content-between mt-3">

                            <input class="btn btn-primary" type="submit" value="Modifica">
                            <input class="btn btn-warning" type="reset" value="resetta campi">

                    </div>
                </div>
            </form>
            <a href="{{ route('admin.projects.index')}}" class="card-link d-flex justify-content-center">Torna alla lista dei progetti</a>
        </div>

    </div>
</div>
@endsection
