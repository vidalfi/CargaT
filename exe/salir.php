<?php
session_start();
session_unregister("nombre");
session_unregister("usuario");
session_unregister("iduser");
session_unregister("empresa");
session_unregister("sigla");
session_unregister("nit");
session_unregister("dir");
session_unregister("ciudad");
session_unregister("tel");
session_unregister("fax");
session_unregister("cel");
session_unregister("cod");
session_destroy();
  header("Location: ../index.php");
?>