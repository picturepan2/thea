<div id="search" class="search">
  <form method="get" class="form-search" name="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" class="search-input" value="<?php the_search_query(); ?>" name="s">
    <input type="submit" class="search-submit controls" value="">
  </form>
</div>