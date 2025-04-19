
<?php 
  include_once "header.php";
?>

<style>
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
    </style>



    <!-- Alert -->
    <div class="alert alert-info text-center py-5 mb-0" role="alert">
      <h1>About Page</h1>
</div>

    <!-- Team Cards -->
    <div class="container my-5">
      <div class="row g-4 justify-content-center">
        <!-- Repeat this block for each member -->
        <!-- Example card -->
        <!-- You could make this dynamic using a loop if using a template engine -->
        <!-- Updated member names just for variety -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img
              src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
              alt="Team Member"
              class="card-img-top"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Jane Doe</h5>
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
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img
              src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
              alt="Team Member"
              class="card-img-top"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Jane Doe</h5>
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
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img
              src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
              alt="Team Member"
              class="card-img-top"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Jane Doe</h5>
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
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img
              src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
              alt="Team Member"
              class="card-img-top"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Jane Doe</h5>
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
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img
              src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
              alt="Team Member"
              class="card-img-top"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Jane Doe</h5>
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
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img
              src="https://www.oxfordwebstudio.com/user/pages/06.da-li-znate/sta-je-html/sta-je-html.jpg"
              alt="Team Member"
              class="card-img-top"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Jane Doe</h5>
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

        <!-- Duplicate or dynamically generate similar cards below -->
        <!-- You can copy the card div above and change content if needed -->

        <!-- Example: Copy and paste for 5 more cards or use loop in framework -->
      </div>
    </div>

    <!-- Accordion Section -->
    <div class="container my-5">
      <h3 class="text-center mb-4">FAQ - Accordions</h3>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              What is Bootstrap?
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            aria-labelledby="headingOne"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Bootstrap is a front-end framework for developing responsive and
              mobile-first websites.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              How do I use Bootstrap components?
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              You can use Bootstrap by including its CDN or downloading the CSS
              and JS files, then using the classes in your HTML.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="container my-5">
      <h2 class="text-center mb-4">Contact Us</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
    <?php include_once  "footer.php" ?>