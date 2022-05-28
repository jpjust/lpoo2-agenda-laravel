<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

/**
 * Este é o nosso controller.
 * 
 * Cada método implementa uma ação relacionada a uma das
 * etapas do CRUD.
 */
class ContatosController extends Controller
{
    // Exibe a lista de contatos (R)
    function index() {
        return view('contatos/index', [
            'contatos' => Contato::all()
        ]);
    }

    // Exibe um contato (R)
    function show($id) {
        return view('contatos/show', [
            'contato' => Contato::find($id)
        ]);
    }

    // Carrega a view para cadastrar um contato (C)
    function new() {
        return view('contatos/new');
    }

    // Carrega a view para editar um contato (U)
    function edit($id) {
        return view('contatos/edit', [
            'contato' => Contato::find($id)
        ]);
    }

    // Usa os dados da requisição POST para atualizar ou criar um contato (C e U)
    function update(Request $request) {
        if ($request->input('id')) {
            $contato = Contato::find($request->input('id'));
        } else {
            $contato = new Contato();
        }

        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->save();
        
        return ContatosController::index();
    }

    // Deleta um contato (D)
    function delete($id) {
        $contato = Contato::find($id);
        $contato->delete();

        return ContatosController::index();
    }
}
