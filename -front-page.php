<?php get_header(); ?>

<main id="primary" class="site-main">

</main><!-- #main -->
<section class="section1">
  <div class="left">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri() . '/assets/logo-coopers.png'; ?>" alt="Logo Coopers" />
    </div>
    <div class="titles">
      <h1>Organize</h1>
      <h2>your daily jobs</h2>
      <span class="text">The only way to get things done.</span>
      <button class="btn">Meet the To-do list</button>
    </div>
  </div>
  <div class="right">
    <img src="<?php echo get_template_directory_uri() . '/assets/foto.jpg'; ?>" alt="Avatar" />
  </div>
</section>
<div class="icon-scroll">
  <img src="<?php echo get_template_directory_uri() . '/assets/icon-scroll.png'; ?>" alt="Avatar" />
</div>
<section class="section2">
  <div class="top">
    <p class="title">To-do List</p>
    <p class="text">Choose the right plan for you and get in touch <br> through our contact form. We are here to help.</p>
  </div>
  <div class="botton">
    <div class="card">
      <div class="green-box"></div>
      <div class="content">
        <h1>R$ 20 / mês</h1>
        <p>Basic Plan <br> <span>unlimited tasks</span></p>
        <ul>
          <li><img src="<?php echo get_template_directory_uri() . '/assets/foto.jpg'; ?>" alt="Avatar" /> Create to-do lists</li>
          <li><img src="<?php echo get_template_directory_uri() . '/assets/foto.jpg'; ?>" alt="Avatar" /> Share lists via WhatsApp</li>
          <li><img src="<?php echo get_template_directory_uri() . '/assets/foto.jpg'; ?>" alt="Avatar" /> Offline mode</li>
          <li><img src="<?php echo get_template_directory_uri() . '/assets/foto.jpg'; ?>" alt="Avatar" /> Invite colaborators</li>
          <li><img src="<?php echo get_template_directory_uri() . '/assets/foto.jpg'; ?>" alt="Avatar" /> Dark mode</li>
        </ul>
        <button class="btn">get in touch</button>
      </div>
    </div>
  </div>
</section>
<div class="slider">
  <div class="green-box">
    <p>good things</p>
  </div>
  <div class="slides">

    <?php
    $count = 0;
    foreach ($posts as $post) {
      echo '<input type="radio" class="radio-btn ' . first_and_last_object($count, $posts)  . '" name="radio-btn" id="radio' . $count + 1 . '">';
      $count++;
    }
    $count = 0;
    foreach ($posts as $post) {
      setup_postdata($post);
      echo '<div class="slide ' . first_and_last_object($count, $posts) . '">';
      $count++;
      echo '<div class="img">';
      echo '<img src= "' . get_the_post_thumbnail_url() . '" alt="test" />';
      echo '</div>';
      echo '<div class=icon>';
      echo "<img src=" . get_template_directory_uri() . '/assets/coopers-icon-small.png  alt=avatar>';
      echo '</div>';
      echo "<div class='content'>
          <button class='btn'>function</button>
          <p>Organize your daily job enhance your life performance</p>
          
          <button class='read-more'>read more</button>
          </div>";

      wp_reset_postdata();
      echo '</div>';
    }

    echo '</div>';

    $count = 1;
    echo '<nav class="navigation-auto">';
    foreach ($posts as $post) {
      setup_postdata($post);
      echo '<div class="auto-btn' . $count . '"></div>';
      $count++;
      wp_reset_postdata();
    }
    echo '</nav>';

    $count = 1;
    echo '<div class="manual-navigation">';
    foreach ($posts as $post) {
      setup_postdata($post);
      echo '<label for=radio' . $count . ' class="manual-btn"></label>';
      $count++;
      wp_reset_postdata();
    }
    echo '</div>';
    ?>
  </div>
  <?php
  get_footer();
