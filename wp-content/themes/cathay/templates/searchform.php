<form role="search" id="cse-search-box" class="search-form form-inline" action="<?=site_url()?>/search-result/index.html" >
<div class="input-group">
	<input type="hidden" name="cx" value="003050160993696772205:jikybs9hxmk" />
	<input type="hidden" name="cof" value="FORID:9;NB:1" />
	<input type="hidden" name="ie" value="UTF-8" />
	<input type="text" name="q" size="31" class="search-field form-control" id="gstext" value="<?php if (is_search()) { echo get_search_query(); } ?>" />
	<span class="input-group-btn open">
		<input type="submit" name="sa" id="search" value="<?php _e('Search', 'roots'); ?>" class="search-submit btn btn-default" />
	</span>
</div>
</form>