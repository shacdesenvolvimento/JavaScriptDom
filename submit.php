<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin-top: 10px;
        }

        .focus {
            background-color: red;
        }
    </style>
</head>

<body>
    <form action="" method="post" class="" id="formulario">
        <div class="row">
            <div class="col-12 mb-2">
                <label for="">Usuario</label>
                <input type="text" name="usuario" id="usuario">
            </div>
            <div class="col-12 mb-2">
                <label for="">Senha</label>
                <input type="text" name="senha" id="senha">
            </div>
            <div class="col-12 mb-2">
                <input type="submit" value="Entrar">
            </div>
        </div>



    </form>
</body>

</html>
<script>
    formulario = document.querySelector('#formulario')
    formulario.addEventListener("submit", (evento) => {
        console.log('logado')
        evento.preventDefault()
    })
</script>