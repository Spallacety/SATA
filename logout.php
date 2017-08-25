<?php

setcookie("nome", "", time()-3600);
setcookie("id_profissional", "", time()-3600);
setcookie("nivel_acesso", "", time()-3600);
setcookie("id_profissao", "", time()-3600);
header("Location: /");

?>