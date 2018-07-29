<html>
<head>
        <meta charset="utf-8">
 
        <title>Layout Blog - Freetuts.net</title>
 
<!-- Latest compiled and minified CSS -->
<?php include 'snippet/layout.php';?>

  <link rel="stylesheet" type="text/css" href="css/general.css">
  <style type="text/css">
    #attend.hover{

    }
    .tr .th{
      text-align: center;
    }
    .edit:hover{
      transform: scale(1.5);
    }
    .save:hover{
      transform: scale(1.5);
    }
  </style>
</head>
<body>
  <?php include 'snippet/leftmenu_admin.php'; ?>
  <div class="container-fluid">
    <div class="row"> 
<!--       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="ui breadcrumb">
                <a class="section" href="admin.php">College Page</a>
                <i class="right chevron icon divider"></i>
                <div class="active section">Manage class</div>
              </div>
      </div> -->
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
          <table class="ui table selectable blue celled">
            <thead>
              <tr>
                <th s>No</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Attendence</th>
                <th>Group</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i = 0 ;$i<20 ;$i++){ ?>
              <tr>
                <td >1</td>
                <td>John</td>
                <td >1111111</td>
                <td><a class="attend">show</a></td>
                <td >1</td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
      </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
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
    $(".attend").popup({
      html : $("#popup"),
      on:'click'
    });

    $(document).ready(function() {
      $('.ui.dropdown')
      .dropdown()
    ;
    });
  </script>
</body> 