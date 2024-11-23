<?php
    include "connection.php";
    try {
        if ($_POST) { 
            $fname = $_POST['name'];
            $mail = $_POST['email'];
            $phno = $_POST['phone'];
            $pick = $_POST['pickup'];
            $dest = $_POST['destination'];
            $date = $_POST['date']; 
            $time = $_POST['time'];
            $ampm = $_POST['ampm'];
            if (isset($_POST['insert'])) {
                $query = "INSERT INTO taxibook (name, email, phno, pickuploc, destination, date, time, ampm) VALUES ('$fname','$mail','$phno','$pick','$dest','$date','$time','$ampm')";
                $cmd = mysqli_query($conn, $query);
                if ($cmd) {
                    // echo "<script>alert('Taxi Booked Successfully')</script>";
                    echo "<style>
                            .msg {
                                background-color: #ffffff;
                                color: #182258;
                                width: 60%;  /* Set width to a percentage for responsiveness */
                                max-width: 400px;  /* Maximum width for large screens */
                                height: 20vh;
                                padding: 20px;
                                border-radius: 8px;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                text-align: center;
                                margin: 0 auto; 
                                position: relative; 
                                margin-top: 10vh; 
                            }
                            
                            /* Responsive */
                            @media (max-width: 768px) {
                                .msg {
                                    width: 80%;  
                                    height: auto;  
                                }
                            }

                            .msg:hover {
                                transform: scale(1.05); 
                                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); 
                            }

                            .msg img {
                                margin-top: 10px;
                                width: 50px;
                                height: 50px;
                            }
                        </style>";

                    echo "<div class='msg'>
                                <h3>Taxi Booked Successfully</h3>
                                <img src='images/tick.png' alt='Success'>
                            </div>";
                    echo "<script>
                            setTimeout(function() {
                                window.location.href = 'index.html'; //redirect home page after 3 seconds
                            }, 1500);
                        </script>";

                } 
                else {
                    throw new Exception("Error in SQL query: " . mysqli_error($conn));
                }
            }
        }
    } 
    catch (Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "')</script>";
    }
?>
