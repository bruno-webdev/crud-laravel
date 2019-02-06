<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('nome')->get();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.formulario');
    }

    public function store(EmployeeRequest $request, Employee $model)
    {
        $ins = $model->create($request->all());

        if ($ins) {
            $request->session()->flash('alert-success', 'Cadastrado com sucesso');
        } else {
            $request->session()->flash('alert-danger', 'Ocorreu um erro ao tentar cadastrar');
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('employee.formulario', compact('employee'));
    }

    public function update($id, EmployeeRequest $request)
    {
        $employee = Employee::find($id);

        $employee->nome = $request->input('nome');
        $employee->sobrenome = $request->input('sobrenome');
        $employee->telefone = $request->input('telefone');
        $employee->email = $request->input('email');

        $employee->save();

        $request->session()->flash('alert-success', 'Atualizado com sucesso');
        return redirect()->back();
    }

    public function destroy($id, Request $request)
    {
        $del = Employee::find($id)->delete();

        if($del) {
            $request->session()->flash('alert-success', 'Deletado com sucesso');
        } else {
            $request->session()->flash('alert-danger', 'Não foi possível deletar');
        }
        return redirect()->back();
    }
}
