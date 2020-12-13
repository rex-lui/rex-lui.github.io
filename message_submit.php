<?php
    if (isset($_POST['submitbtn']))
    {
        if (mail($to, $email_subject, $body, $from))
        {
            echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
        }
        else
        {
        echo "<font color=\"red\"><p>Your message sending has failed! Please manually email (your email)!</p></font>";
        }
    }
?>