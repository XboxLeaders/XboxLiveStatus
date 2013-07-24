<?php
/*******************************************************************************
 * Xbox LIVE Service Alerts                                                    *
 * =========================================================================== *
 * @file        xboxstatus.class.php                                           *
 * @package     XboxLiveStatus                                                 *
 * @version     1.0                                                            *
 * @copyright   (c) 2013 - Jason Clemons <me@jasonclemons.me>                  *
 * @repository  https://github.com/XboxLeaders/XboxLiveStatus                  *
 * @license     http://opensource.org/licenses/mit-license.php The MIT License *
 *******************************************************************************/

class XboxStatus {

    public function find($haystack, $start, $finish) {
        $s = explode($haystack, $start);
        $s = explode($finish, $s[0]);
        return $s[1];
    }

    public function http($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);

        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }

    public function tweet() {
		$tweet = 'There is a Service Alert for Xbox LIVE. Please see http://support.xbox.com/xbox-live-status for more information. #XboxLiveStatus #ServiceAlert';
        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_KEY, ACCESS_SECRET);
        $result = $connection->post('statuses/update', $tweet);

        if($connection->http_code !== 200) {
            error_log('Error posting status: "' . $tweet . '"', ERROR_LOG);
        }
    }

    public function check() {
        $html = $this->http('http://support.xbox.com/en-US/LiveStatus/GetHeaderStatusModule');
        if($this->find($html, 'class="LiveStatusLabelContent">', '</span>') == 'Up and Running') {
            return false;
        } else if {
            return $this->find($html, 'class="LiveStatusLabelContent">', '</span>') == 'Up and Running');
        }
    }

}
