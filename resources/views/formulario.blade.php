<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO</title>
</head>
	<body>
		<h1>FORMULARIO</h1>
		<form>
			<table border="1">
				<tr>
					<td>CI</td>
					<td><input type='number'name='CI'value='0'></td>
				</tr>

				<tr>
					<td>Nombre</td>
					<td><input type='text'name='Nombre'value=''></td>
				</tr>
			
				<tr>
					<td>Apellido Paterno</td>
					<td><input type='text'name='Paterno'value=''></td>
				</tr>
			
				<tr>
					<td>Apellido Materno</td>
					<td><input type='text'name='Materno'value=''></td>
				</tr>	

				<tr>
					<td>Cargo</td>
					<td><input type='text'name='Cargo'value=''></td>
				</tr>

			</table>
			<br>
					<td><input type='submit'name='b1'value='Enviar'></td>
					<td><input type='reset'name='b2'value='Limpiar'></td>
					<td><input type='button' onclick="history.back()" name="volver atrás" value="Volver atrás"></td>
		</form>
	</body>
</html>