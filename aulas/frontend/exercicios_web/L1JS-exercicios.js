function soma(){
    let num1 = Number(document.getElementById('valor1').value);
    let num2 = Number(document.getElementById('valor2').value);

    if (!isNaN(num1) && !isNaN(num2)){
        window.alert(num1+num2);
    } else {
        window.alert('Deu ruim malandro');
    } 
}

function ocultarDiv(num_div){
    let div = document.getElementById('div' + num_div);
    
    if (div.style.visibility == 'hidden'){
        div.style.visibility = 'visible';
    } else {
        div.style.visibility = 'hidden'
    }
}

function imprimeArrayDiv(){
    
}