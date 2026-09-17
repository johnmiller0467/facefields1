<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'About Us';
$page_desc  = 'The story of FacadeFields, the family behind it, and the way we farm the land.';
include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / About Us</div>
    <h1>Three generations on the same 240 acres.</h1>
    <p>FacadeFields started as a sixty-acre vegetable plot in 1968 and has grown, one field purchase at a time, into the working farm it is today.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="media-row">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/farmhouse,barn" alt="The original FacadeFields farmhouse and barn">
      </div>
      <div class="media-row-body">
        <span class="tag">Our story</span>
        <h2>Started by a grandfather, grown by a family.</h2>
        <p>Arthur Coale planted his first rows of vegetables on this land in 1968, selling what he grew from a roadside stand. His daughter Margaret took over in 1994 and added the orchard and grain fields. Today her son Daniel and his wife Rosa run the farm, alongside a small year-round crew and seasonal help at harvest.</p>
        <p>The name FacadeFields comes from the original stone farmhouse facade still standing at the entrance to the property — the one thing that hasn't changed across three generations.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-straw">
  <div class="container">
    <div class="field-row"><span class="field-row-label">What we stand for</span></div>
    <h2>The principles behind the way we farm.</h2>
    <div class="grid" style="margin-top:36px;">
      <div class="grid-item">
        <h3>Land before yield</h3>
        <p>We'd rather rest a field for a season than push it past what the soil can recover from.</p>
      </div>
      <div class="grid-item">
        <h3>Honest sourcing</h3>
        <p>What we sell as ours, we grew ourselves. What we bring in from neighboring farms, we say so.</p>
      </div>
      <div class="grid-item">
        <h3>Open doors</h3>
        <p>We run farm tours and school visits because most people have never seen where their food grows.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="field-row"><span class="field-row-label">The people</span></div>
    <h2>Who you'll meet around the farm.</h2>
    <div class="team-grid" style="margin-top:36px;">
      <div class="team-card">
        <img src="https://loremflickr.com/400/450/farmer,portrait" alt="Portrait of Daniel Coale">
        <h3>Daniel Coale</h3>
        <span class="role">Farm Manager</span>
        <p>Oversees planting, rotation planning and the equipment-leasing program.</p>
      </div>
      <div class="team-card">
        <img src="https://loremflickr.com/400/450/woman,farmer" alt="Portrait of Rosa Coale">
        <h3>Rosa Coale</h3>
        <span class="role">Operations &amp; Sales</span>
        <p>Runs the farm shop, delivery routes and vegetable-box subscriptions.</p>
      </div>
      <div class="team-card">
        <img src="https://loremflickr.com/400/450/agronomist,field" alt="Portrait of Michael Ortiz">
        <h3>Michael Ortiz</h3>
        <span class="role">Agronomist</span>
        <p>Advises on soil health, crop rotation and consults with neighboring farms.</p>
      </div>
      <div class="team-card">
        <img src="https://loremflickr.com/400/450/orchard,worker" alt="Portrait of Grace Lindqvist">
        <h3>Grace Lindqvist</h3>
        <span class="role">Orchard Lead</span>
        <p>Manages pruning, pest control and harvest timing across the orchard.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <div>
      <h2>Come see the farm for yourself.</h2>
      <p>Tours run Saturday mornings from April through October.</p>
    </div>
    <a href="contact.php" class="btn btn-outline-light">Book a visit</a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
