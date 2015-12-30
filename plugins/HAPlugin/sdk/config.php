<?php
    define('DEST_MAIL'   , 'info@heathadvisor.it');
    define('NOREPLY_MAIL', 'no-reply@heathadvisor.it');
    define('NOREPLY_NAME', 'Health Advisor');
    define('TITLE_SITE'   , 'HealthAdvisor');


    define("DB_NAME","ha-stage-front");
    define("DB_USER","ha-stage-front");
    define("DB_PWD","ha-stage-front");

    define("HOME_PAGE","./home.php");

    $szProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    $szProtocol .= "://";

    $_SERVER['DEVMODE'] = "stage";


    $g_pathDocumentRoot = $_SERVER["DOCUMENT_ROOT"];
    $g_urlSite          = $szProtocol . $_SERVER['HTTP_HOST'] . "/";


    switch( $_SERVER['DEVMODE']){
        case "local": {
            // local
               $szWsUri = "https://ha.ciro.it";
               $szCertificate = "local.crt";

            $szExtraClientPath = "ha-site/";
            //   $szDocumentRoot = "C:/Users/Biagio Iannuzzi/Desktop/biagio/code projects/www/ha/site/";
            $g_pathDocumentRoot = "/Users/codethislab/Desktop/biagio/code-projects/www/ha/site/";

            define("DB_ADDRESS","95.110.156.108");
        }break;
        case "local-stage":{
            // local
            $szWsUri = "https://wsstage.ciro.it";
            $szCertificate = "wsstage.ciro.it.crt";

            $szExtraClientPath = "ha-site/";
            //   $szDocumentRoot = "C:/Users/Biagio Iannuzzi/Desktop/biagio/code projects/www/ha/site/";
            $g_pathDocumentRoot = "/Users/codethislab/Desktop/biagio/code-projects/www/ha/site";

            define("DB_ADDRESS","95.110.156.108");
        }break;
        case "stage":{

            $_SESSION["site"] = "home";

            $szWsUri = "https://wsstage.healthadvisor.it";
            $szCertificate = "stage.crt";
            $szExtraClientPath = "";
            $g_pathDocumentRoot = $_SERVER['DOCUMENT_ROOT'] . $szExtraClientPath ;

            define("DB_ADDRESS","localhost");
        }break;


        case "ambassador":{

            // $_SESSION["site"] = "ambassador";
            $_SESSION["site"] = "home";

            $szWsUri = "https://wsambassador.healthadvisor.it";
            $szCertificate = "stage.crt";
            $szExtraClientPath = "";
            $g_pathDocumentRoot = $_SERVER['DOCUMENT_ROOT'] . $szExtraClientPath ;

            define("DB_ADDRESS","localhost");
        }break;

        default:{

            $_SESSION["site"] = "home";

            $szWsUri = "https://wsstage.healthadvisor.it";
            $szCertificate = "stage.crt";
            $szExtraClientPath = DIRECTORY_SEPARATOR . "bozze" . DIRECTORY_SEPARATOR . "ver_1_0";

            $g_pathDocumentRoot = $_SERVER['DOCUMENT_ROOT'] . $szExtraClientPath ;

            define("DB_ADDRESS","95.110.156.108");
        }
    }

    require_once "$g_pathDocumentRoot/langs/lang-it.php";

    $g_aConfig = array(
        'sessionExpire' => "1H",
        'basePath' => $g_pathDocumentRoot ,
        'baseUrl' => $g_urlSite,
        'certificatePath' => $g_pathDocumentRoot . DIRECTORY_SEPARATOR . "certificate" . DIRECTORY_SEPARATOR .
            $szCertificate,
        'baseUrlNoDelimiter' => $szProtocol . $_SERVER['HTTP_HOST'],
        'webServiceUrl' => $szWsUri . "/",
        'baseJs' => 'js/',
        'baseImg' => 'images/',
        'pageItemNumber' => 10,
        'pageItemNumberMax' => 100000,
    );

?>