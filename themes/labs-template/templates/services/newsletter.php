 <!-- newsletter section -->
 <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Newsletter</h2>
        </div>
        <div class="col-md-9">
          <!-- newsletter form -->
          <form class="nl-form" action="<?= get_admin_url() . '?action=send-news'; ?>" method="post">
          <?php wp_nonce_field('send-news'); ?>

          <?php view('partials/notice2'); ?>
            <input type="text" placeholder="Your e-mail here" name="email"  id="email" value="<?= $old['email']; ?>">

            <button class="site-btn btn-2" type="submit">Newsletter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end-->