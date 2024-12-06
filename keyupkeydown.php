<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyUp</title>
</head>
<body>
    <input type="text" value="" id="valor">

    <h1></h1>
</body>
</html>
<script>
    valor= document.getElementById("#valor")
    valor.addEventListener("keyup", (event) {
        document.querySelector("h1").innerText = event.target.value;
    });
    
    // Prevent form submission on Enter key press
    valor.addEventListener("keydown", ()=>{
        console.log("Enter key");
    })

</script>


