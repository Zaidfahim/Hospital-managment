<html>
    <body>
        <?php>

        $servername = "localhost";
        $room_number ="Room_NO";
        $Availability ="Availability";


        $conn = new mysqli('local host','', 'Room _Availability', 'project')
        if ($conn->connect_error){
            die("connectin failed:" . $conn->connect_error )
        }

        $sql = "SELECT * from Room _Availability WHERE Room_Number='$_POST[Room_NO]'";
        $result = $conn-> query($sql);
        
        if ($result->num_rows>0){
            while($row = $result-> fetch_assoc()){

                