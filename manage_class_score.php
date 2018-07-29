<html>
<head>
        <meta charset="utf-8">
 
        <title>Layout Blog - Freetuts.net</title>
 
<!-- Latest compiled and minified CSS -->
<?php include 'snippet/layout.php';?>

  <link rel="stylesheet" type="text/css" href="css/general.css">
</head>
<body>
  <?php include 'snippet/leftmenu_admin.php'; ?>
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
          <div class="container-fluid">
            <div class="navbar-header ">
                <a class="navbar-brand collapse navbar-collapse" href="#">WebSiteName</a>
            </div>
            
            <div class="collapse navbar-collapse" id="myNavbar">
<!--                 <div class="ui search nav navbar-nav " style="margin-top: 5px">
                  <input class="prompt" type="text" placeholder="Class">

                </div> -->
                <div class="ui multiple search selection dropdown nav navbar-nav" style="margin-top: 5px">
                  <input type="hidden" name="country">
                  <i class="dropdown icon"></i>
                  <div class="default text">Select Country</div>
                  <div class="menu">
                  <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
                  </div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="save  icon"></i></a></li>
                    <li><a href="#"><i class="search  icon"></i></span></a></li>
                    <li><a href="#"><i class="external alternate icon"></i></a></li>
                </ul>
            </div>
          </div>
        </nav>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <table class="ui celled table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Student Id</th>
                <th>Scrore 1</th>
                <th>Scrore 2</th>
                <th>Scrore 3</th>
                <th>Scrore 4</th>
                <th>Scrore 5</th>
                <th>Scrore 6</th>
                <th>Scrore 7</th>
                <th>AVG</th>
                <th>Modify</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>444444444</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>5.5</td>
                <td></td>
              </tr>
            </tbody>
            <tfoot>
              <tr><th>1 People</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr></tfoot>
          </table>           
        </div>          
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      // body...
        $('.ui.dropdown')
          .dropdown()
        ;
    });
  </script>
</body> 