@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $consejocomunal->name }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            <li>
                                <p>Familias: {{ $consejocomunal->familias }}</p>

                            </li>

                            <li>
                                <p>Situr: {{ $consejocomunal->situr }}</p>

                            </li>

                            <li>
                                <p>Integrantes: {{ $consejocomunal->integrantes }}</p>

                            </li>
                        </ul>

                        <hr>

                        @if ($consejocomunal->created_by === auth()->id())
                            <a href="{{ url('/consejoscomunales/' . $consejocomunal->id . '/edit') }}"
                                class="btn btn-primary">
                                Editar Consejo Comunal
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
