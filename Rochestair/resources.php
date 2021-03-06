<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--My CSS -->
  <link href="css/home.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Rochestair</title>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <img class="logo img-fluid rounded mb-4 mb-lg-0" src="img/Rochestair.png" alt="" width="200">
    <a class="navbar-brand" href="#">Rochestair</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="resources.php">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="d-flex flex-column">
  <div class="pageHeaderBox">
    <div class="pageHeader">
      <h1 class="font-weight-light">Resources</h1>
      <p>Location, more Information, and tickets </p>
    </div>
  </div>
</div>

<!-- Page Content -->
<div class="container">

  <!-- Heading Row -->
  <div class="row align-items-center my-5">
    <div class="col-lg-7">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7270.864301163052!2d-77.6625000900021!3d43.120581243845336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d14cb73768decb%3A0xb43d4e6684963fa9!2sGreater%20Rochester%20International%20Airport!5e0!3m2!1sen!2sus!4v1593411672886!5m2!1sen!2sus" width="1100" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- /.col-lg-8 -->
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Event Details</h5>
        <h6 class="card-subtitle mb-2 text-muted">Location</h6>
        <p class="card-text"><b>1200 Brooks Ave, Rochester, NY 14624 </b></br>Begins: July 4th 1:30 PM</br>Ends: July 4th 3:00 PM</p>
        <a href="#" class="card-link">(585)360-0247</a>
      </div>
    </div>
    <!-- /.col-md-4 -->
  </div>
  <!-- /.row -->

  <div class="pageHeader">
    <h2 class="font-weight-light">Parking Locations</h2>
    </br></br>
  </div>

  <div class="container">
    <p><b>Parking Location #1:</b> <a href="https://goo.gl/maps/Gv3dyiMuw2EeGB8T6">Rochester Institute of Technology H Lot</a></p>
    <p><b>Parking Location #2:</b> <a href="https://goo.gl/maps/qwPDwY9Y74qXoACV8">ROC Airport Cell Phone Lot</a></p>
    <p><b>Parking Location #3:</b> <a href="https://goo.gl/maps/W3yxqduTnMuD8mN38">University Of Rochester Crittenden Lot</a></p>
  </div>

  <div class="pageHeader">
    <h2 class="font-weight-light">Buy Tickets</h2>
    </br></br>
  </div>

  <form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Re-enter Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">How Many Tickets?</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
              1 ticket
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
              2 tickets
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option3">
            <label class="form-check-label" for="gridRadios2">
              3 tickets
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option4">
            <label class="form-check-label" for="gridRadios2">
              4 tickets
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option5">
            <label class="form-check-label" for="gridRadios2">
              5 tickets
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
    </div>
  </form>

  <div class="col-sm-10">
    <a href="action_page.php">
      <button class="btn btn-primary">Continue to Checkout</button>
    </a>
  </br></br></br></br>
  </div>


</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Rochestair 2020</p>
  </div>
  <!-- /.container -->
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>

</html>
