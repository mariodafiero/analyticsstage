<?php

  define("DB_NAME","ha-stage-front");
    define("DB_USER","ha-stage-front");
    define("DB_PWD","ha-stage-front");


    $szProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    $szProtocol .= "://";

    $_SERVER['DEVMODE'] = "stage";


    $g_pathDocumentRoot = $_SERVER["DOCUMENT_ROOT"];
    $g_urlSite          = $szProtocol . $_SERVER['HTTP_HOST'] . "/";



            $_SESSION["site"] = "home";

            $szWsUri = "https://wsstage.healthadvisor.it";
            $szCertificate = "stage.crt";
            $szExtraClientPath = "";
            $g_pathDocumentRoot = $_SERVER['DOCUMENT_ROOT'] . $szExtraClientPath ;

            define("DB_ADDRESS","localhost");

?>
