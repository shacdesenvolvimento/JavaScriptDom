<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var a = 10
        var b = 20
        var c = null

        document.write(a,b,c)
        document.write('<p>')
        //alterar
        
        var c= b
        var b= a
        var a= c
        
        var c= null
        document.write(a,b,c)

    </script>
</head>
<body>
    
</body>
</html>