<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class TmbController extends Controller
{
    /**
     * Exibe o formulário de entrada de dados da TMB.
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        // Retorna a view que contém o formulário.
        return view('tmb.form');
    }

    /**
     * Calcula a TMB com base nos dados fornecidos pelo usuário.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function calculate(Request $request)
    {
        // 1. VALIDAÇÃO DOS DADOS
        // Garante que os campos são números e obrigatórios, e que a idade e peso são maiores que zero.
        $validatedData = $request->validate([
            'peso'   => 'required|numeric|min:1',
            'altura' => 'required|numeric|min:1',
            'idade'  => 'required|integer|min:1',
            'sexo'   => 'required|in:Masculino,Feminino',
        ]);

        // 2. EXTRAÇÃO DOS DADOS VALIDADOS
        $peso = $validatedData['peso'];
        $altura = $validatedData['altura'];
        $idade = $validatedData['idade'];
        $sexo = $validatedData['sexo'];

        // 3. LÓGICA DE CÁLCULO DA TMB (Fórmula de Mifflin-St Jeor)
        $tmb = 0;

        if ($sexo === 'Masculino') {
            // TMB Homens: (10 * peso) + (6.25 * altura) - (5 * idade) + 5
            $tmb = (10 * $peso) + (6.25 * $altura) - (5 * $idade) + 5;
        } else {
            // TMB Mulheres: (10 * peso) + (6.25 * altura) - (5 * idade) - 161
            $tmb = (10 * $peso) + (6.25 * $altura) - (5 * $idade) - 161;
        }

        // Arredondamos para um número inteiro para facilitar a visualização
        return view('tmb.result', [
            'tmb' => round($tmb, 2), // Arredonda para 2 casas decimais
            'peso' => $peso,
            'altura' => $altura,
            'idade' => $idade,
            'sexo' => $sexo,
        ]);
    }
}
