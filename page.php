<?php get_header ;?>
<div class="row">
<div class="col-sm-12">
<?php
$args=array(
'post_type'=>'student',
);
$student_loop=new WP_Query($args);
if($student_loop->have_posts()) : while($student_loop->have_posts()) : $student_loop->the_post();
$meta=get_post_meta($post->ID , 'student_fields' , true);?>
<!-- contents of Your Post -->
< h2 class="blog-post-title">
<a href="<?php the permalink();?>"><?php the_title();?></a>
</h2>
<?php the_excerpt();?></div>
<?php endwhile; endif; wp_reset_postdata();?>
</div> <!-- / .col -->
</div><!-- / .col -->
<?php get_footer;?>
