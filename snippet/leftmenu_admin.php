<div class="ui top attached demo menu">
    <a class="item" id="home">
    <i class="sidebar icon"></i>
    College Page
  </a>
      <a class="item">
    <i class="sidebar icon"></i>
    Toiec Page
  </a>


</div>
<div class="ui bottom attached segment">
  <div class="ui inverted labeled icon left inline vertical fixed sidebar menu" style="" id="left_menu">
    <a class="item" href="manage_class.php">
      <i class="home icon"></i>
      Class Information
    </a>
    <a class="item" href="manage_class_score.php">
      <i class="block layout icon"></i>
     Class Score
    </a>
    <a class="item" href="manage_class_modify.php">
      <i class="smile icon"></i>
     Class Modify
    </a>
    <a class="item" href="manage_documment.php">
      <i class="calendar icon"></i>
      Documment
    </a>
        <a class="item" href="manage_lesson.php">
      <i class="calendar icon"></i>
      Lesson
    </a>
        <a class="item" href="manage_test_online.php">
      <i class="calendar icon"></i>
      Test Online
    </a>
        <a class="item" href="manage_notification.php">
      <i class="calendar icon"></i>
       Notification
    </a>
        <a class="item" href="manage_fqa.php">
      <i class="calendar icon"></i>
      FQA
    </a>
  </div>
</div>

  <script type="text/javascript">
    $(document).ready(function() {
      // body...
      
    });

    $("#home").click(function() {
      // body...
      $("#left_menu").sidebar("show");
    });
  </script>