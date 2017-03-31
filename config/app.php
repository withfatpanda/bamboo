<?php

return [

	/*
  |--------------------------------------------------------------------------
  | Encryption Key
  |--------------------------------------------------------------------------
  |
  | This key is used by the Illuminate encrypter service and should be set
  | to a random, 32 character string, otherwise these encrypted strings
  | will not be safe. Please do this before deploying an application!
  |
  */

  'debug' => $debug = getenv('APP_DEBUG') ?: ( defined('WP_DEBUG') && WP_DEBUG ),

  'key' => getenv('AUTH_SALT'),

  'cipher' => 'AES-256-CBC',  

  'locale' => getenv('APP_LOCALE') ?: 'en',

  'log' => getenv('APP_LOG') ?: 'daily',

  'log_max_files' => getenv('APP_LOG_MAX_FILES') ?: 30,

  'log_level' => getenv('APP_LOG_LEVEL') ?: ( $debug ? 'info' : 'error' ),

];