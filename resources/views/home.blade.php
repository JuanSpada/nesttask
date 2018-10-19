@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{-- Tabla de las Task --}}
        <table class="u-full-width">
                <thead>
                  <tr>
                    <th>Task</th>
                    <th>Empresa</th>
                    <th>Usuario</th>
                    <th>Vencimiento</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($task->all() as $tasks)
                  <tr>
                    <td>{{$tasks->contenido}}</td>
                    <td>{{$tasks->empresa}}</td>
                    <td>{{$tasks->user_id}}</td>
                    <td>En construccion</td>
                  </tr>
                @endforeach
                </tbody>
            </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
