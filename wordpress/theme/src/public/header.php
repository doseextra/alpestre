<!doctype html>
<head>
<html lang="pt_BR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<base href="<?php echo get_bloginfo( 'siteurl' );?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link href="" rel="alternate" type="application/rss+xml" title=""/>
<link href="" rel="feed" type="application/rss+xml" title=""/>

<meta name="robots" content="all,follow"/>
<meta name="googlebot" content="index,follow,snippet,archive"/>
<link rel="canonical" href="<?php echo get_bloginfo('siteurl'); ?>"/>
<meta property="og:locale" content="" />
<?php if(is_single()) {
    echo '<title>' . get_the_title() . ' - ' .  get_bloginfo( 'name' ) .'</title>';
    echo '<meta name="description" content="' . get_the_excerpt() . '"/>';
    echo '<meta property="og:type" content="article" />';
    echo '<meta property="og:title" content="' . get_the_title() .'"/>';
    echo '<meta property="og:url" content="' . get_the_permalink() .'"/>';
    echo '<meta property="og:site_name" content=""/>';
    echo '<meta property="og:image" content="' . get_the_post_thumbnail_url(get_the_ID(),array('750', '375')) .'"/>';
    echo '<meta property="article:author" content="'.  get_the_author_meta('facebook_profile') . '"/>';
    $tags = get_the_tags();
    if($tags){
        echo '<meta property="article:published_time" content="';
        foreach($tags as $item) {
            echo $item->name . ', ';
        };
        echo '">';
    };
    echo '<meta property="article:published_time" content="' . get_the_date() .'">';
    echo '<meta property="article:publisher" content="'.  get_option('facebook_field') . '" />';
    echo '<meta property="og:site_name" content="'. get_bloginfo( 'name' ). '" />';
    echo '<meta name="twitter:card" content="summary"/>';
    echo '<meta name="twitter:description" content=""/>';
    echo '<meta name="twitter:title" content=""/>';
    echo '<meta name="twitter:site" content=""/>';
    echo '<meta name="twitter:image" content=""/>';

} elseif(is_page()) {

    echo '<title>' . get_bloginfo( 'name' ) . ' - ' . get_the_title() .'</title>';
    echo '<meta name="description" content="' . get_the_excerpt() . '"/>';
    echo '<meta property="og:type" content="article" />';
    echo '<meta property="og:title" content="' . get_the_title() .'"/>';
    echo '<meta property="og:url" content="' . get_the_permalink() .'"/>';
    echo '<meta property="og:site_name" content="' . get_bloginfo( 'name' ) . '"/>';
    echo '<meta property="og:image" content="' .  get_the_post_thumbnail_url(get_the_ID(),'large') .'"/>';
    echo '<meta property="article:author" content="'.  get_the_author_meta('facebook_profile') . '"/>';
    echo '<meta property="article:published_time" content="' . get_the_date() .'">';
    echo '<meta property="article:publisher" content="'.  get_option('facebook_field') . '" />';
    echo '<meta property="og:site_name" content="'. get_bloginfo( 'name' ). '" />';
    echo '<meta name="twitter:card" content="summary"/>';
    echo '<meta name="twitter:description" content=""/>';
    echo '<meta name="twitter:title" content=""/>';
    echo '<meta name="twitter:site" content=""/>';
    echo '<meta name="twitter:image" content=""/>';


} elseif(is_home()) {

    echo '<title>' . get_bloginfo( 'name' ) .' - ' . get_bloginfo( 'description' ) .'</title>';
    echo '<meta name="description" content="' . get_bloginfo( 'description' ) . '"/>';
    echo '<meta property="og:type" content="blog"/>';
    echo '<meta property="og:title" content="' . get_bloginfo('name') .' - '. get_bloginfo('description') . '"/>';
    echo '<meta property="og:description" content="'. get_option('description_field') .'"/>';
    echo '<meta property="og:url" content="' . get_bloginfo('siteurl') . '"/>';
    echo '<meta property="og:site_name" content="' . get_bloginfo('name') .'"/>';
    echo '<meta property="og:image" content=""/>';
} ?>
<meta property="fb:admins" content=""/>
<meta property="fb:pages" content=""/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146056343-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-50916111-1');
</script>

<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

<?php wp_head();?>

</head>
<body>