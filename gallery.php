<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gallery';
$page_desc  = 'Photos from around FacadeFields — the fields, the orchard, harvest days and farm tours.';
include __DIR__ . '/includes/header.php';

$photos = [
    ['img' => 'farmfield,sunrise',   'caption' => 'Sunrise over the east vegetable field'],
    ['img' => 'tractor,plowing',     'caption' => 'Spring plowing ahead of planting'],
    ['img' => 'vegetablebasket,harvest', 'caption' => 'A morning\'s harvest, sorted for the farm shop'],
    ['img' => 'appleorchard,blossom','caption' => 'Orchard blossom in early May'],
    ['img' => 'wheatfield,golden',   'caption' => 'Wheat ready for the combine'],
    ['img' => 'farmworker,harvest',  'caption' => 'Picking tomatoes in the July heat'],
    ['img' => 'barn,farmyard',       'caption' => 'The equipment yard and main barn'],
    ['img' => 'farmtour,children',   'caption' => 'A school group on a autumn visit'],
    ['img' => 'pumpkinpatch,autumn', 'caption' => 'The pumpkin patch in October'],
    ['img' => 'greenhouse,seedlings','caption' => 'Seedlings started in the greenhouse each March'],
    ['img' => 'farmdog,field',       'caption' => 'Biscuit, the farm dog, on evening rounds'],
    ['img' => 'farmmarket,stall',    'caption' => 'Our stall at the Saturday farmers market'],
];
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Gallery</div>
    <h1>A year around the farm.</h1>
    <p>A few photos from the fields, the orchard and market days — updated as the seasons turn.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="gallery-grid">
      <?php foreach ($photos as $photo): ?>
        <figure style="margin:0;">
          <img src="https://loremflickr.com/500/500/<?= h($photo['img']) ?>" alt="<?= h($photo['caption']) ?>">
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <div>
      <h2>Want to see it in person?</h2>
      <p>Saturday tours run April through October.</p>
    </div>
    <a href="contact.php" class="btn btn-outline-light">Book a tour</a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
