<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos adicionar elmentos</title>
</head>

<body>

    <div class="container">
        <p>DENTRO DA DIV</p>
    </div>
</body>

</html>
<script>
    let div = document.querySelector('.container')
    //before
    /*  div.before('BEFORE')
     //adicionar dentro da div no inicio
     div.prepend('DENTRO NO INICIO')
     //adicionar dentro da div no inicio
     div.append('DENTRO NO FIM')
     //adicionar depois da div 
     div.after('AFTER') */


    pnew1 = document.createElement('p')
    pnew1.innerHTML = 'BEFORE'
    pnew2 = document.createElement('p')
    pnew2.innerHTML = 'DENTRO NO INICIO'
    pnew3 = document.createElement('p')
    pnew3.innerHTML = 'DENTRO NO FIM'
    pnew4 = document.createElement('p')
    pnew4.innerHTML = 'AFTER'

    div.before(pnew1)
    //adicionar dentro da div no inicio
    div.prepend(pnew2)
    //adicionar dentro da div no inicio
    div.append(pnew3)
    //adicionar depois da div 
    div.after(pnew4)
</script>