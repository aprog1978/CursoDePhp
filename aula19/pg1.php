<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

if($_SESSION['vlog']=="s"){
    

$_SESSION['vcanal']="vlog do fessor bruno";

echo "<h3>Segunda pagina</h3><br/>";
echo $_SESSION['vnome']."<br/>";
echo $_SESSION['vtexto']."<br/>";

?>

<br/>
        <a href="index.php" target="_self">voltar pagina</a><br/>
        <a href="pg2.php" target="_self">terceira pagina</a><br/>

<?php
}else
{
    echo "Acesso indevido.";
}

?>