<html>
    <body>
        <?php>

        $servername = "localhost";
        $patient_ID ="P_ID";
        $Patient_Name ="Patient_Name";
        $Total_Charge ="Total_Charge";


        $conn = new mysqli('local host','', 'Patient_invoice', 'project')
        if ($conn->connect_error){
            die("connectinfailed:" . $conn->connect_error )
        }

        $sql = "SELECT * from Patient_Invoice WHERE Patient_ID='$_POST[P_ID]'";
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