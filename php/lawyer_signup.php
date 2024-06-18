<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Landing Page - LegaEase</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://source.unsplash.com/1600x500/?books,justics,law') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .hero .btn {
            font-size: 20px;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
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

                    <form method="POST" action="lawyer_process_1.php">
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
                    <h5 class="modal-title" id="exampleModalLabel">Get a LegaEase Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="lawyer_process.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="name">Lawyer Type</label>
                            <input type="text" class="form-control" id="lawyer" name="lawyer">
                        </div>

                        <div class="form-group">
                            <label for="experience">Experience (in years)</label>
                            <input type="number" class="form-control" id="experience" name="years">
                        </div>

                        <div class="form-group">
                            <label for="careerDescription">Short Description about Career</label>
                            <textarea class="form-control" id="careerDescription" rows="3" name="desc"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
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



<!--articles-->
  <div class="container mt-5">
    <div class="row">
        <!-- Article 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/700x500/?signup,law" class="card-img-top" alt="Article Image 1">
                <div class="card-body">
                    <h5 class="card-title">Efficacy Question Of The Anti-Defection Law In Current Politics</h5>
                    <p class="card-text">On the 28th of January 2024, Nitish Kumar's departure from the Mahagathbandhan ....</p>
                    <a href="https://legalserviceindia.com/legal/article-16230-efficacy-question-of-the-anti-defection-law-in-current-politics.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <!-- Article 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/700x500/?books,signup,law" class="card-img-top" alt="Article Image 2">
                <div class="card-body">
                    <h5 class="card-title">The Artistry Of The Saree: Exploring Intellectual Property Rights And Cultural Heritage Through Draping Techniques</h5>
                    <p class="card-text">Fashion's biggest night, the Met Gala, converges a world of style...</p>
                    <a href="https://legalserviceindia.com/legal/article-16229-the-artistry-of-the-saree-exploring-intellectual-property-rights-and-cultural-heritage-through-draping-techniques.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <!-- Article 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/700x500/?signup,law,criminal" class="card-img-top" alt="Article Image 3">
                <div class="card-body">
                    <h5 class="card-title">The Plagiarist's Nightmare: How the Anti-Cheating Bill Fortifies Academic Integrity</h5>
                    <p class="card-text">In an era where academic dishonesty runs ramp...</p>
                    <a href="https://legalserviceindia.com/legal/article-16217-the-plagiarist-s-nightmare-how-the-anti-cheating-bill-fortifies-academic-integrity.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Testimonials Section -->
    <div class="container mt-5">
        <h2 class="text-center">What Our Lawyers Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <blockquote class="blockquote">
                    <p class="mb-0">"LegaEase has transformed the way I manage my practice."</p>
                    <footer class="blockquote-footer">John Doe</footer>
                </blockquote>
            </div>
            <div class="col-md-4 mb-4">
                <blockquote class="blockquote">
                    <p class="mb-0">"A fantastic platform for connecting with new clients."</p>
                    <footer class="blockquote-footer">Jane Smith</footer>
                </blockquote>
            </div>
            <div class="col-md-4 mb-4">
                <blockquote class="blockquote">
                    <p class="mb-0">"The resources available are invaluable to my practice."</p>
                    <footer class="blockquote-footer">Emily Johnson</footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="container mt-5">
        <h2 class="text-center">How It Works</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/700x500/?signup" alt="Sign Up" class="img-fluid">
                <h3>Sign Up</h3>
                <p>Create your account and complete your profile.</p>
            </div>
            <div class="col-md-4">
                <img src="https://source.unsplash.com/700x500/?network,connect" alt="Connect" class="img-fluid">
                <h3>Connect</h3>
                <p>Network with other lawyers and find new clients.</p>
            </div>
            <div class="col-md-4">
                <img src="https://source.unsplash.com/700x500/?grow,law" alt="Grow" class="img-fluid">
                <h3>Grow</h3>
                <p>Expand your practice with our resources and tools.</p>
            </div>
        </div>
    </div>

    <!-- Latest Resources Section -->
    <div class="container mt-5">
        <h2 class="text-center">Latest Resources</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/700x500/?books,justics,law" class="card-img-top" alt="Resource 1">
                    <div class="card-body">
                        <h5 class="card-title">Federation Bar Association</h5>
                        <p class="card-text">Association news, events, and resources..</p>
                        <a href="https://www.fedbar.org/" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/700x500/?books,law" class="card-img-top" alt="Resource 2">
                    <div class="card-body">
                        <h5 class="card-title">Lawyerist</h5>
                        <p class="card-text">Resource and community hub for setting up, run.....</p>
                        <a href="https://lawyerist.com/" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/700x500/?justics,law" class="card-img-top" alt="Resource 3">
                    <div class="card-body">
                        <h5 class="card-title">National Association of Law PLacement</h5>
                        <p class="card-text">Legal employee directory plus ...</p>
                        <a href="https://www.nalp.org/" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="container">
        <p class="float-right"><a href="lawyer_signup.php">Back to top</a></p>
        <p>© 2023-2024 LegaEase, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>