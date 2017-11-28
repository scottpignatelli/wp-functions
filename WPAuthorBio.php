
<?php /* Template Name: Author Bio */?>
<?php get_header(); ?>
<div class="container">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="col-xs-12">Meet the Team</div>
            <section>
    <?php            
           // Create the WP_User_Query object
$wp_user_query = new WP_User_Query(array (
    'role' => 'Author'||'Administrator',
    'order' => 'ASC',
    'orderby' => 'display_name'
));

// Get the results
$Authors = $wp_user_query->get_results();
//echo '<pre>';
//var_dump($Authors);
//echo '</pre>';        
             
// Looping Authors/Administrators
if (!empty($Authors)) {
    echo '<ul>';
    foreach ($Authors as $Author)
    {
        // get all the user's data
        $user_info = get_userdata($Author->ID);
        //printing basic infos
        echo '<li>';
        echo get_avatar( get_the_author_meta( $Author->ID ), 96 );
        echo $user_info->first_name;
        echo $user_info->last_name;
        echo'/&nbsp';
        echo $user_info->nickname;
        echo'<br>';
        echo $user_info->description;
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo 'No results.';
}
                ?>


        </div>
<?php get_footer();?>