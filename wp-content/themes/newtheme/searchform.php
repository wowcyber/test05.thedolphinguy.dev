<?php
/** Custom search form for wordpress.
 * Created by PhpStorm.
 * User: trial
 * Date: 1/30/2015
 * Time: 9:39 AM
 */
<div class="searchform-container">
	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div>
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Search"/>
		</div>
	</form>
</div>