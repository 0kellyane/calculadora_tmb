<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de TMB - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { max-width: 500px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="number"], select { width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #007bff; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%; margin-top: 20px; font-size: 16px; }
        button:hover { background-color: #0056b3; }
        .error { color: red; font-size: 0.9em; margin-top: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Cálculo de Taxa Metabólica Basal (TMB)</h1>
    <p>Para que serve a taxa? Ela representa a quantidade de calorias que seu corpo precisa para manter as funções vitais em repouso</p>

    <form method="POST" action="{{ route('tmb.calculate') }}">
        @csrf

        {{-- Exibe erros de validação --}}
        @if ($errors->any())
            <div style="background-color: #ffdddd; border: 1px solid #ff0000; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
                <strong>Erro de validação:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" min="1" required value="{{ old('peso') }}">
        </div>

        <div>
            <label for="altura">Altura (cm):</label>
            <input type="number" id="altura" name="altura" step="1" min="1" required value="{{ old('altura') }}">
        </div>

        <div>
            <label for="idade">Idade (anos):</label>
            <input type="number" id="idade" name="idade" step="1" min="1" required value="{{ old('idade') }}">
        </div>

        <div>
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="">Selecione</option>
                <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            </select>
        </div>

        <button type="submit">Calcular TMB</button>
    </form>
</div>

</body>
</html>