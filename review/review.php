<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="review.css">

</head>
<body>

<!-- header section starts -->
<section id="header">
<?php include 'C:\xampp\htdocs\carehub\home\nav.php'; ?>
</section>
<!-- header section ends-->

<header>
    <div class="container">
      <div class="container__left">
        <h1>Read what our customers love about us</h1>
        <p>
          Over 200 companies frim diverse sectors consult us to enhance the
          user experience of their products and services.
        </p>
        <p>
          We have helped companies increase their customer base and generate
          multifold revenue with our service.
        </p>
        <button>Read our success stories</button>
      </div>
      <div class="container__right">
        <div class="card">
          <img src="assets/pic-1.jpg" alt="user" />
          <div class="card__content">
            <span><i class="ri-double-quotes-l"></i></span>
            <div class="card__details">
              <p>
                We had a great time collaboraring with the Filament team. They
                have my high recommendation!
              </p>
              <h4>- Marnus Stephen</h4>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="assets/pic-2.jpeg" alt="user" />
          <div class="card__content">
            <span><i class="ri-double-quotes-l"></i></span>
            <div class="card__details">
              <p>
                The team drastically improved our product's user experience &
                increased our business outreach.
              </p>
              <h4>- Andrew Jettpace</h4>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="assets/pic-3.jpg" alt="user" />
          <div class="card__content">
            <span><i class="ri-double-quotes-l"></i></span>
            <div class="card__details">
              <p>
                I absolutely loved working with the Filament team. Complete
                experts at what they do!
              </p>
              <h4>- Stacy Stone</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php include 'C:\xampp\htdocs\carehub\home\footer.php'; ?>
</body>
</html>