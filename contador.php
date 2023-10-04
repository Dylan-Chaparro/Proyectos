<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
	<title>contador</title>
</head>
<body>

<div class="container p-4">
<div class="d-grid gap-2">
       <a type="button" class="btn " href="index.html" style="background:#934faf" >Volver</a>
    </div>
<div class="row">
	<div class="col-12 text text-center">
			<div class="container" >
	<h1 id="cafe">Contador con clic</h1>
</div>
<div class="container align-items-center justify-content-center">
	<button  class="btn w-50 p-5 btn-outline-primary" id="mas">Mas</button>
	<h2 id="num">0</h2>
	<button class="btn w-50 p-5  btn-outline-danger" id="menos">menos</button>
	
</div>

	</div>
</div>


</div>
<script type="text/javascript">
	
	var btncuenta = document.getElementById('mas');
	var btncuenta_ = document.getElementById('menos');
	var pnum = document.getElementById('num');
	var cafecito = document.getElementById('cafe');
	var contar = 0;


	btncuenta.onclick = function(){
			var mas=contar++;
			pnum.textContent = mas;

			if (mas==10) {

			cafecito.textContent="Cafecito?";
}
	}

	btncuenta_.onclick = function(){
			contar--;
			pnum.textContent = contar;
			
	}

</script>
</body>
</html>