<?php
/**
 * This uses the SMTP class alone to check that a connection can be made to an SMTP server,
 * authenticate, then disconnect
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new SMTP instance
$smtp = new SMTP;

//Enable connection-level debug output
$smtp->do_debug = SMTP::DEBUG_CONNECTION;
$site['smtp_mode'] = 'enabled';
try {
//Connect to an SMTP server
    if ($smtp->connect('mail.weboforce.com', 587)) {
        //Say hello
        if ($smtp->hello('127.0.0.1')) { //Put your host name in here
            //Authenticate
            if ($smtp->authenticate('nitesh@weboforce.com', 'NItesh$100')) {
                echo "Connected ok!";
            } else {
                throw new Exception('Authentication failed: ' . $smtp->getLastReply());
            }
        } else {
            throw new Exception('HELO failed: '. $smtp->getLastReply());
        }
    } else {
        throw new Exception('Connect failed');
    }
} catch (Exception $e) {
    //echo 'SMTP error: '. $e->getMessage(), "\n";
}
//Whatever happened, close the connection.
$smtp->quit(true);

?>