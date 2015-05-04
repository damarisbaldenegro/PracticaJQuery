<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Practica JQuery</title>
  <link rel="stylesheet" href="jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
   <link rel="stylesheet" href="jquery-ui.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
  $(function() {
    var availableTags = [
      "Cereal",
      "Chicles",
      "Refresco",
      
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>
  <script>
  $(function() {
    var availableTags1 = [
      "Gansito",
      "Donas",
      "Leche",
      
    ];
    $( "#tags1" ).autocomplete({
      source: availableTags1
    });
  });
  </script>
 
  <script>
  $(function() {
    var availableTags4 = [
      "Tienda Paula",
      "Abarrotes Don Luis ",
      "Abarrotes La Querida",
      
    ];
    $( "#Empresa" ).autocomplete({
      source: availableTags4
    });
  });
  </script> 
  
</head>
<body>
<form method="POST" action="enviado.php">
<fieldset>


	<label for="Empresa">Empresa</label> <input id="Empresa">
	<label for="Date">Date</label> <input type="text" id="datepicker">
		 


<br><br><br>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Tab1</a></li>
    <li><a href="#tabs-2">Tab2</a></li>
   

  </ul>
  <div id="tabs-1">
    <p>
		<label for="Producto1">Producto 1:</label>
                    <input type="text" size="20" maxlength="25" id="Producto1" name="Producto1"  />
                    
					 <div class="content">
					<label for="tags">Producto 2: </label>
					<input id="tags">
					</div> 
	</p>
  </div>
  <div id="tabs-2">
    <p>
	 <div class="content">
					<label for="tags1">Producto 3: </label>
					<input id="tags1">
					</div>
	<br>
	<label for="Producto2">Producto 4:</label>
                     <input type="text" size="20maxlength="25" id="Producto3" name="Producto3"  />
                    
					
	
	</p>
  </div>
 
</div>
		<br><br><input type="submit"  Titulo="submit" value="Guardar ">
 </fieldset>
 </form>
</body>
</html>