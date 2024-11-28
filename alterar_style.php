<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .p-1 {
            background-color: yellow;
            color: black;
            border: red;
        }
    </style>
</head>

<body>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.</p>
</body>

</html>

<script>
    let p = document.querySelector('p')
    p.classList.add('p-1')
    p.style.borderWidth = '10px'
    p.style.borderStyle = 'solid'
    p.style.backgroundColor = 'gray'

    p.style.cssText = 'background-color: blue; color:white; border: solid gray 2px'

    //para pegar as propriedades que estão definidas no css dentro da tag

    console.log(p.style.color)
    console.log(p.style.backgroundColor)


    // mas quando as propriedades são difinidas por classes utilizamos outra função utilizamos o  getComputedStyle
    propriedade = getComputedStyle(p)
    console.log(propriedade.color)
    console.log(propriedade.border)
</script>