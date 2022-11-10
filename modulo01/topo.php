<?php
  echo "<header>";
  if(empty($_SESSION['user'])){ 
    echo "<a href='user-login.php'>Entrar</a>";
  } else {
    echo "Ola, <strong>" . $_SESSION['nome'] . "</strong> | ";
    echo "Sair";
  }
  echo "</header>";

?>