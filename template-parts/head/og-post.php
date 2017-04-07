<meta property="og:url"           content='<?php the_permalink(); ?>' />
<meta property="og:title"         content="<?php the_title(); ?>" />
<meta property="og:description"   content="<?php echo(get_the_excerpt()); ?>" />
<meta property="og:image"         content="<?php the_post_thumbnail_url(); ?>" />

<meta property="og:type"          content="article" />
<meta property="og:article:author"  content="<?php the_author() ?>" />
<meta property="og:article:published_time"  content="<?php the_time('c'); ?>" />
<meta property="og:article:modified_time"  content="<?php the_modified_time('c'); ?>" />
<!--
  article:publisher
  article:section
  article:tag
-->
