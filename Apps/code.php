<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        /* CSS styles */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        body {
            display: flex;
            flex-direction: column;
            margin: 20px;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Header
    function displayHeader()
    {
        echo "<header>";
        echo "<h1>Welcome to My Website</h1>";
        echo "</header>";
    }

    // Footer
    function displayFooter()
    {
        echo "<footer>";
        echo "<p>© 2023 My Website. All rights reserved.</p>";
        echo "</footer>";
    }

    // Connection parameters
    $host = "sql106.epizy.com";
    $port = 3306;
    $dbname = "epiz_34146492_test";
    $user = "epiz_34146492";
    $password = "ssjusDarCn";
    // $query = "select * from parent_info p inner join student_info s on p.stud_id=s.stud_id where s.first_name='Joshua' and s.last_name='Wilson';";
    $query = "SELECT p.parent_id, p.p_status, p.medu, p.fedu, p.mjob, p.fjob, p.guardian, s.stud_id, s.first_name, s.last_name, s.sex, s.age, s.address, s.famsize FROM parent_info p INNER JOIN student_info s ON p.stud_id = s.stud_id WHERE s.first_name='Joshua' AND s.last_name='Wilson';";

        $query2 = "SELECT s.study_score, AVG(a.final_score) AS avg_final_score FROM study_time s INNER JOIN overall_assesment a ON s.study_id = a.study_time GROUP BY s.study_score;";

$query3 ="select first_name, last_name from student_info where stud_id in (select stud_id from parent_info where guardian <> 'mother' and guardian <> 'father');";
$query4="select avg(final_score) as avg_final_Score from overall_assesment o inner join extra_curricular e on o.stud_id=e.stud_id group by internet_access, freetime, goout having avg(study_time)>2;";
    // Create connection
    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query the database
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);
    $result4 = mysqli_query($conn, $query4);
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    if (!$result2) {
        die("Query 2 failed: " . mysqli_error($conn));
    }
    if (!$result3) {
        die("Query 3 failed: " . mysqli_error($conn));
    }
    if (!$result4) {
        die("Query 4 failed: " . mysqli_error($conn));
    }
    ?>

    <header>
        <h1>DMQL Project</h1>
    </header>
    <h2>Team Members (Group 0):</h2>
    <ul>
        <li>Niharika Dhapola (ndhapola)</li>
        <li>Srushti Kharat (skharat)</li>
        <li>Sarita Kumari (saritaku)</li>
    </ul>
     <?php
    echo "<p><b>Query: </b>" . $query . "</p>";
    ?>
    <h3>Query Result:</h3>
    <table>
        <tr>
            <?php
            // Get column names from the query result
            while ($field = mysqli_fetch_field($result)) {
                echo "<th>" . $field->name . "</th>";
            }
            ?>
        </tr>
        <?php
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            
            foreach ($row as $columnValue) {
                echo "<td>" . $columnValue . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>


<?php
    echo "<p><b>Query: </b>" . $query2 . "</p>";
    ?>
    <h3>Query Result:</h3>
    <table>
        <tr>
            <?php
            
            // Get column names from the query result
            while ($field2 = mysqli_fetch_field($result2)) {
                echo "<th>" . $field2->name . "</th>";
            }
            ?>


        </tr>
        <?php
    
        while ($row2 = mysqli_fetch_assoc($result2)) {
            echo "<tr>";
            foreach ($row2 as $columnValue2) {
                echo "<td>" . $columnValue2 . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    echo "<p><b>Query: </b>" . $query3 . "</p>";
    ?>
    <h3>Query Result:</h3>
    <table>
        <tr>
            <?php
            
            // Get column names from the query result
            while ($field3 = mysqli_fetch_field($result3)) {
                echo "<th>" . $field3->name . "</th>";
            }
            ?>


        </tr>
        <?php
    
        while ($row3 = mysqli_fetch_assoc($result3)) {
            echo "<tr>";
            foreach ($row3 as $columnValue3) {
                echo "<td>" . $columnValue3 . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

     <?php
    echo "<p><b>Query: </b>" . $query4 . "</p>";
    ?>
    <h3>Query Result:</h3>
    <table>
        <tr>
            <?php
            
            // Get column names from the query result
            while ($field4 = mysqli_fetch_field($result4)) {
                echo "<th>" . $field4->name . "</th>";
            }
            ?>


        </tr>
        <?php
    
        while ($row4 = mysqli_fetch_assoc($result4)) {
            echo "<tr>";
            foreach ($row4 as $columnValue4) {
                echo "<td>" . $columnValue4 . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>

    <?php displayFooter(); ?>

    
</body>
</html>
