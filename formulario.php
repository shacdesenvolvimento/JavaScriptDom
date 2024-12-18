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
    <form action="" method="post" class="" name="formulario">
        <div class="row">
            <div class="col-12 mb-2">
                <label for="">Usuario</label>
                <input type="text" name="usuario" id="usuario">
            </div>
            <div class="col-12 mb-2">
                <label for="">Senha</label>
                <input type="text" name="senha" id="senha">
            </div>
        </div>



    </form>
</body>

</html>
<script>
    /*     document.forms.formulario.usuario.addEventListener('focus', () => {
        console.log('usuario')
    }) */
    //pegando o elemento pelo name
    usuario = document.querySelector('[name="usuario"]')
    senha = document.querySelector('[name="senha"]')

    //adicionar função por evento

    //focus para quando estiver em um elemnto tipo input
    usuario.addEventListener('focus', (evento) => {
        evento.target.classList.add('focus')
    })
    usuario.addEventListener('blur', (evento) => {
        evento.target.classList.remove('focus')
    })
    senha.addEventListener('focus', (evento) => {
        evento.target.classList.add('focus')
    })
    senha.addEventListener('blur', (evento) => {
        evento.target.classList.remove('focus')
    })
</script>