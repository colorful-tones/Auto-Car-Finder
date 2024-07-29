<?php
/**
 * Title: search
 * Slug: autocarfinder/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-accent"}}},"typography":{"fontSize":"1.8rem","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"primary-accent"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-accent-color has-text-color has-link-color" style="margin-bottom:0;font-size:1.8rem;font-style:normal;font-weight:700"><?php esc_html_e('Find your next ride...', 'autocarfinder');?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search make, model, or type","width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"radius":{"topLeft":"999px","topRight":"0px","bottomLeft":"999px","bottomRight":"0px"}}},"backgroundColor":"main","fontSize":"base"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|smalll"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--smalll)"><!-- wp:query-title {"type":"search","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->

<!-- wp:term-description {"align":"wide","textColor":"secondary","fontSize":"x-small"} /-->

<!-- wp:query {"queryId":15,"query":{"perPage":12,"pages":"0","offset":0,"postType":"car","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"metadata":{"categories":["autocarfinder/posts"],"patternName":"autocarfinder/cars-4-col","name":"List of cars, 4 columns"},"align":"full"} -->
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
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|tertiary"}}}}},"fontSize":"x-small","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"className":"is-style-default"} /-->

<!-- wp:query-pagination-numbers {"midSize":1} /-->

<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->