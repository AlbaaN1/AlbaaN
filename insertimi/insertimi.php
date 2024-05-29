<!DOCTYPE html>
<html>

<head>
    <title>Insertimi i produkteve</title>
</head>

<body>
    <form method="post" action="insertimi.php" enctype="multipart/form-data">
        File Name: <input type="text" name="fileName"><br><br>
        File Upload: <input type="file" name="fileUpload"><br><br>
        File Description: <textarea name='fileDescription' cols='30' rows='15'></textarea><br><br>
        <input type="submit" name="upload" value="Insert">
        <input type="reset" name="cancel" value="Cancel">
    </form>
    <a href='viewInsert.php'>Home</a>
</body>

</html>

<?php
try{
    include('connect.php');

    if (isset($_POST['upload'])){
        $fileName = $_POST['fileName'];
        $fileDescription = $_POST['fileDescription'];
        $fileUpload = $_FILES['fileUpload']['name'];
        $fileUpload_tmp = $_FILES['fileUpload']['tmp_name'];

        if ($fileName == '' or $fileUpload == ''){
            echo "<script>alert('Any input is Empty');</script>";

        }else{
            $select = "SELECT * FROM upload WHERE fileName=:fileName OR fileUpload=:fileUpload LIMIT 1";
            $query = $conn->prepare($select);
            $query->bindParam(':fileName', $fileName);
            $query->bindParam(':fileUpload',$fileUpload);
            $query->execute();
            $exist = $query->fetch(PDO::FETCH_ASSOC);

            if ($exist) {
                echo "<script>alert('this file alredy exists!');</script>";

            } else {
                move_uploaded_file($fileUpload_tmp, "file/$fileUpload");

                $uploadFile = "INSERT INTO upload(fileName,fileUpload,
                fileDescription)
                                VALUES(:fileName, :fileUpload, :fileDescription)";
                $query = $conn->prepare($uploadFile);
                $query ->bindParam(':fileName', $fileName);
                $query->bindparam(':fileUpload',$fileUpload);
                $query->bindparam(':fileDescription',$fileDescription);
                
                if($query->execute()){
                    echo "<script>alert('File is Upolad');</script>";
                }else{
                    echo "<script>alert('File is Filed');</script>";
                }

            }
        }
    }
} catch (PDOExeption $e){
    echo 'connection failed:' .$e->getMessage();
}
?>