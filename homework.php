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
                                Test Online
                        </div>
                         <h4 class="ui horizontal divider header">
                          <i class="tag icon"></i>
                          Description
                        </h4>
                        <div class="ui relaxed divided list">
                          <div class="item">
                            <i class="large github middle aligned icon"></i>
                            <div class="content">
                              <a class="header">Semantic-Org/Semantic-UI</a>
                              <div class="description">Updated 10 mins ago</div>
                            </div>
                          </div>
                          <div class="item">
                            <i class="large github middle aligned icon"></i>
                            <div class="content">
                              <a class="header">Semantic-Org/Semantic-UI-Docs</a>
                              <div class="description">Updated 22 mins ago</div>
                            </div>
                          </div>
                          <div class="item">
                            <i class="large github middle aligned icon"></i>
                            <div class="content">
                              <a class="header">Semantic-Org/Semantic-UI-Meteor</a>
                              <div class="description">Updated 34 mins ago</div>
                            </div>
                          </div>
                          <div class="item">
                            <i class="large github middle aligned icon"></i>
                            <div class="content">
                              <a class="header">Semantic-Org/Semantic-UI-Meteor</a>
                              <div class="description">Updated 34 mins ago</div>
                            </div>
                          </div>
                          <div class="item">
                            <i class="large github middle aligned icon"></i>
                            <div class="content">
                              <a class="header">Semantic-Org/Semantic-UI-Meteor</a>
                              <div class="description">Updated 34 mins ago</div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    activeLeftMenu(3);
                });
            </script>
</html>