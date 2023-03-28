<?php include('header.php');?>

<! DOCTYPE html>    
<html>
    <body>
        <main>
            <form name='form' method='post'>
                CV : <input type='file' name='name'><br>
                Lettre de Motivation : <input type='file' name='letter'><br>
                <input type='submit' name='submit'>
                <?php include ('../Controler/Insertcandidature.php');?>
            </form>
        </main>
    </body>
</html>
   
<?php include('footer.php'); ?>
