<?php

use Symfony\Component\HttpFoundation\Response;

$response = new Response("Test", 400);
$response->send();