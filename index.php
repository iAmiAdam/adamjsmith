<?php
get_header();
?>
<body>
	<?php
// define how pages will display
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order', //post_title
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);
//start loop
?>
<div class="container-fluid">
<?php
foreach ($pages as $page_data) {
  	$content = apply_filters('the_content', $page_data->post_content);
	$title = $page_data->post_title;
    $slug = $page_data->post_name;
?>
<div class="row">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
		<div class='page'>
       		<h2><?php echo "$title" ?></h2>
				<?php echo "$content" ?>
		</div>
	</div>
</div>

<?php
}
?>
</div>
<?php
get_footer();
?>