<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado TMB - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { max-width: 500px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #28a745; }
        .result-box { background-color: #e9f7ef; border: 1px solid #d4edda; padding: 20px; border-radius: 6px; margin-top: 20px; }
        .result-value { font-size: 2.5em; font-weight: bold; color: #28a745; margin: 10px 0; }
        .result-label { font-size: 1.2em; color: #555; }
        .back-link { display: inline-block; margin-top: 20px; color: #007bff; text-decoration: none; padding: 10px 15px; border: 1px solid #007bff; border-radius: 4px; }
        .back-link:hover { background-color: #007bff; color: white; }
        .data-list { text-align: left; margin-top: 20px; list-style: none; padding: 0; }
        .data-list li { margin-bottom: 8px; border-bottom: 1px dotted #eee; padding-bottom: 5px; }
        .data-list strong { display: inline-block; width: 100px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Resultado do Cálculo de TMB</h1>

    <div class="result-box">
        <div class="result-label">Sua Taxa Metabólica Basal (TMB) é:</div>
        <div class="result-value">{{ $tmb }} kcal/dia</div>
        <p>Esta é a quantidade mínima de calorias que seu corpo precisa para funcionar em repouso total.</p>
    </div>

    <h2>Dados Informados:</h2>
    <ul class="data-list">
        <li><strong>Sexo:</strong> {{ $sexo }}</li>
        <li><strong>Peso:</strong> {{ $peso }} kg</li>
        <li><strong>Altura:</strong> {{ $altura }} cm</li>
        <li><strong>Idade:</strong> {{ $idade }} anos</li>
    </ul>

    <a href="{{ route('tmb.form') }}" class="back-link">Novo Cálculo</a>
</div>

</body>
</html>