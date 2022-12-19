<?php
use \Bitrix\Main\EventManager;

$eventManager = EventManager::getInstance();

$currentNamespace = '\Site\Miin';

//$eventManager->addEventHandler(
//    'main',
//    'OnSuccessCatalogImport1C',  // Событие
//    array( $currentNamespace.'\SomeClass', 'ClassMethod')  // SomeClass.php лежит в корне lib. \catalog\SomeClass - так для класса из подкаталога
//);
?>