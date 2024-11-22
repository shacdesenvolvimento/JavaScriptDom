nome= prompt("Digite seu nome")
peso= parseFloat(prompt("Digite seu peso"))
altura= parseFloat(prompt("Digite seu altura"))

// Calculando IMC

imc = peso / (altura * altura)

// Classificando o IMC

if (imc < 18.5) {
    classificacao = "Abaixo do peso"
} else if (imc >= 18.5 && imc < 24.9) {
    classificacao = "Peso normal"
} else if (imc >= 25 && imc < 29.9) {
    classificacao = "Acima do peso"
} else if (imc >= 30 && imc < 34.9) {
    classificacao = "Obesidade grau I"
} else if (imc >= 35 && imc < 39.9) {
    classificacao = "Obesidade grau II (severa)"
} else {
    classificacao = "Obesidade grau III (mórbida)"
}

// Mostrando resultados

document.write("Nome: " + nome + "<br>")
document.write("Peso: " + peso + "kg<br>")
document.write("Altura: " + altura + "m<br>")
document.write("IMC: " + imc.toFixed(2) + "<br>")
document.write("Classificação: " + classificacao + "<br>")