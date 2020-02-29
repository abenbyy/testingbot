<?php


namespace LINE\LINEBot\EchoBot;


use Slim\Http\Request;
use Slim\Http\Response;

class ResponseController
{

    public function help(Request $req, Response $res){
        $res->getBody()->write("this is help");

        return $res;
    }
}