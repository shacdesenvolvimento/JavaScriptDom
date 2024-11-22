<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 id="titulo">Aqui h3</h3>
    <div name="estediv">Aqui Div</div>
    <div class="newclass">Aqui Div com class 1</div>
    <div class="newclass">Aqui Div com class 2</div>
    <form action="" method="post">
        <input type="text" name="text_usuario" id="">
    </form>

</body>

</html>

<script>
    console.log(document.getElementById("titulo").innerHTML)
    //traz como lista
    console.log(document.getElementsByName("text_usuario"))

    //traz pelo nome da Tag, tbm traz como lista    
    console.log(document.getElementsByTagName("div")[0].innerHTML)

    //traz pelo nome da Class, tbm traz como lista    
    console.log(document.getElementsByClassName("newclass")[0].innerHTML)
    console.log(document.getElementsByClassName("newclass")[1].innerHTML)
</script>