<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .p-1 {
            background-color: yellow;
        }

        .p-2 {
            background-color: green;
        }

        .espaco {
            padding: 10px;
        }
    </style>
</head>

<body>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas molestias quam cumque deserunt tenetur, ut ipsa. Atque fuga sed dolore quia laborum doloribus commodi iste. Voluptatibus, doloremque. Inventore, quo est?

    </p>
</body>

</html>
<script>
    //className é propriedade que permite ler e alterar uma classe css
    p = document.querySelector('p')
    console.log(p.className)
    p.className = 'p-2 espaco'
    console.log(p.className)

    //classList é propriedade que permite ler, alterar e remover uma classe css
    p = document.querySelector('p')

    p.classList.add('p-2')
    p.classList.add('espaco')

    //toggle o toggle é utilizado de forma dinamica se a calss estiver no elemento é removido se não é inserido
    p.classList.remove('p-2')
    p.classList.remove('espaco')
    p.classList.toggle('p-1')
    console.log(p.classList)

    //contains é parametro para verificar se uma classe especifica contém em determinado elemento
    if (p.classList.contains('espaco')) {
        console.log('Tem espaço')
    } else {
        console.log('Tem espaço')
    }
</script>