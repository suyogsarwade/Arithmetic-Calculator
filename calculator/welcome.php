<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
     <?php 
    $x=0;
    if(isset($x)){
     echo "variable 'x' is not null";
    }
    $y=null;
    if(isset($y)){
    	echo "variable 'y' is not null";
    }
 ?>
</body>
</html>
