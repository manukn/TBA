<?php

/**
 * Simple-SMS
 * Simple-SMS is a package made for Laravel to send/receive (polling/pushing) text messages.
 *
 * @link http://www.simplesoftware.io
 * @author SimpleSoftware support@simplesoftware.io
 *
 */

/*
    |--------------------------------------------------------------------------
    | Simple SMS
    |--------------------------------------------------------------------------
    | Driver
    |   Email:  The Email driver uses the Illuminate\Mail\Mailer instance to
    |           send SMS messages based on the carriers e-mail to SMS gateways.
    |           The Email driver will send messages out based on your Laravel
    |           mail settings.
    |   Twilio: Twilio is an SMS service that sends messages at a affordable
    |           and reliable rate.
    |--------------------------------------------------------------------------
    | From
    |   Email:  The from address must be a valid email address.
    |   Twilio: The from address must be a verified phone number within Twilio.
    |--------------------------------------------------------------------------
    | Twilio Additional Settings
    |   Account SID:  The Account SID associated with your Twilio account.
    |   Auth Token:   The Auth Token associated with your Twilio account.
    |   Verify:       Ensures extra security by checking if requests
    |                 are really coming from Twilio.
    |
    |--------------------------------------------------------------------------
    | EZTexting Additional Settings
    |   Username:  Your login username.
    |   Password:  Your login password.
    |--------------------------------------------------------------------------
    | CallFire
    |   App Login:     Your login settings. (https://www.callfire.com/ui/manage/access)
    |   App Password:  Your login password. (https://www.callfire.com/ui/manage/access)
    |--------------------------------------------------------------------------
    | Mozeo
    | Company Key:  Your company key. (https://www.mozeo.com/mozeo/customer/platformdetails.php)
    | Username:     Your username.  (https://www.mozeo.com/mozeo/customer/platformdetails.php)
    | Password:     Your password.  (https://www.mozeo.com/mozeo/customer/platformdetails.php)

*/

return [
    'driver' => 'twilio',
    'from' => '+12015911080',
    'twilio' => [
        'account_sid' => 'AC649de417423dddd66e5f76230611ef08',
        'auth_token' => 'cc6c77f102a94a1f432a6588d53741b8',
        'verify' => false,
    ],
    'eztexting' => [
        'username' => 'Your EZTexting Username',
        'password' => 'Your EZTexting Password'
    ],
    'callfire' => [
        'app_login' => 'Your CallFire API Login',
        'app_password' => 'Your CallFire API Password'
    ],
    'mozeo' => [
        'companyKey' => 'CCnGuxmQCA9eMFg',
        'username' => 'manuknm',
        'password' => 'fvZ5FMDj'
    ]
];