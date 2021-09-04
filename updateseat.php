<?php
$set($_GET['sid']) ?$_GET['sid']:'';
try{
    $sql = "UPDATE seat SET status='0' WHERE sid=$sid";    
    $pdo->exec($sql);
    echo "Records were updated successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 

?>