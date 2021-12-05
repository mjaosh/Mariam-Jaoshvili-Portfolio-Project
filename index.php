<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<h1>The Front Page</h1>

<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>

<!-- Example with default video if $home_top_vid isn't set -->
<iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>



<div class = "intro">
  <h1 class = "name"> Mari Jaoshvili</h1>

  <div class = "info" > 
    <p1 class = "email" > mjaosh@umich.edu <br> </p1>
    <p2 class = "phone" > 225-650-4312 <br> </p2> 
    <p3 class = "major" > Major: Computer Science <br> </p3> 
    <p4 class = "gpa" > GPA: 3.79 </43> 
</div> 

  <img src="https://scontent-ort2-2.xx.fbcdn.net/v/t1.6435-9/68441588_904042353379472_8114237234204377088_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=T4QoZh_sDWUAX8_VqKl&tn=qGMMFFbs0MaU6LJh&_nc_ht=scontent-ort2-2.xx&oh=828cd1eb26f7d575c17226f7b33a9e72&oe=61C8F0E9" class = "Mari-pic" 
  >
</div> 


<div class = "experience-section">
  <h2 class = "experience"> College Experience </h2>
</div> 

<div class = "code-section" >  
<a href="https://girlswhocode.com/">Girls Who Code</a>

</div> 

<div class = "tutor-section" >  
<a href="https://ginsberg.umich.edu/article/america-reads-tutoring-corps">America Reads</a>
</div> 

<div class = "beyond-section" >  
  <a href="https://beyondjuiceryeatery.com/">Beyond Juicery Barista</a>
</div> 


<div class = "projects-section"> 
  <a href=https://drive.google.com/drive/folders/1X0eZEw9guANwSaVCjB2ZOkQXuxz0V2NN?usp=sharing>Projects</a>
</div> 

<div class = "stats-section" >  
  <h3 class = "first-project" > Stats </h3>
</div> 

<div class = "cv-section" >  
  <h3 class = "second-project" > Computer Vision </h3>
</div> 

<div class = "euchre-section" >  
  <h3 class = "third-project" > Euchre </h3>
</div> 


<div class = "web-section" >  
  <h3 class = "fourth-project" > Web </h3>
</div> 

<div class = "ml-section" >  
  <h3 class = "fifth-project" > Machine Learning </h3>
</div> 


<div class = "skills-section"> 
  <h4 class = "skills" > Skills </h4>
</div> 

<div class = "c-section" >  
  <h4 class = "first-language" > C++ </h4>
</div> 

<div class = "javascript-section" >  
  <h4 class = "second-language" > Javascript </h4>
</div> 

<div class = "html-section" >  
  <h4 class = "third-language" > HTML/CSS </h4>
</div> 

<div class = "classes-section" >
  <h4 class = "classes" > Related Coursework </h4>
</div>

<div class = "one83-section" >
  <h4 class = "first-class" > EECS 183 </h4>
</div>
<div class = "two80-section" >
  <h4 class = "second-class" > EECS 280 </h4>
</div>

<div class = "two03-section" >
  <h4 class = "third-class" > EECS 203 </h4>
</div>



<div class="project-title"><?php echo get_theme_mod('project_title') ?></div> 
<div> <?php echo get_theme_mod('project_description') ?></div>
<div> 
    <img src="<?php echo get_theme_mod('project_image')?>" >
</div> 

<a href = "<?php echo get_theme_mod('project_link') ?>


<div class='projects-section'> 
  <?php 
    $projects_data = get_projects_data('project_repeater_setting');
    if (!empty($projects_data)) {
      foreach( $projects_data as $k => $f ) {
        $project_img = '';
        if ($f['project_img']) {
          $project_img = '<img src"'.esc_url( get_media_url( $f['project_img'])).'">'; 
        }
    ?>

        <div class= 'project-title'><?php echo $f['project_title']?></div> 
        <div class= 'project-descr'><?php echo $f['project_descr']?></div> 
        <div class= 'project-link'><?php echo $f['project_link']?></div> 
        <div class= 'project-img'><?php echo $project_img?></div>
      
    <?php

            }
          }
      ?>

</div> 

<?php get_footer(); ?>



