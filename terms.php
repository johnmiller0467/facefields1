<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Terms & Conditions';
$page_desc  = 'Terms and conditions for ordering produce, booking services, and using the FacadeFields website.';
include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Terms &amp; Conditions</div>
    <h1>Terms &amp; Conditions</h1>
  </div>
</section>

<section class="section">
  <div class="container legal-content">
    <p class="legal-updated">Last updated: January 1, 2026</p>

    <p>These Terms &amp; Conditions ("Terms") govern your use of the <?= h(SITE_NAME) ?> website and your orders for produce, vegetable boxes, equipment leasing, consultancy and farm visits (together, the "Services"). By using this website or placing an order, you agree to these Terms. This is a template for a small farm business and should be reviewed by a legal professional before use on a live site.</p>

    <h2>1. Orders and pricing</h2>
    <p>Prices shown on the Produce page reflect typical in-season rates and may change without notice depending on availability and harvest conditions. We will confirm final pricing before any order is fulfilled. We reserve the right to substitute items of similar value in a vegetable box when a specific item is unavailable.</p>

    <h2>2. Payment</h2>
    <p>Payment is due at the time of pickup or delivery unless a standing subscription arrangement has been agreed in writing. We accept the payment methods listed at the farm shop and on delivery invoices.</p>

    <h2>3. Delivery</h2>
    <p>Delivery days and areas are described on the Services and Produce pages and may change seasonally. We are not responsible for delays caused by weather, road conditions or other circumstances outside our reasonable control, but we will make reasonable efforts to notify customers of any delay.</p>

    <h2>4. Cancellations and refunds</h2>
    <p>Vegetable-box orders may be paused or cancelled up to 48 hours before the scheduled delivery or pickup. Equipment leasing and consultancy bookings may be rescheduled or cancelled up to 72 hours in advance without charge; later cancellations may incur a partial fee to cover preparation already carried out.</p>

    <h2>5. Farm visits and tours</h2>
    <p>Farm tours and school visits take place on working agricultural land. Visitors must follow instructions given by farm staff at all times, including instructions regarding footwear, closed areas and interaction with equipment or animals. Visitors participate at their own risk.</p>

    <h2>6. Equipment leasing</h2>
    <p>Lessees are responsible for the equipment for the duration of the lease and agree to operate it safely and in accordance with any instructions provided at handover. Damage beyond normal wear and tear may be charged to the lessee.</p>

    <h2>7. Website use</h2>
    <p>You agree not to misuse this website, including attempting to access it by means other than the interface we provide, or interfering with its normal operation.</p>

    <h2>8. Changes to these Terms</h2>
    <p>We may update these Terms from time to time. Continued use of the website or Services after changes are posted constitutes acceptance of the updated Terms.</p>

    <h2>9. Contact</h2>
    <p>Questions about these Terms can be sent to <a href="mailto:<?= h(SITE_EMAIL) ?>"><?= h(SITE_EMAIL) ?></a> or via the <a href="contact.php">contact page</a>.</p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
