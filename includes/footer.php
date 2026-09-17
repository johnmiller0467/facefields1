</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="logo">Facade<span>Fields</span></a>
        <p>A family-run working farm growing seasonal vegetables, grains and orchard fruit, and supplying equipment and consultancy to farms nearby.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="products.php">Produce</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="blog.php">Field Notes</a></li>
        </ul>
      </div>
      <div>
        <h4>Support</h4>
        <ul>
          <li><a href="faq.php">FAQs</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="terms.php">Terms &amp; Conditions</a></li>
          <li><a href="privacy.php">Privacy Policy</a></li>
        </ul>
      </div>
      <div>
        <h4>Visit</h4>
        <ul>
          <li><?= h(SITE_ADDRESS) ?></li>
          <li><a href="tel:<?= h(preg_replace('/[^0-9+]/', '', SITE_PHONE)) ?>"><?= h(SITE_PHONE) ?></a></li>
          <li><a href="mailto:<?= h(SITE_EMAIL) ?>"><?= h(SITE_EMAIL) ?></a></li>
          <li><?= h(SITE_HOURS) ?></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?= h(CURRENT_YEAR) ?> <?= h(SITE_NAME) ?>. All rights reserved.</span>
      <span><a href="terms.php">Terms &amp; Conditions</a> &nbsp;|&nbsp; <a href="privacy.php">Privacy Policy</a></span>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
