@extends('layouts.template')

@section('content')


    <main id="mainIndex">
        <div class="container">
            <a href="{{ Route('create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Novo
            </a>
            <section id="tblEmployees" class="mt-5">
                @if(isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach( $errors->all() as $error )
                            <p class="m-0">{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">
                            {{ Session::get('alert-' . $msg) }}
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </p>
                    @endif
                @endforeach
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td class="align-middle">{{ $employee->id }}</td>
                            <td class="align-middle">{{ $employee->nome }}</td>
                            <td class="align-middle">{{ $employee->sobrenome }}</td>
                            <td class="align-middle">{{ $employee->email }}</td>
                            <td class="align-middle">{{ $employee->telefone }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{ Route('edit', ['id' => $employee->id]) }}">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $employee->id }}">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                                <div class="modal fade" id="delete{{ $employee->id }}" tabindex="-1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Deseja mesmo deletar {{ $employee->nome }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                <form action="{{ Route('destroy', ['id' => $employee->id]) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Sim</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>

@endsection
