<?php
          // Parameters for database connection
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "project300";
          // Create connection with the parameters
          $con= mysqli_connect($servername, $username, $password, $database);

         if(!$con)
         {
            die("Error deleting record: ".mysqli_error($con));
         }

    ?>
