<?php

if (isset($_FILES['fileupload'])) {
    $file_name = $_FILES['fileupload']['name'];
    $file_src = $_FILES['fileupload']['tmp_name'];

    $file_name = time() . "_" . $file_name;
    $dst_file = "img/" . $file_name;

    if (move_uploaded_file($file_src, $dst_file)) {
        echo "uploaded successfully.";

    } else {
        echo "Failed to upload this file.";
    }
}

?>

<form method="post" action="" enctype="multipart/form-data">

    File : <input name="fileupload" type="file"/> <br>
    <input type="submit"/>

</form>