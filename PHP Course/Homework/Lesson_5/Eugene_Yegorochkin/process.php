<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $firstname   = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname    = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email       = isset($_POST['email']) ? $_POST['email'] : '';
    $ticket_type = isset($_POST['ticket_type']) ? $_POST['ticket_type'] : '';
    
    $filelist = glob("*.txt");
    if ($filelist) {
        foreach (glob("*.txt") as $filename) {
            if (strpos(file_get_contents("$filename"), "$email")) {
                echo "This email already exists. Please try another email";
            } else {
                $newFile = fopen("registration_" . date("d_m_Y") . ".txt", "a+");
                $mytext  = "$firstname,$lastname,$email,$ticket_type\n";
                $test    = fwrite($newFile, $mytext);
                if ($test)
                    echo 'Your information has been successfully saved.';
                else
                    echo 'Error saving information.';
                fclose($newFile);
            }
        }
    } else {
        
        $newFile = fopen("registration_" . date("d_m_Y") . ".txt", "a+");
        $mytext  = "$firstname,$lastname,$email,$ticket_type\n";
        $test    = fwrite($newFile, $mytext);
        if ($test)
            echo 'Your information has been successfully saved.';
        else
            echo 'Error saving information.';
        fclose($newFile);
    }
}
?>