<html>
	<head>
		<style>
			h1 {
  font-size: 36px;
  font-weight: bold;
  text-align: center;
  margin-top: 40px;
}

.rdftgyh {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 40px;
}

label {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

input[type="text"],
input[type="date"],
textarea {
  width: 100%;
  max-width: 400px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 20px;
}

textarea {
  height: 150px;
}

input:focus,
textarea:focus {
  outline: none;
  border-color: #007bff;
}

button[type="submit"],
button[type="reset"] {
  width: 150px;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  margin-right: 10px;
}

button[type="submit"]:hover,
button[type="reset"]:hover {
  background-color: #0069d9;
}

		</style>
	</head>
	<body>
		<h1>Ajouter un projet</h1>
		<div class="rdftgyh">
			<form action="../projetController/add" method="post" >
			<label> Titre </label>
			<input type="text" name="titre"><br>
			<label> Date Début </label>
			<input type="date" name="debut"><br>
			<label> Date Fin </label>
			<input type="date" name="fin"><br>
			<label> Description </label>
			<textarea name="description">
			</textarea><br>
			<button type="submit" >Envoyer</button>
			<button type="reset" >Effacer</button>
			</form>
	</div>
		
	</body>

</html>