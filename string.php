<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo strlen(" prizren ");
    ?>
    <br>
    <?php
    echo str_word_count(' shkolla digjitale prizren ');
    ?>
    <br>
    <?php
    
    echo strrev( 'AlbaaN' );
    ?>
    <br>
    <?php

    $pozicion= strpos('shkolla digjitale prziren','shkolla');
    $pozicion2= strpos('shkolla digjitale prziren','prizren');
    echo $pozicion.'<br>';
    echo $pozicion2;
    ?>
    <br>
    <?php
    $emri='shkolla digjitale prizren'.'<br>';
    $ndrroje= str_replace('prizren','suhareke',$emri);

    echo $emri;
    echo $ndrroje;
    ?>
    <br>
    
</body>
</html>