@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-12">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome del progetto</th>
                        <th scope="col">Linguaggio utilizzato</th>
                        <th scope="col">link alla repository</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)

                    <tr>
                        <th scope="row">{{ $project->id}}</th>
                        <td>{{ $project->nome}}</td>
                        <td>{{ $project->linguaggio}}</td>
                        <td><a href=" {{ $project->url_repository}}">Click per visualizzare</a></td>
                        <td>

                            <a href="{{ route('admin.project.show', ['project' => $project->id]) }}" class="btn btn-primary d-flex justify-content-center">Mostra</a>
                            <a href="{{ route('admin.project.edit', ['project' => $project->id]) }}" class="btn btn-primary d-flex justify-content-center">Modifica</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>

    </div>
</div>
@endsection
