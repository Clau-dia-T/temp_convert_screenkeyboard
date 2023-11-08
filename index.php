<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho de casa 18 - Cláudia Teodoro</title>
    <!-- CSS -->
    <link rel="stylesheet" href="estilo.css">
    <!-- JS -->
    <script src="funcoes.js"></script>
</head>

<body>
    <br><br>
    <h1>Trabalho nº 18 - Conversor Temperaturas JS</h1>
    <br><br>
    <div class="caixa">
        <div class="ecra_base">
            <div id="ecra"></div> 
            <p>ºC</p>
        </div>
        <br>
        <div id="teclado">
            <div class="linha">
                <button onclick="teclar('1')">1</button>
                <button onclick="teclar('2')">2</button>
                <button onclick="teclar('3')">3</button>
            </div>
            <div class="linha">
                <button onclick="teclar('4')">4</button>
                <button onclick="teclar('5')">5</button>
                <button onclick="teclar('6')">6</button>
            </div>
            <div class="linha">
                <button onclick="teclar('7')">7</button>
                <button onclick="teclar('8')">8</button>
                <button onclick="teclar('9')">9</button>
            </div>
            <div class="linha">
                <button onclick="teclar('0')">0</button>
                <button onclick="teclar('.')">.</button>
                <button onclick="teclar('-')">-</button>
                <button onclick="limpar()">CLR</button>
            </div>
        </div>
    </div>
    <br><br>
    <div class="caixa">
        <h2>Resultado Conversão:</h2>
        <div id="saida">
        </div>
    </div>
</body>
</html>