<?php

use Symfony\Component\HttpFoundation\Response as Res;

$response = new Res("Test", 400);
$response->send();