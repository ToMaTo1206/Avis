<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="website icon" type="png" href="T.png">

<title>
Avis
</title>
</head>
<body>
<h1>Bonjour, <?php echo $_POST['name'] ?></h1>
<h2>Votre message est : <?php echo $_POST['MS'] ?></h2>
<h2>Votre adresse email est : <?php echo $_POST['email'] ?></h2>
<?php
$n = $_POST['name'];
$a = $_POST['MS'];
$m = $_POST['email'];
?>
Votre prenom est stocké dans la variable $n
dont le type est <?php echo gettype($n) ?>
Votre message est stocké dans la variable <b>$a</b>
<br/> dont le type est <i><?php echo gettype($a); ?></i>
<br/> On peut la transformer en <i>integer</i> en faisant :
<?php settype($a,"integer"); ?>
<br/>
Type de $a :<?php echo gettype($a); ?>
<?php 
$ver = SQLite3::version();
echo $ver['versionString'] . "\n";
echo $ver['versionNumber'] . "\n";
var_dump($ver);

$db = new SQLite3('donnees.db');
$version = $db->querySingle("SELECT SQLITE_VERSION()");
echo $version . "\n";
echo $n;
echo $a;
echo $m;


$db->exec("CREATE TABLE contact(id INTEGER PRIMARY KEY, nom TEXT,prenom INT, ms TEXT");
$db->exec("INSERT INTO contact(nom, email, ms) VALUES($n,$a,$m)");

?>
</body>
</html>
