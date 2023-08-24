<?php
                      $hostname= "localhost";
                      $username= "root";
                      $password= "";
                      $database= "db_evoting";
                        //Establish Connection
                        $conn= mysqli_connect($hostname, $username, $password, $database);
                        //get Party Details
                        $PName = $_POST["PartyName"];
                        $PId = $_POST["ID"];

                        //Check
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sql= "insert into tbl_party values('.$PName','.$PId')";
                        $query= mysqli_query($conn, $sql);

                        header("Location: cpanel.php");
                      ?>