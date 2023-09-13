@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>LISTA DE USUÁRIOS</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h5 class="card-title">Lista de usuários</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Permissão</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->permission }}</td>
                            <td>
                                <a href="{{ route('users.create') }}" type="button" class="btn btn-primary">Novo</a>
                                <a href="{{ route('users.edit', $user) }}" type="button" class="btn btn-warning">Editar</a>
                                <a href="{{ route('users.show', $user) }}" type="button"
                                    class="btn btn-success">Detalhar</a>
                                <a href="{{ route('users.destroy', $user) }}" type="button"
                                    class="btn btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div @class('mt-2')>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@stop
