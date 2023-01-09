//-------------------------------------Ejercicio # 3 -------------------------------------

const ejecutarCadena = document.getElementById('btn_cadena');
document.getElementById('data').innerHTML +=
        `
        <tr class="text-center ">
          <th scope="row" colspan="3">No existen datos para mostrar.</th>
        </tr>
        `;
// function count words
function contar(datos){
    let conteo = [];
    for (const d of datos){

        if(conteo[d]){
            conteo[d] += 1;
        }
        else {
            conteo[d] = 1;
        }
    }
    return conteo;
}

function insertDataWord(conteo){
    contadores = Object.keys(conteo).length;
    i = 1;
    for (var clave in conteo) {
        document.getElementById('data').innerHTML += 
        `
        <tr>
          <th scope="row">${i}</th>
          <td>${clave}</td>
          <td>${conteo[clave]}</td>
        </tr>
        `;
        i++;
    }
    document.getElementById('cadena').value = "";

}


ejecutarCadena.addEventListener("click", function() {
    cadena = "";
    cadena = document.getElementById('cadena').value;
    if(cadena){
        cadena = cadena.toLowerCase().split(' ');
        console.log(cadena);
        arraydefinitivo = []
        const formato= /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
        cadena.forEach(function(element) {
            if(formato.test(element)){
                i=0;
                word = "";
                while(element.length > i){
                    if(!formato.test(element[i])){
                        word += element[i];
                    }
                    i++;
                }
                if(word){
                    arraydefinitivo.push(word);
                }
            }else{
                arraydefinitivo.push(element);
            }
        })
        document.getElementById('data').innerHTML = ``
        conteos = contar(arraydefinitivo);
        insertDataWord(conteos);
    }

});


//-------------------------------------Ejercicio # 4 -------------------------------------

const ejecutarCadenaSigno = document.getElementById('btn_cadena_signo');
document.getElementById('dataSimbolo').innerHTML =
        `
        <tr class="text-center ">
          <th scope="row" colspan="3">No existen datos para mostrar.</th>
        </tr>
        `;


// caracteres = "[()()(){[hola][onyx]}{([juan]{})}]"
// caracteres = "[()()(){[][]}{([]{})}]"
caracteres = "([(]{)})"
// caracteres = "([](){}[]{}(){})"
// function para evaluar secunecia y estructura de la cadena
function structure(caracteres) {
    arraySimbolos = [];
    i = 0;
    while(caracteres.length > i){
        caracter = caracteres[i];
        if(caracter == "[" || caracter == "(" || caracter == "{" || caracter == "]" || caracter == ")" || caracter == "}"){
            arraySimbolos.push(caracter);
        }
        i+=1;
    }
    i = 0
    a = 1
    arrCaracteres = arraySimbolos
    response = "Correcto";
    longarray = arrCaracteres.length;
    while(longarray > 0){
        caracter = arrCaracteres[i];
        if(caracter == "["){
            caracterEvaluar = arrCaracteres[a]
            if(caracterEvaluar == "}" || caracterEvaluar == ")"){
                response =  "Incorrecto";
                break;
            }else if(caracterEvaluar == "]"){
                arrCaracteres.splice(i,1);
                arrCaracteres.splice(i,1);
                longarray = longarray - 2;
                i = -1;
                a = 1;
            }else{
                a += 1
            }
        }else if(caracter == "("){
            caracterEvaluar = arrCaracteres[a]
            if(caracterEvaluar == "}" || caracterEvaluar == "]"){
                response =  "Incorrecto";
                break;
            }else if(caracterEvaluar == ")"){
                arrCaracteres.splice(i,1);
                arrCaracteres.splice(i,1);
                longarray = longarray - 2;
                i = -1;
                a = 1;
            }else{
                a += 1
            }

        }else if(caracter == "{"){
            caracterEvaluar = arrCaracteres[a]
            if(caracterEvaluar == "]" || caracterEvaluar == ")"){
                response =  "Incorrecto";
                break;
            }else if(caracterEvaluar == "}"){
                arrCaracteres.splice(i,1);
                arrCaracteres.splice(i,1);
                longarray = longarray - 2;
                i = -1;
                a = 1;
            }else{
                a += 1
            }
        }else if(caracter == "}" || caracter == ")" || caracter == "]"){
            response =  "Incorrecto";
            break;
        }
            i = i+1;
    }
}

function insertDataSigno(caracteres,response){

    document.getElementById('dataSimbolo').innerHTML = ``;
    if(response == "Correcto"){
        document.getElementById('dataSimbolo').innerHTML += 
        `
        <tr>
            <th scope="row">1</th>
            <td>${caracteres}</td>
            <td class="text-success"><strong>${response}</strong></td>
        </tr>
        `;
    }else{
        document.getElementById('dataSimbolo').innerHTML += 
        `
        <tr>
            <th scope="row">1</th>
            <td>${caracteres}</td>
            <td class="text-danger"><strong>${response}</strong></td>
        </tr>
        `;
    }
    

    document.getElementById('cadenaSignos').value = "";

}

ejecutarCadenaSigno.addEventListener("click", function() {
    caracteres = "";
    caracteres = document.getElementById('cadenaSignos').value;
    if(caracteres){
        structure(caracteres);
        insertDataSigno(caracteres,response);
    }

})







  
    let numeros1 = [1,2,3]
    let numeros2 = [3,2,1]
    let arrSuma = []
    i=0

    for (numero in numeros1){

        item = parseInt(numeros1[i]) + parseInt(numeros2[i]);
        arrSuma.push(item)
        i++;
        console.log(numero)
    }


    
    // numeros1.forEach((numero =>{
    //     arrSuma += numero + numeros2[i];
    //     i++;
    // }))
    console.log(arrSuma)
    
    
    // console.log(numeros1,numeros2)
    
    
    

