<html>
    <body>
        <?php>

        $servername = "localhost";
        $Staff_ID = "Staff_ID";
        $Staff_Name ="Staff_Name";
        $Staff_Shedule ="Staff_Shedule";



        $conn = new mysqli('local host','', 'Staff_Shedule', 'project')
        if ($conn->connect_error){
            die("connectin failed:" . $conn->connect_error )
        }

        $sql = "SELECT * from Staff_Shedule WHERE Staff_Id='$_POST[Staff_ID]'";
        $result = $conn-> query($sql);
        
        if ($result->num_rows>0){
            while($row = $result-> fetch_assoc()){

                