<?php
require_once "connect.php";

$statement = $dbh->prepare("SELECT * FROM article");
$statement->execute();


//the loop = (true) bliver den ved med at afvikle det her...
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article>
         <div class="container">
                <div class="well"> 
                    <div class="row">
                         <div class="col-md-12">
                               
                        <h1  class="hidden-xs hidden-sm"><?php echo $row['heading'] ?></h1>
                                 <small><?php echo $row['published'] ?></small><br>
                                 <small><strong><?php echo $row['authorId'] ?></strong></small>
                        <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>"
                                  /></div>
                                 <p class="text-justify"><?php echo $row['content'] ?></p></div>
                         </div>
                    </div>
                </div>        
    </article>    
               
    
<?php    
}

?>