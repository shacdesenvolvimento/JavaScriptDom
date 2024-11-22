//A função eval avalia expressões de strings e executa como código. 
var num1= 5
var num2= 7
var operador= "+"
var expressao= num1+operador+num2;
var resultado = eval(expressao);
document.getElementById("resultado").value= resultado

