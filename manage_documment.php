<html>
<head>
        <meta charset="utf-8">
 
        <title>Layout Blog - Freetuts.net</title>
 <style>
     .plus:hover{
      transform: scale(1.5);
    }
    .save:hover{
      transform: scale(1.5);
    }
    .edit:hover{
      transform: scale(1.5);
    }
    .minus:hover{
      transform: scale(1.5);
    }
 </style>
<!-- Latest compiled and minified CSS -->
<?php include 'snippet/layout.php';?>

  <link rel="stylesheet" type="text/css" href="css/general.css">
</head>
<body>
  <?php include 'snippet/leftmenu_admin.php'; ?>
  <div class="container-fluid">
        <div class="ui horizontal divider">
          Documment
        </div>
    <div class="row"> 
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 main-body">
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
                </ul>
            </div>
          </div>
        </nav>
      <div>
          <table class="ui table selectable blue celled" id="tableScore">
            <thead>
              <tr>
                <th>Title</th>
                <th>Date upload</th>
                <th>description</th>
                <th>Link</th>
                <th>Modifiy</th>
              </tr>
            </thead> 
            <tbody>
            <?php for($x=0;$x <= 3;$x++){ ?>
              <tr>
                <td>Test1</td>
                <td>Immediate</td>
                <td id="point" class="positive ">9</td>
                <td>good</td>
                <td>
                  <i class="edit outline icon"></i>
                  <i class="minus icon"></i>
                  <i class="save outline icon large"></i>
                </td>
              </tr>
            <?php }?>
            </tbody>              
          </table>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 detal-body">
          <form class="ui form">
            <h4 class="ui dividing header">Shipping Information</h4>
            <div class="field">
              <label>Name</label>
              <div class="two fields">
                <div class="field">
                  <input type="text" name="shipping[first-name]" placeholder="First Name">
                </div>
                <div class="field">
                  <input type="text" name="shipping[last-name]" placeholder="Last Name">
                </div>

              </div>
              <label>Name</label>
              <div class="field">
                <input type="text" name="shipping[last-name]" placeholder="Last Name">
              </div>
              <label>Name</label>
              <div class="field">
                <input type="text" name="shipping[last-name]" placeholder="Last Name">
              </div>
              <label>Name</label>
              <div class="field">
                <input type="text" name="shipping[last-name]" placeholder="Last Name">
              </div>
            </div>
            <button class="ui primary button " type="submit">
              Save
            </button>
          </form>
      </div>    
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      // body...
        $('.ui.search')
          .search({
            type: 'category'
          })
        ;
        $('.ui.dropdown')
          .dropdown()
        ;
    });
  </script>
</body> 