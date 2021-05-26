@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    <h2 class="text-center">Fines del Poder Popular</h2>
                        <br>
                    <ul>
                        <li>
                            <p>Impulsar el fortalecimiento de la organización del pueblo, en función de
                            consolidar la democracia protagónica revolucionaria y construir las bases de la
                            sociedad socialista, democrática, de derecho y de justicia. </p>
                        </li>

                        <li>
                            <p>Generar las condiciones para garantizar que la iniciativa popular, en el
                            ejercicio de la gestión social, asuma funciones, atribuciones y competencias de
                            administración, prestación de servicios y ejecución de obras, mediante la
                            transferencia desde los distintos entes político-territoriales hacia los
                            autogobiernos comunitarios, comunales y los sistemas de agregación que de
                            los mismos surjan.</p>
                        </li>

                        <li>
                            <p>Fortalecer la cultura de la participación en los asuntos públicos para
                            garantizar el ejercicio de la soberanía popular.</p>
                        </li>

                        <li>
                            <p>Promover los valores y principios de la ética socialista: la solidaridad, el bien
                            común, la honestidad, el deber social, la voluntariedad, la defensa y protección
                            del ambiente y los derechos humanos. </p>
                        </li>

                        <li>
                            <p>Coadyuvar con las políticas de Estado en todas sus instancias, con la
                            finalidad de actuar coordinadamente en la ejecución del Plan de Desarrollo
                            Económico y Social de la Nación y los demás planes que se establezcan en
                            cada uno de los niveles políticos-territoriales y las instancias políticoadministrativas que la ley establezca. </p>
                        </li>

                        <li>
                            <p>Establecer las bases que permitan al pueblo organizado el ejercicio de la
                            contraloría social para asegurar que la inversión de los recursos públicos se
                            realice de forma eficiente para el beneficio colectivo; y vigilar que las
                            actividades del sector privado con incidencia social se desarrollen en el marco
                            de las normativas legales de protección a los usuarios y consumidores.</p>
                        </li>

                        <li>
                            <p>Profundizar la corresponsabilidad, la autogestión y la cogestión.</p>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </div>

        <div class="col-md-6">
        <div class="card-header mb-2">{{ __('Consejos Comunales') }}</div>
        @foreach ($consejoscomunales as $consejocomunal)
            <div class="card mb-4">

                <p class="ml-2">{{ $consejocomunal->name}}</p>
                <p class="ml-2">Cantidad de Familias: {{ $consejocomunal->familias}}</p>
                <p class="ml-2">Creado por:
                    <a href="{{url('users/'.$consejocomunal->created_by)}}">
                        {{ $consejocomunal->user->name}}
                    </a>
                    </p>
                <div class="card-footer">
                    Situr: {{$consejocomunal->situr}}
                </div>




            </div>
            @endforeach
            {{$consejoscomunales->links()}}
        </div>
    </div>
</div>
@endsection
