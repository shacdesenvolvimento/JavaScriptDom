<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddEventlistener</title>
</head>

<body>
    <h1 id="titulo01">Titulo 01</h1>
    <h1 id="titulo02">Titulo 02</h1>
    <button id="adicionar">Adicionar eventos</button>
    <button id="botao">Executar eventos</button>
    <button id="remover">Remover eventos</button>
</body>

</html>
<script>
    //addEventListener adiciona um evento - em resumo um butão pode não ter nenhuma ação ou função atribuida e com addEventListener atribuir uma ou mais função ao elemento 
    //Erofunction
    /*  document.querySelector("#exemplo").addEventListener('click', () => {
         //funcionalidades
     }) */
    //Chamando a função
    document.querySelector("#adicionar").addEventListener('click', adicionar_eventos)
    //chamando a função remover
    document.querySelector('#remover').addEventListener('click', remove_eventos)

    //essa função através do addEventListener adicionar ações ao elemento botão 
    //estas ações estão declaradas em outras funções abaixo ou seja posso adicionar duas ou mais funções em um unico elmento
    function adicionar_eventos() {
        botao = document.querySelector('#botao')
        botao.addEventListener('click', executar_01)
        botao.addEventListener('click', executar_02)
    }

    function executar_01() {
        agora = new Date();
        document.querySelector('#titulo01').textContent = agora.getSeconds()
    }

    function executar_02() {
        agora = new Date();
        document.querySelector('#titulo02').textContent = agora.getSeconds()
    }
    //esta função remove ações de click para executar uma das funções através do removeEventListener
    function remove_eventos() {
        botao = document.querySelector('#botao')
        botao.removeEventListener('click', executar_02)
    }
</script>