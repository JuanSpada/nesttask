@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Task</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- imprimimos errores de la validacion --}}
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>

                    <form action="" class="three columns" id="createTask" name="createTask" method="POST">
                        @csrf
                        <label for="task">Nombre:</label>
                        <input type="text" placeholder="Google Ads  y..." name="task">
                        <label for="date">Vencimiento:</label>
                        <input type="text" placeholder="Vencimiento" name="date">
                        <label for="empresa">Empresa:</label>
                        <input type="text" placeholder="Nombre de la Empresa" name="empresa">
                        <button type="submit">Crear</button>
                    </form>

                </div>
            </div>
        </div>
    </div>





</div>

@endsection
