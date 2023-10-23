<?php
//Base
const BASE_DIR = __DIR__;

//read env.php
require_once(BASE_DIR . "/env.php");

//model
require_once(BASE_DIR . "/app/models/User.php");
require_once(BASE_DIR . "/app/models/Tweet.php");

//セッション開始
session_start();
session_regenerate_id(true);

