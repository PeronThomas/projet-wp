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


  }
    
    $image_fond_section1 = get_field('image_fond_section1');
    $image_fond_section3 = get_field('image_fond_section3');
    $inscription = get_field('inscription');
    $image1 = get_field('image1');
    //var_dump($inscription);
}
?>
    <div class="section-1" style="background-image: url(<?php echo $image_fond_section1['url']; ?>)">
        
     
        <div id="rencontres"><?php the_field('banniere_rencontre'); ?></div>
        <div id="chaine_alimentaire"><?php the_field('chaine_alimentaire'); ?></div>
        <div id="question_equilibre"><?php the_field('question_equilibre'); ?></div>
        <a href= "<?php echo $inscription['url'] ?>" id="inscription"><?php echo $inscription['title'] ?></a>
        
    </div>

    <div class= "section-2">
        
        <div class="titre"><?php the_field('titre_section2'); ?></div>
        <div class="trait"></div>
        <div id="infos"><?php the_field('texte_section2'); ?></div>
        
    </div>
    
    <div class="section-3" style="background-image: url(<?php echo $image_fond_section3['url']; ?>)"></div>
    
    <div class="section-4">
    
        <div class='titre'><?php the_field('titre_section4'); ?></div>
        <div class="trait"></div>
        <div id='programme'>
            <div id='liste1'>
            <h2><?php the_field('titre_liste1'); ?></h2>

  <p>8:30Introduction par Christophe Fondation</p>
  <p>9:30 Autre chose</p>
  <p>10:30 Introduction par Christophe Fondation</p>
  <p>11:30 Introduction par Christophe Fondation</p>
  <p>12:30 Introduction par Christophe Fondation</p>


            </div>
            <div id="liste2">
            <h2><?php the_field('titre_liste2'); ?></h2>

  <p>8:30 Introduction par Christophe Fondation</p>
  <p>9:30 Autre chose</p>
  <p>10:30 Introduction par Christophe Fondation</p>
  <p>11:30 Introduction par Christophe Fondation</p>

            </div>
    </div>
     <a href= "<?php echo $inscription['url'] ?>" id="inscription2"><?php echo $inscription['title'] ?></a>   
        
</div>
    
        <div class="section-5">
    
            <div class='titre'>Les orateurs</div>
             <div class="trait"></div>
            <div id="opera_txt">blablablabla</div>
            
            <div class="photos_operateurs">
                <div id="photo_1"></div>
                <div id="photo_2"></div>
                <div id="photo_3"></div>
                <div id="photo_4"></div>
                
            </div>
            <div class="photos_operateurs">
                <div class="nom_1">madame 1</div>
                <div class="nom_1">madame 2</div>
                <div class="nom_1">madame 3</div>
                <div class="nom_1">madame 4</div>
            </div>
    </div>
            
        <div class="section-6">
    
            <div class='titre'>Informations pratiques</div>
            <div class="trait"></div>
            <div class="contenu_6">
            
                    <div id="zone_texte">
                
                        <div id="lieu">
                            <p>Square brussels</p>
                            <img href="images/picto-map.svg" width=50rem height=50rem>
                        </div>
                        <div id="horaire"></div>
                        <div id="manger"></div>
                
                    </div>
                    <div id="image_droite"></div>
            
            </div>

    </div>
    
    <div class="section-7">
        <div class='titre'>Vidéos</div>
        <div class="trait"></div>
    </div>
    
        <div class="section-8">
        <div class='titre'>Actus</div>
        <div class="trait"></div>
    </div>
<?php get_footer(); ?>