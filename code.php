<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code</title>
</head>

<body>
    <input type="text" name="texto" id="texto">
</body>

</html>
<script>
    // code pega teclas que executam ação direta no navegador como F1
    const uni = document.querySelector("#texto");
    uni.addEventListener("keydown", (evento) => {
        if (evento.code == "F1") { // Corrigido 'envento' para 'evento'
            evento.preventDefault();
            teste(evento);
        }
    });
    //
    //

    function teste(evento) {
        console.log(evento.code);
    }
</script>