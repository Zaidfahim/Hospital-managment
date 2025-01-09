<html>
    <body>
        <?php>

        $servername = "localhost";
        $Operating _Room_NO="Operating _Room_NO";
        $Room_Incharge="Room_Incharge";
        $Incharge_Shedule ="Incharge_Shedule";

        $conn = new mysqli('local host', 'ors', 'project')
        if ($conn->connect_error){
            die("connectinfailed:" . $conn->connect_error )
        }

        $sql = "UPDATE ors Set Operating_Room_NO = '$_POST[Operating_Room_NO], Room_Incharge='$_POST[Room_Incharge] WHERE Incharge_Shedule='$_POST[Incharge_Shedule]'";
        ifv($conn-> query($sql) === TRUE){
            echo "Record Updated Successfully";
        }else{
            echo "Error Updating record:" .$conn->error; 
        }
        $conn->closr]();

        ?>

    </body>

</html>