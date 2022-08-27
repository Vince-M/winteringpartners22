<form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
  <label>
    <div class="search-form-row">
      <span class="screen-reader-text"></span>
        <input class="s search__input" placeholder="What are you searching for?" id="s" type="search" name="s">
      </label>
      <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button' ); ?></span></button>

    </div>
</form>


