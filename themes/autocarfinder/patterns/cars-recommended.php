<?php
/**
 * Title: Recommended cars, 4 columns
 * Slug: autocarfinder/cars-recommended
 * Categories: autocarfinder/posts
 * Block Types: core/query
 * Description: Recommended cars, 4 columns.
 */
?>

<!-- wp:group {"metadata":{"name":"Recommended Cars"},"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|50","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","fontSize":"base"} -->
	<h2 class="wp-block-heading alignwide has-secondary-color has-text-color has-link-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:700">Recommended For You</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":"0","offset":"1","postType":"car","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"full"} -->
	<div class="wp-block-query alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"fontSize":"large","layout":{"type":"grid","columnCount":4}} -->
			<!-- wp:group {"className":"is-style-column-box-shadow","style":{"spacing":{"blockGap":"0.25rem","padding":{"bottom":"0.75rem"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"radius":"8px"}},"backgroundColor":"base","textColor":"secondary","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"stretch"}} -->
			<div class="wp-block-group is-style-column-box-shadow has-secondary-color has-base-background-color has-text-color has-background has-link-color" style="border-radius:8px;padding-bottom:0.75rem"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"164px","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|50","bottom":"0px","left":"var:preset|spacing|50"}},"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|main"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"main","fontSize":"base"} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"1rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);font-size:1rem"><!-- wp:acf/car-price {"name":"acf/car-price","mode":"preview","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group"><!-- wp:acf/car-details-condensed {"name":"acf/car-details-condensed","mode":"preview","fontSize":"x-small","style":{"spacing":{"margin":{"right":"0","left":"0"},"padding":{"right":"1.5rem","left":"1.5rem"}}}} /--></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->