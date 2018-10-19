@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    TASKS DE NEST
                </div>
            </div>
        </div>
    </div>

        {{-- imprimimos errores de la validacion --}}
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>

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

        <form action="" class="one columns" id="createTask" name="createTask" method="POST">
            @csrf
            <label for="task">Task:</label>
            <input type="text" placeholder="Google Ads  y..." name="task">
            <label for="date">Vencimiento:</label>
            <input type="text" placeholder="Vencimiento" name="date">
            <label for="empresa">Empresa:</label>
            <input type="text" placeholder="Nombre de la Empresa" name="empresa">
            <button type="submit">Crear</button>
        </form>




</div>

@endsection
