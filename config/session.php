<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Default Session Driver
  |--------------------------------------------------------------------------
  |
  | This option controls the default session "driver" that will be used on
  | requests. By default, we will use the lightweight native driver but
  | you may specify any of the other wonderful drivers provided here.
  |
  | Supported: "wordpress", "file", "cookie", "database", "apc",
  |            "memcached", "redis", "array"
  |
  */

  'driver' => getenv('SESSION_DRIVER') ?: 'wordpress',

  /*
  |--------------------------------------------------------------------------
  | Session Lifetime
  |--------------------------------------------------------------------------
  |
  | Here you may specify the number of minutes that you wish the session
  | to be allowed to remain idle before it expires. If you want them
  | to immediately expire on the browser closing, set that option.
  |
  */

  'lifetime' => getenv('SESSION_LIFETIME') ?: 120,

  'expire_on_close' => getenv('SESSION_EXPIRE_ON_CLOSE') ?: false,

  /*
  |--------------------------------------------------------------------------
  | Session Encryption
  |--------------------------------------------------------------------------
  |
  | This option allows you to easily specify that all of your session data
  | should be encrypted before it is stored. All encryption will be run
  | automatically by Laravel and you can use the Session like normal.
  |
  */

  'encrypt' => getenv('SESSION_ENCRYPT') ?: false,

  /*
  |--------------------------------------------------------------------------
  | Session Database Connection
  |--------------------------------------------------------------------------
  |
  | When using the "database" or "redis" session drivers, you may specify a
  | connection that should be used to manage these sessions. This should
  | correspond to a connection in your database configuration options.
  |
  */

  'connection' => getenv('SESSION_DB_CONNECTION') ?: 'mysql',

  /*
  |--------------------------------------------------------------------------
  | Session Database Table
  |--------------------------------------------------------------------------
  |
  | When using the "database" session driver, you may specify the table we
  | should use to manage the sessions. Of course, a sensible default is
  | provided for you; however, you are free to change this as needed.
  |
  */

  'table' => 'sessions',

  /*
  |--------------------------------------------------------------------------
  | Session Sweeping Lottery
  |--------------------------------------------------------------------------
  |
  | Some session drivers must manually sweep their storage location to get
  | rid of old sessions from storage. Here are the chances that it will
  | happen on a given request. By default, the odds are 2 out of 100.
  |
  */

  'lottery' => [2, 100],

  /*
  |--------------------------------------------------------------------------
  | Session Cookie Name
  |--------------------------------------------------------------------------
  |
  | Here you may change the name of the cookie used to identify a session
  | instance by ID. The name specified here will get used every time a
  | new session cookie is created by the framework for every driver.
  |
  */

  'cookie' => getenv('SESSION_COOKIE_NAME') ?: 'illuminate_session',

  /*
  |--------------------------------------------------------------------------
  | Session Cookie Path
  |--------------------------------------------------------------------------
  |
  | The session cookie path determines the path for which the cookie will
  | be regarded as available. Typically, this will be the root path of
  | your application but you are free to change this when necessary.
  |
  */

  'path' => '/',

  /*
  |--------------------------------------------------------------------------
  | Session Cookie Domain
  |--------------------------------------------------------------------------
  |
  | Here you may change the domain of the cookie used to identify a session
  | in your application. This will determine which domains the cookie is
  | available to in your application. A sensible default has been set.
  |
  */

  'domain' => getenv('SESSION_COOKIE_DOMAIN') ?: null,

  /*
  |--------------------------------------------------------------------------
  | HTTPS Only Cookies
  |--------------------------------------------------------------------------
  |
  | By setting this option to true, session cookies will only be sent back
  | to the server if the browser has a HTTPS connection. This will keep
  | the cookie from being sent to you if it can not be done securely.
  |
  */

  'secure' => getenv('SESSION_COOKIE_SECURE') ?: false,

];
