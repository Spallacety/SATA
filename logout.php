<?php

setcookie("nome", "", time()-3600);
setcookie("id_profissional", "", time()-3600);
header("Location: /index.php");

?>