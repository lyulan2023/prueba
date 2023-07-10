function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

    horaImprimible = hora + " : " + minuto + " : " + segundo

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
}
           
          let counterVal = 0;

          function incrementClick() {
          //updateDisplay(counterVal+1);
          counterVal++;
          document.getElementById("counter-label").innerHTML = counterVal;
          }

          function resetCounter() {
            counterVal = 0;
            updateDisplay(counterVal);
            }

          function updateDisplay(val) {
           document.getElementById("counter-label").innerHTML = val;
          }
          
          function myFunction(x) {
                  x.style.background = "yellow";
               }

               function iniciar() {
                generarLista('lista1', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis');
            }
      
            function generarLista(){
                let s = '<ol>';
                for (let f = 1; f < arguments.length; f++) {
                    s = s + '<li>' + arguments[f] + '</li>';
                }
                s = s + '</ol>';
                let elemento1 = document.getElementById(arguments[0]);
                elemento1.innerHTML = s;
            }
      
            iniciar();
            function cambiarColor() {
                let tit = document.getElementById('titulo')
                tit.style.color = '#ff0000'
            }
            
            function cambiarTamanoFuente() {
                let tit = document.getElementById('titulo')
                tit.style.fontSize = '60px'
            }
            function cambiarTexto() {
                let tit = document.getElementById('titulo')
                tit.childNodes[0].nodeValue = 'Ahora vemos el nuevo título'
            }
            function agregar() {
                let elemento = document.createElement('p')
                let texto = document.createTextNode('Hola Mundo')
                elemento.appendChild(texto)
                let obj = document.getElementById('parrafos')
                obj.appendChild(elemento)
            }
            function addTextNode(text) {
                const newtext = document.createTextNode(text);
                const p1 = document.getElementById("p1");
        
                p1.appendChild(newtext);
              }
              function cambiarColorFondo() {
                let pun = document.getElementById('colorfondo')
                let punrec = document.getElementById('recuadro')
                punrec.style.backgroundColor = pun.value
            }
            
            function cambiarColorFuente() {
                let pun = document.getElementById('colorfuente')
                let punrec = document.getElementById('recuadro')
                punrec.style.color = pun.value
            }
            
            function cambiarTamanoFuente() {
                let pun = document.getElementById('tamanofuente')
                let punrec = document.getElementById('recuadro')
                punrec.style.fontSize = pun.value
            }
            let cantidad = 0

                function agregarHijo() {
                    cantidad++
                    let nuevohijo = document.createElement('input')
                    nuevohijo.type = 'text'
                    nuevohijo.name = 'nombre' + cantidad
                    nuevohijo.id = 'nombre' + cantidad
                    document.getElementById('fs').appendChild(nuevohijo)
                    document.getElementById('fs').appendChild(document.createElement('br'))
                }
                function mostrarAtributos(objeto) {
                    let ref = document.getElementById('titulo')
                    ref.innerText = `Name: ${objeto.name} Id: ${objeto.id} Value: ${objeto.value}`
                }
                function entrada(objeto) {
                    objeto.style.color = '#f00'
                }
                
                function salida(objeto) {
                    objeto.style.color = '#000'
                }
                
                

            
        
            
                  