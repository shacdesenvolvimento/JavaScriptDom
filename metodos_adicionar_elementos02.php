<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos adicionar elmentos</title>
    <style>
        p{
            background-color: blue;
        }
    </style>
</head>

<body>

    <div class="container">
        <p>DENTRO DA DIV</p>
    </div>
</body>

</html>
<script>
    let div = document.querySelector('.container')
    div.style.backgroundColor="red"
    
    //INSERTADJACENT assim como metodos anteriores adiciona me determinados posicionamento elemenetos
   //insertAdjacentText-> apenas texto
   /* 
    div.insertAdjacentText('beforebegin','texto ')
    div.insertAdjacentText('afterbegin','texto ')
    div.insertAdjacentText('beforeend','texto ')
    div.insertAdjacentText('afterend','texto ')
    */ 
     //insertAdjacentHTML-> txto com tag html
   /*  div.insertAdjacentHTML('beforebegin','<p>texto</p>')
    div.insertAdjacentTML('afterbegin','texto ')
    div.insertAdjacentHTML('beforeend','texto ')
    div.insertAdjacentHTML('afterend','<p>texto</p>') */

    //insertAdjacentElement-> pode criar elementos

    pnew1 = document.createElement('p')
    pnew1.innerHTML = 'BEFORE'
    pnew2 = document.createElement('p')
    pnew2.innerHTML = 'DENTRO NO INICIO'
    pnew3 = document.createElement('p')
    pnew3.innerHTML = 'DENTRO NO FIM'
    pnew4 = document.createElement('p')
    pnew4.innerHTML = 'AFTER'


    div.insertAdjacentElement('beforebegin',pnew1)
    div.insertAdjacentElement('afterbegin',pnew2)
    div.insertAdjacentElement('beforeend',pnew3)
    div.insertAdjacentElement('afterend',pnew4) 
</script>