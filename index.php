<?php

$server_key = "SB-Mid-server-acFlMZ-5fEFsYMDsK840g8Ia";

$is_production = false;

$api_url = $is_production ? 
  'https://app.midtrans.com/snap/v1/transactions' : 
  'https://app.sandbox.midtrans.com/snap/v1/transactions';

echo strpos($_SERVER["REQUEST_URI"], '/charge');

echo $_SERVER["REQUEST_URI"]

?>