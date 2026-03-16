<!-- adminLTE - DE POR SÍ, TE OBLIGA A INICIAR SESIÓN PARA ENTRAR-->
@extends('adminlte::page')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Formulario para añadir datos a la tabla -->
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="titulo">
        <input type="text" name="descipcion" placeholder="descipcion">
        <input type="text" name="prioridad" placeholder="prioridad">
        <input type="text" name="tecnico" placeholder="tecnico">
        <button type="submit">Guardar</button>
    </form>

    <hr>

    <!-- Listado de tickets que hay en la tabla -->
    <h3>Listado Tickets</h3>
    <ul>
        @foreach ($productos as $products)
            <li>{{ $products->titulo }}: {{ $products->descipcion }} - Prioridad: {{ $products->prioridad }} - Para:
                {{ $products->tecnico }}
            </li>
        @endforeach
    </ul>
@endsection