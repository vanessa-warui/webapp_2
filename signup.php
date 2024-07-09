<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up - Nadine Company</title>
        <!-- Include Bootstrap CSS from CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Nadine Company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.html">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.html">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="signin.html">Sign In</a></li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container">
            <?php include('includes/header.php'); ?>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="signup_process.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
    <?php include('includes/footer.php'); ?>
            <div class="row">
                <div class="col-12">
                    <h1>Sign Up</h1>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Your Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2024 Nadine Company. All rights reserved.</span>
            </div>
        </footer>

        <!-- Include Bootstrap JS from CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>



