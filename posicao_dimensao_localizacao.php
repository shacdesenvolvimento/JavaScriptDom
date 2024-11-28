<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #div {
            background-color: yellow;
            color: black;
            border: red;
            width: 300px;
            height: 200px;
            margin: 50px auto;
            overflow: auto;
        }
    </style>
</head>

<body>
    <div id="div">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.

    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus distinctio, odio beatae eum nisi dolorem perspiciatis ducimus, nostrum atque recusandae officia voluptatem rem, consectetur minima accusantium magni delectus totam corporis.


    </div>
    <p id="parag">
        new
    </p>
    <button onclick="executar()">Executar</button>
    <button onclick="scroller()">Scroll</button>
</body>

</html>

<script>
    let div = document.querySelector('#div')
    let parag = document.querySelector('#parag')

    function executar() {
        resultado = ''
        resultado += 'offsetLeft' + div.offsetLeft + ' -'
        resultado += 'offsetTop' + div.offsetTop + ' -'
        resultado += 'offsetWidth' + div.offsetWidth + ' -'
        resultado += 'offsetHeight' + div.offsetHeight + ' '

        parag.textContent = resultado

        //div.innerText = 'Mudar'
        console.log('offsetLeft' + div.offsetLeft)
    }
    //dimensão da janela e documento browser

    function dimensao() {
        console.log('Largura do document' + document.documentElement.clientWidth)
        console.log('Altura do document' + document.documentElement.clientHeight)
        console.log('Altura total do document' + document.documentElement.scrollHeight)
        console.log('Largura total do document' + document.documentElement.scrollWidth)
    }
    // scroll é o posicionamento das Janelas do browser
    function scroller() {
        //window.scrollTo(0, 120)

        //subir ao topo
        //document.documentElement.scrollIntoView()

        //scrollBY
        //subir ou descer
        document.documentElement.scrollBy(0, -10)

    }


    dimensao()
</script>