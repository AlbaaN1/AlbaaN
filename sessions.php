<?php

    session_start();
    ?>

    <html>


    <head>
    </head>
    
    <body>

    <?php


            $_SESSION['emri']='arianit';
            $_SESSION['mbiemri']='tershnajku';
            echo 'Session set';
            echo '<br>';
            print_r($_SESSION);
            ?>
            <?php

                if (!isset($_SESSION['count']))
                {
                    $_SESSION['count'] = 1;

                }
                else
                {
                    $_SESSION['count']++;
                }
                    echo $_SESSION['count']; ?>

                    <?php

                    // session_unset();
                    // session_destroy();

                    ?>
                    <a href='sessions1.php'>next</a>

            
            
    