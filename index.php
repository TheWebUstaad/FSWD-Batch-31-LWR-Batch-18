<?php
    $welcomeMsg = "Php laravel Session #2";
    $TeamName   = "HTML CSS JS Bootstrap";
    $TeamName2  = "PHP LARAVEL/ LiveWire";

    include_once "header.php";
?>

    <!-- alert -->
    <div class="alert alert-info text-center py-5" role="alert">
        <h1>Home page</h1>
      welcome to                 <?php echo $welcomeMsg ?>
    </div>
    <!-- Team Cards -->
    <div class="container">
      <div class="row g-2 justify-content-center">
        <div class="col-sm-6 col-lg-4">
          <div class="card">
            <img
              class="card-img-top"
              src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
              class="img-fluid"
              alt="Responsive image"
            />
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo $TeamName2; ?></h5>
              <span class="badge bg-success mb-2">Available</span>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <a href="#" class="btn btn-outline-primary btn-sm"
                >View Profile</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img
                class="card-img-top"
                src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
                class="img-fluid"
                alt="Responsive image"
              />
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $TeamName; ?></h5>
                <span class="badge bg-success mb-2">Available</span>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="btn btn-outline-primary btn-sm"
                  >View Profile</a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img
                class="card-img-top"
                src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
                class="img-fluid"
                alt="Responsive image"
              />
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $TeamName2; ?></h5>
                <span class="badge bg-success mb-2">Available</span>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="btn btn-outline-primary btn-sm"
                  >View Profile</a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img
                class="card-img-top"
                src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
                class="img-fluid"
                alt="Responsive image"
              />
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $TeamName2 ?></h5>
                <span class="badge bg-success mb-2">Available</span>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="btn btn-outline-primary btn-sm"
                  >View Profile</a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img
                class="card-img-top"
                src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
                class="img-fluid"
                alt="Responsive image"
              />
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $TeamName; ?></h5>
                <span class="badge bg-success mb-2">Available</span>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="btn btn-outline-primary btn-sm"
                  >View Profile</a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img
                class="card-img-top"
                src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
                class="img-fluid"
                alt="Responsive image"
              />
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $TeamName2 ?></h5>
                <span class="badge bg-success mb-2">Available</span>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="btn btn-outline-primary btn-sm"
                  >View Profile</a
                >
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- accordion Section -->
        <div class="container my-5 text-center">
            <h3> FAQ - ACCORDIONS</h3>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is Bootstrap?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Bootstrap is a front-end framework for developing responsive and mobile-first websites.
                        </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            What is Bootstrap?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Bootstrap is a front-end framework for developing responsive and mobile-first websites.
                        </div>
                </div>

            </div>
        </div>

    <!-- Contact Form -->
        <div class="container my-5">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label ">Name</label>
            <input type="text" class="form-control" id="name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
        <div class="container">

</div>

<?php include_once  "footer.php" ?>