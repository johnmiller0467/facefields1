<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Services';
$page_desc  = 'Equipment leasing, agronomy consultancy, farm tours and vegetable-box delivery from FacadeFields.';
include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Services</div>
    <h1>Beyond produce: equipment, advice and open fields.</h1>
    <p>Alongside growing and selling food, FacadeFields supports smaller farms nearby and welcomes visitors onto the land.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="media-row">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/tractor,machinery" alt="Farm machinery available for lease at FacadeFields">
      </div>
      <div class="media-row-body">
        <span class="tag">Equipment leasing</span>
        <h2>Tractors, tillers and harvesters by the day or week</h2>
        <p>We maintain a small fleet of equipment beyond what our own fields need, and lease it out to farms within about twenty miles. Bookings run through our farm manager, and each lease includes a walkthrough of the machine before it leaves the yard.</p>
        <a href="contact.php" class="btn btn-outline">Ask about availability</a>
      </div>
    </div>

    <div class="media-row reverse">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/soil,agronomist" alt="Soil testing in a FacadeFields field">
      </div>
      <div class="media-row-body">
        <span class="tag">Agronomy consultancy</span>
        <h2>Soil testing and rotation planning</h2>
        <p>Our agronomist, Michael, spends part of each week advising other growers on soil health, crop rotation and pest management. Consultations start with a soil sample and a walk of your fields.</p>
        <a href="contact.php" class="btn btn-outline">Book a consultation</a>
      </div>
    </div>

    <div class="media-row">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/farmtour,visitors" alt="Visitors on a guided tour of the farm">
      </div>
      <div class="media-row-body">
        <span class="tag">Farm tours &amp; school visits</span>
        <h2>See where your food is grown</h2>
        <p>Saturday morning tours run April through October and cover the vegetable fields, orchard and equipment yard. We also host weekday visits for school groups by arrangement.</p>
        <a href="contact.php" class="btn btn-outline">Book a tour</a>
      </div>
    </div>

    <div class="media-row reverse">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/vegetablebox,delivery" alt="A packed vegetable box ready for delivery">
      </div>
      <div class="media-row-body">
        <span class="tag">Vegetable-box delivery</span>
        <h2>A weekly box, packed the morning it goes out</h2>
        <p>Choose a small, medium or family-size box and we'll fill it with whatever's ready that week. Boxes are delivered locally on Tuesdays and Fridays, or available for pickup at the farm shop any day.</p>
        <a href="products.php" class="btn btn-outline">See box options</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-straw">
  <div class="container">
    <div class="field-row"><span class="field-row-label">Good to know</span></div>
    <h2>How service bookings work.</h2>
    <div class="steps" style="margin-top:36px;">
      <div class="step">
        <h3>Get in touch</h3>
        <p>Call, email or use the contact form to tell us what you need and when.</p>
      </div>
      <div class="step">
        <h3>We confirm details</h3>
        <p>For equipment or consultancy, we'll ask a few questions about your fields or the job at hand.</p>
      </div>
      <div class="step">
        <h3>Schedule the date</h3>
        <p>We'll agree on a date and, for equipment, a pickup or delivery arrangement.</p>
      </div>
      <div class="step">
        <h3>Follow-up support</h3>
        <p>Questions after the fact are welcome — most consultancy clients call back more than once a season.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <div>
      <h2>Not sure which service fits?</h2>
      <p>Tell us what you're working on and we'll point you the right way.</p>
    </div>
    <a href="contact.php" class="btn btn-outline-light">Contact us</a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
