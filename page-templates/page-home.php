<?php
/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>
<?php global $post;?>

<main id="primary" class="site-main">
</main><!-- #main -->
<section class="section1">
  <div class="left">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri() . '/assets/logo-coopers.png'; ?>" alt="Logo Coopers" />
    </div>
    <div class="text-content">
      <h1>Organize</h1>
      <h2>your daily jobs</h2>
      <span class="text">The only way to get things done.</span>
      <a class="btn" role="button" href="#to-do">Meet the To-do list</a>
    </div>
  </div>
  <div class="right">
    <img src="<?php echo get_template_directory_uri() . '/assets/foto.jpg'; ?>" alt="Avatar" />
  </div>
</section>
<div class="icon-scroll">
  <img src="<?php echo get_template_directory_uri() . '/assets/icon-scroll.png'; ?>" alt="arrow down icon" />
</div>
<section class="section2">
  <div class="top">
    <p class="title">To-do List</p>    
    <p class="text"><?php the_field('todo-list-subtitle', $post->ID) ?></p>
  </div>
  <div id="to-do" class="botton">
    <?php
    $args = array(
      'posts_per_page'   => -1,
      'category'         => 0,
      'orderby'          => 'name',
      'order'            => 'ASC',
      'post_type'        => 'plan'
    );
    $plans = get_posts($args);
    foreach ($plans as $post) {
      setup_postdata($post);
      $image = get_field('card_image');
      echo '<div class="card">';
      echo '<div class="green-box"></div>';
      echo '<div class="content">';
      echo '<h1>' . get_field('value') . '</h1>';
      echo "<p>" . get_field('plan_name') . "<br><span>" . get_field('subtitle') . "</span> </p>";
      echo '<ul>';
      echo '<li>' . task_check('create_to-do_lists') . ' Create to-do lists</li>' ;
      echo '<li>' . task_check('share_lists_via_whatsapp') . ' Share lists via WhatsApp </li>';
      echo '<li>' . task_check('offline_mode') . ' Offline mode</li>';
      echo '<li>' . task_check('invite_colaborators') . ' Invite colaborators</li>';
      echo '<li>' . task_check('dark_mode') . ' Dark mode</li>';
      echo '</ul>';
      echo '<a class="btn" href="#get-in-touch" >"' . get_field('plan_button') . '""</a>"';      
      echo '</div>';
      echo '</div>';
      wp_reset_postdata();
    }
    ?>

  </div>
</section>

<div class="slider">
  <div class="green-box">
    <h1>good things</h1>
  </div>
  <div class="slides">

    <?php
    $args = array(
      'posts_per_page'   => -1,
      'category'         => 0,
      'orderby'          => 'name',
      'order'            => 'ASC',
      'post_type'        => 'slide'
    );

    $slides = get_posts($args);
    $count = 1;
    foreach ($slides as $post) {
      if($count < 3) {
        echo '<input type="radio" class="desktop" name="radio-btn" id="radio' . $count . '">';
      }
      echo '<input type="radio" class="mobile" name="radio-btn mobile" id="radio-mobile' . $count . '">';
      $count++;
    }
    $count = 1;
    foreach ($slides as $post) {
      setup_postdata($post);  
      $image = get_field('slide_image');

      echo '<div class="slide ' . first_and_last_object($count, $slides) . '">';
      $count++;
      
      echo '<div class="img">';
      if (!empty($image)) :
        echo '<img src="' . esc_url($image['url'])  . '" alt="' . esc_attr($image['alt']) . '" />';
      endif;
      echo '</div>';
      echo '<div class=icon>';
      echo "<img src=" . get_template_directory_uri() . '/assets/coopers-icon-small.png  alt=avatar>';
      echo '</div>';
      echo "<div class='content'>
          <button class='btn'>function</button>
          <p>Organize your daily job enhance your life performance</p>          
          <a class='read-more' href='#' rule='button'>read more</a>
          </div>";
      wp_reset_postdata();
      echo '</div>';
    }

    echo '</div>';
    $count = 1;
    echo '<div class="navigation-auto">';
    foreach ($slides as $post) {
      setup_postdata($post);
      if($count < 3) {
        echo '<div class="auto-btn' . $count . ' desktop"></div>';
      }
      echo '<div class="auto-btn' . $count . ' mobile"></div>';
      $count++;
      wp_reset_postdata();
    }
    echo '</div>';


    $count = 1;
    echo '<div class="manual-navigation">';
    foreach ($slides as $post) {
      setup_postdata($post);
      if($count < 3) {
      echo '<label for=radio' . $count . ' class="manual-btn desktop"></label>';
    }
    echo '<label for=radio-mobile' . $count . ' class="manual-btn mobile"></label>';
    $count++;
      wp_reset_postdata();
    }
    echo '</div>';
    ?>

  </div>
  <section class="section3" #id="get-in-touch">
    <div class="top">
      <img src="<?php echo get_template_directory_uri() . '/assets/tatiana-avatar.jpg'; ?>" alt="woman avatar">
      <div class="green-box"></div>
    </div>

    <div class="mid">
      <img src="<?php echo get_template_directory_uri() . '/assets/icon-mail.jpg'; ?>" alt="mail icon">
      <div class="titles">
        <h1>GET IN</h1> 
        <h2>TOUCH</h2>
      </div>
    </div>

    <form action="">
      <?php echo apply_shortcodes('[contact-form-7 id="a42204c" title="Get in Toutch"]'); ?>
    </form>
  </section>
  <?php
  get_footer();
