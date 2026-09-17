<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privacy Policy';
$page_desc  = 'How FacadeFields collects, uses and protects information submitted through this website.';
include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Privacy Policy</div>
    <h1>Privacy Policy</h1>
  </div>
</section>

<section class="section">
  <div class="container legal-content">
    <p class="legal-updated">Last updated: January 1, 2026</p>

    <p>This Privacy Policy explains what information <?= h(SITE_NAME) ?> collects through this website, how it is used, and the choices you have. This is a template for a small farm business and should be reviewed by a legal professional before use on a live site.</p>

    <h2>1. Information we collect</h2>
    <p>We collect information you provide directly, such as:</p>
    <ul>
      <li>Your name, email address and phone number when you submit the contact form.</li>
      <li>Details of your enquiry or order, such as the reason for contact and any message you write.</li>
      <li>Delivery address and order details if you sign up for a vegetable box or place an order.</li>
    </ul>
    <p>We do not knowingly collect payment card details through this website; payment is handled in person, on delivery, or through a separate payment provider where applicable.</p>

    <h2>2. How we use your information</h2>
    <ul>
      <li>To respond to enquiries submitted through the contact form.</li>
      <li>To fulfil orders, schedule deliveries, and manage vegetable-box subscriptions.</li>
      <li>To schedule farm tours, equipment leases and consultancy visits.</li>
      <li>To send order or booking confirmations and, if you opt in, occasional updates about seasonal produce.</li>
    </ul>

    <h2>3. How we share your information</h2>
    <p>We do not sell your personal information. We may share limited information with service providers who help us operate the farm business, such as delivery coordination or email services, solely for the purposes described above. We may disclose information if required to do so by law.</p>

    <h2>4. Cookies</h2>
    <p>This website may use basic cookies necessary for its operation, such as remembering form input during a single visit. It does not use cookies for third-party advertising.</p>

    <h2>5. Data retention</h2>
    <p>We keep contact and order information for as long as reasonably necessary to fulfil the purposes described in this policy, or as required by applicable record-keeping obligations.</p>

    <h2>6. Your choices</h2>
    <p>You may ask us to correct or delete the personal information we hold about you, or to stop sending you seasonal updates, by contacting us using the details below.</p>

    <h2>7. Children's privacy</h2>
    <p>This website is intended for general audiences and is not directed at children. Farm tours for school groups are arranged through a supervising adult, and we do not knowingly collect personal information directly from children through this website.</p>

    <h2>8. Changes to this policy</h2>
    <p>We may update this Privacy Policy from time to time. The "Last updated" date at the top of this page reflects the most recent revision.</p>

    <h2>9. Contact us</h2>
    <p>Questions about this Privacy Policy or your information can be sent to <a href="mailto:<?= h(SITE_EMAIL) ?>"><?= h(SITE_EMAIL) ?></a> or via the <a href="contact.php">contact page</a>.</p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
