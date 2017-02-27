<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/touchTouch.css">
    
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/jquery-migrate-1.2.1.js"></script>
    <script src="<?php echo base_url();?>js/superfish.js"></script>
    <script src="<?php echo base_url();?>js/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>js/jquery.ui.totop.js"></script>
    <script src="<?php echo base_url();?>js/jquery.touchSwipe.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.equalheights.js"></script>
    <script  src="<?php echo base_url();?>js/touchTouch.jquery.js"></script>
    
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.isotope.min.js"></script> 
<script>
    
    $(window).load(function() {  
    var $container = $('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    $container.imagesLoaded( function(){

        $container.isotope({
            // options
            itemSelector : '.element',  
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = $browserWidth;
                return Math.floor(containerWidth / $cols);
              }
        });
    });
    
        // update columnWidth on window resize
    $(window).smartresize(function(){  
        updateSize();
        $container.isotope( 'reLayout' );
    });
    
    //Set item size
    function updateSize() {
        $browserWidth = $container.width();
        $cols = 4;

        if ($browserWidth >= 1170) {
            $cols = 4;
        }
        else if ($browserWidth >= 800 && $browserWidth < 1170) {
            $cols = 3;
        }
        else if ($browserWidth >= 480 && $browserWidth < 800) {
            $cols = 2;
        }
        else if ($browserWidth >= 320 && $browserWidth < 480) {
            $cols = 1;
        }
        else if ($browserWidth < 401) {
            $cols = 1;
        }
        //console.log("Browser width is:" + $browserWidth);
        //console.log("Cols is:" + $cols);

        // $gutterTotal = $cols * 20;
        $browserWidth = $browserWidth; // - $gutterTotal;
        $itemWidth = $browserWidth / $cols;
        $itemWidth = Math.floor($itemWidth);

        $(".element").each(function(index){
            $(this).css({"width":$itemWidth+"px"});             
        });
            

    
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });       

    };

        // Initialize the gallery
        $('.thumb').touchTouch();
    
    });
    
  </script>
  
    
    
    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script> 
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>



