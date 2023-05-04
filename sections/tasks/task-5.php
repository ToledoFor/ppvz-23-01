<h2>Working with DB (SELECT)</h2>

<?php

$db_host = 'localhost';
$db_name = 'practice';
$db_user = 'practice';
$db_pass = 'password';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die('DB connection error: ' . $conn->connect_error);
}

$res = $conn->query('SELECT * FROM submits');
if ($res->num_rows > 0) {
    ?>

    <table border=1>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($r = $res->fetch_assoc()) {
            echo '<tr><td>'.$r['id'].'</td><td>'.$r['name'].'</td><td>'.$r['email'].'</td><td>'.$r['message'].'</td></tr>';
        }
        ?>
        </tbody>
    </table>

    <?php
}