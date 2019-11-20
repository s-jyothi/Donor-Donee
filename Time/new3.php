<?php
session_start();
error_reporting(0);
include('../Login/config.php');
if(strlen($_SESSION['username'])==0)
    {   
header('location:../Login/index.php');
}
else{
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>BOOKS</title>
        <style>
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            th,
            td {
                text-align: left;
                padding: 16px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2
            }

			.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  
}
.button:hover {
  background-color: red; /* Green */
  color: white;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\21D0';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
        </style>
		
    </head>

    <body>
        <div class="log">
            <a href="logout.php">  <button class="button" style="vertical-align:middle" ><span>Logout </span></button></a>
            <a          href="../new.php">  <button class="button" style="vertical-align:middle" ><span>Back</span></button></a>
        </div>


        <h2>Total Books Donations</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
				
				<th>Select Class</th>
                <th>Address</th>
                <th>Pincode</th>
                
            </tr>


            <?php
     $con=mysqli_connect("localhost","root","","almstock") or die(mysql_error());
     

                    $sql = "SELECT * FROM books ";
                    $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo    '
                                      <tr>
                                      <td>'.$row["Name"].'</td>
                                      <td>'.$row["email"].'</td>
                                      <td>'.$row["Mobile"].'</td>
									  
									  <td>'.$row["sel"].'</td>
                                      <td>'.$row["address"].'</td>
                                      <td>'.$row["pin"].'</td>
                                      
                                      </tr>';
                                }
                        } else {
                            echo "";
                        }


             
                        ?>


        </table>

<!--
        <div class="">
            <a href="logout.php">  <button class="button" style="vertical-align:middle" ><span>Logout </span></button></a>
        </div>
-->

    </body>

    </html>
<?php } ?>