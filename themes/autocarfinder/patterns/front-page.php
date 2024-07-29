<?php
/**
 * Title: front-page
 * Slug: autocarfinder/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-alt","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-accent"}}},"typography":{"fontSize":"1.8rem","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"primary-accent"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-accent-color has-text-color has-link-color" style="margin-bottom:0;font-size:1.8rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Find your next ride...', 'autocarfinder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search make, model, or type","width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"radius":{"topLeft":"999px","topRight":"0px","bottomLeft":"999px","bottomRight":"0px"}}},"backgroundColor":"main","fontSize":"base"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|large","top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontSize":"medium"} -->
<h2 class="wp-block-heading alignwide has-secondary-color has-text-color has-link-color has-medium-font-size" style="margin-bottom:0;font-style:normal;font-weight:600"><?php esc_html_e( 'Latest Cars', 'autocarfinder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":12,"pages":"0","offset":0,"postType":"car","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"full"} -->
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

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"primary-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2rem","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:2rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Sell Your Car Without the Hassle', 'autocarfinder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"is-style-column-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-column is-style-column-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"border":{"radius":"999px"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"3rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:999px;min-height:3rem;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:outermost/icon-block {"iconName":"","iconBackgroundColor":"primary","iconBackgroundColorValue":"#4d34fa","width":"2rem","style":{"border":{"radius":"999px"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"6px","right":"6px"}}}} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container has-icon-background-color has-primary-background-color" style="background-color:#4d34fa;width:2rem;padding-top:6px;padding-right:6px;padding-bottom:6px;padding-left:6px;border-radius:999px"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--tertiary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><path d="M12 18V6"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","fontFamily":"teachers"} -->
<p class="has-secondary-color has-text-color has-link-color has-teachers-font-family" style="font-size:1.5rem;font-style:normal;font-weight:700"><?php esc_html_e( 'List your car', 'autocarfinder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--small);font-size:1rem"><?php esc_html_e( 'Non sunt aliquip consequat ex non eiusmod nulla officia dolor dolore ut dolore consectetur do deserunt mollit eu amet id ipsum labore.', 'autocarfinder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-column-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-column is-style-column-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"border":{"radius":"999px"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-radius:999px;min-height:3rem;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:outermost/icon-block {"iconName":"","iconBackgroundColor":"primary","iconBackgroundColorValue":"#4d34fa","width":"2rem","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"6px","right":"6px"}}}} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container has-icon-background-color has-primary-background-color" style="background-color:#4d34fa;width:2rem;padding-top:6px;padding-right:6px;padding-bottom:6px;padding-left:6px;border-radius:999px"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--tertiary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="12" x="2" y="6" rx="2"></rect><circle cx="12" cy="12" r="2"></circle><path d="M6 12h.01M18 12h.01"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","fontFamily":"teachers"} -->
<p class="has-secondary-color has-text-color has-link-color has-teachers-font-family" style="font-size:1.5rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Get paid', 'autocarfinder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--small);font-size:1rem"><?php esc_html_e( 'Mollit anim sed velit tempor velit ad dolor non nulla proident aute qui enim sit dolor dolore consequat elit do amet proident ullamco.', 'autocarfinder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-column-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-column is-style-column-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"},"dimensions":{"minHeight":"3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-radius:999px;min-height:3rem;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:outermost/icon-block {"iconName":"","iconBackgroundColor":"primary","iconBackgroundColorValue":"#4d34fa","width":"2rem","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"6px","right":"6px"}}}} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container has-icon-background-color has-primary-background-color" style="background-color:#4d34fa;width:2rem;padding-top:6px;padding-right:6px;padding-bottom:6px;padding-left:6px;border-radius:999px"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--base)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12.4 2.7c.9-.9 2.5-.9 3.4 0l5.5 5.5c.9.9.9 2.5 0 3.4l-3.7 3.7c-.9.9-2.5.9-3.4 0L8.7 9.8c-.9-.9-.9-2.5 0-3.4Z"></path><path d="m14 7 3 3"></path><path d="M9.4 10.6 2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","fontFamily":"teachers"} -->
<p class="has-secondary-color has-text-color has-link-color has-teachers-font-family" style="font-size:1.5rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Hand over the keys', 'autocarfinder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--small);font-size:1rem"><?php esc_html_e( 'Voluptate cupidatat nulla duis enim excepteur amet aute reprehenderit esse eu exercitation aute et exercitation sit anim ea ea laboris eu aliquip mollit laborum.', 'autocarfinder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->