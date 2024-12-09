<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouse Event</title>
</head>

<body>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cum, delectus recusandae soluta aliquam quaerat quia sint sunt doloribus impedit ipsam harum, possimus, enim assumenda qui blanditiis labore provident velit?
    </div>
    <h1>Aqui tem um H1</h1>
</body>

</html>
<script>
    //click
    /*  document.querySelector('div').addEventListener('click', () => {
         console.log('clicando')
     })
     //mouse down pressiona
     document.querySelector('div').addEventListener('mousedown', () => {
         console.log('mousedown')
     })
     //mouse up- solta
     document.querySelector('div').addEventListener('mouseup', () => {
         console.log('mouseup')
     }) */
    //mouse enter- arrastar para dentro do elemto
    document.querySelector('div').addEventListener('mouseenter', () => {
        console.log('mouseenter')
    })
    //mouse leave- arrastar para saida do elemto
    document.querySelector('div').addEventListener('mouseleave', () => {
        console.log('mouseleave')
    })
    document.querySelector('div').addEventListener('mousemove', () => {
        console.log('mouse move')
    })
    document.querySelector('div').addEventListener('dblclick', () => {
        console.log('dbl click')
    })
    document.querySelector('div').addEventListener('contextmenu', () => {
        console.log('contesto menu')
    })


    //botões do mouse
    //O event escuta teclas e botões 
    //event.button - verifica o butão pressionado
    document.querySelector('h1').addEventListener('mousedown', () => {
        console.log(event.button)

        if (event.shiftKey) {
            console.log('Shift pressionado')
        }
    })
    //event.(tecla desejada)- verifica se uma tecla do teclado está pressionada
</script>