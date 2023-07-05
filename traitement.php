<?php
            include "connect.php";

            if(!empty($POST["user"]) && !empty($POST["pass"]))
            {
                function valid($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $name = valid($POST["user"]);
                $pass = valid($POST["pass"]);

                if(empty($name)){
                    header("Location : connexion.php?error=Username is required");
                }else if(empty($pass)){
                    header("Location : connexion.php?error=Password is required");
                }else{
                    // execute la requete .
                    $sql = "SELECT * FROM users WHERE user = $name AND pass = $pass ";
                    $result = mysqli_query($conect , $sql);

                    if(mysqli_num_row($result) === 1){

                        $row = mysqli_fetch_assoc($result);
                        print_r($row);

                    }
                }
                header("Location:index.php?username=$name");
            }else{
                header("Location:connexion.php?error");
                exit();
            }

?>