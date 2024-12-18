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
                <label for="">Tarefa</label>
                <input type="text" name="tarefa" id="tarefa">
            </div>
            <div class="col-12 mb-2">
                <label for="">Tempo</label>
                <select name="tempo" id="tempo">
                    <option value="1">dia 01</option>
                    <option value="2">dia 02</option>
                    <option value="3">dia 03</option>
                </select>
            </div>
        </div>



    </form>
</body>

</html>
<script>
    tarefa = document.querySelector('[name="tarefa"]')
    tempo = document.querySelector('[name="tempo"]')

    tarefa.addEventListener("change", () => {
        console.log(tarefa.value)
    })
    /*  tempo.addEventListener("change", () => {
         console.log(tarefa.value)
     }) */
    /*  tarefa.addEventListener("cut", () => {
         console.log('cortado')
     }) */
    tarefa.addEventListener("paste", () => {
        console.log('colado')
    })
    tarefa.addEventListener("input", () => {
        console.log('inputado')
    })
</script>