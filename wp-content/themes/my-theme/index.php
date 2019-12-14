<?php get_header(); ?>

<div class="container">

    <?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
      
    $image = get_field('banner_image_de_fond');
    $banner_lien = get_field('banner_lien');
//    var_dump($banner_lien);
      
    

?>

    <section class="section-1" style="background-image: url(<?php echo $image['url']; ?>)">
        <div class="s1d1">
            <p class="section-title"><?php the_field('banner_baseline'); ?></p>
            <h2 class="title"><?php the_field('banner_titre_marron'); ?></h2>
            <h2 class="title-green"><?php the_field('banner_titre_vert'); ?></h2>
            <a href="<?php echo $banner_lien['url'] ?>" class="lien"><?php echo $banner_lien['title'] ?></a>
        </div>
    </section>

    <section class="section-2">
        <h2 class="title">La conférence</h2>
        <hr>
        <p class="section-title">Les Rencontres de la Fondation d'intitulent cette année "Chaîne alimentaire végétale et durabilité: une question d'équilibre!" Elles se tiendront le 3 décembre prochain à Bruxelles et auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires à travers le monde, qui appelle à favoriser une alimentation plus végétale.</p>
    </section>

    <section class="section-3">
        <h2 class="title">Au programme</h2>
        <div class="div-1"></div>
        <div class="div-2"></div>
    </section>


    <?php
  }
}
?>

</div>

<?php get_footer(); ?>
