<?php
function generate_login_fail_messaging(){
        ob_start();
        if($_GET['login'] == 'failed'){
        echo '<div class="message_login_fail" style="background-color: #ca5151;color: #ffffff;display: block;margin-bottom: 20px;text-align: center;padding: 9px 15px; width: fit-content;margin: 0 auto;"><span style="color: #ca5151;background-color: #fff;width: 20px;height: 20px;display: inline-flex;align-items: center;justify-content: center;font-weight: 900;border-radius: 50%;margin-right: 10px;">!</span>Oops! Looks like you have entered the wrong username or password. Please check your login details and try again.</div>';
        }
        $return_string = ob_get_contents();
        ob_end_clean();
        return $return_string;
    }
    add_shortcode('login_fail_messaging', 'generate_login_fail_messaging');
