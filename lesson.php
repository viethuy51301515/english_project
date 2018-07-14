<html>
<head>
        <meta charset="utf-8">
 
        <title>Layout Blog - Freetuts.net</title>
 
<!-- Latest compiled and minified CSS -->
<?php include 'snippet/layout.php';?>

  <link rel="stylesheet" type="text/css" href="css/general.css">
  <style type="text/css">
      .iframe{
        box-shadow: 0 5px 5px rgba(255, 255, 255, 0.3), 0 5px 5px rgba(0, 0, 0, 0.4);
        border: 1px solid #aaaaaa;
        border-radius: 0.3em;
      }
      .list-lesson{
        box-shadow: 0 5px 5px rgba(255, 255, 255, 0.3), 0 5px 5px rgba(0, 0, 0, 0.4);
        border: 1px solid #aaaaaa;
        border-radius: 0.3em;
        overflow: hidden;
        margin-left: 5px;
      }
      .list-lesson ul{
        margin-left: 5px;
      }
      
  </style>
</head>
    <body>
    	<?php include 'snippet/menu.php';?>
            
    		<div class="container-fluid">
    			<div class="row">
    				<?php include 'snippet/leftmenu.php';?>
    				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 document">
                        <div  class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                            <div class="ui three link cards">
                            <?php for($x=0;$x <= 12;$x++){ ?>
                              <div class="card">
                                <div class="image">
                                  <img src="icon/lesson.png">
                                </div>
                                <div class="content">
                                  <div class="header">Matt Giampietro</div>
                                  <div class="meta">
                                    <a>Friends</a>
                                  </div>
                                  <div class="description">
                                    Matthew is an interior designer living in New York.
                                  </div>
                                </div>
                                <div class="extra content">
                                  <span class="right floated">
                                    Joined in 2013
                                  </span>
                                  <span>
                                    <i class="user icon"></i>
                                    75 Friends
                                  </span>
                                </div>
                              </div>
                          <?php }?>
                          </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                            <div class="ui secondary vertical pointing menu">
                              <a class="item">
                                Lesson
                              </a>
                              <a class="item">
                                Test
                              </a>
                              <a class="item active">
                                Homework
                              </a>
                            </div>
                        </div>
                        <!-- <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 iframe">
    					   <iframe src="zoodiac.pdf" width="100%" height="550"></iframe>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                            <div class="list-lesson">
                            <ul>
                                <li>
                                    <h3>Lecture</h3>
                                    <ul style="display: ">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <h3>Test</h3>
                                    <ul>
                                        
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        
                                    </ul>   
                                </li>
                            </ul>
                            </div>
                        </div> -->
    				</div>
                    <div class="ui modal">
                      <div class="actions">
                        <iframe src="zoodiac.pdf" width="100%" height="525"></iframe>
                        <div class="ui button">Cancel</div>
                      </div>
                    </div>
                    <script type="text/javascript">
                        $(".card").click(function() {
                            // body...
                            $(".ui.modal").modal("show");
                        });
                        $(".ui.button").click(function() {
                            // body...
                             $(".ui.modal").modal("hide");
                        })
                    </script>
</html>