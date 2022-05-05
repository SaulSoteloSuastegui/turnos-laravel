
@section('css')

<link href="{{ asset('datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">

<!--<link href="{{ asset('https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">-->
@endsection
@extends('layouts')

@section('conten')
<!-- Button to Open the Modal -->

<br>
<div class="container">
@include('turno.crear')
    <div class="card">
        <table id="example"   class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>id</th>
                <th>Numero de investigación</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
            </tbody>
        </table>

    </div>
</div>    





@endsection


@section('js')
<script src="{{ asset('datatable/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection