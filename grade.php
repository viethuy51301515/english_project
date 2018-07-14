<html>
<head>
        <meta charset="utf-8">
 
        <title>Layout Blog - Freetuts.net</title>
 
<!-- Latest compiled and minified CSS -->
<?php include 'snippet/layout.php';?>

  <link rel="stylesheet" type="text/css" href="css/general.css">
</head>
    <body>
    	<?php include 'snippet/menu.php';?>

    		<div class="container-fluid">
    			<div class="row">
    				<?php include 'snippet/leftmenu.php';?>
    				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 document">
                        <div style="float: left;font-size: 20px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                Grade
                        </div>
                        <h4 class="ui horizontal divider header">
                          <i class="tag icon"></i>
                          Description
                        </h4>
                        <div>
        					<table class="ui table selectable blue celled">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Feedback date</th>
                                        <th>Score</th>
                                        <th>Comment</th>
                                        <th>Date</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                     <?php for($x=0;$x <= 3;$x++){ ?>
                                    <tr>
                                        <td>Test1</td>
                                        <td>Immediate</td>
                                        <td id="point" class="positive ">9</td>
                                        <td>good</td>
                                        <td>10/09/2018</td>
                                    </tr>
                                     <tr>
                                        <td>Test1</td>
                                        <td>Immediate</td>
                                        <td id="point" class="negative">4</td>
                                        <td>good</td>
                                        <td>10/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Test1</td>
                                        <td>Immediate</td>
                                        <td id="point" class="warning">6</td>
                                        <td>good</td>
                                        <td>10/09/2018</td>
                                    </tr>
                                    <?php }?>
                                </tbody>              
                            </table>
                        </div>
                        <hr>
                        <div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h4>TB : 9.0</h4>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button type="button" class="btn btn-primary" style="float:right;margin-right: 200px">Statistic</button>
                            </div>
                        </div>    
    				</div>
                </div>
            </div>
</html>