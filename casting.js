/* casting é alterar a tipagem da varialvel */

valor1= prompt("Digite o primeiro valor")
valor2= prompt("Digite o segundo valor")


// Conversão de string para número
convertido1= parseInt(valor1)
convertido2= parseInt(valor2) 

string=2 
numero=2
convertNumtoString=numero.toString()
mist= string+convertNumtoString

// Soma dos valores convertidos
semConversao= valor1 + valor2
soma= convertido1 + convertido2 
alert(semConversao) 
alert(soma)
document.write("Soma sem conversão: "+semConversao)
document.write("Soma com conversão: "+soma+"</p>") 
document.write("Soma com conversão: "+mist) 