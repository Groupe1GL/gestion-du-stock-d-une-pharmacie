# gestion-du-stock-d-une-pharmacie

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Bienvenue A l'application web Gestion du stock Pharmacie HOPITAL </title>
</head>
<body>
	<div class="header">
		<div class="ster"> <!-- <a href="sinscrir.html"><font size="+1">S'inscrire</font></a>  <font size="+1">||</font> -->
		<a href="#"><font size="+1">Gestion de stock du pharmacie</font>
		</a> <font size="+2">||</font>
		
		</a> 
		</div>
<!-- 		<div class="login">
	<form method="post" action="">
		<input class="input" type="text" placeholder="Enter Your Username" name="login"><br>
		<input class="input" type="password"placeholder="Enter Your Password" name="pass"><br>
		<input class="classname" type="submit" value="Se connecter">
	</form>
</div> -->
		<div class="logo"><a href="home.html"><img src="lib/logo.png" height= 100% width= 100%> </a> </div>
	</div>
	<div class="cat">
		<ul class="caul">
			<li><a href="index.html">Accueil <a/></li>
			<li><a href="produits.php">Produits <a/></li>
			<li><a href="operations.php"><font color="#0f0">Opérations </font> <a/></li>
			<li><a href="stock.php">Stock <a/></li>
			
		</ul>
	</div>
	<div class="photo"><img src="lib/tiro.png"	height= 25% width= 100%></div>
		<div class="nouveaute">
		<table width="100%" align="center">
<tr><td>
<fieldset><legend>Rechercher des produits par leur nom ou par leur catégorie</legend>
<form action="operations.php" method="post">
<input type="text" name="motr"><input type="submit" value="Rechercher">
</form>
</fieldset> 
</td></tr></table>

<br>
<fieldset>
<table border="1" align="center" style="border:medium">
 
<tr><td>
<fieldset><legend>Ajouter un nouveau produit :: </legend>
<table width="300" border="0" align="center">

<form action="operations.php" method="post">
<tr><td bgcolor="#FFFFFF">Code Produit</td>
<td><input type="text" name="code_p">
</td></tr>
<tr><td bgcolor="#FFFFFF">Désignation Produit</td>
<td><input type="text" name="des_p">
</td></tr>
<tr><td bgcolor="#FFFFFF">Date Préremption Produit</td>
<td><input type="text" name="date_p">
</td></tr>
<tr><td bgcolor="#FFFFFF">Catégorie Produit</td>
<td><select name="cat_p">
	<option value="SIROPS">SIROPS</option>
	<option value="COMPRIME">COMPRIME</option>
	<option value="COMPRIMES ATB">COMPRIMES ATB</option>
	<option value="SACHETS">SACHETS</option>
</select>
</td></tr>
<tr><td bgcolor="#FFFFFF">Prix Produit (PPM)</td>
<td><input type="text" name="prix_p">
</td></tr>
<tr><td bgcolor="#FFFFFF">Quantité Produit (Nombre unités)</td>
<td><input type="text" name="qte_p">
</td></tr>
<tr><td bgcolor="#FFFFFF"></td>
<td><input type="submit" value="Ajouter"></tr>
</form>

</table>
</fieldset>
</td><td>
<fieldset><legend>Achat :: </legend>
<table width="250" border="0" align="center">
<form action=operations.php method=post><tr><td><select name=codeprodachat><option value=wjkqh>skxh</option></select></td><td><input type=submit value=Afficher></td></tr></form></table>
</fieldset>
</td><td>
<fieldset><legend>Vente :: </legend>
<table width="250" border="0" align="center">
<form action=operations.php method=post><tr><td><select name=codeprodvente><option value=wjkqh>skxh</option></select></td><td><input type=submit value=Afficher></td></tr></form></table>
</fieldset>
</td>
<td>
<fieldset>
<fieldset><legend>Modifier les informations d'un produit ::</legend>
<table width="250" border="0" align="center">
<form action=operations.php method=post><tr><td><select name=codeprod><option value=wjkqh>skxh</option></select></td><td><input type=submit value=Afficher></td></tr></form></table>
</fieldset>
<fieldset><legend>Supprimer un produit :: </legend>
<table width="250" border="0" align="center">
<form action=operations.php method=post><tr><td><select name=produit><option value=wjkqh>skxh</option></select></td><td><input type=submit value=Supprimer></td></tr></form></table>
</fieldset>
</fieldset>
</td>
</tr></table>
			<div class="stesr">
			:: Etudiantes : Mariam ELHAMIDI , Ouiam ANTAM  :: GL S4 ::
		</div>
</body>
</html>
