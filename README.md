# [XboxLiveStatus 1.0.0](https://github.com/XboxLeaders/XboxLiveStatus)
### Post Xbox LIVE Service Alerts to Twitter

## Requirements
  1. A web server running PHP 5.4.0 or higher
  2. A web server with cron installed
  3. A [Twitter](http://twitter.com) account to post updates
  4. A Twitter Application

### To create a Twitter application:
  1. Go to http://dev.twitter.com
  2. Click on 'Register an app'
  3. Fill out the form to register the application
    * Application type: Browser
    * Callback URL: http://www.example.com/status/index.php
    * Default access type: Read & Write
  4. Accept Terms of Use
  5. You will then receive your Consumer and Access Keys

## Installation
  1. Get [Composer](https://getcomposer.org)
  2. Install library `php composer.phar xboxleaders/xboxlivestatus`
  3. Install dependencies `php composer.phar install`
  4. Set up cron `0 * * * * wget -O /dev/null http://www.example.com/status/index.php`
