<?php

#Obtain these credentials from your Emarsys Account Security Settings
#https://help.emarsys.com/hc/en-us/articles/115004740329-your-account-security-settings#api-users
return [
    'username' => env('EMARSYS_USERNAME', ''),
    'secret' => env('EMARSYS_SECRET', ''),
];
