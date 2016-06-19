<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$devRoute = '/lumen-oauth-api/public';

$app->get($devRoute . '/', function () use ($app) {
    return $app->version();
});

$app->post($devRoute . '/oauth/access_token', function() {
    return response()->json(Authorizer::issueAccessToken());
});
