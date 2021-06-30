//Máscara de CPF para adicionar pontos e o hífen
function mascara_cpf() {
    let cpf = document.getElementById('cpf')
    if(cpf.value.length == 3 || cpf.value.length == 7) {
        cpf.value += "."
    } else if(cpf.value.length == 11) {
        cpf.value += "-"
    }
}

//Máscara de TELEFONE para adicionar parenteses e hífen
function mascara_tel() {
    let tel = document.getElementById('telefone')
    if(tel.value.length == 0) {
        tel.value += "("
    } else if(tel.value.length == 3) {
        tel.value += ")"
    } else if(tel.value.length == 9) {
        tel.value += "-"
    }
} 