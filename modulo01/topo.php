<?php
  echo "<header>";
  if(empty($_SESSION['user'])){ 
    echo "<a href='user-login.php'>Entrar</a>";
  } else {
    echo "Ola, <strong>" . $_SESSION['nome'] . "</strong> | ";
    echo "Meus dados |";
    if (is_admin()) {
      echo "Novo usuario |";
      echo "Novo jogo |";
    }

    echo "<a href='user-logout.php'>Sair</a>";
    echo " (usuario do tipo " . $_SESSION['tipo'] . ")";
  }
  echo "</header>";

?>
