<?php
if (isset($_FILES['file'])) {
    $upload_dir = './uploads/';
    $upload_file = $upload_dir . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "File berhasil diupload.";
    } else {
        echo "Terjadi kesalahan saat upload file.";
    }
}
?>
<form enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
