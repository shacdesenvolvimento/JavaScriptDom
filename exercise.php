<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .newclass {
        background-color: red;
    }

    ul>li:last-child {
        color: green;
    }
</style>

<body>
    <h3 id="titulo">Aqui h3</h3>
    <div id="estediv">
        <p>Aqui Div</p>
        <h5>Tentando com H5</h5>
    </div>
    <div class="newclass">Aqui Div com class 1</div>
    <div class="newclass">Aqui Div com class 2</div>
    <form action="" method="post">
        <input type="text" name="text_usuario" id="">
    </form>
    <div id="lista">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul>
    </div>

    <div class="noticia">
        Aqui esta uma noticia muito maneira

    </div>
</body>

</html>

<script>
    let e = document.querySelector('.noticia')
    console.log(e)
    let i = document.querySelector('#titulo')
    console.log(i)
    let d = document.querySelector('div')
    console.log(d)

    let lista = document.querySelector('#lista > ul > li')
    lista.style.color = 'red'

    novo = document.querySelector('#estediv > h5')
    novo.style.color = 'red'
    //tirar o valor de um elemento para o outro

    h3 = document.querySelector('h3').innerText;
    //alert(h3)

    noticia = document.querySelector('.noticia')
    noticia.outerHTML = "<h1>" + h3 + "</h1>"

    //innerText-> apresenta apenas o texto de um elemento
    //innerHTML-> apresenta o conteudo completo de um elemento
    //outerHTML-> apresenta a tag e o conteudo completo de um elemento
</script>