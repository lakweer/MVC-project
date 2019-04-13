<?php

  define('DEBUG', true);

  define('DB_NAME', 'evex_web'); //database name
  define('DB_USER', 'root'); // database user
  define('DB_PASSWORD', ''); //database password
  define('DB_HOST', '127.0.0.1'); // database host ***use IP address to avoid DNS lookup

  define('DEFAULT_CONTROLLER', 'Home'); // default controller if there isn't one defined in the url
  define('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller use this layout.

  define('PROOT', '/EveXWeb2/'); //set this to '/' for a live server.

  define('SITE_TITLE', 'EveXWeb MVC Framework'); // This will be used if no site title is set
  define('MENU_BRAND', 'EveXWeb'); //This is the Brand text in the menu

  define('CURRENT_USER_SESSION_NAME', 'kwXeusqldkiIKjehsLQZJFKJ'); //session name for logged in user
  define('REMEMBER_ME_COOKIE_NAME', 'JAJEI6382LSJVlkdjfh3801jvD'); //cookie name for logged in user remember me
  define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // time in seconds for remember me cookie to live (30 days)

  define('ACCESS_RESTRICTED', 'Restricted'); //Controller name for the restricted redirect
