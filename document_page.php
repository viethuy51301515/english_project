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
                                Document
                                <h4 class="ui horizontal divider header">
  <i class="tag icon"></i>
  Description
</h4>
                            </div>
                            <div class="body_document col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="filter">
                                    <div style="float: left">
                                        <h4 id="titleSelect"> All</h4>
                                    </div>
                                    <div style="float: right;">
                                        <select id="select1" onchange="getTitle()">
                                            <option>All</option>
                                            <option>Home Work</option>
                                            <option>Lesson</option>
                                            <option>Assignment</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="body_data" style="margin-top: 30px">
                                    <table class="table table-hover table-document">
                                            <thead>
                                                <th>NAME</th>
                                                <th>LINK</th>
                                                <th>DATE CREATED</th>
                                                <th>CREATED BY</th>
                                                <th>NOTE</th>
                                                <th>Type</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Friday Homework</td>
                                                    <td><a href="#abc">baitaplon</a></td>
                                                    <td>10/09/2018</td>
                                                    <td>Le Ngoc Thanh Thao</td>
                                                    <td>document for last lesson</td>
                                                    <td>HomeWork</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday Homework</td>
                                                    <td><a href="#abc">baitaplon</a></td>
                                                    <td>10/09/2018</td>
                                                    <td>Le Ngoc Thanh Thao</td>
                                                    <td>document for last lesson</td>
                                                    <td>HomeWork</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday Homework</td>
                                                    <td><a href="#abc">baitaplon</a></td>
                                                    <td>10/09/2018</td>
                                                    <td>Le Ngoc Thanh Thao</td>
                                                    <td>document for last lesson</td>
                                                    <td>HomeWork</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday Homework</td>
                                                    <td><a href="#abc">baitaplon</a></td>
                                                    <td>10/09/2018</td>
                                                    <td>Le Ngoc Thanh Thao</td>
                                                    <td>document for last lesson</td>
                                                    <td>HomeWork</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday Homework</td>
                                                    <td><a href="#abc">baitaplon</a></td>
                                                    <td>10/09/2018</td>
                                                    <td>Le Ngoc Thanh Thao</td>
                                                    <td>document for last lesson</td>
                                                    <td>HomeWork</td>
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
             <script type="text/javascript">
                $(document).ready(function() {
                    activeLeftMenu(2);
                });
            </script>
</html>