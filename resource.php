<?php

require_once __DIR__.'/server.php';

// Handle a request to a resource and authenticate the access token
if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
    $server->getResponse()->send();
    die;
}

// get the data and return the results
echo json_encode(['success' => true, 'message' => 'You accessed my APIs!']);
