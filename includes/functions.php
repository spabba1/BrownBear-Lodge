<?php

class Functions {

    public function strip_zeros_from_date($marked_string="") {
        // first remove the marked zeros
        $no_zeros = str_replace('*0', '', $marked_string);
        // then remove any remaining marks
        $cleaned_string = str_replace('*', '', $no_zeros);
        return $cleaned_string;
    }

    public function redirect_to($location = NULL) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }

    public function output_message($message="") {
        if (!empty($message)) {
            return "<p class=\"message\">{$message}</p>";
        } else {
            return "";
        }
    }

    public function __autoload($class_name) {
        $class_name = strtolower($class_name);
        $path = LIB_PATH . DS . "{$class_name}.php";
        if (file_exists($path)) {
            require_once($path);
        } else {
            die("The file {$class_name}.php could not be found.");
        }
    }

    public function include_layout_template($template="") {
        include(SITE_ROOT . DS . 'public' . DS . 'layouts' . DS . $template);
    }

    public function log_action($action, $message="") {
        $logfile = SITE_ROOT . DS . 'logs' . DS . 'log.txt';
        $new = file_exists($logfile) ? false : true;
        if ($handle == fopen($logfile, 'a')) { // append
            $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
            $content = "{$timestamp} | {$action}: {$message}\n";
            fwrite($handle, $content);
            fclose($handle);
            if ($new) {
                chmod($logfile, 0755);
            }
        } else {
            echo "Could not open log file for writing.";
        }
    }

    public function datetime_to_text($datetime="") {
        $unixdatetime = strtotime($datetime);
        return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
    }

    public function mysqli_fetch_full_result_array($result) {
        $table_result = array();
        $r = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $arr_row = array();
            $c = 0;
            $fieldinfo = mysqli_fetch_fields($result);
            foreach ($fieldinfo as $val) {
              $arr_row[$val->name] = $row[$val->name];
            }
            //while ($c < mysqli_num_fields($result)) {
                //$col = mysqli_fetch_field($result);
                //$arr_row[$col->name] = $row[$col->name];
                //$c++;
            //}
            $table_result[$r] = $arr_row;
            $r++;
        }
        return $table_result;
    }

    public function get_month_num($month) {
        if (empty($month))
            return 'Unknown';

        $months = array('Jan' => '01', 'Feb' => '02', 'Mar' => '03', 'Apr' => '04', 'May' => '05', 'Jun' => '06', 'Jul' => '07', 'Aug' => '08', 'Sep' => '09', 'Oct' => '10', 'Nov' => '11', 'Dec' => '12');

        return $months[$month];
    }

    /**
     * This function obfuscates email address so that it cannot be scraped by
     * email scrapers and then used to send email offering you millions of
     * dollars to help out someone in Nigeria.
     *
     * @link http://www.maurits.vdschee.nl/php_hide_email/
     *
     * @param string $email Email address to be shown on web page.
     * @return string javascript snippet to insert into page.
     */

    public function hideEmail($email) {

        $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
        $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999);
        for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])];
        $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';
        $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
        $script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"?subject=Miami Bartending School Website\\">"+d+"</a>"';
        $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")";
        $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';

        return '<span id="'.$id.'"><noscript><em>Email address protected by JavaScript. Activate javascript to see the email.</em></noscript></span>'.$script;
    }


}
$functions = new Functions();


// error handler function
function bbearlodgeErrorHandler($errno, $errstr, $errfile, $errline, $vars)
{
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting
        return;
    }

    // Set error recipient
    $emailTo = 'jeremeyhustman@gmail.com';

    $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    switch ($errno) {
    case E_USER_ERROR:
        $email = "
            <p>An error ($errno) occured on line <strong>$errline</strong> and in
            the <strong>file: $errfile.</strong></p>
            <p> $errstr </p>

            <p>, PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>";

        $email .= "<pre>" . print_r($vars, 1) . "</pre>";

        echo "<b>My ERROR</b> [$errno] $errstr<br />\n";
        echo "  Fatal error on line $errline in file $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
        echo "Aborting...<br />\n";
        error_log($email, 1, $emailTo, $headers);
        exit(1);
        break;

    case E_USER_WARNING:
        $email = "
            <p>Warning ($errno) occured on line <strong>$errline</strong> and in
            the <strong>file: $errfile.</strong></p>
            <p> $errstr </p>
            <p>, PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>";

        $email .= "<pre>" . print_r($vars, 1) . "</pre>";
        echo "<b>My WARNING</b> [$errno] $errstr<br />\n";
        error_log($email, 1, $emailTo, $headers);
        break;

    case E_USER_NOTICE:
        $email = "
            <p>Notice ($errno) occured on line <strong>$errline</strong> and in
            the <strong>file: $errfile.</strong></p>
            <p> $errstr </p>

            <p>, PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>";

        $email .= "<pre>" . print_r($vars, 1) . "</pre>";

        echo "<b>NOTICE</b> [$errno] $errstr<br />\n";
        error_log($email, 1, $emailTo, $headers);
        break;

    default:
        $email = "
            <p>Unknown ($errno) occured on line <strong>$errline</strong> and in
            the <strong>file: $errfile.</strong></p>
            <p> $errstr </p>

            <p>, PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>";

        $email .= "<pre>" . print_r($vars, 1) . "</pre>";

        echo "Unknown error type: [$errno] $errstr<br />\n";
        break;
    }

    /* Don't execute PHP internal error handler */
    return true;
}
set_error_handler('bbearlodgeErrorHandler');
?>
