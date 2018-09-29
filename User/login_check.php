<?php
include './db_config.php';

session_start();
                if (isset($_POST['submit'])) {
                    $name = $_POST['email'];
                    $password = $_POST['password'];

                    $select = mysql_query("SELECT * FROM regis WHERE email='$name' && password='$password'");
                    $count = mysql_num_rows($select);
                    $fetch_admin = mysql_fetch_array($select);

                    if ($count == 1) {
                        $_SESSION['admin'] = $fetch_admin['id'];
                        header("location:user_index.php");
                    } else {
                        
                        header("lacation:login.php");
                        echo 'Sorry Email Or Password Is not correct';
                    }
                }
                
?>