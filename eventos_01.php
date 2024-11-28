<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .muda {
            background-color: blue;
            width: 300px;
            height: 300px;
            font-size: 20;
            color: white;
        }
    </style>
</head>

<body>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nam, accusamus facere a esse quae eligendi quisquam, dolorem commodi nostrum molestias aut nemo consectetur? Facilis, vel animi. Laudantium, ut commodi?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam atque, quod nostrum eos quidem error inventore animi repellat id suscipit perferendis sint temporibus debitis ut aspernatur soluta architecto delectus. Impedit?
    </div>
    <button onclick="acao()"> Ação</button>
</body>

</html>
<script>
    div = document.querySelector('div')

    function acao() {
        if (div.className != '') {
            nomeClass = div.className
            console.log(nomeClass)
            div.classList.remove(nomeClass)
        } else {
            div.classList.add('muda')
        }

    }
</script>