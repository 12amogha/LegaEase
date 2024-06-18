<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>LegaEase - Simplifying Legal Matters</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">LegaEase</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Features
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="how_it_works.php">How It Works</a>
            <a class="dropdown-item" href="legal_resources.php">Legal Resources</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="contact.php">Contact Us</a>
            <a class="dropdown-item" href="write_for_us.php">Write for us</a>
            <a class="dropdown-item" href="blog.php">Blog</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-light" href="lawyer_signup.php">Continue as Lawyer</a>
        </li>



      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="mx-2">
        <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal">Login</button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">SignUp</button>
      </div>
    </div>
  </nav>



  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login to LegaEase</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="POST" action="index_process_1.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="e" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="p">
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" name="submit" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get an LegaEase Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="post" action="index_process.php">

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email_input" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>

            <div class="form-group">
              <label for="cexampleInputPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="cexampleInputPassword1" name="cpass">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
          </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <!--   Start of Slider-->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="https://source.unsplash.com/1600x500/?books,justics,law" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to LegaEase</h2>
          <p>Legal Documentation, Solutions, and Innovations</p>
          <button class="btn btn-danger">How It Works</button>
          <button class="btn btn-primary">Legal Resources</button>
          <button class="btn btn-success">Legal Updates</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x500/?justics,law" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Your One-Stop Solution for Simplified Legal Documentation</h2>
          <p>Legal Documentation, Solutions, and Innovations</p>
          <button class="btn btn-danger">How It Works</button>
          <button class="btn btn-primary">Legal Resources</button>
          <button class="btn btn-success">Legal Updates</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x500/?ai,justics,law" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Streamlining Legal Processes for a Seamless Experience</h2>
          <p>Legal Documentation, Solutions, and Innovations</p>
          <button class="btn btn-danger">How It Works</button>
          <button class="btn btn-primary">Legal Resources</button>
          <button class="btn btn-success">Legal Updates</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--Four Boxes-->
  <div class="container my-4">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Legal Dynamics</strong>
            <h3 class="mb-0">Legal Insights, Progress, and Advancements</h3>
            <div class="mb-1 text-muted">Feb 12</div>
            <p class="card-text mb-auto">Stay informed with the latest legal insights, track progress, and witness industry advancements.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="box-1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Juridical Innovation</strong>
            <h3 class="mb-0">Legal Updates, Innovations, and Transformations</h3>
            <div class="mb-1 text-muted">Feb 11</div>
            <p class="mb-auto">Experience the legal landscape evolve through timely updates, innovative solutions, and transformative changes.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?books,justics,law" alt="">

          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">Legislative Progression</strong>
            <h3 class="mb-0">Legal Evolution, Progress, and Breakthroughs</h3>
            <div class="mb-1 text-muted">Fec 12</div>
            <p class="card-text mb-auto">Witness the legal field's evolution, celebrate progress, and embrace groundbreaking breakthroughs.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?justics,law" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-warning">Judicial Advancement</strong>
            <h3 class="mb-0">Legal Trends, Innovations, and Advancements</h3>
            <div class="mb-1 text-muted">Feb 11</div>
            <p class="mb-auto">Explore emerging legal trends, innovative solutions, and exciting advancements shaping the future.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?books,innovative,law" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="container">
    <p class="float-right"><a href="index.html">Back to top</a></p>
    <p>© 2023-2024 LegaEase, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>