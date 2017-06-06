<?php
require_once "connect.php";

$statement = $DBH->prepare("SELECT * FROM article")
$statement->execute();


//the loop = (true) bliver den ved med at afvikle det her...
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article>
         <div class="container">
                <div class="well"> 
                    <div class="row">
                         <div class="col-md-12">
                               
                        <h1  class="hidden-xs hidden-sm"><?php echo $row['imgSrc'] ?></h1>
                                 <small>10 - 04 -2017</small><br>
                                 <small><strong>Author</strong></small>
                        <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>"
                                  /></div>
                                 <p class="text-justify">Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. 
                             Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                             Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                             Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                             Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                             convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                             Donec rutrum congue leo eget malesuada.<br><br>

                             Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. 
                             Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                             Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                             Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                             Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                             convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                             Donec rutrum congue leo eget malesuada.<br><br>

                             Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. 
                             Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                             Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                             Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                             Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                             convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                             Donec rutrum congue leo eget malesuada.<br><br>

                             Nulla quis lorem ut libero malesuada feugiat. <br>

                             Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                             Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                             Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                             Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                             convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                             Donec rutrum congue leo eget malesuada.</p></div>
                         </div>
                    </div>
                </div>        
    
    </article>    
               
    
<?php    
}

?>