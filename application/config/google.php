<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '191154910056-oibn6q5rpj0ct7rrmjenurk0eb694sh9.apps.googleusercontent.com';
$config['google']['client_secret']    = 'dhLOfWdewEy5MQb9iVf3I2rt';
$config['google']['redirect_uri']     = 'http://localhost/stunning_homestay/user_authentication/';
$config['google']['application_name'] = 'homestay-pw';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();