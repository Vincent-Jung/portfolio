<header>
  <div class="section">
    <div class="box">
    <img class="is-pulled-right" title="Yeah, I know..." src="assets/images/wip.png" alt="Un panneau avec le message 'Work in progress' indique que le site est toujours en construction et n'est donc pas achevé."/>
      <div class="block">
        <section class="hero">
          <div class="hero-body">
            <p class="title">Portefolio de Vincent Vogel</p><br>
            <p class="subtitle">Développeur Fullstack</p>
          </div>  
        </section>
      </div>

        <nav class="navbar" role="navigation" aria-label="main navigation">
          <div class="navbar-brand is-pulled-left">

              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
          </div>


          <div id="navbar" class="navbar-menu">
            <div class="navbar-start"><br><br>

              <a class="navbar-item" href="index.php?loc=home">
              1. Page d'accueil
              </a>

              <a class="navbar-item" href="index.php?loc=works">
              2. Travaux
              </a>

              <a class="navbar-item" href="index.php?loc=watches">
              3. Veilles
              </a>

              <a class="navbar-item" href="index.php?loc=cv">
              4. CV
              </a>

              <a class="navbar-item" href="index.php?loc=contact">
              5. Contact
              </a>

              <a class="navbar-item" href="index.php?loc=quests">
              6. Quêtes
              </a>
            </div>
          </div>
         </nav>

  <script>

    document.addEventListener('DOMContentLoaded', function () {
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        if ($navbarBurgers.length > 0) {
          $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

            const target = $el.dataset.target;
            const $target = document.getElementById(target);

            $el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
            
            });
        });
      }
    });
  </script>

