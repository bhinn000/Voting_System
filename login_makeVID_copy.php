<html>

<head>
    <title>Personal Information Form</title>
    <link rel="stylesheet" href="login_makeVID.css">
</head>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Full Name:</label>
        <input type="text" name="name" required><br>

        <label>Citizenship Number:</label>
        <input type="text" name="citizenship_number" required><br>

        <input type="submit" name="submit" value="Submit"><br>

    </form>

    <?php

    if (isset($_POST['submit'])) {

        function satisfy()
        {
            global $row;
            global $c_id;
            global $conn;
            global $age;

            // connecting with database , making query and fetching data
            $row = array();
            $conn = mysqli_connect('127.0.0.1:3307', 'root', '', '_Voting', 7882);
            if (!$conn) {
                echo "Problem in connecting with your database";
            }

            $c_id = $_POST['citizenship_number'];
            $c_name = $_POST['name'];

            $sql_dob = "select dob from citizenss where c_id='$c_id' and name='$c_name' ";
            $sql_cid = "select c_id from citizenss where c_id='$c_id'  ";


            $query_dob = mysqli_query($conn, $sql_dob);
            if (!$query_dob) {
                echo "Problem with making query";
            }

            $query_cid = mysqli_query($conn, $sql_cid);
            if (!$query_cid) {
                echo "Problem with making query";
            }

            // if c_id and name matches with data
            if (mysqli_num_rows($query_dob) > 0) {
                while ($row = mysqli_fetch_assoc($query_dob)) {
                    if (age()) {
                        generateVoter_id();
                    } else {
                        header("location: under18.php");
                    }
                }
            } else {
                header("location:c_error.php");
            }
        }
        satisfy(); // call the age function and get the age value  
    }

    ?>

</body>

</html>

<!-- functions  -->

<?php
function generateVoter_id()
{
    global $c_id;
    global $conn;

    $v_c_id = $c_id;
    $parted = explode('-', $v_c_id);

    $year = substr($parted[1], -2);
    $date = $parted[2] . $parted[3];

    $voter_id = 'V' . $parted[0] . '-' . $year . $date . '-' . $parted[4];

    // check if it is in voters list and if yes check if it is in voted_done_acc

    $sql_voter_id = "select * from `voters` where voter_id ='$voter_id' ";
    $query_voter_id = mysqli_query($conn, $sql_voter_id);
    if (!$query_voter_id) {
        echo "Problem with making query";
    }



    //do if there is no voter_id alike this new_one
    if (mysqli_num_rows($query_voter_id) == 0) {

        echo "You are a new  voter_id is " .  $voter_id . " and the password is abc123 ";
        $sql_insert_in_voters = "INSERT INTO `voters`  (`C_ID`, `password`, `Voter_ID`) VALUES ('$c_id', 'abc123', '$voter_id')";
        $query_insert_in_voters = mysqli_query($conn, $sql_insert_in_voters);
        if (!$query_insert_in_voters) {
            echo "Problem with making query";
        }

        $vote_or_not = <<<_HTML_
<html>
<head>
        <style>
            /* Styling for the form */
            .A {
                background-color: rgb(139, 139, 202);
                color: white;
                border: none;
                padding: 10px;
                font-size: 70px;
                /* Updated font size to 70px */
                border-radius: 5px;
                cursor: pointer;
                width: 75%;
                height: 25%;
                margin: 30px;
            }

            .B {
                background-color: rgb(139, 139, 202);
                color: white;
                border: none;
                padding: 10px;
                font-size: 70px;
                /* Updated font size to 70px */
                border-radius: 5px;
                cursor: pointer;
                width: 75%;
                height: 25%;
                margin: 30px;
            }
        </style>
</head>       
        <body>
        <form method="post">
            <input type="submit" class="A" name="vote_yes" value="Vote Yes">
            <input type="submit" class="B" name="vote_no" value="Vote No">
        </form>
        </body>

        </html>
_HTML_;
        echo $vote_or_not;

        if (isset($_POST['vote_yes'])) {

            header("location: login_vote.php");
        }

        if (isset($_POST['vote_no'])) {
            header("location: thank.php");
        }
    } else {
        echo "You are an old voter , you already have voter_id<br>";
        // check if you have voted or not
        $sql_voted_done_id = "select * from `voted_done_acc` where voter_id ='$voter_id' ";
        $query_voted_done_id = mysqli_query($conn, $sql_voted_done_id);
        if (!$query_voted_done_id) {
            echo "Problem with making query";
        }
        if (mysqli_num_rows($query_voter_id) > 0) {
            echo "You have already voted !";
        }
    }
}

function age()
{
    global $row;
    $age = '';
    $dob = $row['dob'];
    $current_date = date("Y-m-d");
    $dob_object = DateTime::createFromFormat("Y-m-d", $dob);
    $current_date_object = new DateTime($current_date);
    if ($current_date_object >= $dob_object) {
        $diff = date_diff($current_date_object, $dob_object);
        $age = $diff->y;
        if ($age >= 18) {
            return 1;
        } else {
            return 0;
        }
    }
}
?>