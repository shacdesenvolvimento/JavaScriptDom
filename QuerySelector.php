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
    <div name="estediv">Aqui Div</div>
    <div class="newclass">Aqui Div com class 1</div>
    <div class="newclass">Aqui Div com class 2</div>
    <form action="" method="post">
        <input type="text" name="text_usuario" id="">
    </form>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
    <div class="noticia">
        Aqui esta uma noticia muito maneira

    </div>
</body>

</html>

<script>
    /**@abstract
     * querySelector
     * querySelectorAll
     * São similares ao getElement...
     */

    let e = document.querySelector('div')
    console.log(e)

    let i = document.querySelector('p')
    console.log(i)
</script>