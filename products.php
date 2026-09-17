<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produce';
$page_desc  = 'Seasonal vegetables, grains, pulses and orchard fruit grown at FacadeFields, plus weekly vegetable boxes.';
include __DIR__ . '/includes/header.php';

$products = [
    ['name' => 'Heirloom Tomatoes',  'cat' => 'Vegetables', 'price' => '$4.50', 'unit' => 'per lb',  'img' => 'tomatoes,vegetable'],
    ['name' => 'Rainbow Chard',      'cat' => 'Vegetables', 'price' => '$3.20', 'unit' => 'per bunch','img' => 'chard,greens'],
    ['name' => 'Butternut Squash',   'cat' => 'Vegetables', 'price' => '$2.10', 'unit' => 'per lb',  'img' => 'squash,vegetable'],
    ['name' => 'Sweet Corn',         'cat' => 'Vegetables', 'price' => '$0.75', 'unit' => 'per ear', 'img' => 'sweetcorn,corn'],
    ['name' => 'Stone-Ground Wheat Flour', 'cat' => 'Grains', 'price' => '$5.00', 'unit' => 'per 2lb bag', 'img' => 'flour,wheat'],
    ['name' => 'Rolled Oats',        'cat' => 'Grains',     'price' => '$4.20', 'unit' => 'per 2lb bag', 'img' => 'oats,grain'],
    ['name' => 'Dried Black Beans',  'cat' => 'Pulses',     'price' => '$3.60', 'unit' => 'per lb',  'img' => 'beans,pulses'],
    ['name' => 'Split Peas',         'cat' => 'Pulses',     'price' => '$3.10', 'unit' => 'per lb',  'img' => 'peas,legume'],
    ['name' => 'Honeycrisp Apples',  'cat' => 'Orchard',    'price' => '$3.80', 'unit' => 'per lb',  'img' => 'apples,orchard'],
    ['name' => 'Bartlett Pears',     'cat' => 'Orchard',    'price' => '$3.40', 'unit' => 'per lb',  'img' => 'pears,fruit'],
    ['name' => 'Yellow Peaches',     'cat' => 'Orchard',    'price' => '$4.10', 'unit' => 'per lb',  'img' => 'peaches,fruit'],
    ['name' => 'Damson Plums',       'cat' => 'Orchard',    'price' => '$4.60', 'unit' => 'per lb',  'img' => 'plums,fruit'],
];
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Produce</div>
    <h1>This season's harvest.</h1>
    <p>Availability changes week to week. Prices below are typical in-season rates at the farm shop; delivery and vegetable-box pricing is quoted separately.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="field-row"><span class="field-row-label">Farm shop price list</span></div>
    <div class="product-grid" style="margin-top:30px;">
      <?php foreach ($products as $p): ?>
        <div class="product-card">
          <img src="https://loremflickr.com/400/300/<?= h($p['img']) ?>" alt="<?= h($p['name']) ?>">
          <h3><?= h($p['name']) ?></h3>
          <span class="unit"><?= h($p['cat']) ?></span><br>
          <span class="price"><?= h($p['price']) ?></span> <span class="unit"><?= h($p['unit']) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-straw">
  <div class="container">
    <div class="field-row"><span class="field-row-label">Vegetable boxes</span></div>
    <h2>Pick a box size, we'll fill it with what's ready.</h2>
    <div class="grid" style="margin-top:36px;">
      <div class="grid-item">
        <h3>Small — $22/week</h3>
        <p>4–5 vegetables, enough for one or two people. Good for trying us out.</p>
      </div>
      <div class="grid-item">
        <h3>Medium — $34/week</h3>
        <p>7–8 vegetables plus a seasonal fruit, sized for a family of three or four.</p>
      </div>
      <div class="grid-item">
        <h3>Family — $48/week</h3>
        <p>10–12 vegetables, fruit, and a grain or pulse item rotated in each week.</p>
      </div>
    </div>
    <p style="margin-top:28px;"><a href="contact.php" class="btn btn-primary">Start a vegetable-box subscription</a></p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
