<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

echo "<h3>Terceira pagina</h3><br/>";
echo $_SESSION['vnome']."<br/>";
echo $_SESSION['vtexto']."<br/>";
echo $_SESSION['vcanal']."<br/>";

?>

<br/>
        <a href="index.php" target="_self">voltar pagina</a><br/>
        <a href="pg1.php" target="_self">segunda pagina</a><br/>
