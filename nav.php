<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Toto Webpagina</a>
	  
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Start<span class="caret"></span></a>
          <ul class="dropdown-menu">

<?php
  $conn= dbconnect();
  $sql  = "SELECT * FROM `tbl_menu`";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
      {
          while($row = $result->fetch_assoc()) 
        {
?>
            <li><a href="<?php echo $row["mn_link"]?>">
                          <?php echo $row["mn_name"]?></a></li>
<?php 
        } 
      }
?>    
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>