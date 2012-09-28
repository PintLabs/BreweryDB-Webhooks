<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    throw new Exception('This must be accessed via POST'); 
}

$apiKey = ''; // your BreweryDB API key
 
// checks to make sure that the request was actually sent from the BreweryDB API
$isValidRequest = sha1($apiKey . $_POST['nonce']) == $_POST['key'];

if ($isValidRequest) {

    // this will be one of beer, brewery, location, guild, or event
    $attribute = $_POST['attribute'];

    // The corresponding beerId, breweryId, locationId, 
    // guildId, or eventId
    // depending upon what the value of $attribute is
    $attributeId = $_POST['attributeId'];
    
    // The action that was taken on the attribute.  
    // Either insert, delete, or edit
    $action = $_POST['action'];
    
    // The subaction that was taken on the attribute.
    // Either 'none' or various other options like 
    // 'socialaccount-update' or 'beer-add'
    $subAction = $_POST['subAction'];

    // Timestamp that the change was integrated
    $timestamp = $_POST['timestamp'];
    
    // Now you can take whatever action you need based 
    // on the information you received
    
    // The best practice is to put this data in a queue 
    // somewhere locally for you to process it in an 
    // asynchronous manner so you don't get your webhoook 
    // disabled because it takes too long to respond.
    
} else {
    throw new Exception('Key was not valid');
}