<?php
    function thumb($arq)
    {
      $caminho = "fotos/$arq";
      if (is_null($arq) || !file_exists($caminho)) {
        return "fotos/indisponivel.png";
      } else {
        return $caminho;
      }
    }

    function voltar()
    {
      return "<a href='index.php'><span class='material-icons'>arrow_back</span></a>";
    }
    
    function msg_sucesso($m) {
      $resp = "<div class='sucesso'><i class='material-icons'>check_circle</i>$m</div>";
      return $resp;
    }

    function msg_aviso($m) {

    }

    function msg_erro($m) {

    }


  ?>