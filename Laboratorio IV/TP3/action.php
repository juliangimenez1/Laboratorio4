<?php

if($_POST['totalSale'] < 200){
    if($_POST['type'] === "mascota")
    echo "No se puede realizar el envio";

    if($_POST['type'] === "ropa")
    echo "Los gastos del envio son 80 pesos";
}

if($_POST['totalSale'] >= 200 && $_POST['totalSale'] <= 600)
    echo "Los gastos de envio son 80 pesos";

if($_POST['totalSale'] > 600)
    echo "Los gatos de envio son gratis" . "<br />";
    
if($_POST['totalSale'] > 2000){
    
    echo "Usted recibe un codigo de descuento = CODEDESC33";
}
?>
