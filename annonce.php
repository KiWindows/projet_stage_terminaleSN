<?php
    include('default/header.php');
    require('admin/logins.php');

    $id_annonce = $_GET["id_annonce"];
    $sql = "SELECT * FROM annonce where id_annonce = $id_annonce";
    $result = mysqli_query($conn, $sql);

    echo('<div class="content">');
    while($row = mysqli_fetch_assoc($result))
    {
        include('pcontent.php');
    }
    echo('</div>');

include('default/footer.php');
?>