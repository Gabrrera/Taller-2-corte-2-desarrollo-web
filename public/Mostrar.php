<?php
$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, "http://localhost/Taller-2-corte-2-desarrollo-web/public/index.php/api/contacts");
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$responserest = curl_exec($ct);
curl_close($ct);
$contactos = json_decode($responserest);
?>

<!DOCTYPE html>  
 <html>
<head>         
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <title>Read a JSON File</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
#tbstyle {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#tbstyle td, #tbstyle th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tbstyle tr:nth-child(even){background-color: #f2f2f2;}

#tbstyle tr:hover {background-color: #ddd;}

#tbstyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #859161;
  color: White;
}

.container {
	justify-content: center;
	align-content: center;
	margin-top: 100px;
}

#tituloPrincipal{
	text-align: center;
	font-size: 1.5em;
	width: 704px;
}

</style>
      </head>
	  <body>  
	   <div class="container" style="width:500px;">  
	   <h1 id="tituloPrincipal">Taller 2 corte 2 desarrollo web</h1>
	   <br>
	   <ul>
			<li>Natalia Acosta Niño</li>
			<li>Julian Mateo Corredor Granados</li>
			<li>Jaider Estiven Morales Cabeza</li>
			<li>Gabriel Santiago Barrera Amaya</li>
			<li>Camilo Andres Lopez Castro</li>
	   </ul>
	   <br>	
	   <div class="table-container">
	   <?php  
			if(isset($contactos))  
			 {  
				//echo json_encode($contactos);  
			  
			 ?>
		<table id="tbstyle">
			<tbody>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    <th>Departamento</th>
                    <th>Nombre empleado departamento</th>
				</tr>
				<?php foreach ($contactos as $contacto) { ?>
				<tr>
					<td> <?= $contacto->id; ?> </td>
					<td> <?= $contacto->name; ?> </td>
                    <td> <?= $contacto->email; ?> </td>
                    <td> <?= $contacto->message; ?> </td>
                    <td> <?= $contacto->date; ?> </td>
                    <td> <?= $contacto->departament; ?> </td>
                    <td> <?= $contacto->nombreEmpleadoD; ?> </td>
				</tr>
				<?php } 
			 }
			 else
				//echo json_encode($contactos); 
			 ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>