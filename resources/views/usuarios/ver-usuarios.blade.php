@extends('adminlte::page')

@section('title', 'Emssanar_weap')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <center><h1>USUARIOS</h1></center>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Correo</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>    
@stop
<!--Para busquedas con ajax-->
<!--composer require yajra/laravel-datatables-oracle-->

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#usuarios').DataTable({
                responsive: true,
                autoWidth:false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "No hay regitros",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate":{
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "ajax": "{{route('datatable.user')}}",
            "columns": [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'}
            ]

        } );
    </script>
    <!--<script> console.log('Hi!'); </script>-->
@stop