<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'FAQs';
$page_desc  = 'Answers to common questions about ordering produce, vegetable boxes, farm visits and equipment leasing at FacadeFields.';
include __DIR__ . '/includes/header.php';

$faqs = [
    'Ordering & Delivery' => [
        ['Do you deliver, or is it pickup only?', 'We deliver locally on Tuesdays and Fridays for a flat $5 fee, or you can collect your order at the farm shop any day we\'re open, at no extra charge.'],
        ['How far in advance do I need to order a vegetable box?', 'Orders for a given week need to be in by Sunday evening so we can plan the harvest. One-off orders can usually be placed with a few days\' notice.'],
        ['Can I change what\'s in my vegetable box?', 'Boxes are packed from what\'s ready that week, but let us know about any allergies or strong dislikes and we\'ll work around them where we can.'],
    ],
    'Visiting the Farm' => [
        ['Do I need to book a farm tour in advance?', 'Yes — Saturday tours have limited spots, so please book through the contact form at least a few days ahead.'],
        ['Is the farm shop open to walk-ins?', 'Yes, the farm shop is open Monday through Saturday during our regular hours; no appointment needed.'],
        ['Are farm visits suitable for young children?', 'Yes, our Saturday tours are a popular family outing. Closed-toe shoes are recommended given the uneven ground.'],
    ],
    'Equipment & Consultancy' => [
        ['How far will you deliver leased equipment?', 'We generally lease within about twenty miles of the farm; contact us and we can confirm for your location.'],
        ['What does a consultancy visit cost?', 'Pricing depends on the size of your fields and what you need — get in touch with some basic details and we\'ll quote you directly.'],
    ],
];
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / FAQs</div>
    <h1>Frequently asked questions.</h1>
    <p>Can't find your answer here? Send us a message on the <a href="contact.php" style="color:#fff;text-decoration:underline;">contact page</a>.</p>
  </div>
</section>

<?php foreach ($faqs as $group => $items): ?>
<section class="section <?= (array_search($group, array_keys($faqs)) % 2 === 1) ? 'section-straw' : '' ?>">
  <div class="container">
    <div class="field-row"><span class="field-row-label"><?= h($group) ?></span></div>
    <?php foreach ($items as $item): ?>
      <div class="faq-item">
        <h3><?= h($item[0]) ?></h3>
        <p><?= h($item[1]) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endforeach; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
