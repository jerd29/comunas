@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>My entries:</p> 

                   <ul>
                        @foreach($consejoscomunales as $consejocomunal)
                        <li>
                            <a href="{{url('consejoscomunales/'.$consejocomunal->id)}}">{{ $consejocomunal->name}}</a>
                        </li>
                        @endforeach
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
