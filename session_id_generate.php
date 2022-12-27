<?php
// here started the code of session id generation
if (isset($_SESSION["uid"])) {
    if (!isset($_SESSION["session_id"])) {
        $uid = $_SESSION["uid"];
        $time = strval(time());
        $session_id = "session_id" . "_$uid" . "_$time";
        $_SESSION["session_id"] = $session_id;
    }
}
    // here ended the code of session id generation
