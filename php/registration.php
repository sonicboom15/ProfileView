<?php
require_once "../config/dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (!empty(trim($_POST["payload"]["username"])))
    {
        $sql = "SELECT id FROM users WHERE username = ?";
        if ($stmt = $mysqli->prepare($sql))
        {
            $stmt->bind_param("s", $param_username);
            $param_username = trim($_POST["payload"]["username"]);
            if ($stmt->execute())
            {
                $stmt->store_result();
                if ($stmt->num_rows == 1)
                {
                    echo 0;
                    exit();
                }
                else
                {
                    $username = trim($_POST["payload"]["username"]);
                    $param_username = "";
                    if (!empty(trim($_POST["payload"]["password"])))
                    {
                        $password = $_POST["payload"]["password"];
                        if (!empty(trim($_POST["payload"]["confirmpassword"])))
                        {
                            $confirm_password = $_POST["payload"]["confirmpassword"];
                            if ($password == $confirm_password)
                            {
                                $param_password = "";
                                if (!empty(trim($_POST["payload"]["email"])))
                                {
                                    $email = $_POST["payload"]["email"];
                                    if (!empty(trim($_POST["payload"]["number"])))
                                    {
                                        $number = $_POST["payload"]["number"];
                                        if (!empty(trim($_POST["payload"]["dob"])))
                                        {
                                            $dob = $_POST["payload"]["dob"];
                                            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                                            if ($stmt = $mysqli->prepare($sql))
                                            {
                                                $stmt->bind_param("ss", $param_username, $param_password);
                                                $param_username = $username;
                                                $param_password = password_hash($password, PASSWORD_DEFAULT);
                                                if ($stmt->execute())
                                                {
                                                    $userid = $mysqli->insert_id;
                                                    $sql = "INSERT INTO userdata (userid,email,contact,dob) VALUES (?,?,?,?)";
                                                    if ($stmt = $mysqli->prepare($sql))
                                                    {
                                                        $stmt->bind_param("ssss", $userid, $email, $number, $dob);
                                                        $stmt->execute();
                                                        $fp = fopen('results.json', 'w');
                                                        fwrite($fp, json_encode($_POST["payload"]));
                                                        fclose($fp);
                                                        echo 1;
                                                        exit();
                                                    }
                                                }
                                            }
                                            else
                                            {
                                                echo 2;
                                                exit();
                                            }
                                        }
                                        else
                                        {
                                            echo 3;
                                            exit();
                                        }
                                    }
                                    else
                                    {
                                        echo 4;
                                        exit();
                                    }
                                }
                                else
                                {
                                    echo 5;
                                    exit();
                                }
                            }
                            else
                            {
                                echo 6;
                                exit();
                            }
                        }
                        else
                        {
                            echo 7;
                            exit();
                        }
                        $stmt->close();
                    }
                }
                $mysqli->close();
            }
        }
    }
}
?>
