<?php
    define("IS_LOCAL","localhost");
    define("DS",DIRECTORY_SEPARATOR);
    define("ROOT", getcwd().DS);
    define("ACTIONS", ROOT."web/actions".DS);
    define("VIEWS", ROOT."web/views".DS);
    define('BASEPATH', IS_LOCAL ? '/pruebaTecnica/' : '/');
    
?>