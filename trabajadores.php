<form method="GET">
Código trabajador: <input name="codigo">
<button>Buscar</button>
</form>
<?php
$trabajadores=[
"T001"=>["nombre"=>"Ana Torres","cargo"=>"Administrador","sueldo"=>2500],
"T002"=>["nombre"=>"Luis Pérez","cargo"=>"Programador","sueldo"=>3200],
"T003"=>["nombre"=>"María Díaz","cargo"=>"Diseñador","sueldo"=>2800]
];

if(isset($_GET["codigo"])){
$codigo=$_GET["codigo"];
if(isset($trabajadores[$codigo])){
$t=$trabajadores[$codigo];
echo "Nombre: {$t["nombre"]}<br>Cargo: {$t["cargo"]}<br>Sueldo: {$t["sueldo"]}";
}else echo "No se encontró al trabajador";
}
?>