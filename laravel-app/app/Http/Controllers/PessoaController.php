<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required|unique:pessoas,cpf',
            'endereco' => 'required',
            'telefone' => 'required',
        ]);

        Pessoa::create($data);

        return redirect()->route('pessoas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $data = $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required|unique:pessoas,cpf,'.$pessoa->id,
            'endereco' => 'required',
            'telefone' => 'required',
        ]);

        $pessoa->update($data);

        return redirect()->route('pessoas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('pessoas.index');
    }
}
