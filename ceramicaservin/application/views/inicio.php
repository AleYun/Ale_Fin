<div class="col-md-3">
 <body class="hold-transition login-page">
        <div class="login-box">

            <?php echo form_open('Micontrolador/logi'); ?>
            <div class="login-box-body">
                <div class="panel-body">
                    <br>
                    <img src="<?php echo base_url();?>img/regis.png" alt="" />
                </div>
                <p class="login-box-msg"></p>
                <h4>Se parte de nosotros:</h4>
                <div class="row">
                    <div class="col-xs-10">
                        <button type="submit" name="btnEnviar" aria-hidden="true" class="btn btn-primary btn-block btn-flat">Accede a tu sesión</button>
                    </div><!-- /.col -->
                   <!-- <div class="col-xs-5">
                        <button type="submit" name="btnRegistrar" aria-hidden="true" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                    </div><!-- /.col --> 
                    <?php echo form_close();?>   
                </div>

                <br>

                <?php echo form_open('Micontrolador/registro'); ?>
                <div class="col-xs-10">
                        <button type="submit" name="btnRegistrar" aria-hidden="true" class="btn btn-primary btn-block btn-flat">Registrate </button>
                    </div><!-- /.col -->
                     <?php echo form_close();?>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
    
</div>
<br>
<div class="col-md-9">
<div class="container col-md-12">

        <div class="row">
            <div class="box col-md-12">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>img/ls.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>img/slide-f.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>img/slide-1.png" alt="">
                            </div>
                             <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>img/slide-4.JPG" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>img/slide-5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>img/slide-7.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Bienvenido a:</small>
                    </h2>
                    <h1 class="brand-name">Javier Servín Cerámica</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>Por
                            <strong>Francisco Javier Servín Morales</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Historia de:
                        <strong>Javier Servín Cerámica</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url();?>img/ini.jpg" alt="">
                    <hr class="visible-xs">
                    <p>La empresa Javier Servín Cerámica fue fundada por el Señor Francisco Javier Servín Morales. Nacido el 10 de Julio de 1957 en la Lagunilla, Jerecuaro Gto.</p>
                    <p>Desde pequeño demostró interés por las artes, le gustava dibiujar, hacer tallas en madera y hueso. Más tarde decide estudiar artes plásticas en la academia de San Carlos y posteriormente, arquitectura en la UNAM.</a> Al mismo tiempo, entra a trabajar a un taller de cerámica en Coyoacán D.F. en el cual descubre su verdadera vocación, por lo que poco tiempo después decide dejar la carrera e iniciar con un pequeño taller en el año de 1987, del cual, a la fecha han surgido seis talleres más, todos ellos de la familia.</p>
                    <p>Actualmente trabaja en su taller, ubicado en La Purísima, Taradacuao Gto. En el cual se producen más de 200 modelos diferentes en cerámica de alta temperatura, ademas de sus nuevas lineas de porcelana y joyería en plata. El éxito alcanzado por Javier Servín Cerámica, se debe sin duda a la originalidad y a la búsqueda constante de innovación, cuidando siempre la calidad en cada una de sus piezas, hechas a mano por artesanos especializados.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Características 
                        <strong>de nuestra Cerámica:</strong>
                    </h2>
                    <hr>
                    <p>• Nuestro estilo es considerado como algo único, ya que nace con Javier Servin y es exclusivo de los talleres de la familia.</p>
                    <p>• Cada una de las piezas es hecha y decorada a mano, con esmaltes cerámicos realzados en base a la creatividad de las decoradoras sin contar con un modelo fijo.</p>
                    <p>• El tiempo de elaboración de una pieza puede variar de 6 días a 2 meses dependiendo de qué tan fino sea el trabajo de la misma.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->    
</div>

