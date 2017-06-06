<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script src="js/jquery-3.1.1.min.js"></script> 
	<script src="js/java.js"></script>
    <title> CMS system </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <nav>
        <div class="pos-f-t fixed-top">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-inverse p-4">
                    <h4 class="text-white">Menu</h4>
                    <a href="#hvemErVi">Hvem er vi?</a>
                    <a href="#LogInd">Log ind</a>
                    <a href="#Profil">Profil</a>
                    <a href="#Blog">Blog</a>
                    <a href="#Medlemer">Medlemer</a>
                    <a href="#kontakt">Kontakt os</a>
                </div>
            </div>
            <nav class="navbar navbar-inverse fixed-top bg-inverse">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                </button>
          </nav>
        </div>
    </nav>
    <div class="wrapper">
       
        <section id="hvemErVi">
            <article>
                <h1>Hvem er vi?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod hendrerit dui vel placerat. Mauris nulla magna, maximus vel luctus vel, ultricies in arcu. Sed commodo lectus nec faucibus tincidunt. Praesent porttitor sapien et blandit egestas. Donec eu velit dui.   
                </p>
                <p>Aliquam ultricies porta turpis eu rutrum. Morbi nec nisl nec lectus sagittis posuere. 
                </p>
            </article>
        </section>
        
        <section id="LogInd">
            <article>
            <h1>Log ind</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod hendrerit dui vel placerat. Mauris nulla magna, maximus vel luctus vel, ultricies in arcu. Sed commodo lectus nec faucibus tincidunt. Praesent porttitor sapien et blandit egestas. Donec eu    velit dui. 
            </p>
            <div class="container">
              <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Log ind</button>
                  </div>
                </div>
              </form>
            </div>
            <br>
            <br>
            <P>Har du ikke en bruger, oprret dig gratis nu!!! </P>
            
            <button id="buttonOpretBruger" class="btn btn-primary" onclick="myFunction()">Opret bruger nu</button>
            
            <div id="opretBruger">
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Navn</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="Dit fulde navn" id="example-text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                    <input class="form-control" type="email" value="" id="example-email-input">
                </div>
            </div>
            <div class="form-group row">
              <label for="example-tel-input" class="col-2 col-form-label">Mobil</label>
              <div class="col-10">
                <input class="form-control" type="tel"  value="" id="example-tel-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Password</label>
              <div class="col-10">
                <input class="form-control" type="password" value="hunter2" id="example-password-input">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-date-input" class="col-2 col-form-label">Fodselsdag</label>
              <div class="col-10">
                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>
            </div>
            <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Tilmeld</button>
            </div>
            </div>
            </div>
        </article>
        </section>
        
        <section id="Profil">
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-s-12 col-s-12 col-md-12 col-lg-12 col-s-offset-0 col-sm-offset-0 col-md-offset-12 col-lg-offset-3 toppad" >
                        
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Sabrina Jakielski</h3>
                                </div>
                                <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 " align="center"> <img alt="User Pic" src="img/profilbilled-300x300.png"> </div>
                                        <div class="col-xs-6 col-sm-6 hidden-md hidden-lg"> <br>
                                          <dl>
                                            <dt>BRUGER-NAVN:</dt>
                                            <dd>Admin</dd>
                                            <dt>OPRETTET</dt>
                                            <dd>11/12/2013</dd>
                                            <dt>FODSELSDAG</dt>
                                               <dd>11/12/2013</dd>
                                            <dt>MOBIL</dt>
                                            <dd>XXXXXXXXX</dd>
                                          </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 pull-right col-md-offset-3 ">
                        <A href="#"  >Redigere Profil</A>
                    </div>
                </div>
            </article>
        </section>
        <section id="Blog">
        <article id="BlogIndleg">
            <h1>Blog</h1>
             <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-area no-padding blank">
                            <div class="status-upload">
                                <form>
                                    <textarea placeholder="Skrev blog indlag her?" ></textarea>
                                    <ul>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                    </ul>
                                    <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Del</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
        <article>
            <?php include "fetchDb"; ?>

                            
                            
                            
                                 
                <div id="BlogIndleg">
               <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget-area no-padding blank">
                                <div class="status-upload">
                                    <form>
                                        <textarea placeholder="Skrev din besarelse her?" ></textarea>
                                        <ul>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                        </ul>
                                        <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Del</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                <hr>

        </article>
        <article>   
            <div class="container">
                <div class="well"> 
                    <div class="row">
                         <div class="col-md-12">
                             <div class="">
                                 <h1  class="hidden-xs hidden-sm">TITULO LARGO DE UNA INVESTIGACION cualquiera</h1>

                                 <small>10 - 04 -2017</small><br>
                                 <small><strong>Author</strong></small>
                           <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src="img/blog.jpg"
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
                               <div id="BlogIndleg">
               <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget-area no-padding blank">
                                <div class="status-upload">
                                    <form>
                                        <textarea placeholder="Skrev din besarelse her?" ></textarea>
                                        <ul>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                        </ul>
                                        <button type="submit" class="btn btn-success red"><i class="fa fa-share"></i> Del</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <hr>
            </div>
        </article>
 
  </section>
        <section id="Medlemer">
    <article>
      <h1>Medlemer</h1>
      

    </article>
  </section>
  <section id="kontakt">
    <article>
      <h1>kontakt os</h1>
      <div class="container">
	<div class="row-fluid">
        <div class="span8">
        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
    	</div>
    	
      	<div class="span4">
    		<h2>Snegle post</h2>
    		<address>
    			<strong>lorem ipsum</strong><br>
    			15 lorem ipsum<br>
    			lorem ipsum<br>
    			lorem ipsum<br>
    			lorem ipsum<br>
    			lorem ipsum<br>
    			<abbr title="Phone">Nr:</abbr> XXXXXXXXXX
    		</address>
    	</div>
    </div>
</div>

    </article>
  </section>
</div>

</body>
</html>