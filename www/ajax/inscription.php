<?php

$JSON = Array();

if(empty($_POST['pseudo']))
{

$JSON['left'] = <<<'LEFT'
<center><img src="img/header.png" /></center><br /><br />
Bienvenu sur le bouc écrivain.<br />Vous allez pouvoir écrire votre propre histoire dynamique !
LEFT;
$JSON['right'] = <<<'RIGHT'
<h1>Inscription</h1>
<form onsubmit="return false;">
<label for="pseudo">Votre pseudo :</label><br /><input name="pseudo" type="text" /><br /><br />
<label for="pseudo">Votre email :</label><br /><input name="email" type="text" /><br /><br />
<label for="pseudo">Votre mot de passe :</label><br /><input name="email" type="password" /><br /><br />
<label for="pseudo">Répétez le mot de passe :</label><br /><input name="email2" type="password" /><br /><br />
<input id="valider" type="submit" value="valider">
</form>
<script>
$("#valider").click(function(){
	request('ajax/main.php', {pseudo:'test'}, 'POST');	
});
</script>
RIGHT;

}

else
{
	
$JSON['left'] = <<<'LEFT'
<center><img src="img/header.png" /></center><br /><br />
Bienvenu sur le bouc écrivain.<br />TESTVous allez pouvoir écrire votre propre histoire dynamique !
LEFT;
$JSON['right'] = <<<'RIGHT'
<h1>Inscription</h1>
<form onsubmit="return false;">
<label for="pseudo">Votre pseudo :</label><br /><input name="pseudo" type="text" /><br /><br />
<label for="pseudo">Votre email :</label><br /><input name="email" type="text" /><br /><br />
<label for="pseudo">Votre mot de passe :</label><br /><input name="email" type="password" /><br /><br />
<label for="pseudo">Répétez le mot de passe :</label><br /><input name="email2" type="password" /><br /><br />
</form>
RIGHT;

}

echo json_encode($JSON);

?>