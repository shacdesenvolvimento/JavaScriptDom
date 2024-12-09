<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos target</title>
</head>

<body>
    <div>
        <h1>Temos aqui o texto</h1>
        <button type="button" id="butao">Não clicou</button>
    </div>
</body>

</html>

<script>
    botao = document.querySelector("#butao").onclick = (e) => {
        elemento = document.querySelector("h1")

        if (elemento.style.backgroundColor == "") {
            elemento.style.backgroundColor = "yellow"
            e.target.textContent = "Fundo amarelo"
        } else {
            elemento.style.backgroundColor = ""
            e.target.textContent = "Fundo transparente"
        }
    }
</script>