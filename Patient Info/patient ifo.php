<html>
    <body>
        <?php>

        $servername = "localhost";
        $patient_ID ="P_ID";
        $Full_name ="Name";
        $Age="Age";
        $Date_Of_Birth="DOB";
        $Gender="Gender";
        $Contact_number="COntact_NO";
        $Address="Address";

        $conn = new mysqli('local host','', 'Patient_info', 'project')
        if ($conn->connect_error){
            die("connectinfailed:" . $conn->connect_error )
        }

        $sql = "SELECT * from Patient_INFO WHERE Patient_ID='$_POST[P_ID]'";
        $result = $conn-> query($sql);
        
        if ($result->num_rows>0){
            while($row = $result-> fetch_assoc()){
        
        }else{
            echo "Error Updating record:" .$conn->error; 
        }
        $conn->closr]();

        ?>

    </body>

</html>