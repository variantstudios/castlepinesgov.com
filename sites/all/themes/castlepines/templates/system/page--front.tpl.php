<div class="site-container">
<?php if ($page['header']): ?>

  <header class="page-header" id="header" role="banner">
    <div class="container-wrap">
      <?php print render($page['header']); ?>

    </div>
  </header>

<?php endif; ?>


<div class="container-wrap">
  <a href="#menu" id="mobile-toggle">Menu</a>
        <?php if ($page['main_navigation']): ?>
        <nav class="main-nav nav-collapse" id="menu" >
          <?php print render($page['main_navigation']); ?>
        </nav>
      <?php endif; ?>

  <?php if ($page['preface']): ?>
    <section class="preface home--header">
      <?php print render($page['preface']); ?>
    </section>
  <?php endif; ?>

  <?php if ($page['frontpreface']): ?>
    <section class="frontpreface">
      <?php print render($page['frontpreface']); ?>
    </section>
  <?php endif; ?>


  

<div class="wrapper--content clearfix">
  
  <?php if ($page['content']): ?>
    <main class="container-main" id="main" role="main">
      <?php print render($page['content']); ?>
    </main>
  <?php endif; ?>

</div>
      
  <?php if ($page['footer']): ?>
    <footer id="footer" role="contentinfo" class="top-footer">
        <?php print render($page['footer']); ?>
      <?php if ($page['footer_second']): ?>
       <div class="footer-second">
        <?php print render($page['footer_second']); ?>
       </div>
      <?php endif; ?>
    </footer>
  <?php endif; ?>

  <div class="bottom-footer">
    <p class="copy">&copy; <?php echo date("Y") ?> City of Castle Pines All rights reserved. <a href="/terms-use">Terms of Use</a></p>
  </div>
</div> <!-- Closes Page Wrap -->

</div>