<?php require base_path("views/partials/head.php")?>

<body>

<div class="site-wrap">


    <?php require base_path("views/partials/nav.php")?>

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Contact</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-5 text-black text-center font-weight-bold display-4">Register for a new account</h2>
                </div>
                <div class="col-md-9 mx-auto">

                    <form action="/register" method="post">

                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register">
                                </div>
                            </div>
                        <ul class="list-unstyled">
                            <?php if (isset($errors['email'])) : ?>
                                <li class="text-danger"><?= $errors['email'] ?></li>
                            <?php endif; ?>

                            <?php if (isset($errors['password'])) : ?>
                                <li class="text-danger"><?= $errors['password'] ?></li>
                            <?php endif; ?>
                        </ul>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-black mb-4">Offices</h2>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white mb-3 rounded">
                        <span class="d-block text-black h6 text-uppercase">New York</span>
                        <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white mb-3 rounded">
                        <span class="d-block text-black h6 text-uppercase">London</span>
                        <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white mb-3 rounded">
                        <span class="d-block text-black h6 text-uppercase">Canada</span>
                        <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php require base_path("views/partials/footer.php")?>
</div>

<?php require base_path("views/partials/script.php")?>

</body>

</html>