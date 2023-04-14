<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>/* Table styles */
<style>
  table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
  }
  th, td {
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #ddd;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  form {
    margin: 20px 0;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  input[type="text"], input[type="date"], textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  button[type="submit"], button[type="reset"] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-right: 10px;
    cursor: pointer;
    border-radius: 4px;
  }
  button[type="submit"]:hover, button[type="reset"]:hover {
    background-color: #3e8e41;
  }
  .delete-btn, .planifier-btn, .details-btn, .gantt-btn {
    display: inline-block;
    background-color: #f44336;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 4px;
  }
  .planifier-btn {
    background-color: #2196F3;
  }
  .details-btn {
    background-color: #4CAF50;
  }
  .gantt-btn {
    background-color: #ff9800;
  }
  .delete-btn:hover, .planifier-btn:hover, .details-btn:hover, .gantt-btn:hover {
    background-color: #da190b;
  }
  h1.project-heading {
    margin-top: 0;
  }
  table.project-table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
  }
  table.project-table th, table.project-table td {
    padding: 8px;
    text-align: left;
  }
  table.project-table th {
    background-color: #ddd;
  }
  table.project-table tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>

        
</style>
</head>
<body>
<?php 
echo '<h1>Information générales : </h1>';
echo '<table border=1> 
     <tr><th>Titre</th><td>'.$this->details['Titre'].'</td><tr>
	 <tr><th>Debut</th><td>'.$this->details['DatDebut'].'</td><tr>
	 <tr><th>Fin</th><td>'.$this->details['DateFin'].'</td><tr>
	 <tr><th>Dscription</th><td>'.$this->details['Description'].'</td><tr>
	 </table>';
if(sizeof($this->details['tasks'])){
	echo '<h1>Liste des tâches : </h1>';
	echo '<table border=1><tr><th>N°</th><th>Tache</th><th>Début</th><th>Fin</th><th>action</th></tr>';
	$i=1;
	foreach($this->details['tasks'] as $task){
		echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td><td><a class="delete-btn" href="../../TaskController/delete/'.$task['ID'].'">Supprimer</td></tr>';
	}
	echo'</table>';
}

?>
</body>
</html>