<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Catalogo
                        <strong>De Productos</strong>
                    </h2>
                    <hr>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Decoración Para
                        <strong>El Hogar</strong>                        
                    </h2>
                    <hr>
                </div>
                <div class="element transition people" data-category="transition">
                <a href="<?php echo base_url();?>img/galeria/decoracion/gato.png" class="thumb"><figure class="<?php echo base_url();?>img-polaroid"><img src="<?php echo base_url();?>img/galeria/decoracion/gato.png" alt=""></figure></a><span class="description">Alcancia de Gato</span>
                </div>
                <div class="element transition people" data-category="transition"> 
                <a href="<?php echo base_url();?>img/galeria/decoracion/tibo.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/decoracion/tibo.png" alt=""></figure></a><span class="description">Tibor</span>
                </div>
                <div class="element transition people" data-category="transition"> 
                <a href="<?php echo base_url();?>img/galeria/decoracion/plato.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/decoracion/plato.png" alt=""></figure></a><span class="description">Plato Para Colgar</span>
                </div>
                <div class="element transition people" data-category="transition"> 
                <a href="<?php echo base_url();?>img/galeria/decoracion/titere.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/decoracion/titere.png" alt=""></figure></a><span class="description">Titere</span>
                </div>
                <div class="element transition people" data-category="transition"> 
                <a href="<?php echo base_url();?>img/galeria/decoracion/portaretrato.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/decoracion/portaretrato.png" alt=""></figure></a><span class="description">Portaretrato</span>
                </div>   
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Elementos Para
                        <strong>La Cocina</strong>
                    </h2>
                    <hr>
                </div>
                <div class="element transition nature" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/cocina/base.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/cocina/base.png" alt=""></figure></a><span class="description">Base Para Garrafon</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/cocina/juego.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/cocina/juego.png" alt=""></figure></a><span class="description">Juego De Agua</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/cocina/mielera.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/cocina/mielera.png" alt=""></figure></a><span class="description">Mielera</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/cocina/quesero.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/cocina/quesero.png" alt=""></figure></a><span class="description">Quesera</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/cocina/servilletero.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/cocina/servilletero.png" alt=""></figure></a><span class="description">Servilletero</span>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Bebidas
                        <strong>.....</strong>
                    </h2>
                    <hr>
                </div>
                <div class="element transition panoramic" data-category="transition">
                   <a href="<?php echo base_url();?>img/galeria/bebidas/copa.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/bebidas/copa.png" alt=""></figure></a><span class="description">Copa Tequilera</span>
                </div>
                <div class="element transition panoramic" data-category="transition">
                    <a href="<?php echo base_url();?>img/galeria/bebidas/jarrito.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/bebidas/jarrito.png" alt=""></figure></a><span class="description">Jarrito Ponchero</span>
                </div>
                <div class="element transition panoramic" data-category="transition">
                    <a href="<?php echo base_url();?>img/galeria/bebidas/juego2.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/bebidas/juego2.png" alt=""></figure></a><span class="description">Juego Tequilero</span>
                </div>
                <div class="element transition panoramic" data-category="transition">
                    <a href="<?php echo base_url();?>img/galeria/bebidas/licorera.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/bebidas/licorera.png" alt=""></figure></a><span class="description">Licorera Trinagular Mini</span>
                </div>
                <div class="element transition panoramic" data-category="transition">
                    <a href="<?php echo base_url();?>img/galeria/bebidas/licorera2.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/bebidas/licorera2.png" alt=""></figure></a><span class="description">Licorera Bola Chica</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Floreros
                        <strong>.....</strong>
                    </h2>
                    <hr>
                </div>
                <div class="element transition nature" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/floreros/florero.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/floreros/florero.png" alt=""></figure></a><span class="description">Florero Pez Chico</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/floreros/florero1.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/floreros/florero1.png" alt=""></figure></a><span class="description">Florero</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/floreros/florero2.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/floreros/florero2.png" alt=""></figure></a><span class="description">Florero Dona Chico</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/floreros/florero3.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/floreros/florero3.png" alt=""></figure></a><span class="description">Florero Inclinado</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/floreros/florero4.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/floreros/florero4.png" alt=""></figure></a><span class="description">Florero</span>
                    </div>
            </div>
            </div>
            <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Iluminación
                        <strong>......</strong>
                    </h2>
                    <hr>
                </div>
                <div class="element transition nature" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/iluminacion/brisera.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/iluminacion/brisera.png" alt=""></figure></a><span class="description">Brisera Chica</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/iluminacion/candelero.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/iluminacion/candelero.png" alt=""></figure></a><span class="description">Candelero Asa Chico</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/iluminacion/candelero2.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/iluminacion/candelero2.png" alt=""></figure></a><span class="description">Calendero Torre Chico</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/iluminacion/copa2.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/iluminacion/copa2.png" alt=""></figure></a><span class="description">Copa Para Vela</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/iluminacion/lampara1.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/iluminacion/lampara1.png" alt=""></figure></a><span class="description">Lampara Bola Chica</span>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Joyeros
                        <strong>......</strong>
                    </h2>
                    <hr>
                </div>
                <div class="element transition nature" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/joyeros/bolon.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/joyeros/bolon.png" alt=""></figure></a><span class="description">Joyero Bolón</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/joyeros/joyero.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/joyeros/joyero.png" alt=""></figure></a><span class="description">Joyero Hexagonal</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/joyeros/joyero1.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/joyeros/joyero1.png" alt=""></figure></a><span class="description">Joyero Grande</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/joyeros/joyero2.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/joyeros/joyero2.png" alt=""></figure></a><span class="description">Joyero Ovalado</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                        <a href="<?php echo base_url();?>img/galeria/joyeros/joyero3.png" class="thumb"><figure class="img-polaroid"><img src="<?php echo base_url();?>img/galeria/joyeros/joyero3.png" alt=""></figure></a><span class="description">Joyero Circular</span>
                    </div>
            </div>
        </div>

    </div>

        </div>

        
    <!-- /.container -->
