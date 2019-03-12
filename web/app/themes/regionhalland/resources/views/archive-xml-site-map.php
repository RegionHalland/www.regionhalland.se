@extends('layouts.xml')
@section('content')
<?xml version="1.0" encoding="UTF-8" ?>
<?php
	$args = array(
		'posts_per_page'   => -1,
		'offset'           => 0,
		'cat'              => '',
		'category_name'    => '',
		'orderby'          => 'post_title',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'page',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	       => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => ''
	);
	$myPages = get_posts($args);
?>	
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
	foreach ($myPages as $page) {
	 	$strPermaLink = get_permalink($page->ID);
	?>
	<url>
      <loc><?=$strPermaLink?></loc>
   </url>
<?php } ?>
</urlset>