<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        //quando queremos atribuir algo e ter a certeza de que o elemento esta totalmente carregado
        //readystate tem suas fazes loading , complete ou quais temos como base para executar um evento
        document.addEventListener("readystatechange", () => {
            //para acompanha o estado usa o atributo state
            if (document.readyState == "complete") {
                document.querySelector('h1').textContent = "Novo aqui"
            }
        })
        //uma outra forma para impedri erros de falta de carregamento por falta do elemento está carregado
        //DOMContentLoader- ele confirma que a estrutura do DOM esta carregada

        document.addEventListener('DOMContentLoaded', () => {
            console.log('documento carregado')
        })
        //esse é depois de toda a pagina carregado
        window.addEventListener('load', () => {
            console.log('documento completo')
        })
    </script>

</head>

<body>
    <h1>Aqui</h1>
</body>

</html>