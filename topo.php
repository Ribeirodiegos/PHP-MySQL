<?php
  echo "<header>";
  if(empty($_SESSION['user'])){ 
    echo "<a href='user-login.php'>Entrar</a>";
  } else {
    echo "Ola, <strong>" . $_SESSION['nome'] . "</strong> | ";
    echo "<a href='user-edit.php'>Meus dados</a> |";
    if (is_admin()) {
      echo "<a href='user-new.php'>Novo usuario |</a>";
      echo "Novo jogo |";
    }

    echo "<a href='user-logout.php'>Sair</a>";
    echo " (usuario do tipo " . $_SESSION['tipo'] . ")";
  }
  echo "</header>";

?>
