<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>


</style>
</head>
<body>
<?php 

$image='application/views/gantt/projet'.$this->details['Id'].'.jpg';
//echo '<img src="application/views/gantt/projet'.$this->details['Id'].'.jpg">';
?>
<img src="data:image/jpeg;base64,<?php echo base64_encode(file_get_contents('application/views/gantt/projet'.$this->details['Id'].'.png')); ?>" alt="Gantt chart">

</body>
</html>
