<html>
	<head>
	<style>
	<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
    }

    h1 {
        font-size: 32px;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px #ddd;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-bottom: 2px solid #ddd;
        font-size: 16px;
        margin-bottom: 20px;
    }

    textarea {
        width: 100%;
        height: 100px;
        padding: 10px;
        border: none;
        border-bottom: 2px solid #ddd;
        font-size: 16px;
        margin-bottom: 20px;
    }

    input:focus,
    textarea:focus {
        outline: none;
        border-bottom: 2px solid #007bff;
    }

    button[type="submit"],
    button[type="reset"] {
        padding: 10px 20px;
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

		</style>
	</head>
	<body>
		<h1>Ajouter une Tache</h1>
		<form action="TaskController/add" method="post" >
		<input type="hidden" name="projetID" value=" <?php echo $this->projetId; ?>">
		<label> Nom</label>
		<input type="text" name="nom"><br>
		<label> Date Début </label>
		<input type="text" name="debut"><br>
		<label> Date Fin </label>
		<input type="text" name="fin"><br>
		<button type="submit" >Envoyer</button>
		<button type="reset" >Effacer</button>
		</form>
	</body>

</html>