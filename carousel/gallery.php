<!doctype html>
<?php
    $image_files = glob('images/*');
    print_r($image_files);

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="carousel.css">
    <script src="js/jquery/jquery-2.1.3.min.js"></script>
    <script src="carousel.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div id="display_area">
<?php
    foreach($image_files as $filename)
    {
        echo "<img src='$filename'>";
    }
?>
    </div>
    <div id="indicator_container"></div>
    <div id="display_controls">
        <div id="prev_image_control" class="btn btn-info btn-lg">PREV</div>
        
        <div id="next_image_control" class="btn btn-info btn-lg">NEXT</div>
    </div>



</body>
</html>