<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contact Us';
$page_desc  = 'Get in touch with FacadeFields about produce orders, vegetable boxes, farm tours or equipment leasing.';

$errors  = [];
$success = false;
$values  = ['name' => '', 'email' => '', 'phone' => '', 'reason' => 'General enquiry', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['name']    = trim($_POST['name'] ?? '');
    $values['email']   = trim($_POST['email'] ?? '');
    $values['phone']   = trim($_POST['phone'] ?? '');
    $values['reason']  = trim($_POST['reason'] ?? 'General enquiry');
    $values['message'] = trim($_POST['message'] ?? '');

    if ($values['name'] === '') {
        $errors[] = 'Please enter your name.';
    }
    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($values['message'] === '') {
        $errors[] = 'Please enter a message so we know how to help.';
    }

    if (empty($errors)) {
        // In production, send the enquiry by email or store it, e.g.:
        //
        // $to      = SITE_EMAIL;
        // $subject = 'New enquiry from ' . $values['name'] . ' (' . $values['reason'] . ')';
        // $body    = $values['message'] . "\n\nPhone: " . $values['phone'];
        // $headers = 'From: ' . $values['email'];
        // mail($to, $subject, $body, $headers);
        //
        // mail() requires a configured mail server on the host, so it is left
        // commented out here. Wire it up (or swap in PHPMailer / an API
        // provider) once the site is deployed.

        $success = true;
        $values  = ['name' => '', 'email' => '', 'phone' => '', 'reason' => 'General enquiry', 'message' => ''];
    }
}

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Contact Us</div>
    <h1>Get in touch.</h1>
    <p>Questions about an order, a farm visit, or leasing equipment — send us a message and we'll reply within a couple of business days.</p>
  </div>
</section>

<section class="section">
  <div class="container media-row" style="align-items:flex-start;">
    <div>
      <?php if ($success): ?>
        <div class="alert">Thanks, <?= h($_POST['name'] ?? '') ?> — your message has been received. We'll get back to you within two business days.</div>
      <?php endif; ?>

      <?php if (!empty($errors)): ?>
        <div class="alert alert-error">
          <strong>Please fix the following:</strong>
          <ul style="margin:8px 0 0 20px;">
            <?php foreach ($errors as $err): ?><li><?= h($err) ?></li><?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <form method="post" action="contact.php" novalidate>
        <div class="form-grid">
          <div>
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" value="<?= h($values['name']) ?>" required>
          </div>
          <div>
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" value="<?= h($values['email']) ?>" required>
          </div>
          <div>
            <label for="phone">Phone (optional)</label>
            <input type="tel" id="phone" name="phone" value="<?= h($values['phone']) ?>">
          </div>
          <div>
            <label for="reason">What's this about?</label>
            <select id="reason" name="reason">
              <?php foreach (['General enquiry', 'Vegetable box order', 'Farm tour booking', 'Equipment leasing', 'Agronomy consultancy'] as $opt): ?>
                <option value="<?= h($opt) ?>" <?= $values['reason'] === $opt ? 'selected' : '' ?>><?= h($opt) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="full">
            <label for="message">Message</label>
            <textarea id="message" name="message" required><?= h($values['message']) ?></textarea>
          </div>
          <div class="full">
            <button type="submit" class="btn btn-primary">Send message</button>
            <p class="form-note">By submitting this form you agree to our <a href="privacy.php">Privacy Policy</a>.</p>
          </div>
        </div>
      </form>
    </div>

    <div>
      <ul class="info-list">
        <li>
          <div>
            <strong>Address</strong>
            <span><?= h(SITE_ADDRESS) ?></span>
          </div>
        </li>
        <li>
          <div>
            <strong>Phone</strong>
            <span><a href="tel:<?= h(preg_replace('/[^0-9+]/', '', SITE_PHONE)) ?>"><?= h(SITE_PHONE) ?></a></span>
          </div>
        </li>
        <li>
          <div>
            <strong>Email</strong>
            <span><a href="mailto:<?= h(SITE_EMAIL) ?>"><?= h(SITE_EMAIL) ?></a></span>
          </div>
        </li>
        <li>
          <div>
            <strong>Farm shop hours</strong>
            <span><?= h(SITE_HOURS) ?></span>
          </div>
        </li>
      </ul>

      <iframe class="map-frame" style="margin-top:24px;"
        src="https://www.openstreetmap.org/export/embed.html?bbox=-122.42%2C37.76%2C-122.40%2C37.78&layer=mapnik"
        loading="lazy" title="Map showing the approximate location of FacadeFields"></iframe>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
