<?php 
$id = htmlspecialchars($_GET['id']);
$idp = $bdd->query('SELECT use_id FROM offre WHERE off_id LIKE "%'.$id.'%"');
$idp = $idp ->fetch();
$id2 = $idp['use_id'];
$error = 'Document manquant !';
$send = 'Candidature envoyés';
if(isset($_POST['submit'])){
        if (!empty($_POST['name'])){
            if (!empty($_POST['letter'])){
                $name = htmlspecialchars($_POST['name']);
                $letter = htmlspecialchars($_POST['letter']);
                $bdd->query("INSERT INTO candidature (can_id,can_CV,can_LM,off_id,use_id) VALUES (NULL,'$name','$letter','$id','$id2')");
                ?><main><?php echo $send;?></main><?php
            }else{
                ?><main><?php echo $error;?></main><?php
            }
            }else{
             ?><main><?php echo $error;?></main><?php
            }
        } 
?>