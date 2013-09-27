<?php
$paises = array();
$paises["Mexico"]=array("Guadalajara","Monterrey","ciudad de mexico","Ecatepec","Puebla");
$paises["Japon"]=array("nagasaki","fukuoka","Hiroshima","kiobe","kioto");
$paises["Estados Unidos"]=array("New York","Los angeles","Washintong","chicago","Philadelphia");
$paises["Francia"]=array("Paris","Lyon","Estamburgo","Marsella","Burdeos");
$paises["Arabia"]=array("Sakaka","Arar","Tabuk","Hail","Medina");







echo "<ul>";
foreach($paises as $pais=>$ciudades){
	echo "<li>".$pais."<ul>";

	foreach($ciudades as $ciudades){
		echo "<li>".$ciudades."</li>";
	}
	echo"</ul></li>";
}
echo"</ul>";
?>