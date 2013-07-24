<?php
/*******************************************************************************
 * Xbox LIVE Service Alerts                                                    *
 * =========================================================================== *
 * @file        index.php                                                      *
 * @package     XboxLiveStatus                                                 *
 * @version     1.0                                                            *
 * @copyright   (c) 2013 - Jason Clemons <me@jasonclemons.me>                  *
 * @repository  https://github.com/XboxLeaders/XboxLiveStatus                  *
 * @license     http://opensource.org/licenses/mit-license.php The MIT License *
 *******************************************************************************/

require('bootloader.php');

$xbox = new XboxStatus();
if($xbox->check() !== false) {
    $xbox->tweet();
}
