<?php
  function gerarHash($senha) {
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    return $hash;
  }

  function testarHash($senha, $hash) {
    $ok = password_verify($senha, $hash);
    return $ok;
  }

  // echo gerarHash('diego');
  if (testarHash('dieo', '$2y$10$kNmDx3b.nNONl3CbMlbAT.gF6xHXE6ZhKa6sX3fwofmNG4llfOKey')) {
    echo "senha correta!";
  } else {
    echo "senha incorreta";
  }

?>