    <?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $contact = filter-input(INPUT_POST, 'name')
    if (!empty($username)){
    if (!empty($password)){
        if (!empty($contact)){
    $host = "localhost";
    $dbusername = "id11343652_tejewellers";
    $dbpassword = "pagel456";
    $dbname = "id11343652_tejas";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO account (username, password,contact)
    values ('$username','$password','$name')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }''
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "Username should not be empty";
    die();
    }
     else{
    echo " should not be empty";
    die();
    ?>