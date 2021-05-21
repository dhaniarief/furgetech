<?php

    //Create constansts to store non repetiang values
    define("SITEURL", "http://localhost/test/");
    define("LOCALHOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "db_furgetech");

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Database selection
?>


<h1>Data yang diambil: posts.title, posts.users.username, dan comments</h1>

<?php
    $sql = "SELECT * FROM posts INNER JOIN users ON posts.id = users.id INNER JOIN comments ON posts.createdBy = comments.postId";

    $res = mysqli_query($conn, $sql);
    
    $res2 = mysqli_query($conn, $sql); // buat comments, biar kayak contoh di soal

    $row=mysqli_fetch_assoc($res);

    $title = $row['title'];
    $username = $row['username'];

    ?>

    <dl>
    <dt>- post.title: <?php echo $title; ?></dt>
    <dt>- post.users.username: dibuat oleh <?php echo $username; ?></dt>
    <dt>- comments:</dt>
    <?php
        while($row2=mysqli_fetch_assoc($res2)){
            $comment = $row2['comment'];
            ?>
            <dd><?php echo $comment; ?></dd>
        <?php
        }

    ?>
    </dl>