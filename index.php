<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Home';
$page_desc  = 'FacadeFields grows seasonal vegetables, grains and orchard fruit on 240 acres, and supplies equipment and consultancy to farms nearby.';
include __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="container">
    <div class="hero-copy">
      <h1>Working the land, season after season.</h1>
      <p>FacadeFields is a family-run farm growing vegetables, grains and orchard fruit across 240 acres. We sell direct to local households, restaurants and markets, and lend our equipment and know-how to farms nearby.</p>
      <div class="hero-actions">
        <a href="products.php" class="btn btn-primary">Browse this week's produce</a>
        <a href="contact.php" class="btn btn-outline">Book a farm visit</a>
      </div>
      <div class="hero-stats">
        <div><strong>240</strong><span>acres under cultivation</span></div>
        <div><strong>15+</strong><span>years farming this land</span></div>
        <div><strong>60+</strong><span>crop varieties grown</span></div>
      </div>
    </div>
    <div class="hero-figure">
      <img src="https://loremflickr.com/900/1100/farmfield,tractor" alt="Rows of crops across the FacadeFields farmland">
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="field-row"><span class="field-row-label">What we grow</span></div>
    <h2>Three harvests, one farm.</h2>

    <div class="media-row">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/vegetablefarm,harvest" alt="Crates of freshly picked vegetables">
      </div>
      <div class="media-row-body">
        <span class="tag">Vegetables</span>
        <h3>Tomatoes, squash, greens and root vegetables</h3>
        <p>Twenty-two vegetable varieties move through our rotation from April to October, picked the same morning they're sold or delivered. Nothing sits in cold storage longer than a few days.</p>
        <a href="products.php">See this season's vegetables →</a>
      </div>
    </div>

    <div class="media-row reverse">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/wheatfield,grain" alt="Golden grain field ready for harvest">
      </div>
      <div class="media-row-body">
        <span class="tag">Grains &amp; Pulses</span>
        <h3>Wheat, oats, barley and dried beans</h3>
        <p>Ninety of our acres are given over to grain in rotation with legumes, which rest the soil between vegetable seasons and supply the flour and pulses we sell through the farm shop.</p>
        <a href="products.php">See our grains &amp; pulses →</a>
      </div>
    </div>

    <div class="media-row">
      <div class="media-row-figure">
        <img src="https://loremflickr.com/700/500/appleorchard,orchard" alt="Rows of fruit trees in the FacadeFields orchard">
      </div>
      <div class="media-row-body">
        <span class="tag">Orchard Fruit</span>
        <h3>Apples, pears and stone fruit</h3>
        <p>Our eighteen-acre orchard was planted by the previous owners in the 1980s and has been replanted in stages since. Late summer and autumn bring apples, pears, plums and peaches.</p>
        <a href="products.php">See orchard availability →</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-straw">
  <div class="container">
    <div class="field-row"><span class="field-row-label">Why FacadeFields</span></div>
    <h2>Farming the way that keeps land productive.</h2>
    <div class="grid" style="margin-top:36px;">
      <div class="grid-item">
        <div class="icon">1</div>
        <h3>Soil-first rotation</h3>
        <p>Cover crops, composting and a four-year rotation plan keep our soil workable without leaning on synthetic inputs.</p>
      </div>
      <div class="grid-item">
        <div class="icon">2</div>
        <h3>Same-day harvest</h3>
        <p>Produce ordered for delivery or farm-shop pickup is picked that morning — not pulled from a week-old cold store.</p>
      </div>
      <div class="grid-item">
        <div class="icon">3</div>
        <h3>Equipment &amp; consultancy</h3>
        <p>Smaller farms nearby lease our machinery by the day and can book time with our agronomist for planting and soil questions.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div class="quote-block">
      <p>"We've bought our vegetable boxes from FacadeFields for four years. The produce is picked the morning it arrives, and it shows — nothing else we've tried compares."</p>
      <cite>— Priya Anand, weekly vegetable-box customer</cite>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="field-row"><span class="field-row-label">How we work</span></div>
    <h2>From seed to delivery, in four stages.</h2>
    <div class="steps" style="margin-top:36px;">
      <div class="step">
        <h3>Plan the season</h3>
        <p>Crop rotation and planting schedules are set each winter around soil tests and last year's yields.</p>
      </div>
      <div class="step">
        <h3>Plant &amp; tend</h3>
        <p>Fields are sown in stages through spring, with irrigation and weeding managed by hand and by tractor.</p>
      </div>
      <div class="step">
        <h3>Harvest &amp; sort</h3>
        <p>Crops are picked at the point of ripeness and sorted the same day at the farm shop.</p>
      </div>
      <div class="step">
        <h3>Deliver &amp; support</h3>
        <p>Orders go out to homes and restaurants, and equipment or advice goes out to neighboring farms.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <div>
      <h2>Ready to taste the difference?</h2>
      <p>Order a produce box, visit the farm shop, or ask us about equipment leasing.</p>
    </div>
    <a href="contact.php" class="btn btn-outline-light">Get in touch</a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
