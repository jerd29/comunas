@extends('layouts.app')

@section('content')
@section('css')
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
<div class="container">
    <div class="table-responsive">
        <table class="table table-hover table-bordered" id="sampleTable">

            <thead>
                <tr>
                    <th id="filtrado"></th>
                    <th colspan="8"></th>
                </tr>
                <tr>
                    {{-- <th>Consejo Comunal</th> --}}
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>cedula</th>
                    <th>email</th>
                    <th>telefono</th>
                    <th>fecha_nacimiento</th>
                    <th>sexo</th>

                </tr>
            </thead>

        </table>
    </div>

</div>


@endsection

@section('js')

<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>


<script>
    $(document).ready(function() {
        $('#sampleTable').DataTable({
            initComplete: function() {
                this.api().columns([0]).every(function() {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo('#filtrado').on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            },
            serverSide: true,
            ajax: "{{ url('api/integrantes') }}",
            responsive: false,
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            columns: [
                
                // {
                //     "data": "fk_id_org_cc"
                // },

                // { data: 'fk_id_org_cc',
                //     render: function ( data, type, row, meta ) {
                //         if      (data == '1') { return 'CUADRA DE BOLIVAR'
                //     } else if (data == '2') { return 'GENTE TRABAJANDO POR SU COMUNIDAD'
                //     } else if (data == '3') { return 'LIDERES DE QUINTA CRESPO'
                //     } else if (data == '4') { return 'SUR 4'
                //     } else { return 'Nn'

                //     }

                //     },
                // },

                {
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "second_name"
                },

                // concatena nacionalidad y cedula
                {
                    data: null,
                    render: function(data, type, row) {
                        // Combinar campos
                        return data.nacionalidad + '-' + data.cedula;
                    }
                },

                // { "data": "cedula" },
                {
                    "data": "email"
                },
                {
                    "data": "telefono"
                },
                {
                    "data": "fecha_nacimiento"
                },
                // {
                //     "data": "sexo"
                // },

                { data: 'sexo',
                    render: function ( data, type, row, meta ) {
                        if      (data == '1') { return 'Masculino'
                    } else if (data == '0') { return 'Femenino'
                    } else { return 'Nn'

                    }

                    },
                },

            ]
        });
    });


    // Listbox en el header para elegir el consejo comunal

    $(document).ready(function() {
        $('#example').DataTable({
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.header()).empty()).on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            }
        });
    });

</script>
@endsection
