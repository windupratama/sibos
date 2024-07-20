<?php

class Notification
{
    public static function setAlert($message, $action, $type)
    {
        $_SESSION['alert'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function alert()
    {
        if (isset($_SESSION['alert'])) {
            echo '<div class="alert alert-'.$_SESSION['alert']['type'].'" role="alert">
                    '.$_SESSION['alert']['message'].'. '.$_SESSION['alert']['action'].'
                    </div>';
            unset($_SESSION['alert']);
        }
    }
}
