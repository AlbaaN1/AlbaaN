<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try {
        include('connect.php');

        if(isset($_GET['update'])){
            $update_id = $_GET['update'];
            $select = "SELECT * FROM upload WHERE id=:id";
            $query = $conn->prepare($select);
            $query->bindParam(':id', $update_id);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            ?>

            <from method='post' action="update_ID.php" enctype="multipart/from-date">
                <input type= "hidden" name="id" value="<?php echo $row['id'];?>">
                File Name:<input type="text" name="fileName" value="<?php echo $row['fileName'];?>">
                <br><br>
                File Name:<input type="file" name="fileUpload" placeholder="file/<?php echo $row['fileUpload'];?>">
                <img src="file/<?php echo $row ['fileUpload'];?>" width="100" height="100">
                <br><br>
                File Description:<textarea name="description" cols="30"rows="40"><?php  echo $row['fileDescription'];?>
                     </textarea> 
                <br><br>
                <input type="submit" name="update" value="Update">
        </from>
        <?php
             }    
        }catch (PDOExeption $e) {
            echo 'connection failed: ' . $e->getMessage();
        }
        ?>
    
    
</body>
</html>