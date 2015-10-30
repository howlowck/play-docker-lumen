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

$app->get('/', function () use ($app) {
    return "<!DOCTYPE html>
        <html>
        <head>
            <title>Lumen</title>

            <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

            <style>
                body {
                    margin: 0;
                    padding: 0;
                    width: 100%;
                    height: 100%;
                    color: #B0BEC5;
                    display: table;
                    font-weight: 100;
                    font-family: 'Lato';
                }

                .container {
                    text-align: center;
                    display: table-cell;
                    vertical-align: middle;
                }

                .content {
                    text-align: center;
                    display: inline-block;
                }

                .title {
                    font-size: 96px;
                    margin-bottom: 40px;
                }

                .quote {
                    font-size: 24px;
                }
            </style>
        </head>
        <body>
            <div class=\"container\">
                <div class=\"content\">
                    <div class=\"title\">Lumen!!</div>
                </div>
            </div>
        </body>
        </html>
    ";
});
