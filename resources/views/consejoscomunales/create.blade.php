@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registra un nuevo Consejo Comunal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('consejocomunal')}}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del Consejo Comunal</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="situr" class="col-md-4 col-form-label text-md-right">Situr</label>

                            <div class="col-md-6">
                                <input id="situr" type="text" class="form-control @error('situr') is-invalid @enderror" name="situr" value="{{ old('situr') }}" required autocomplete="situr" autofocus>

                                @error('situr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number_integrantes" class="col-md-4 col-form-label text-md-right">Numero de integrantes</label>

                            <div class="col-md-4">
                                <input id="number_integrantes" type="text" class="form-control @error('number_integrantes') is-invalid @enderror" name="number_integrantes" value="{{ old('number_integrantes') }}" required autocomplete="number_integrantes" autofocus>

                                @error('number_integrantes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number_familias" class="col-md-4 col-form-label text-md-right">Numero de Familias</label>

                            <div class="col-md-4">
                                <input id="number_familias" type="text" class="form-control @error('number_familias') is-invalid @enderror" name="number_familias" value="{{ old('number_familias') }}" required autocomplete="number_familias" autofocus>

                                @error('number_familias')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
