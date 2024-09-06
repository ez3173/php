<?php
function getHomeProducts($limit)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT * FROM stock ORDER BY id DESC LIMIT 0,4");
    $req->bindParam(":limit",$limit,PDO::PARAM_INT);
    $req->execute();
    $don = $req->fetchAll();
    $req->closeCursor();
    return$don;
}
function dbConnect (): PDO
{
    try{
        $bdd = new PDO("mysql:hosst=localhost;dbname=intro;charset=utfo","root","",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $bdd;
    }catch(Exception $e)
    {
        die("Erreur:".$e->getMessage());
    }
}
?>