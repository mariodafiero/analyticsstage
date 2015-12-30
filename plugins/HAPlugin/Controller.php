<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\HAPlugin;

use Piwik\View;
use PDO;
use PDOException;
use PDOStatement;

  require_once "ha_config.php";


/**
 * A controller let's you for example create a page that can be added to a menu. For more information read our guide
 * http://developer.piwik.org/guides/mvc-in-piwik or have a look at the our API references for controller and view:
 * http://developer.piwik.org/api-reference/Piwik/Plugin/Controller and
 * http://developer.piwik.org/api-reference/Piwik/View
 */
class Controller extends \Piwik\Plugin\Controller
{
 
public function index()
{
	$col = "mysql:host=".DB_ADDRESS.";dbname=".DB_NAME;
	// blocco try per il lancio dell'istruzione
	try {
	        // connessione tramite creazione di un oggetto PDO
	        $db =  new PDO($col , DB_USER, DB_PWD);
	    	$sql = $db->prepare( "SELECT * FROM medici_ordine_na" );
	        $sql->execute();
        	$aRecordDoctors = $sql->fetchAll();

	        $oDoctor = $aRecordDoctors[0];

        	 // Render the Twig template templates/index.twig and assign the view variable answerToLife to the view.
	        return $this->renderTemplate('index', array(
	            'answerToLife' => 42 
        	));
	}
        	// blocco catch per la gestione delle eccezioni
	catch(PDOException $e) {
        	// notifica in caso di errorre
        	echo 'Attenzione: '.$e->getMessage();
	}
}

//FINE CLASSE
}
