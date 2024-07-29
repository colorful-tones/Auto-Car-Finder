<?php
/**
 * Title: List of cars, 4 columns
 * Slug: autocarfinder/cars-4-col
 * Categories: autocarfinder/posts
 * Block Types: core/query
 * Description: A list of cars, 4 columns.
 */
?>

<!-- wp:query {"query":{"perPage":12,"pages":"0","offset":0,"postType":"car","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:0;padding-bottom:0"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"fontSize":"large","layout":{"type":"grid","columnCount":4}} -->
		<!-- wp:group {"className":"is-style-column-box-shadow","style":{"spacing":{"blockGap":"0.25rem","padding":{"bottom":"0.75rem"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"radius":"8px"}},"backgroundColor":"base","textColor":"secondary","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"stretch"}} -->
		<div class="wp-block-group is-style-column-box-shadow has-secondary-color has-base-background-color has-text-color has-background has-link-color" style="border-radius:8px;padding-bottom:0.75rem"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"164px","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|50","bottom":"0px","left":"var:preset|spacing|50"}},"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|main"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"main","fontSize":"small"} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"1rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);font-size:1rem"><!-- wp:acf/car-price {"name":"acf/car-price","mode":"preview","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group"><!-- wp:acf/car-details-condensed {"name":"acf/car-details-condensed","mode":"preview","fontSize":"x-small","style":{"spacing":{"margin":{"right":"0","left":"0"},"padding":{"right":"1.5rem","left":"1.5rem"}}}} /--></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|tertiary"}}}}},"fontSize":"x-small","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous {"className":"is-style-default"} /-->

			<!-- wp:query-pagination-numbers {"midSize":1} /-->

			<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->