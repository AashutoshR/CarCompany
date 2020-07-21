<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

      <link rel="stylesheet" href="css/bootstrap.min.css" >
      <script src="js/jQuery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/all.min.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
      <link
    rel="stylesheet"
    href="css\animate.min.css">
      <link rel="stylesheet" href="">
      <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">

  </head>
  <body>
    <header>

          <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">
          <img src="images\Daco_4430093.png" width="10%" ><b>  Mercedes</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Blog.html">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Models</a>
                <a class="dropdown-item" href="#">Test Drive</a>
                <a class="dropdown-item" href="#">Spare parts</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About-us.html">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contactus.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
    <div class="container-fluid text-center display-4 heading  mt-5 mb-3 animate__animated animate__slideInDown">Contact Us<br />
      <div class="container-fluid text-center    mt-5 mb-3 animate__animated animate__slideInDown" style="font-size:23px">
        Mercedes-Benz showrooms
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d201448.20416304702!2d72.73401267104947!3d19.09420742642637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smercedes-benz!5e0!3m2!1sen!2sin!4v1595247455537!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <br /><div class="container-fluid text-center    mt-5 mb-3 animate__animated animate__slideInDown" style="font-size:23px">Get in touch<br />
<br />
<br />
  <form action="send.php">
    <textarea name="message" placeholder="Message" rows="8" cols="80"></textarea><br><br />
  <input type="text" id="fname" name="name" placeholder="Name">
  <input type="text" id="email" name="email" placeholder="Email"><br><br>
  <input type="text" name="subject" placeholder="Enter a Subject"><br><br>
  <input type="submit" value="Send">
</form>
<footer id="Footer">
  <div class="container">
    <div class="row">
      <div class="col-6">
          <i class="far fa-copyright"></i>copyright 2020-21
        </div>
      <div class="col-6" align="right">
        <span>  <i class="fab fa-twitter-square"></i></span>
        <span><i class="fab fa-instagram"></i></span>
        <span>
          <i class="fab fa-facebook-square"></i>
        </span>
      </div>
    </div>

  </div>
</footer>

</body>
</html>
<?php

$sql = "SELECT * FROM `form-data` ";
$result = mysqli_query($conn,$sql);
  if($result){
      $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<table border="1">
  <tr>
    <th>ID</th>
    <th>message</th>
    <th>Name</th>
    <th>
      Email
    </th>
    <th>
      Subject
    </th>
  </tr>
  <?php
  $count = count($data);
  for($i=0;$i<$count;$i++){ ?>
    <tr>
    <td><?php echo $data[$i]['id']; ?> </td>
    <td><?php echo $data[$i]['message']; ?></td>
    <td><?php echo $data[$i]['name']; ?> </td>
    <td><?php echo $data[$i]['email']; ?> </td>
    <td><?php echo $data[$i]['subject']; ?> </td>

  </tr>
  <?php
  }
  ?>

</table>
<?php
  }else {

  }

?>
