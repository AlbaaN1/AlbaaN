<!DOCTYPE html>
<html>

<head>
    <title>View Insert</title>
    <style>
    table,
    td,
    th {
        border: 2px solid black;
        border-collapse: collapse;
        width: 500px;
        height: 50px;
    }
    </style>
    
</head>

<body>
        <div class="product">
    
        <?php
        try{
            include('connect.php');

            $select = "SELECT* FROM upload ORDER BY RAND() LIMIT 5";
            $query = $conn->query($select);  

            $select = "SELECT * FROM upload";
            $query = $conn->query($select);

            while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                $fileId = $row['id'];
                $fileName = $row['fileName'];
                $fileUpload = $row['fileUpload'];
                $description = $row['fileDescription'];

                ?>

                <h2>
                 <a href="produkti.php?id=<?php echo $fileId ?>">
                               <?php echo $fileName; ?>
                            </a>
            </h2>

                
                <h1> <?php echo $fileName ?> </h1>
                <img src="file/<?php echo $fileUpload; ?>">
                <p>

                        <?php echo $description; ?>
            </p>
            <?php
            }

            } catch (PDOException $e){
                echo 'connection failed:' .$e->getMessage();
            }
            ?>

        

        
    
</body>

</html>