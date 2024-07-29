@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-12">
            <form action="@yield('form-action')" method="POST" id="creation_form">
                @yield('form-method')
                @csrf
                <div class="mb-3">
                    <h2>
                        @yield('page-title')
                    </h2>
                </div>
                <div class="input-group-sm container mb-5 w-50">

                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome progetto" id="nome" name="nome" value="{{ old('nome') }}">


                    <label for="linguaggio">Linguaggio</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Linguaggio" id="linguaggio" name="linguaggio" value="{{ old('linguaggio') }}">

                    <label for="url_repository">Url_repository</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="url_repository" id="url_repository" name="url_repository" value="{{ old('url_repository') }}">
                    <div class="d-flex justify-content-between mt-3">

                            <input class="btn btn-primary" type="submit" value="@yield('page-title')">
                            <input class="btn btn-warning" type="reset" value="Clear">

                    </div>
                </div>
            </form>
            <a href="{{ route('admin.projects.index')}}" class="card-link d-flex justify-content-center">Torna alla lista dei progetti</a>
        </div>

    </div>
</div>
@endsection
