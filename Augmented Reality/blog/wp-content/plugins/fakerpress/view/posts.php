<?php
namespace FakerPress;
use Carbon\Carbon;

$fields[] = new Field(
	'qty',
	array(
		'type' => 'range',
		'label' => __( 'Quantity', 'fakerpress' ),
		'description' => __( 'How many posts should be generated, use both fields to get a randomized number of posts within the given range.', 'fakerpress' ),
	)
);

// Mount the options for post_types
$post_types = get_post_types( array( 'public' => true ), 'object' );

// Exclude Attachments as we don't support images yet
if ( isset( $post_types['attachment'] ) ){
	unset( $post_types['attachment'] );
}

$_json_post_types_output = array();
foreach ( $post_types as $key => $post_type ) {
	$_json_post_types_output[] = array(
		'hierarchical' => $post_type->hierarchical,
		'id' => $post_type->name,
		'text' => $post_type->labels->name,
	);
}

$fields[] = new Field(
	'post_types',
	array(
		'type' => 'dropdown',
		'multiple' => true,
		'label' => __( 'Post Type', 'fakerpress' ),
		'description' => __( 'Sampling group of Post Types', 'fakerpress' ),
		'attributes' => array(
			'value' => 'post',
			'data-possibilities' => $_json_post_types_output,
		),
	)
);

$fields[] = new Field(
	'post_parent',
	array(
		'type' => 'dropdown',
		'multiple' => true,
		'label' => __( 'Parents', 'fakerpress' ),
		'description' => __( 'What posts can be choosen as Parent to the ones created', 'fakerpress' ),
		'attributes' => array(
			'data-possibilities' => $_json_post_types_output,
			'class' => 'fp-field-select2-posts',
		),
	)
);

$fields[] = new Field(
	'comment_status',
	array(
		'type' => 'dropdown',
		'multiple' => true,
		'label' => __( 'Comments Status', 'fakerpress' ),
		'description' => __( 'Sampling group of options for the comment status of the posts', 'fakerpress' ),
		'attributes' => array(
			'value' => 'open',
			'data-possibilities' => array(
				array(
					'id' => 'open',
					'text' => esc_attr__( 'Allow Comments', 'fakerpress' ),
				),
				array(
					'id' => 'closed',
					'text' => esc_attr__( 'Comments closed', 'fakerpress' ),
				),
			),
		),
	)
);

$fields[] = new Field(
	'use_html',
	array(
		'type' => 'boolean',
		'label' => __( 'Use HTML', 'fakerpress' ),
		'info' => __( 'Use HTML on your randomized post content?', 'fakerpress' ),
		'value' => 1,
	)
);

$_elements = array_merge( \Faker\Provider\HTML::$sets['header'], \Faker\Provider\HTML::$sets['list'], \Faker\Provider\HTML::$sets['block'], \Faker\Provider\HTML::$sets['self_close'] );
$fields[] = new Field(
	'html_tags',
	array(
		'type' => 'dropdown',
		'multiple' => true,
		'label' => __( 'HTML tags', 'fakerpress' ),
		'description' => __( 'Select the group of tags that can be selected to print on the Post Content', 'fakerpress' ),
		'attributes' => array(
			'class' => 'field-select2-tags',
			'data-tags' => $_elements,
		),
		'value' => implode( ',', $_elements ),
	)
);

$taxonomies = get_taxonomies( array( 'public' => true ), 'object' );

$_json_taxonomies_output = array();
foreach ( $taxonomies as $key => $taxonomy ) {
	$_json_taxonomies_output[] = array(
		'id' => $taxonomy->name,
		'text' => $taxonomy->labels->name,
	);
}

$fields[] = new Field(
	'taxonomies',
	array(
		'type' => 'dropdown',
		'multiple' => true,
		'label' => __( 'Taxonomies', 'fakerpress' ),
		'description' => __( 'From which taxonomies the related terms should be selected', 'fakerpress' ),
		'attributes' => array(
			'value' => 'post_tag, category',
			'data-possibilities' => $_json_taxonomies_output,
		),
	)
);

$fields[] = new Field(
	'featured_image_rate',
	array(
		'type' => 'text',
		'label' => __( 'Featured Image Rate', 'fakerpress' ),
		'description' => __( 'Percentage of the posts created that will have an Featured Image', 'fakerpress' ),
		'attributes' => array(
			'placeholder' => __( 'e.g.: 75', 'fakerpress' ),
			'min' => 0,
			'max' => 100,
			'value' => 75,
		),
	)
);

$_image_providers[] = array(
	'id' => 'placeholdit',
	'text' => 'Placehold.it',
);

if ( Plugin::get( array( '500px', 'key' ), false ) ){
	$_image_providers[] = array(
		'id' => '500px',
		'text' => '500px',
	);
}


$fields[] = new Field(
	'images_origin',
	array(
		'type' => 'dropdown',
		'multiple' => true,
		'label' => __( 'Image Providers', 'fakerpress' ),
		'description' => __( 'Which image services will the generator use?', 'fakerpress' ),
		'attributes' => array(
			'value' => implode( ',', wp_list_pluck( $_image_providers, 'id' ) ),
			'data-possibilities' => $_image_providers,
		),
	)
);

// Mount the options for Users
$users = get_users(
	array(
		'blog_id' => $GLOBALS['blog_id'],
		'count_total' => false,
		'fields' => array( 'ID', 'display_name' ), // When you pass only one field it returns an array of the values
	)
);

$_json_users_output = array();
foreach ( $users as $user ) {
	$_json_users_output[] = array(
		'id' => $user->ID,
		'text' => esc_attr( $user->display_name ),
	);
}

$fields[] = new Field(
	'author',
	array(
		'type' => 'dropdown',
		'multiple' => true,
		'label' => __( 'Author', 'fakerpress' ),
		'description' => __( 'Choose some users to be authors of posts generated.', 'fakerpress' ),
		'attributes' => array(
			'data-possibilities' => $_json_users_output,
		),
	)
);

$fields[] = new Field(
	'interval_date',
	array(
		'type' => 'interval',
		'label' => __( 'Date', 'fakerpress' ),
		'description' => __( 'Choose the range for the posts dates.', 'fakerpress' ),
	)
);
?>
<div class='wrap'>
	<h2><?php echo esc_attr( Admin::$view->title ); ?></h2>

	<form method='post'>
		<?php wp_nonce_field( Plugin::$slug . '.request.' . Admin::$view->slug . ( isset( Admin::$view->action ) ? '.' . Admin::$view->action : '' ) ); ?>
		<table class="form-table" style="display: table;">
			<tbody>
				<?php foreach ( $fields as $field ) { $field->output( true ); } ?>
			</tbody>
		</table>
		<?php submit_button( __( 'Generate', 'fakerpress' ), 'primary' ); ?>
	</form>
</div>