<html>
<head>
        <meta charset="utf-8">
 
        <title>Layout Blog - Freetuts.net</title>
 
<!-- Latest compiled and minified CSS -->
<?php include 'snippet/layout.php';?>

  <link rel="stylesheet" type="text/css" href="css/general.css">
  <style type="text/css">
      thead{
        vertical-align: inherit;
        border-color: inherit;
        border:1px solid black;
        background-color: grey;
        font-size: 20px;
      }
      tbody{
        font-size: 15px;
      }
  </style>
</head>
    <body>
    	<?php include 'snippet/menu.php';?>

    		<div class="container-fluid">
    			<div class="row">
    				<?php include 'snippet/leftmenu.php';?>
    				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 document">
                        <div style="float: left;font-size: 20px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                Notification
                                 <h4 class="ui horizontal divider header">
                                  <i class="tag icon"></i>
                                  Description
                                </h4>
                        </div>
    					   <div class="ui comments">
                              <div class="comment">
                                <a class="avatar">
                                  <img src="icon/user1.png" style="height: 30;width: 30">
                                </a>
                                <div class="content">
                                  <a class="author">Matt</a>
                                  <div class="metadata">
                                    <span class="date">Today at 5:42PM</span>
                                  </div>
                                  <div class="text">
                                    Attention , we have a class tomorrow.
                                  </div>
                                  <div class="actions">
                                    <a class="reply">Reply</a>
                                  </div>
                                </div>
                              </div>
                              <div class="comment">
                                <a class="avatar">
                                  <img src="icon/user2.png" style="height: 30;width: 30">
                                </a>
                                <div class="content">
                                  <a class="author">Elliot Fu</a>
                                  <div class="metadata">
                                    <span class="date">Yesterday at 12:30AM</span>
                                  </div>
                                  <div class="text">
                                    <p>This has been very useful for my research. Thanks as well!</p>
                                  </div>
                                  <div class="actions">
                                    <a class="reply">Reply</a>
                                  </div>
                                </div>
                                <div class="comments">
                                  <div class="comment">
                                    <a class="avatar">
                                      <img src="icon/user1.png" style="height: 30;width: 30">
                                    </a>
                                    <div class="content">
                                      <a class="author">Jenny Hess</a>
                                      <div class="metadata">
                                        <span class="date">Just now</span>
                                      </div>
                                      <div class="text">
                                        Elliot you are always so right :)
                                      </div>
                                      <div class="actions">
                                        <a class="reply">Reply</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="comment">
                                <a class="avatar">
                                  <img src="icon/user2.png" style="height: 30;width: 30">
                                </a>
                                <div class="content">
                                  <a class="author">Joe Henderson</a>
                                  <div class="metadata">
                                    <span class="date">5 days ago</span>
                                  </div>
                                  <div class="text">
                                    Dude, this is awesome. Thanks so much
                                  </div>
                                  <div class="actions">
                                    <a class="reply">Reply</a>
                                  </div>
                                </div>
                              </div>
                              <form class="ui reply form">
                                <div class="field">
                                  <textarea></textarea>
                                </div>
                                <div class="ui blue labeled submit icon button">
                                  <i class="icon edit"></i> Add Reply
                                </div>
                              </form>
                            </div>
    				</div>
                </div>
            </div>
</html>