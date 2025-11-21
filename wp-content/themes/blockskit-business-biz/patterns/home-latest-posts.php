<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-business-biz/home-latest-posts
 * Categories: theme
 * Keywords: posts
 */
?>
<!-- wp:group {"metadata":{"name":"latest-posts"},"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-bottom:100px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"metadata":{"name":"section-title"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'OUR LATEST BLOG', 'blockskit-business-biz' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","fontFamily":"oswald"} -->
<h2 class="wp-block-heading has-text-align-center has-oswald-font-family"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-highlight-color"><?php esc_html_e( 'RECENT BLOG', 'blockskit-business-biz' ); ?></mark> <?php esc_html_e( 'FROM OUR COMPANY', 'blockskit-business-biz' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"pure-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-pure-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.4","fontStyle":"normal","fontWeight":"600"}},"fontSize":"large","fontFamily":"oswald"} /-->

<!-- wp:post-excerpt {"moreText":"LEARN MORE","excerptLength":15,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"textTransform":"lowercase"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->