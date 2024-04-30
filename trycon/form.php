<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
		$contactno = $_POST['contactno'];
    }

    // database details
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'sampledbs';

    // creating a connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id, fname, lname, email, contactno) VALUES ('0', '$fname', '$lname', '$email','$contactno')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($conn);

?>