<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coordenadas</title>
</head>

<body>
    <div>
        Aqui ta a DIV
    </div>
</body>

</html>

<script>
    //coordenadas

    document.querySelector('div').addEventListener('mousemove', () => {
        console.log("coordenada X: " + event.pageX + "++" + "coordenada Y" + event.pageY)
    })
</script>