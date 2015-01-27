<?php
/**
 * Created by PhpStorm.
 * User: trial
 * Date: 1/27/2015
 * Time: 6:27 PM
 */
?>
<div class="searchform-container">
	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div>
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Search"/>
		</div>
	</form>
</div>