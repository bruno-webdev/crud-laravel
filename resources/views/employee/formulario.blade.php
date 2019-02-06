@extends('layouts.template')

@section('content')


    <main id="mainNovo">
        <div class="container">
            <a href="{{ Route('index') }}" class="btn btn-primary">
                <i class="fa fa-home"></i> Início
            </a>
            <section id="formularioEmployee" class="mt-5">
                <form action="{{ isset($employee) ? Route('update', ['id' => $employee->id]) : Route('store') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nome">Nome<span class="text-danger">*</span></label>
                            <input type="text" id="nome" name="nome" class="form-control"
                                   value="{{ isset($employee) ? $employee->nome : old('nome') }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" id="sobrenome" name="sobrenome" class="form-control"
                                   value="{{ isset($employee) ? $employee->sobrenome : old('sobrenome') }}">
                        </div>
                    </div>
                    <h3>Contato</h3>
                    <div class="form-row">
                        <div class="col-md-3 form-group">
                            <label for="telefone">Telefone<span class="text-danger">*</span></label>
                            <input type="text" id="telefone" name="telefone" class="form-control"
                                   value="{{ isset($employee) ? $employee->telefone : old('telefone') }}" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="email">E-mail<span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email" class="form-control"
                                   value="{{ isset($employee) ? $employee->email : old('email') }}" required>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-save mr-2"></i> Salvar
                    </button>
                    <p class="mt-3">
                        <span class="text-danger">*</span> Campos obrigatórios
                    </p>
                </form>
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
            </section>
        </div>
    </main>

@endsection
