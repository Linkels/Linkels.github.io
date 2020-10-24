<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>WHOGLE-</title>   
        <!-- STYLE CSS/JS --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script type ="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <link href="dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="public/main.css"> 
        <!-- FIN STYLE CSS/JS -->  
        <!-- COLOR THEME CHROME MOBILE --> 
        <meta name="theme-color" content="black"> 
        <!-- FAVICON --> 
        <link rel="shortcut icon" href="public/img/favicon.png">
    </head>
    <body> 
        <!-- REQUETTE ENTITEE PERSONNE --> 
        <?php
            include('bdd.php');
            try{
                $req = $bdd->prepare("SELECT DISTINCT nom, prenom, id FROM personne 
                                  ORDER BY id ASC LIMIT 2000"); 
                $req->execute();
            } catch(Exception $error){
                echo $error;
            }
        ?>  
        <!-- FIN DE LA REQUETTE -->  

        <!-- LOGO --> 
        <div class="container">
            <div class="center justify-content-center h-100">
                <img src="public/img/tree-whogle.png" class="logo" alt="">
                </div>        
        <!-- FIN LOGO --> 

        <!-- TABLEAU + SEARCHBAR --> 
            <div class="table-responsive mt-5">
                <table class="table table-striped" id="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Voir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($infos = $req->fetch()): ?>
                        <tr>
                            <td><?php echo $infos["nom"]; ?></td>
                            <td><?php echo $infos["prenom"]; ?></td>
                            <td><a href="content.php?id=<?php echo $infos["id"];?>">En savoir +</td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div> 
        <!-- FIN DU TABLEAU + SEARCHBAR --> 
        </div>
    </body>
</html>
<script>
$(document).ready( function () {
    $('table').DataTable();
} );
</script>