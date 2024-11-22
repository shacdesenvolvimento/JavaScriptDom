<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Elemento</title>

    <style>
        .msg {
            font-size: 20px;
            color: white;
            background-color: red;
        }
    </style>

</head>

<body>
    <div class="alerta">

    </div>
    <button onclick="fala()">Clique aqui</button>

</body>

</html>
<script>
    function fala() {
        //criar elemento através do create element

        new_element = document.createElement('p')
        new_element.className = 'msg'
        new_element.innerText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Ipsa asperiores assumenda in voluptatem omnis quidem.Doloremque praesentium veritatis ullam ipsam dolorem possimus hic voluptates tenetur nesciunt, consequuntur et!Adipisci, suscipit.'

        //adicionar elemnto novo no corpo ou elemento especifico através do apendChild

        elemento = document.querySelector('.alerta')
        if (!elemento.querySelector('p')) {
            elemento.appendChild(new_element)
        }

    }
</script>