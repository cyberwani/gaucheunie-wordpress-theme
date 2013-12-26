<footer class="content-info" role="contentinfo">
<div class="container">
  <div class="row container">
    <div class="col-lg-3">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="col-lg-3">
      <h3>Divers</h3>
      <ul>
        <li><a href="/mentions-legales/">Mentions légales</a></li>
        <li><a href="/logiciel-libre/">Logiciel libre</a></li>
      </ul>
    </div>
    <div class="col-lg-3">
      <h3>Réseaux sociaux / RSS</h3>
      <a href="https://twitter.com/GaucheUnie"><span class="socicon socicon-twitter social-footer"></span></a>
      <a href="https://facebook.com/GaucheUnie"><span class="socicon socicon-facebook social-footer"></span></a>
      <a href="https://dailymotion.com/GaucheUnie"><span class="socicon socicon-dailymotion social-footer"></span></a>
      <a href="/feed/"><span class="socicon socicon-rss social-footer"></span></a>
    </div>
    <div class="col-lg-3">
      <h3>A propos</h3>
      <p>
        <a href="http://ps-antibes.fr"><img class="logo-parti ps" src="/wp-content/themes/gaucheunieantibes/assets/img/logo-ps.png" alt="Parti Socialiste"></a>
        <a href="http://eelv.fr"><img class="logo-parti eelv" src="/wp-content/themes/gaucheunieantibes/assets/img/logo-eelv.jpg" alt="Europe Ecologie Les Verts"></a>
        <a href="http://www.mrc-france.org"><img class="logo-parti mrc" src="/wp-content/themes/gaucheunieantibes/assets/img/logo-mrc.png" alt="Mouvement Républicain et Citoyen"></a>
        <a href="http://www.planeteradicale.org"><img class="logo-parti prg" src="/wp-content/themes/gaucheunieantibes/assets/img/logo-prg.jpg" alt="Parti Radical de Gauche"></a>
        <a href="http://www.jeunes-socialistes.fr"><img class="logo-parti mjs" src="/wp-content/themes/gaucheunieantibes/assets/img/logo-mjs.png" alt="Les Jeunes Socialistes"></a>
      </p>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      <p>Le contenu de ce site, à l'exception des transcriptions d'articles de presse, et publié sous licence <a href="http://creativecommons.org/licenses/by-sa/2.0/fr/">Creative Commons CC-BY-SA 2.0</a>
    </div>
  </div>
  
</div>
</footer>

<?php wp_footer(); ?>
