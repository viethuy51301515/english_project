
<style type="text/css">
	.list-group-item:hover{
		background-color: grey;
	}
	#left-menu{
		overflow-y: scroll;
		position: fixed;
	}
	#left{
		height: 100%;
		background-color: #CECECE;
	}
</style>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="left">
    				<!-- 	<div class="panel-group" id="parent">
    						<div class="panel panel-primary">
						          <div class="panel-heading">
						            <h4 class="panel-title">
						              <a data-toggle="collapse" href="#collapseOne" 
						              data-target="#collapseOne"><span class="glyphicon glyphicon-folder-close">
						                </span>Main</a>
						            </h4>
						          </div>
						          <div id="collapseOne" class="panel-collapse collapse in">
						            <ul class="list-group">
						              <li class="list-group-item"><span class="glyphicon glyphicon-pencil text-primary"></span><a href="document_page.php">Document</a></li>

						              <li class="list-group-item"><span class="glyphicon glyphicon-flash text-success"></span><a href="homework.php">Homework</a></li>

						              <li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="lesson.php">Lesson</a></li>

						              <li class="list-group-item"> <span class="glyphicon glyphicon-comment text-success"></span><a href="http://fb.com/moinakbarali">Comments</a><span class="badge">42</span></li>

						            </ul>
						          </div>
        					</div>
        					<div class="panel panel-primary">
						          <div class="panel-heading">
						            <h4 class="panel-title">
						              <a data-toggle="collapse"  href="#collapseOne" 
						              data-target="#collapseOne1"><span class="glyphicon glyphicon-folder-close">
						                </span>Content</a>
						            </h4>
						          </div>
						          <div id="collapseOne1" class="panel-collapse collapse in">
						            <ul class="list-group">
						              <li class="list-group-item"><span class="glyphicon glyphicon-pencil text-primary"></span><a href="notification.php">Notification</a></li>

						              <li class="list-group-item"><span class="glyphicon glyphicon-flash text-success"></span><a href="http://fb.com/moinakbarali">Ask and Anwser</a></li>

						              <li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="grade.php">Grade Book</a></li>

						              <li class="list-group-item"> <span class="glyphicon glyphicon-comment text-success"></span><a href="http://fb.com/moinakbarali">Comments</a><span class="badge">42</span></li>

						            </ul>
						          </div>
        					</div>
    					</div> -->
				 <div class="ui vertical menu" id="left-menu">
				  
				  <a class="item" href="lesson.php" id="leson-menu">
				    <i class="grid layout icon" ></i> Lesson
				  </a>
				  <a class="item" href="document_page.php" id="document-menu">
				    <i class="grid layout icon"></i> Documment
				  </a>
				  <a class="item" href="homework.php" id="homework-menu">
				    <i class="grid layout icon"></i> Online Test
				  </a>
				  <a class="item" href="grade.php" id="grade-menu">
				    <i class="grid layout icon"></i> Grade
				  </a>
				  <a class="item" href="personal_info.php" id="personal-menu">
				    <i class="grid layout icon"></i> Personal Info
				  </a>
				  <a class="item" href="notification.php" id="notification-menu">
				    <i class="grid layout icon"></i> Notification <span class="badge">42</span>
				  </a>
				  <a class="item">
				    <i class="grid layout icon"></i> FQE
				  </a>
				</div>
    </div>
    				<script type="text/javascript">
    					function activeLeftMenu(idTab) {
    						$("#left-menu a:nth-child("+idTab+")").addClass("active");
    					}
    				</script>