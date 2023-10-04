<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">

    <title>Calculadora</title>
</head>
<style>
	button{
		widows: 90px;
		height: 90px;
	}
	</style>
<body>
<div class="container-xxl">
  <div class="text-center">
  <div class="row align-items-center">
    <div class="d-grid gap-2">
       <a type="button" class="btn " href="index.html" style="background:#934faf" >Volver</a>
    </div>
    <div class="col">
      <h1>Calculadora</h1>
    </div>
</div>
</div>

	<div class="input-group input-group-lg">
  <button class="btn btn-outline-secondary" onclick="borrar()" type="button" id="button-addon1">C</button>
  <input type="text" class="form-control" id="resultado"  name="resultado" value=" " placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
    <div class="row group-lg">
    <div class=" btn-group ">
    	
    	<button onclick="agregarNumero('1')" class="btn btn-secondary btn-lg" >1</button>
    	<button onclick="agregarNumero('2')" class="btn btn-secondary btn-lg" >2</button>
    	<button onclick="agregarNumero('3')" class="btn btn-secondary btn-lg" >3</button>
    </div>
    <div class="btn-group">
    	<button onclick="agregarNumero('4')" class="btn btn-secondary btn-lg" >4</button>
    	<button onclick="agregarNumero('5')" class="btn btn-secondary btn-lg" >5</button>
    	<button onclick="agregarNumero('6')" class="btn btn-secondary btn-lg" >6</button>
    </div>

    <div class="btn-group" >
    	<button onclick="agregarNumero('7')" class="btn btn-secondary btn-lg" >7</button>
    	<button onclick="agregarNumero('8')" class="btn btn-secondary btn-lg" >8</button>
    	<button onclick="agregarNumero('9')" class="btn btn-secondary btn-lg" >9</button>
    	
    </div>

    <div class="btn-group">
    	<button onclick="agregarNumero('0')" class="btn btn-secondary btn-lg" >0</button>
    	<button onclick="agregarOperador('+')" class="btn btn-secondary btn-lg" >+</button>
    	<button onclick="agregarOperador('-')" class="btn btn-secondary btn-lg" >-</button>
    	<button onclick="agregarOperador('*')" class="btn btn-secondary btn-lg" >*</button>
    	<button onclick="agregarOperador('/')" class="btn btn-secondary btn-lg" >/</button>
    <button onclick="calcularResultado()" class="btn btn-secondary btn-lg m-1" >=</button>
    </div>


		</div>
	</div>

    <script>
    	//recibimos los parametros
        function agregarNumero(numero) {
            var resultadoInput = document.getElementById('resultado');
            if (resultadoInput) {
                if (resultadoInput.value === '0' || resultadoInput.value === 'Error') {
                    resultadoInput.value = numero;
                } else {
                    resultadoInput.value += numero;
                }
            }
        }

//recibimos los operadores
        function agregarOperador(operador) {
            var resultadoInput = document.getElementById('resultado');

            if (resultadoInput && !isNaN(resultadoInput.value[resultadoInput.value.length - 1])) {
                resultadoInput.value += operador;
            }
        }
      //calculamos el resultado

        function calcularResultado() {
            var resultadoInput = document.getElementById('resultado');
            if (resultadoInput) {
                    resultadoInput.value = eval(resultadoInput.value);
                } else {
                    resultadoInput.value = 'Error';
                }
        }
        //borrar cuenta
          function borrar() {
            resultado.value = ' ';
        }
    </script>


    
</body>
</html>
