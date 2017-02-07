<?php
$tab = ["img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", 
"img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", 
"img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg"];
$dos = 'img/dos.png'; // On définie l'image de dos
shuffle($tab); //random
if(isset($_GET["pseudo"],$_GET["min"],$_GET["sec"])){
	$pagewin = true;
	$utilisateur = $_GET["pseudo"];
	$temps = $_GET["sec"];
}else{
	$pagewin = false;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Jeux-des-paires</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
		var tab = [<?php foreach ($tab as $casetabimg=>$image){ //Function 
			echo "'$image'";
				if($casetabimg!=13){
				echo",";
				}
			}
        ?>];
	</script>
</head>

	<body>
		<div id="titre">
		<h1>JEU DES PAIRES</h1>
		</div>
		<p>Règles du jeu: Afficher toutes les paires pour gagner</p>
		<p>Vous avez trouvé <span id="paires">0</span> paires cachées</p>
		<span id="chronotime">00:00</span>
		
			
		<div id="photo"> 
		<?php
			if($pagewin == true){
				echo "<h3> ".$utilisateur." tu as gagné en ".$temps." secondes ! Tu veux <a id='lien' href='./index.php'>RECOMMENCER? </a></h3>";
			}else{
				for($i=0; $i <= 13; $i++) { //Function afficher les images + onclick
				echo '<img src="img/dos.png" class="photo" onclick="choisir('.$i.')" draggable="false">';
				}
			}	
		?>
		</div>
		
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html> 