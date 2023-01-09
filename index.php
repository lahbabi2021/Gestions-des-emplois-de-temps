<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
<style type="text/css">
    label
    {
    display:inline-block;
    width:150px;
    height:40px;
    margin:6px;
    }
    #monform{
        width:50%;
        margin:auto;
    }
    #monform input,#monform select{
        width:90%;
        height:30px;
        margin:10px;
        border-radius:5px;
        border:1px solid  rgb(13, 166, 204);
        padding:5px;
    }
    a{
			display: block;
			border: 1px solid ;
			width: 180px;
			height:30px;
			text-align: center;
			background-color: #457b9d;
			color: white;
			text-decoration: none;
			font-weight: bold;
			border-radius: 5px;
			padding:5px;
		}
    
</style>
</head>
<body>
<form  method="post" id="monform" enctype="multipart/form-data"action="enregistrer.php" method="post">
            <a href=authentification.php>se connecter</a>
            <label for="">Login</label>
            <input type="text" name="login" required> <br><br>
            <label for="">Mot De Passe</label> 
            <input type="text" name="pass" required> <br><br>
            <label for="" >Nom</label>
            <input type="text" name="nom" required> <br><br>
            <label for="" >Prénom</label>
            <input type="text" name="prenom" required> <br><br>
            <label for="image">Photo </label>
	        <input type="file" name="image" required><br><br>
            <input type="submit" name="enregistrer" value="Enregistrer" class="submit">
            
            
        </form>
</body>
</html>
