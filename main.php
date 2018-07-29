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
    					<div class="ui teal progress" id="progress_layout" style="margin-top: 200">
                          <div class="bar">
                              <div class="progress" style="color: black"></div>
                          </div>
                          <div class="label">22% Earned</div>
                        </div>
                        <div style="width: 100%;text-align: center;">Your Class Progress</div>
    				</div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            // body...
                            $("#progress_layout").progress({
                                value:4,
                                total:16,
                                label: 'ratio',
                                text:{
                                    ratio: '{value} of {total} week'
                                }
                            });
                        });
                    </script>
</html>