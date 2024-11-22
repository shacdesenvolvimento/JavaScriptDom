<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio02</title>
</head>

<body>
    <h1>Manipula</h1>
    <div class="noticia">
        <h1><strong>Titulo01</strong></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod laudantium minus eaque eos sequi possimus nemo! Voluptatem odit libero beatae accusamus praesentium non. Laborum molestias qui odit sint cum laboriosam.</p>
    </div>
    <div>
        <h3>Pronto</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis alias, aut architecto, voluptatem est incidunt fugiat magnam unde sunt cupiditate quaerat modi tempora neque vitae labore delectus earum officia quod!</p>
    </div>
    <span id="clique" style="background-color: grey; color:white" onclick="clica()">
        <strong>
            Clieque aqui
        </strong>
    </span>
</body>
<script>
    function clica() {
        noticia = document.querySelector('.noticia > p')
        noticia.style.color = "blue"
        console.log(noticia)
    }
</script>


</html>