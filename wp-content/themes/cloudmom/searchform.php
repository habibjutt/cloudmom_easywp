<?php /*** Search form ***/ ?>

<form id="searchform" class="search-form" method="get" action="<?= esc_url( home_url( '/' ) ); ?>">
	<input id="s" class="search-form__input" type="text" name="s" placeholder="<?php esc_attr_e( 'Search the CloudMom site' ); ?>" value="<?= get_search_query(); ?>" />
	<input id="searchsubmit" class="search-form__button button button--builtin button--plum" type="submit" name="submit" value="Search" />
</form>