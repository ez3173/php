<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>REGEX PHP|JS</h1>
<?php
    if(preg_match("#PHP|JS#i","Je fais du js"))
    {
        echo "ok";
    }else{
        echo "non";
    }
?>
<h1>Regex ^</h1>
<?php
    if(preg_match("#^Bonjour#i","Bonjour la classe"))
    {
        echo "ok";
    }else{
        echo "non";
    }
?>
<h1>REGEX $</h1>
<?php
    if(preg_match("#classe$#i","Bonjour la classe"))
    {
        echo "ok";
    }else{
        echo "non";
    }
?>
<h1>classe de caractère</h1>
<?php
    if(preg_match("#gr[ioa]s#i","gris"))
    {
        echo "ok";
    }else{
        echo "non";
    }
?>
<h1>intervalles de classe</h1>
<?php
    if(preg_match("#^[a-z0-9]#i"," "))
    {
        echo "ok";
    }else{
        echo "non";
    }
?>
<h1>Quantificateur</h1>
<?php
    if(preg_match("#^(bla){1,}s$#i","blablablas"))
    {
        echo "ok";
    }else{
        echo "non";
    }

    "#[a-z-]#i"
?>
<h1>Test d'une adresse e-mail</h1>
<?php
if(preg_match("#^[a-z0-9\._-]+@[a-z0-9\._-]{2,}\.[a-z]{2,6}$#","jordan.berti@epse.bef"))
{
    echo "ok";
}else{
    echo "non";
}
?>

</body>
</html>

