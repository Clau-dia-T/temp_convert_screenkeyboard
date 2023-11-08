var limite_caracteres = 10;

function teclar(valor){
    let ecra = document.getElementById("ecra");

    if(ecra.innerHTML.length < limite_caracteres){
        if(valor == "."){
            if(!ecra.innerHTML.includes(".")){
                if(ecra.innerHTML.length == 0 || ecra.innerHTML == "-"){
                    ecra.innerHTML += "0" + valor;
                }
                else{
                    ecra.innerHTML += valor;
                }
            }
        }
        else if(valor == "-"){
            if(!ecra.innerHTML.includes("-") && ecra.innerHTML.length == 0){
                ecra.innerHTML += valor;
            }
        }
        else{
            ecra.innerHTML += valor;
        }
    }
    converter();
}

function limpar(){
    let ecra = document.getElementById("ecra");
    ecra.innerHTML = "";
    saida.innerHTML = "";
}

function converter(){
    let saida = document.getElementById("saida");
    let ecra = document.getElementById("ecra");

    let valor = parseFloat(ecra.innerHTML);
    let fhar = (valor*1.8) +32;
    let kelv = valor + 273.15;

    if(ecra.innerHTML != "" && ecra.innerHTML != "-"){
        saida.innerHTML = valor.toFixed(2) + " ºC = " + fhar.toFixed(2) + " ºF <br><br>" + valor.toFixed(2) + " ºC = " + kelv.toFixed(2) + " ºK<br><br>";
    }
    else{
        saida.innerHTML = "";
    }
}