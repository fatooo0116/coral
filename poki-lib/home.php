<div id="home_mask" class="">

  <div class="row logo_top">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri().'/assets/images/blogo.svg' ?>" />
      </div>
        <div class="logo_text">
          <h2>SELECT YOUR<br/>LANGUAGE TO ENTER</h2>
        </div>
  </div>

  <div class="cover">
    <div class="menu ">
      <div class="row">
        <ul>
        <?php  pll_the_languages(); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
