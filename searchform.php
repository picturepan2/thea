<?php 
/*
Widget Name: Search Form
*/
?>
<form method="get" class="form-search" name="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" class="search-input left" size="24" value="<?php the_search_query(); ?>" name="s"/>
<input type="submit" class="search-submit right fn-ti controls" value=""/>
</form>