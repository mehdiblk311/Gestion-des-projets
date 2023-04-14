<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
.project-heading {
  font-size: 30px;
  margin-bottom: 30px;
  text-align: center;
  font-family: "Segoe UI", sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.project-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 30px;
}

.project-table th,
.project-table td {
  padding: 10px;
  border: 1px solid #ddd;
  text-align: left;
}

.project-table th {
  background-color: #f9f9f9;
}

.project-table tr:nth-child(even) {
  background-color: #f2f2f2;
}

.delete-btn,
.planifier-btn,
.details-btn,
.gantt-btn {
  display: inline-block;
  padding: 6px 12px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  margin-right: 10px;
}

.delete-btn:hover,
.planifier-btn:hover,
.details-btn:hover,
.gantt-btn:hover {
  background-color: #0069d9;
}

</style> 
</head>
<body>
<?php
echo '<h1 class="project-heading">Liste des Projets </h1>';
echo '<table class="project-table">
      <tr><th>N°</th><th>Titre</th><th>Date début</th><th>Date fin</th><th>Description</th><th colspan="4">Actions</th></tr>';
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a class="delete-btn" href="../projetController/delete/'.$projet['Id'].'">Supprimer</td>
	  <td><a class="planifier-btn" href="../TaskController/add/'.$projet['Id'].'">Planifier</td>
	  <td><a class="details-btn" href="../ProjetController/details/'.$projet['Id'].'">Détails</td>
	  <td><a class="gantt-btn" href="../ProjetController/summury/'.$projet['Id'].'">Générer Gantt</td>
	  </tr>';
}
echo '</table>';
?>

</body>
</html>