<?php
defined('ABSPATH') || exit;

$ultherapy_prime_img_url = ULTHERAPY_PRIME_URL . 'assets/img';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('ultherapy-page'); ?>>
<?php wp_body_open(); ?>

<nav class="sticky-nav" aria-label="Navigation rapide">
  <div class="sticky-nav-inner">
    <a href="#indications">Indications corps</a>
    <a href="#avantages">Avantages</a>
    <a href="#avant-apres">Avant / Après</a>
    <a href="#visage">Visage</a>
    <a href="#comment-ca-marche">Comment ça marche</a>
    <a href="#timeline">Traitement</a>
    <a href="#faq">FAQ</a>
    <a href="#praticien">Trouver un praticien</a>
  </div>
</nav>

<main>
  <section class="hero" aria-labelledby="hero-title">
    <div class="hero-content">
      <p class="hero-kicker">Ultherapy Skin Tightening</p>
      <h1 id="hero-title">
        Un lifting visible,<span>sans chirurgie</span>
      </h1>

      <p class="hero-description">
        Ultherapy<sup>®</sup> PRIME, un lifting visible sans chirurgie<sup>1,2</sup> — maintenant pour le corps
      </p>

      <div class="hero-actions">
        <a class="watch-btn" href="#">
          <span>Trouver Ultherapy<sup>®</sup> PRIME autour de chez moi</span>
        </a>
        <a class="secondary-btn" href="#">Découvrez Ultherapy<sup>®</sup> PRIME pour les bras et le ventre</a>
      </div>

      <p class="hero-proof">
        <img class="laurel-branch" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/lauriet-gauche.avif" alt="" aria-hidden="true">
        <span>95% de satisfaction de <br> nos clients sur 1 an</span>
        <img class="laurel-branch" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/lauriet-droit.avif" alt="" aria-hidden="true">
      </p>
    </div>

    <div class="hero-signature" aria-hidden="true">
      <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/signature-salma.png" alt="">
      <p>Salma Hayek Pinault<br>Actress &amp; Producer</p>
    </div>
  </section>

  <section class="stats-band" aria-labelledby="stats-title">
    <div class="stats-inner">
      <div class="stats-list">
        <article class="stat-item">
          <strong>15 ans</strong>
          <span>d'expertise</span>
        </article>
        <article class="stat-item">
          <strong>3,5M</strong>
          <span>de traitements</span>
        </article>
        <article class="stat-item">
          <strong>95%</strong>
          <span>de satisfaction</span>
        </article>
        <article class="stat-item">
          <strong>Dans +80</strong>
          <span>pays</span>
        </article>
        <article class="stat-item">
          <strong>+100</strong>
          <span>publications et 55 études cliniques</span>
        </article>
      </div>
    </div>
    <p class="stats-footnote">*Données issues d'une étude prospective portant sur 20 patients, réalisée avec Ultherapy<sup>®</sup></p>
  </section>

  <section class="benefit-intro-section" aria-labelledby="benefit-intro-title">
    <div class="section-shell benefit-intro-content">
      <div class="benefit-intro-copy">
        <p class="benefits-tag">Le futur de la beauté</p> <br><br>
        <h2 id="benefit-intro-title">Le futur de la beauté <span>est là</span></h2>
        <p>Une technologie non invasive pour raffermir et redéfinir le visage et le corps.</p>
        <p>Ultherapy<sup>®</sup> PRIME stimule la production naturelle de collagène et d'élastine en profondeur, là où le relâchement s'installe.</p>
        <p>Les résultats sont naturels<sup>3,4</sup>, progressifs et durables <sup>+</sup>, et peuvent être visibles jusqu'à un an ou plus.*</p>
        <p class="benefit-intro-footnote">* Les résultats s'améliorent en 90 à 180 jours et peuvent durer jusqu'à un an.<sup>1,3,4,5,6,7</sup></p>
        <p class="benefit-intro-footnote">+ Les résultats d'Ultherapy® PRIME peuvent durer jusqu'à 6 mois pour les bras et l'abdomen, et un an ou plus pour le visage. Le terme visage fait référence aux indications autorisées pour Ultherapy® PRIME</p>
        <a class="watch-btn benefit-intro-btn" href="#">Trouver un praticien près de chez moi</a>
      </div>
      <figure class="benefit-intro-visual">
        <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/model-sunlee.jpg" alt="Résultats Ultherapy PRIME">
      </figure>
    </div>
  </section>

  <section id="indications" class="indications-section" aria-labelledby="indications-title">
    <div class="express-shell">
      <div class="express-card">
        <div class="express-copy">
          <h2 id="indications-title">
            Ultherapy<sup>®</sup> PRIME, désormais indiqué pour raffermir
            <strong>les bras et le ventre</strong>
          </h2>
          <a class="express-btn watch-btn" href="#">Découvrir les nouvelles indications</a>
        </div>

        <div class="express-visuals" aria-label="Zones indiquées : bras et ventre">
          <figure class="body-zone body-zone-arm">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/bras-img.png" alt="Zone des bras traitée par Ultherapy PRIME">
          </figure>
          <figure class="body-zone body-zone-abdomen">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/abdomen-img.png" alt="Zone du ventre traitée par Ultherapy PRIME">
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section id="avantages" class="advantages-section" aria-label="Avantages Ultherapy PRIME">
    <div class="section-shell">
      <div class="advantages-rail">
        <div class="advantages-track">
          <article class="advantage-card"><i class="card-icon fa-solid fa-person-rays" aria-hidden="true"></i><h3>Pour les 35-40 ans</h3><p>Premiers signes de relâchement cutané.<sup>8,9</sup></p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-layer-group" aria-hidden="true"></i><h3>Laxité légère à modérée</h3><p>Indiqué pour les grades de laxité léger à modéré.</p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-ban" aria-hidden="true"></i><h3>Zéro chirurgie, zéro injection</h3><p>Aucune incision, aucune anesthésie, aucun acte invasif.<sup>1,2</sup></p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-users" aria-hidden="true"></i><h3>Tous les phototypes</h3><p>Adapté à toutes les carnations et tous les types de peau.<sup>1,5,6,7</sup></p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-sliders" aria-hidden="true"></i><h3>Traitement personnalisé</h3><p>Protocole adapté à chaque patient et chaque morphologie.<sup>1,5,6</sup></p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-stopwatch" aria-hidden="true"></i><h3>Une seule séance</h3><p>Un seul rendez-vous suffit dans la majorité des protocoles.<sup>5</sup></p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-calendar-xmark" aria-hidden="true"></i><h3>Zéro éviction sociale</h3><p>Aucune interruption de votre vie quotidienne après la séance.<sup>5</sup></p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-clock" aria-hidden="true"></i><h3>Résultat jusqu'à 1 an</h3><p>Les bénéfices se maintiennent jusqu'à un an ou plus.*</p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-dna" aria-hidden="true"></i><h3>Collagène relancé</h3><p>Stimule la production naturelle de collagène en profondeur.</p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-face-smile" aria-hidden="true"></i><h3>Peau ferme &amp; définie</h3><p>Rides lissées, peau plus ferme et contours redéfinis.</p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-sun" aria-hidden="true"></i><h3>Pas de saisonnalité</h3><p>Le traitement peut être réalisé à n'importe quelle période de l'année.</p></article>
          <article class="advantage-card"><i class="card-icon fa-solid fa-leaf" aria-hidden="true"></i><h3>Apparence naturelle</h3><p>Les résultats respectent et révèlent votre beauté naturelle.<sup>3,4</sup></p></article>

          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-person-rays" aria-hidden="true"></i><h3>Pour les 35-40 ans</h3><p>Premiers signes de relâchement cutané.<sup>8,9</sup></p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-layer-group" aria-hidden="true"></i><h3>Laxité légère à modérée</h3><p>Indiqué pour les grades de laxité léger à modéré.</p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-ban" aria-hidden="true"></i><h3>Zéro chirurgie, zéro injection</h3><p>Aucune incision, aucune anesthésie, aucun acte invasif.<sup>1,2</sup></p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-users" aria-hidden="true"></i><h3>Tous les phototypes</h3><p>Adapté à toutes les carnations et tous les types de peau.<sup>1,5,6,7</sup></p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-sliders" aria-hidden="true"></i><h3>Traitement personnalisé</h3><p>Protocole adapté à chaque patient et chaque morphologie.<sup>1,5,6</sup></p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-stopwatch" aria-hidden="true"></i><h3>Une seule séance</h3><p>Un seul rendez-vous suffit dans la majorité des protocoles.<sup>5</sup></p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-calendar-xmark" aria-hidden="true"></i><h3>Zéro éviction sociale</h3><p>Aucune interruption de votre vie quotidienne après la séance.<sup>5</sup></p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-clock" aria-hidden="true"></i><h3>Résultat jusqu'à 1 an</h3><p>Les bénéfices se maintiennent jusqu'à un an ou plus.*</p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-dna" aria-hidden="true"></i><h3>Collagène relancé</h3><p>Stimule la production naturelle de collagène en profondeur.</p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-face-smile" aria-hidden="true"></i><h3>Peau ferme &amp; définie</h3><p>Rides lissées, peau plus ferme et contours redéfinis.</p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-sun" aria-hidden="true"></i><h3>Pas de saisonnalité</h3><p>Le traitement peut être réalisé à n'importe quelle période de l'année.</p></article>
          <article class="advantage-card" aria-hidden="true"><i class="card-icon fa-solid fa-leaf" aria-hidden="true"></i><h3>Apparence naturelle</h3><p>Les résultats respectent et révèlent votre beauté naturelle.<sup>3,4</sup></p></article>
        </div>
      </div>
      <div class="advantages-cta">
        <a class="watch-btn" href="#">Découvrez Ultherapy<sup>®</sup> PRIME autour de chez vous</a>
        <p class="advantages-footnote">* Les résultats s'améliorent en 90 à 180 jours et peuvent durer jusqu'à un an.<sup>1,3,4,5,6,7</sup></p>
        <p class="benefit-intro-footnote" style="text-align: center;">+ Les résultats d'Ultherapy® PRIME peuvent durer jusqu'à 6 mois pour les bras et l'abdomen, et un an ou plus pour le visage. <br> Le terme visage fait référence aux indications autorisées pour Ultherapy® PRIME</p>
      </div>
    </div>
  </section>

  <section id="avant-apres" class="before-after-section" aria-labelledby="before-after-title">
    <div class="section-shell before-after-content">
      <div class="section-heading benefits-heading">
        <p class="benefits-tag">Avant / Après</p> <br><br>
        <h2 id="before-after-title">
          La différence <br> parle d'elle-<span>même</span>
        </h2>
        <p>
          Glissez le curseur pour voir la transformation. Même peau, même lumière, quelques semaines d'écart.
        </p>
      </div>

      <div class="compare-grid">
        <article class="compare-card">
          <div class="compare-slider" style="--reveal: 50%;">
            <img class="compare-img compare-before" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s01-avant.jpg" alt="Avant traitement des bras">
            <img class="compare-img compare-after" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s01-apres.jpg" alt="Après traitement des bras">
            <span class="compare-label compare-label-before">Avant</span>
            <span class="compare-label compare-label-after">Après</span>
            <span class="compare-handle" aria-hidden="true">
              <svg viewBox="0 0 28 14" focusable="false"><path d="M9 2 3 7l6 5M3 7h22M19 2l6 5-6 5"/></svg>
            </span>
            <input class="compare-range" type="range" min="0" max="100" value="50" aria-label="Comparer avant et après pour les bras">
          </div>
          <p class="compare-delay">Après 3 mois</p>
        </article>

        <article class="compare-card">
          <div class="compare-slider" style="--reveal: 50%;">
            <img class="compare-img compare-before" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s02-avant.jpg" alt="Avant traitement des bras postérieurs">
            <img class="compare-img compare-after" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s02-apres.jpg" alt="Après traitement des bras postérieurs">
            <span class="compare-label compare-label-before">Avant</span>
            <span class="compare-label compare-label-after">Après</span>
            <span class="compare-handle" aria-hidden="true">
              <svg viewBox="0 0 28 14" focusable="false"><path d="M9 2 3 7l6 5M3 7h22M19 2l6 5-6 5"/></svg>
            </span>
            <input class="compare-range" type="range" min="0" max="100" value="50" aria-label="Comparer avant et après pour les bras postérieurs">
          </div>
          <p class="compare-delay">Après 3 mois</p>
        </article>

        <article class="compare-card">
          <div class="compare-slider" style="--reveal: 50%;">
            <img class="compare-img compare-before" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s03-avant.jpg" alt="Avant traitement du ventre">
            <img class="compare-img compare-after" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s03-apres.jpg" alt="Après traitement du ventre">
            <span class="compare-label compare-label-before">Avant</span>
            <span class="compare-label compare-label-after">Après</span>
            <span class="compare-handle" aria-hidden="true">
              <svg viewBox="0 0 28 14" focusable="false"><path d="M9 2 3 7l6 5M3 7h22M19 2l6 5-6 5"/></svg>
            </span>
            <input class="compare-range" type="range" min="0" max="100" value="50" aria-label="Comparer avant et après pour le ventre">
          </div>
          <p class="compare-delay">Après 3 mois</p>
        </article>
      </div>

      <a class="watch-btn" href="#">Trouver un praticien</a>
    </div>
  </section>

  <section class="social-proof-section" aria-labelledby="social-proof-title">
    <div class="section-shell social-proof-content">
      <blockquote class="salma-quote">
        <img class="quote-icon" src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/icon-citation.webp" alt="" aria-hidden="true">
        <p id="social-proof-title">
          Ultherapy<sup>®</sup> PRIME personnalise* mon traitement en atteignant les couches cibles de la peau, pour activer mon potentiel de régénération et stimuler ma propre production de collagène et d'élastine.<sup>2,3,4</sup> Mieux encore, il est non invasif, ne demande qu'une seule séance et ne nécessite aucune interruption de sa vie sociale.<sup>2</sup>
        </p>
        <footer>
          <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/signature-salma.png" alt="Signature de Salma Hayek Pinault">
          <span>Salma Hayek Pinault</span>
          <small>Actress &amp; Producer</small>
        </footer>
        <p class="salma-legal">Photo retouchée à des fins esthétiques. La patiente a bénéficié d'un traitement Ultherapy<sup>®</sup> PRIME. Les zones traitées ont été conservées sans modification. Les résultats individuels peuvent varier.</p>
      </blockquote>
      <div class="salma-photo" aria-hidden="true">
        <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/model-thaise.jpg" alt="">
      </div>
    </div>
  </section>

  <section id="indications-corps" class="body-focus-section" aria-labelledby="body-focus-title">
    <div class="section-shell">
      <div class="section-heading body-focus-heading">
        <p class="benefits-tag">Indications corps</p> <br><br>
        <h2 id="body-focus-title">Retrouvez une peau ferme et tonique <span>sur les bras et le ventre</span></h2>
        <p>
          Stimule la production de collagène et d'élastine là où votre peau en a besoin.
        </p>
      </div>

      <p class="body-focus-kicker">Révéler le corps</p>

      <div class="body-focus-stack">
        <article class="body-focus-row">
          <figure class="body-focus-visual">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/zone-bras-ant.jpg" alt="Bras antérieur traité par Ultherapy PRIME">
          </figure>
          <div class="body-focus-copy">
            <h3>Bras antérieur</h3>
            <p>
              La face interne du bras est l'une des premières zones à perdre en tonicité : post-partum,
              variation de poids, âge. Ultherapy® PRIME y agit en profondeur pour retendre la peau
              sans toucher aux volumes ni laisser de trace.
            </p>
            <a class="watch-btn body-focus-btn" href="#">Trouver un praticien</a>
          </div>
        </article>

        <article class="body-focus-row body-focus-row-reverse">
          <figure class="body-focus-visual">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/zone-bras-post.jpg" alt="Bras postérieur traité par Ultherapy PRIME">
          </figure>
          <div class="body-focus-copy">
            <h3>Bras postérieur</h3>
            <p>
              La face arrière du bras concentre souvent le relâchement le plus visible, en particulier
              à la ménopause. Un traitement ciblé permet d'y restaurer la densité cutanée sans recours
              à la chirurgie.
            </p>
            <a class="watch-btn body-focus-btn" href="#">Trouver un praticien</a>
          </div>
        </article>

        <article class="body-focus-row">
          <figure class="body-focus-visual">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/zone-abdomen.jpg" alt="Ventre traité par Ultherapy PRIME">
          </figure>
          <div class="body-focus-copy">
            <h3>Ventre</h3>
            <p>
              Après une grossesse, une perte de poids ou la ménopause : le relâchement s'installe
              différemment. Ultherapy® PRIME cible le ventre pour raffermir ce qui a changé, sans abdominoplastie.
            </p>
            <a class="watch-btn body-focus-btn" href="#">Trouver un praticien</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section id="visage" class="face-recap-section" aria-labelledby="face-recap-title">
    <div class="section-shell face-recap-content">
      <div class="section-heading face-recap-heading">
        <p class="benefits-tag">Visage &amp; cou</p> <br><br>
        <h2 id="face-recap-title">Sublimer <span>le visage</span></h2>
        <p>
          Redessiner l'ovale, sculpter le bas du visage, rehausser le sourcil, lisser les ridules du cou : Ultherapy® PRIME accompagne chaque détail.
        </p>
      </div>

      <div class="face-recap-grid">
        <article class="face-recap-card">
          <figure class="face-recap-visual">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/model-sylvie.jpg" alt="Lifting du visage avec Ultherapy PRIME">
          </figure>
          <div class="face-recap-copy">
            <h3>Redessiner l'ovale</h3>
            <p>Redessine les contours du visage pour une lecture plus nette et définie.</p>
          </div>
        </article>

        <article class="face-recap-card">
          <figure class="face-recap-visual">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/model-rafeeka.jpg" alt="Raffermissement du cou avec Ultherapy PRIME">
          </figure>
          <div class="face-recap-copy">
            <h3>Sculpter le bas du visage</h3>
            <p>Raffermit la ligne de mâchoire et soulève les joues pour un effet lift naturel.</p>
          </div>
        </article>

        <article class="face-recap-card">
          <figure class="face-recap-visual">
            <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/model-gabriella.jpg" alt="Redéfinition de l'ovale avec Ultherapy PRIME">
          </figure>
          <div class="face-recap-copy">
            <h3>Rehausser le sourcil &amp; lisser le cou</h3>
            <p>Agit sur le front, le sourcil et les ridules du cou pour une harmonie complète du visage.</p>
          </div>
        </article>
      </div>

      <a class="watch-btn face-recap-btn" href="#">Trouver un praticien</a>
    </div>
  </section>

  <section id="comment-ca-marche" class="benefits-section" aria-labelledby="benefits-title">
    <div class="section-shell benefits-content">
      <div class="section-heading benefits-heading">
        <p class="benefits-tag">La technologie HIFU</p> <br><br>
        <h2 id="benefits-title">Comment ça <span>fonctionne ?</span></h2>
        <p>
          Ultherapy® PRIME repose sur la technologie HIFU (High-Intensity Focused Ultrasound), des ultrasons microfocalisés capables de cibler avec précision les couches profondes de la peau, jusqu'à 4,5 mm de profondeur. Les brèves augmentations de température, envoyées à la profondeur précise requise, relancent le processus de cicatrisation de votre corps pour créer du nouveau collagène : un phénomène appelé la néocollagénèse.
        </p>
        <a class="watch-btn benefits-btn" href="#">Trouver un praticien</a>
      </div>

      <div class="benefits-video-block">
        <?php
        $ultherapy_v1 = esc_url( $ultherapy_prime_img_url . '/extras-01.mp4' );
        $ultherapy_v2 = esc_url( $ultherapy_prime_img_url . '/extras-02.mp4' );
        $ultherapy_v3 = esc_url( $ultherapy_prime_img_url . '/video-hifu.mp4' );
        ?>
        <video class="benefits-video" controls muted playsinline preload="auto"
          aria-label="Animation Ultherapy sous la peau"
          data-playlist="<?php echo esc_attr( $ultherapy_v1 . ',' . $ultherapy_v2 . ',' . $ultherapy_v3 ); ?>">
          <source src="<?php echo $ultherapy_v1; ?>" type="video/mp4">
          Votre navigateur ne prend pas en charge la lecture vidéo.
        </video>
        <div class="benefits-video-controls" aria-label="Contrôles vidéo">
          <button class="video-control-btn video-toggle" type="button" aria-label="Lire la vidéo"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
          <label class="video-progress-wrap">
            <span class="sr-only">Progression de la vidéo</span>
            <input class="video-progress" type="range" min="0" max="100" value="0" step="0.1">
          </label>
          <span class="video-time" aria-live="off">0:00</span>
          <button class="video-control-btn video-mute" type="button" aria-label="Activer le son"><i class="fa-solid fa-volume-xmark" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </section>

  <section class="personalized-section" aria-labelledby="personalized-title">
    <div class="section-shell personalized-content">
      <figure class="personalized-visual">
        <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/machine-system.png" alt="Machine Ultherapy PRIME avec transducteurs">
      </figure>

      <div class="section-heading personalized-copy">
        <p class="benefits-tag">Protocole sur-mesure</p> <br><br>
        <h2 id="personalized-title">Une approche personnalisée, guidée par la <span>visualisation échographique</span></h2>
        <p>
          Chaque patient est unique : l'épaisseur et la profondeur des différentes couches de la peau peuvent varier d'une zone à l'autre et d'une personne à une autre.
        </p>
        <ul class="personalized-list">
          <li>Ultherapy® PRIME est le seul traitement HIFU intégrant la visualisation échographique en temps réel</li>
          <li>Le praticien visualise les tissus pendant la séance pour un ciblage précis</li>
          <li>Une prise en charge sur-mesure,<sup>1,5,6</sup> adaptée à la morphologie de chacun</li>
        </ul>
      </div>
    </div>
  </section>

  <section id="timeline" class="timeline-section" aria-labelledby="timeline-title">
    <div class="section-shell timeline-shell">
      <div class="section-heading timeline-heading">
        <p class="benefits-tag">Votre traitement</p> <br><br>
        <h2 id="timeline-title">Votre traitement <span>Ultherapy® PRIME</span></h2>
        <p>
          De la consultation jusqu'au résultat : voici ce qui se passe, étape par étape.
        </p>
      </div>

      <div class="timeline-track" aria-label="Étapes du traitement">
        <span class="timeline-line" aria-hidden="true">
          <span class="timeline-line-fill"></span>
        </span>

        <article class="timeline-step timeline-step-right">
          <div class="timeline-card">
            <i class="fa-solid fa-calendar-check timeline-icon" aria-hidden="true"></i>
            <h3>Avant le traitement</h3>
            <p>Une consultation médicale permet d'évaluer votre peau, les zones à traiter et de définir une prise en charge personnalisée.</p>
            <figure class="timeline-photo">
              <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s01-avant.jpg" alt="Photo de la zone avant traitement">
            </figure>
          </div>
          <span class="timeline-dot" aria-hidden="true"></span>
        </article>

        <article class="timeline-step timeline-step-left">
          <div class="timeline-card">
            <i class="fa-solid fa-hand-holding-medical timeline-icon" aria-hidden="true"></i>
            <h3>Pendant le traitement</h3>
            <p>Après nettoyage et gel échographique, Ultherapy® PRIME cible précisément les tissus profonds grâce à la visualisation en temps réel. Les brèves augmentations de température stimulent la néocollagénèse.</p>
            <figure class="timeline-photo">
              <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/zone-bras-ant.jpg" alt="Photo du traitement en cours">
            </figure>
          </div>
          <span class="timeline-dot" aria-hidden="true"></span>
        </article>

        <article class="timeline-step timeline-step-right">
          <div class="timeline-card">
            <i class="fa-solid fa-trophy timeline-icon" aria-hidden="true"></i>
            <h3>Après le traitement</h3>
            <p>Aucune éviction sociale. Les premiers résultats apparaissent progressivement : à 90 jours les effets sont nets, à 1 an ils restent visibles et harmonieux.</p>
            <figure class="timeline-photo">
              <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/zone-abdomen.jpg" alt="Photo après le traitement">
            </figure>
          </div>
          <span class="timeline-dot" aria-hidden="true"></span>
        </article>

        <article class="timeline-step timeline-step-left">
          <div class="timeline-card">
            <i class="fa-solid fa-chart-line timeline-icon" aria-hidden="true"></i>
            <h3>À 90 jours et au-delà</h3>
            <p>Les résultats sont à leur plein potentiel. L'effet de fermeté est installé naturellement et peut se maintenir jusqu'à un an ou plus.*</p>
            <figure class="timeline-photo">
              <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/ba-s03-apres.jpg" alt="Photo du résultat à 90 jours">
            </figure>
          </div>
          <span class="timeline-dot" aria-hidden="true"></span>
        </article>
      </div>
    </div>
  </section>

  <section id="faq" class="faq-section" aria-labelledby="faq-title">
    <div class="section-shell faq-shell">
      <div class="section-heading faq-heading">
        <p class="benefits-tag">FAQ</p> <br><br>
        <h2 id="faq-title">Vos questions, <span>nos réponses</span></h2>
        <p>
          Tout ce que vous voulez savoir avant de consulter : le déroulement d'une séance,
          ce que vous ressentirez, et à quoi vous attendre dans les semaines qui suivent.
        </p>
      </div>

      <div class="faq-list">
        <article class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span class="faq-question">Est-ce que je peux reprendre ma vie normalement après le traitement ?</span>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-panel">
            <div class="faq-answer">Oui, immédiatement. Ultherapy® PRIME ne nécessite aucune période de récupération. Vous pouvez ressentir de légers picotements ou rougeurs qui disparaissent en quelques heures, sans impact sur votre quotidien.</div>
          </div>
        </article>

        <article class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span class="faq-question">Combien de temps dure une séance Ultherapy® PRIME ?</span>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-panel">
            <div class="faq-answer">Une séance dure en moyenne 30 minutes à 1 heure selon la ou les zones traitées.</div>
          </div>
        </article>

        <article class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span class="faq-question">Quand les premiers résultats peuvent-ils apparaître ?</span>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-panel">
            <div class="faq-answer">Les premiers effets deviennent perceptibles vers 30 jours. Le résultat optimal s'installe autour de 90 jours, quand la production de collagène a atteint son pic.</div>
          </div>
        </article>

        <article class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span class="faq-question">Quelles zones peuvent être traitées ?</span>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-panel">
            <div class="faq-answer">Ultherapy® PRIME traite le visage, le cou, le décolleté, les bras (face antérieure et postérieure) et le ventre. Le praticien détermine les zones adaptées lors de la consultation.</div>
          </div>
        </article>

        <article class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span class="faq-question">Le ressenti pendant la séance varie-t-il selon les zones ?</span>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-panel">
            <div class="faq-answer">Oui. Les zones osseuses ou à la peau fine peuvent être plus sensibles. Le praticien adapte les paramètres en temps réel pour garantir votre confort tout au long de la séance.</div>
          </div>
        </article>

        <article class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span class="faq-question">Faut-il prévoir plusieurs séances ?</span>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-panel">
            <div class="faq-answer">Dans la majorité des cas, une séance suffit. Pour certains profils ou certaines zones, le praticien peut recommander un second traitement à 12 mois, défini ensemble lors de la consultation.</div>
          </div>
        </article>

        <article class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span class="faq-question">Comment savoir si je suis un bon candidat ?</span>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-panel">
            <div class="faq-answer">Ultherapy® PRIME est indiqué pour les premiers signes de relâchement cutané, dès 35-40 ans, pour les grades de laxité léger à modéré. La meilleure façon de le savoir est de consulter un praticien certifié.</div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section id="praticien" class="cta-section" aria-labelledby="cta-title">
    <div class="section-shell cta-shell">
      <div class="cta-locator">
        <div class="cta-search">
          <div class="section-heading cta-heading">
            <p class="benefits-tag">Trouver un praticien</p> <br><br>
            <h2 id="cta-title">Découvrez Ultherapy<sup>®</sup> PRIME <span>près de chez vous</span></h2>
            <p>
              Tous nos praticiens sont formés et certifiés Ultherapy® PRIME. Utilisez le DocLocator Merz Aesthetics pour trouver le professionnel le plus proche.
            </p>
          </div>
          <?php
          /*
           * TODO – DOCLOCATOR LINK
           * Replace the href="#" below with the URL of the Merz Aesthetics
           * France DocLocator / clinic finder page (e.g. /fr/trouver-un-praticien/).
           */
          ?>
          <a class="watch-btn cta-search-btn" href="#">Trouver un praticien près de chez moi</a>
        </div>

        <div class="cta-map" aria-hidden="true">
          <iframe
            class="cta-map-frame"
            src="https://www.google.com/maps?q=Courbevoie%20France&z=12&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Carte Google Maps de praticiens près de Courbevoie">
          </iframe>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="section-shell footer-shell">
    <div class="footer-legal">
      <p>ULTHERAPY® PRIME® est indiqué dans le modelage dermatologique et le lifting non invasif du derme sans chirurgie de la face supérieure, inférieure, du cou et du décolleté. En fonction des grades de sévérité de laxité de la peau, un lifting chirurgical ou tout autre traitement peut être indiqué.</p>
      <p>Équipement à visée esthétique marqué CE, sans finalité médicale. ® Marque enregistrée</p>
      <p>Pour une information complète demandez conseil à votre médecin.</p>
      <p>Pour déclarer tout effet indésirable ou incident : vigilances.ax@merz.com ou https://signalement.social-sante.gouv.fr. Pour toute question relative à ULTHERAPY® : infomed.ax@merz.com. Veuillez lire attentivement la notice.</p>
      <p>Publication à destination des patients.</p>
      <p>Distributeur : Merz Aesthetics France, 2 Avenue Gambetta 92400 Courbevoie www.merzaesthetics.fr. Fabricant : Ulthera Inc, 6501 Six Forks Road, Raleigh, NC 27615 USA. Mandataire : Merz Aesthetics GmbH, Eckenheimer Landstraße 100, 60318 Frankfurt am Main Germany.</p>
      <p>© 2026 Merz Aesthetics France. Tous droits réservés. MERZ AESTHETICS est une marque de commerce et une marque déposée de Merz Pharma GmbH &amp; Co. KGaA dans l'UE et certains autres pays. ULTHERA, ULTHERAPY, ULTHERAPY PRIME, DEEPSEE et le logo en forme de zigzag sont des marques de commerce et des marques déposées d'Ulthera, Inc. dans l'UE et certains autres pays. Les figures/images ne sont pas représentées à l'échelle.</p>
    </div>

    <div class="footer-columns">
      <div class="footer-column footer-column-wide">
        <h3>Références</h3>
        <ul class="footer-reference-list">
          <li>1. Pavicic T., et al. Microfocused ultrasound with visualization: Consensus on safety and review of energy-based devices. J Cosmet Dermatol. 2021;21:636–647.</li>
          <li>2. Laubach HJ., et al. Intense focused ultrasound: evaluation of a new treatment modality for precise microcoagulation within the skin. Dermatol Surg. 2008;34(5):727-734.</li>
          <li>3. Werschler, W. P. et al. Long-term efficacy of micro-focused ultrasound with visualization for lifting and tightening lax facial and neck skin using a customized vectoring treatment method. J Clin Aesthet Dermatol 2016;9:27–33.</li>
          <li>4. Fabi, S. G., et al. Evaluation of microfocused ultrasound with visualization for lifting, tightening, and wrinkle reduction of the décolletage. J Am Acad Dermatol 2013;69:965–71.</li>
          <li>5. Mode d'emploi Ultherapy PRIME®</li>
          <li>6. Fabi SG, et al. Optimizing patient outcomes by customizing treatment with microfocused ultrasound with visualization: gold standard consensus guidelines from an expert panel. J Drugs Dermatol. 2019;18(5):426-432.</li>
          <li>7. Park JY, et al. Customized Treatment Using Microfocused Ultrasound with Visualization for Optimized Patient Outcomes. J Clin Aesthet Dermatol. 2021;14(5):E70-E79.</li>
          <li>8. Varani J., et al. Decreased collagen production in chronologically aged skin. Am J Pathol. 2006 Jun;168(6):1861-8.</li>
          <li>9. Fisher GJ., et al. Looking older: Fibroblast Collapse and Therapeutic Implications. Arch Dermatol. 2008 May;144(5):666-72.</li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Navigation</h3>
        <ul class="footer-link-list">
          <li><a href="#a-propos">À propos</a></li>
          <li><a href="#avantages">Bénéfices</a></li>
          <li><a href="#avant-apres">Avant / Après</a></li>
          <li><a href="#indications-corps">Corps</a></li>
          <li><a href="#visage">Visage</a></li>
          <li><a href="#comment-ca-marche">Comment ça fonctionne ?</a></li>
          <li><a href="#timeline">Votre traitement</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#praticien">Trouver un praticien</a></li>
          <li><a href="#references-title">Références</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Produits et services</h3>
        <ul class="footer-link-list">
          <li><a href="https://merzaesthetics.fr/produits/" target="_blank" rel="noopener noreferrer">Nos produits</a></li>
          <li><a href="https://merzaesthetics.fr/produits/ultherapyprime/" target="_blank" rel="noopener noreferrer">ULTHERAPY<sup>®</sup> PRIME</a></li>
          <li><a href="https://merzaesthetics.fr/doclocator/" target="_blank" rel="noopener noreferrer">DocLocator</a></li>
          <li><a href="https://merzaesthetics.fr/nos-services/" target="_blank" rel="noopener noreferrer">Nos services MAX</a></li>
          <li><a href="https://merzaesthetics.fr/zero-dechet-by-merz-aesthetics/" target="_blank" rel="noopener noreferrer">Zéro Déchet by Merz Aesthetics<sup>®</sup></a></li>
          <li><a href="https://merzaesthetics.fr/contact/" target="_blank" rel="noopener noreferrer">Contact</a></li>
          <li><a href="https://merzaesthetics.fr/politique-de-confidentialite/" target="_blank" rel="noopener noreferrer">Politique de confidentialité</a></li>
          <li><a href="https://merzaesthetics.fr/mentions-legales/" target="_blank" rel="noopener noreferrer">Mentions légales</a></li>
          <li><a href="https://merzaesthetics.fr/conditions-generales-dutilisation/" target="_blank" rel="noopener noreferrer">Conditions générales d'utilisation</a></li>
          <li><a href="https://merzaesthetics.fr/politique-de-gestion-des-cookies/" target="_blank" rel="noopener noreferrer">Politique de gestion des cookies</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-brand">
        <img src="<?php echo esc_url( $ultherapy_prime_img_url ); ?>/logo-merz-aesthetics.png" alt="Merz Aesthetics Logo">
      </div>
      <p>Copyright © 2026 Merz Aesthetics France. Tous droits réservés. PUB-ULT.PRIME-2024072-Rev03_Avril2025</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
