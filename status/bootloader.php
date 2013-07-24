<?php
/*******************************************************************************
 * Xbox LIVE Service Alerts                                                    *
 * =========================================================================== *
 * @file        bootloader.php                                                 *
 * @package     XboxLiveStatus                                                 *
 * @version     1.0                                                            *
 * @copyright   (c) 2013 - Jason Clemons <me@jasonclemons.me>                  *
 * @repository  https://github.com/XboxLeaders/XboxLiveStatus                  *
 * @license     http://opensource.org/licenses/mit-license.php The MIT License *
 *******************************************************************************/

require('classes/xboxstatus.class.php');
require('oauth/twitteroauth.php');

/*!
 * Twitter Consumer Key
 * This must be obtained from http://dev.twitter.com
 */
define('CONSUMER_KEY', 'PlaceYourTwitterConsumerKeyHere');

/*!
 * Twitter Consumer Secret
 * This must be obtained from http://dev.twitter.com
 */
define('CONSUMER_SECRET', 'PlaceYourTwitterConsumerSecretHere');

/*!
 * Twitter Access Key
 * This must be obtained from http://dev.twitter.com
 */
define('ACCESS_KEY', 'PlaceYourTwitterAccessKeyHere');

/*!
 * Twitter Access Secret
 * This must be obtained from http://dev.twitter.com
 */
define('ACCESS_SECRET', 'PlaceYourTwitterAccessSecretHere');

/*!
 * Custom error logging
 * This will log errors in a custom directory. Change to 'false' to disable.
 */
define('ERROR_LOG', '/full/path/to/error.log');
