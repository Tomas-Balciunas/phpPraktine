<?php 

namespace PraktineApp;

class Request {
    public static function uri() {
        return str_replace("/atsiskaitymas","",trim($_SERVER['REQUEST_URI']));
    }
}