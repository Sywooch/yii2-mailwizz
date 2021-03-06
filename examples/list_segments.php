<?php
/**
 * This file contains examples for using the MailWizzApi PHP-SDK.
 *
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @link http://www.mailwizz.com/
 * @copyright 2013-2014 http://www.mailwizz.com/
 */
 
// require the setup which has registered the autoloader
use MailWizzApi\Endpoint\ListSegments;

require_once dirname(__FILE__) . '/setup.php';

// CREATE THE ENDPOINT
$endpoint = new ListSegments();

/*===================================================================================*/

// GET ALL ITEMS
$response = $endpoint->getSegments('LIST-UNIQUE-ID');

// DISPLAY RESPONSE
echo '<pre>';
print_r($response->body);
echo '</pre>';