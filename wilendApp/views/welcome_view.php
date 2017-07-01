<!DOCTYPE html>
<html>
    <head>
        <title>wiLend &mdash; Pr&eacute;stamos inmediatos</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/magnific-popup.css">        
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    <body class="appear-animate" style="background-color: #41404A;">

        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Cargando...</div>

        </div>
        <div class="loaderhand"></div>
        <!-- End Page Loader -->

        <!-- Page Wrap -->
        <div class="page" id="top" style="background-color: #fff;">


            <!-- Home section -->
            <section class="home-section bg-gray parallax-1 bg-dark-alfa-30" data-background="img/latino.jpg" id="home">
                <div class="js-height-full">


                    <div class="home-content container">

                        <div class="home-text">
                            <div class="col-md-2 spacecol" style="float:right;">

                            </div>

                            <div class="col-md-4 textcol" style="float:right;">
                                <h2 class="hs-line-11 mb-xs-30 mainline">
                                    Â¡WILEND DEV!
                                </h2>

                                <p>
                                    wiLend es tu servicio de prÃ©stamos por internet que te ayuda a acceder a servicios financieros de manera Ã¡gil y sin trÃ¡mites engorrosos. Mientras mÃ¡s trabajamos juntos, mayores serÃ¡n las sorpresas que te tenemos.
                                </p>
                            </div>
                            <div class="col-md-4 calculadoracol"  style="float:right;">
                                <div id="calculadora">
                                    <center>
                                        <form action="" method="post" name="alta">
                                            <table width="100%" border="0" class="mb-20">
                                                <tr>
                                                    <td width="50%" align="center">
                                                        Monto
                                                    </td>

                                                    <td width="50%" align="center">
                                                        Plazo
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="monto" width="50%" align="center">
                                                        <span></span>
                                                    </td>
                                                    <td width="50%" align="center">
                                                        <div class="plazo" >
                                                            <span class="plazodias"></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" width="100%" class="pt-20">
                                                        <div id="keyboard"></div>
                                                        <input id="plazo" name="plazo" type="hidden" value="15" />
                                                        <br />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" align="center">
                                                        <div id="fechapagoplace">
                                                            <span class="fechapago">Selecciona una fecha.</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                            <?php echo $calendar; ?>
                                            <table width="100%" id="valores" class="mt-10">
                                                <tr>
                                                    <td width="33%" class="mt-10">
                                                        Monto
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td width="33%" class="mt-10">
                                                        InterÃ©s
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td width="33%" class="mt-10">
                                                        Total
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="70" class="">
                                                        <input type="hidden" id="capital" value="1000" >
                                                        <h2 class="capital greentext" style="margin:0px !important"></h2>
                                                    </td>
                                                    <td class="">
                                                        <h2 class="slidersign" style="margin:0px !important">+</h2>
                                                    </td>
                                                    <td width="70" class="">
                                                        <input type="hidden" id="interes" value="12.86">
                                                        <h2 class="interes greentext" style="margin:0px !important"></h2>
                                                    </td>
                                                    <td class="">
                                                        <h2 class="slidersign" style="margin:0px !important">=</h2>
                                                    </td>
                                                    <td width="70" class="">
                                                        <input type="hidden" id="total" value="0">
                                                        <h2 class="total greentext" style="margin:0px !important"></h2>
                                                    </td>
                                                </tr>
                                            </table>

                                            <!-- <a href="login.php" class="lightbox mfp-iframe"><button class="btn btn-mod btn-w btn-small btn-round btn-green mt-10" style="width:100%;">SolicÃ­talo Ahora</button></a> -->
                                            <a onclick="Javascript: var monto = document.alta.capital.value; var plazo = parseInt($('#plazo').val()); document.getElementById('frame').href = 'login.php?monto=' + monto + '&plazo=' + plazo" id="frame" class="lightbox mfp-iframe"><button class="btn btn-mod btn-w btn-small btn-round btn-green mt-10" style="width:100%;">SolicÃ­talo Ahora</button></a>


                                            <div class="panel-footer mt-10" > 
                                                Tasa anual fija <span class="percent">399%</span><br />CAT promedio <span class="costoanual">3574.08</span>% sin IVA.
                                            </div>
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="local-scroll" style="display:none;">
                        <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon" style="color:#fff;"></i></a>
                    </div>

                </div>
            </section>
            <!-- End Home section -->

            <!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
                            <img src="img/logo@2x.png" alt="" id="logo_change"/>
                        </a>
                    </div>
                    <div class="mobile-nav">

                        <i class="fa fa-bars"></i>

                    </div>
                    <a href="login.php" class=" lightbox mfp-iframe">
                        <div class="mobile-navb" style="height: 75px; line-height: 75px; width: 40px;">
                            <i class="fa fa-user"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="mobile-navb" style="height: 75px; line-height: 75px; width: 40px;">
                            <i class="fa fa-facebook"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="mobile-navb" style="height: 75px; line-height: 75px; width: 40px;">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </a>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="#home">PrÃ©stamo</a></li>
                            <li><a href="#">############WILEND DEV############</a></li>
                            <li><a href="#comofunciona">Â¿CÃ³mo funciona?</a></li>
                            <li><a href="#requisitos">Requisitos</a></li>
                            <li><a href="#conocenos">ConÃ³cenos</a></li>
                            <li><a href="login.php" class="lightbox mfp-iframe">Inicio de SesiÃ³n / Registrarse</a></li>
                            <li class="hideonmobile">
                                <a href="#" style="height: 75px; line-height: 75px; width:40px;"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/wiLend-169578723497318/" target="_blank" style="height: 75px; line-height: 75px; width:40px;"><i class="fa fa-facebook"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navigation panel -->


            <!-- CÃ³mo Funciona -->
            <section class="page-section" id="comofunciona" style="margin-top:-50px;">
                <div class="container relative">


                    <div class="col-lg-5ths">

                        <table border="0" width="100%">
                            <tr>
                                <td valign="bottom" height="80" class="icongrow bluetext" align="center">
                                    <span class="icon-wallet alt-tabs-icon"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="steptext bluetext">
                                    <h2>Solicita</h2> tu prÃ©stamo
                                </td>
                            </tr>
                        </table>
                        <div>                                

                            <p class="step mt-20">
                                Utiliza nuestra calculadora y en 5 simples pasos cuÃ©ntanos sobre ti, no te tomarÃ¡ mÃ¡s de 5 minutos. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5ths">

                        <table border="0" width="100%">
                            <tr>
                                <td valign="bottom" height="80" class="icongrow bluetext" align="center">
                                    <span class="icon-search alt-tabs-icon"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="steptext bluetext">
                                    <h2>EnvÃ­a</h2> tus documentos
                                </td>
                            </tr>
                        </table>
                        <div>                                

                            <p class="step mt-20">
                                MÃ¡ndanos una imagen de tu IdentificaciÃ³n oficial vigente, ademÃ¡s te pediremos que te tomes una foto sosteniÃ©ndola.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5ths">

                        <table border="0" width="100%">
                            <tr>
                                <td valign="bottom" height="80" class="icongrow bluetext" align="center">
                                    <span class="icon-bargraph alt-tabs-icon"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="steptext bluetext">
                                    <h2>EvaluaciÃ³n</h2> de solicitud
                                </td>
                            </tr>
                        </table>
                        <div>                                
                            <p class="step mt-20">
                                Revisaremos tu informaciÃ³n y documentaciÃ³n para saber si tu solicitud fue aprobada.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5ths">

                        <table border="0" width="100%">
                            <tr>
                                <td valign="bottom" height="80" class="icongrow bluetext" align="center">
                                    <span class="icon-gift alt-tabs-icon"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="steptext bluetext">
                                    <h2>Utiliza</h2> tu prÃ©stamo
                                </td>
                            </tr>
                        </table>
                        <div>                                
                            <p class="step mt-20">
                                Con tu solicitud aprobada te depositaremos en menos de 30 minutos*, usa tu dinero para lo que necesites.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5ths">
                        <table border="0" width="100%">
                            <tr>
                                <td valign="bottom" height="80" class="icongrow bluetext" align="center">
                                    <span class="icon-happy alt-tabs-icon"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="steptext bluetext">
                                    <h2>Continua</h2> con nosotros
                                </td>
                            </tr>
                        </table>
                        <div>                                

                            <p class="step mt-20">
                                Sigue con nosotros y paga a tiempo, tus nuevas solicitudes serÃ¡n aÃºn mÃ¡s rÃ¡pidas y con mejores condiciones de crÃ©dito.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Termina CÃ³mo Funciona -->

            <section class="page-section pt-0 pb-0 banner-section bg-dark parallax-2" data-background="img/background2.jpg">
                <div class="container relative">
                    <img src="img/descubrir.png" width="400" class="parallax-copy parallax-copy-left" />
                    <div class="row">

                        <div class="col-sm-6">

                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <div class="banner-decription">
                                        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="small-section bg-greenwilend">
                <div class="container relative">

                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Â¿Quieres un prÃ©stamo?</h3>
                        <div class="local-scroll">
                            <a href="#top" class="btn btn-mod btn-w btn-medium btn-round">Â¡SolicÃ­talo ahora!</a>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Requisitos -->
            <section class="page-section" id="requisitos">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-5 col-lg-4 mb-sm-40">
                            <div class="text">
                                <h3 class="font-alt mb-30 mb-xxs-10">Requisitos</h3>
                                <ul id="staggered">
                                    <li style="transform: translateX(0px); opacity: 1;">
                                        <h4 class="greentext">Edad</h4>
                                        <p>De 18 a 60 AÃ±os, desde los mÃ¡s chavos hasta los no tan chavos.</p>
                                    </li>
                                    <li class="" style="transform: translateX(0px); opacity: 1;">
                                        <h4 class="greentext">Historia</h4>
                                        <p class="">Historial Crediticio Sano, aunque si no lo tienes lo hacemos juntos.</p>
                                    </li>
                                    <li class="" style="transform: translateX(0px); opacity: 1;">
                                        <h4 class="greentext">IdentificaciÃ³n</h4>
                                        <p class="">IdentificaciÃ³n Oficial Vigente (INE/IFE), pero te peinas cuÃ±ao.</p>
                                    </li>
                                    <li class="" style="transform: translateX(0px); opacity: 1;">
                                        <h4 class="greentext">Nacionalidad</h4>
                                        <p class="">Nacionalidad Mexicana, MÃ©xico lindo y querido.</p>
                                    </li>
                                    <li class="" style="transform: translateX(0px); opacity: 1;">
                                        <h4 class="greentext">Cuenta bancaria</h4>
                                        <p class="">Cuenta Bancaria Propia, para tu lana.</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-offset-1">

                            <img src="img/requisitos.jpg" widt>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Termina Requisitos -->

            <section class="page-section pt-0 pb-0 banner-section bg-dark parallax-3" data-background="img/background4.jpg">

                <div class="container relative">
                    <img src="img/consentirte.png" class="parallax-copy parallax-copy-left" />
                    <div class="row">

                        <div class="col-sm-6">

                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <div class="banner-decription">
                                        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <section class="small-section bg-greenwilend">
                <div class="container relative">

                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Â¿Ya te animaste?</h3>
                        <div class="local-scroll">
                            <a href="#top" class="btn btn-mod btn-w btn-medium btn-round">Â¡SolicÃ­talo ahora!</a>
                        </div>
                    </div>

                </div>
            </section>

            <!-- ConÃ³cenos -->
            <section class="page-section" id="conocenos">
                <div class="container relative">

                    <div class="row">

                        <div class="col-lg-12">
                            <h3 class="font-alt mb-30 mb-xxs-10">ConÃ³cenos</h3>

                        </div>

                        <div class="col-md-6 col-lg-6 mb-sm-40">

                            <div class="text">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.2995127796758!2d-99.16292108475548!3d19.399460786903187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff11a0495863%3A0xb5a22c6d60bd09a6!2swiLend!5e0!3m2!1sen!2s!4v1484493106954" width="100%" height="570" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-6 mb-sm-40">

                            <div class="inner-col">
                                <div class="section-title bm20">
                                </div>
                                <p class="">
                                    wiLend es tu servicio de crÃ©ditos por internet que estÃ¡ cambiando la entrega de servicios financieros en MÃ©xico, adiÃ³s a los trÃ¡mites engorrosos y tardados. Aprovechamos la tecnologÃ­a y el alcance de internet, redes sociales y dispositivos mÃ³viles para llegar hasta a tÃ­.
                                    <br /><br />
                                    La permanencia con wiLend te traerÃ¡ mÃ¡s y mejores oportunidades como crÃ©ditos con menos trÃ¡mites, depÃ³sitos y desembolsos mÃ¡s rÃ¡pidos, mejores condiciones de crÃ©dito, conocer sobre el sistema financiero y la oportunidad de convertirte en un socio wiLend.
                                    <br /><br />
                                    Â¡Te conocemos porque nos conocemos y sabemos lo que necesitas, para viajar, para consentirte, para el imprevisto, para lo que quieras!
                                </p>
                                <ul class="contact-info">
                                    <li> NicolÃ¡s San Juan #227, Col. Del Valle, Ciudad de MÃ©xico.</li>
                                    <li> 01 800 2869 463</li>
                                    <li> <a href="mailto:atencion@wilend.mx:8888">atencion@wilend.mx:8888</a> </li>
                                </ul>
                                <div class="divide30"></div>

                                <form class="form contact-form" id="contact_form">
                                    <div class="clearfix">

                                        <div class="cf-left-col">

                                            <!-- Name -->
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Nombre" pattern=".{3,100}" required="">
                                            </div>

                                            <!-- Email -->
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required="">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="telephone" id="telephone" class="input-md round form-control" placeholder="TelÃ©fono" pattern=".{5,100}" required="">
                                            </div>

                                        </div>

                                        <div class="cf-right-col">

                                            <!-- Message -->
                                            <div class="form-group">                                            
                                                <textarea name="message" id="message" class="input-md round form-control" style="height: 131px;resize:none;" placeholder="Mensaje"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="cf-left-col">
                                            <!-- Inform Tip -->                                        
                                            <div class="form-tip pt-20">
                                                <i class="fa fa-info-circle"></i> Todos los campos son obligatorios
                                            </div>
                                        </div>

                                        <div class="cf-right-col">

                                            <!-- Send Button -->
                                            <div class="align-right pt-10">
                                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Enviar mensaje</button>
                                            </div>

                                        </div>

                                    </div>

                                    <div id="result"></div>
                                </form>

                            </div>

                        </div>


                    </div>

                </div>
            </section>
            <!-- Termina conÃ³cenos -->

            <section class="page-section pt-0 pb-0 banner-section bg-dark parallax-4" data-background="img/background3.jpg">
                <div class="container relative">
                    <img src="img/loquequieras.png" class="parallax-copy parallax-copy-right" />
                    <div class="row">

                        <div class="col-sm-6">

                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <div class="banner-decription">
                                        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <section class="small-section bg-greenwilend">
                <div class="container relative">

                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Â¿Ya te animaste?</h3>
                        <div class="local-scroll">
                            <a href="#" class="btn btn-mod btn-w btn-medium btn-round">Â¡SolicÃ­talo ahora!</a>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Foter -->
            <footer class="page-section bg-wilendgray footer pb-60" >
                <img src="img/greenhandlogo.png" width="60" height="120" id="footerlogo">
                <div class="container">

                    <div class="col-md-8">
                        <img src="img/logo@2x.png" width="150" />
                        <br /><br />
                        <p class="ml-10 pb-30">
                            *Sujeto a la previa aprobaciÃ³n de crÃ©dito. Aplica una vez completado el proceso de solicitud y envÃ­o de documentaciÃ³n por parte del cliente. El tiempo de respuesta corresponderÃ¡ al horario de 8:30 a 16:00 hrs. de Lunes a Viernes. No aplica en dÃ­as festivos ni fines de semana.
                            <br />
                            Los montos mostrados en esta pÃ¡gina de internet corresponden a Pesos Mexicanos.
                            <br />
                            En wiLend no cobramos comisiones.
                            <br />
                            wiLend es el nombre comercial de PACIFIN S.A. de C.V., SOFOM, E.N.R, que de acuerdo a lo establecido en el ArtÃ­culo 87-J de la Ley General de Organizaciones y Actividades Auxiliares del CrÃ©dito wiLend no requiere autorizaciÃ³n de la SecretarÃ­a de Hacienda y CrÃ©dito PÃºblico, y estÃ¡ sujeta a la supervisiÃ³n de la ComisiÃ³n Nacional Bancaria y de Valores Ãºnicamente para efectos de PLD contemplado en el ArtÃ­culo 56 de la citada Ley.
                            <br />
                            El BurÃ³ de Entidades Financieras contiene informaciÃ³n de PACIFIN S.A. de C.V., SOFOM, E.N.R. sobre su desempeÃ±o frente a los Usuarios, por la prestaciÃ³n de productos y servicios. Te invitamos a consultarlo en la pÃ¡gina <a href="http://www.buro.gob.mx" target="_blank">http://www.buro.gob.mx</a>.
                            <br />
                            El uso de este servicio implica la aceptaciÃ³n del <a href="../avisos/aviso.pdf" target="_blank"><span style="font-weight: bold;text-decoration: underline;">AVISO DE PRIVACIDAD</style></a>.
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                        </p>
                    </div>

                    <div class="col-md-4" style="text-align:center;">

                        <!-- Social Links -->
                        <div class="footer-social-links mt-50 mb-40 mb-xs-60">
                            <a href="https://www.facebook.com/wiLend-169578723497318/" target="_blank" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="#" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                        <!-- End Social Links -->  

                        <!-- Footer Text -->
                        <div class="footer-text">

                            <!-- Copyright -->
                            <div class="footer-copy">
                                <a href="#" target="_blank">Â© wiLend 2017</a>
                            </div>
                            <br />
                            <!-- End Copyright -->
                            <img src="img/condusef.png" width="100" />  <img src="img/buro.png" width="60" /> &nbsp;&nbsp;&nbsp; <img src="img/circulo.png" width="100" /> 
                        </div>
                        <!-- End Footer Text --> 
                    </div>
                </div>

                <!-- Top Link -->
                <div class="local-scroll">
                    <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                </div>
                <!-- End Top Link -->
            </footer>
            <!-- End Foter -->
        </div>
        <!-- End Page Wrap -->
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        <script type='text/javascript' src="js/bootstrap-slider.js"></script>
        <script>
                                                var pesos = 1000;
                                                var dias = 1

                                                $(document).ready(function () {



                                                    $('#monto').slider({
                                                        tooltip: 'always',
                                                        value: '1000',
                                                        formatter: function (value) {
                                                            //return 'Monto: $' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                                                        }
                                                    });


                                                    var realValues = [<?php echo rtrim($listadias, ","); ?>];


                                                    $("#monto").on("change", function (slideEvt) {
                                                        var capitalformat = slideEvt.value['newValue'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                                                        $(".capital").text('$' + capitalformat);
                                                        $(".monto span").text('$' + capitalformat);
                                                        $("#capital").val(slideEvt.value['newValue']);
                                                        calcularinteres();
                                                        sumar();
                                                    });

                                                    changeplazo(<?php echo $defaultdays; ?>);

<?php
//Restamos uno al defaultdays para obtener el dÃ­a absoluto en el calendario
$defaultdays -= 1;
?>

                                                    calcularinteres();
                                                    sumar();
                                                });

                                                var tazanual = parseInt(399);

                                                function calcularcat() {
                                                    var realValues = [<?php echo rtrim($listadias, ","); ?>];

                                                    var plazo = parseInt($("#plazo").val());
                                                    var tazadiaria = parseFloat((tazanual / 360) / 100);

                                                    var potencia = Math.pow(((1 + (tazadiaria) * plazo)), (360 / plazo));

                                                    var cat = (potencia - 1) * 100;

                                                    var catformat = cat.toFixed(2);

                                                    //console.log(catformat);
                                                    $(".costoanual").html(catformat.replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                                                }

                                                function calcularinteres() {

                                                    var monto = parseInt($("#capital").val());
                                                    var plazo = parseInt($("#plazo").val());

                                                    var tazadiaria = parseFloat((tazanual / 360) / 100);

                                                    var int_s_iva = (monto * tazadiaria).toFixed(2);
                                                    var int_s_iva_total = (int_s_iva * plazo).toFixed(2);

                                                    var iva = (int_s_iva * 0.16).toFixed(2);
                                                    var iva_total = (iva * plazo).toFixed(2);
                                                    var interes = (parseFloat(int_s_iva_total) + parseFloat(iva_total)).toFixed(2);
                                                    $("#interes").val(interes);

                                                    var interesformat = interes.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                                                    $(".interes").text('$' + interesformat);
                                                }

                                                function sumar() {
                                                    var capital = $("#capital").val();
                                                    var interes = $("#interes").val();
                                                    var total = parseInt(capital) + parseFloat(interes);
                                                    var totalformat = total.toFixed(2);

                                                    //console.log(interes);
                                                    $("#total").val(total.toFixed(2));

                                                    $(".total").text('$' + totalformat.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

                                                    calcularcat();
                                                }

                                                function adddate() {
<?php
if ($dayforjavascript == "today") {
    echo 'var someDate = new Date();';
} else if ($dayforjavascript == "3dias_lunes") {
    echo 'var someDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000 * 3);';
} else if ($dayforjavascript == "2dias_lunes") {
    echo 'var someDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000 * 2 );';
} else {
    echo 'var someDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);';
}
?>

                                                    var numberOfDaysToAdd = parseInt($("#plazo").val());
                                                    someDate.setDate(someDate.getDate() + numberOfDaysToAdd);


                                                    var dd = someDate.getDate();
                                                    var mm = someDate.getMonth();
                                                    var y = someDate.getFullYear();
                                                    var cars = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                                    var someFormattedDate = "PagarÃ­as el " + dd + ' de ' + cars[mm] + ' de ' + y + '.';
                                                    $(".fechapago").text(someFormattedDate);

                                                }
        </script>
        <script type="text/javascript" src="js/nouislider.js"></script>
        <script type='text/javascript' src="js/normaljquery.js"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
                                                var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
                                                (function () {
                                                    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                                                    s1.async = true;
                                                    s1.src = 'https://embed.tawk.to/58869630bcf30e71ac14f963/default';
                                                    s1.charset = 'UTF-8';
                                                    s1.setAttribute('crossorigin', '*');
                                                    s0.parentNode.insertBefore(s1, s0);


                                                })();
        </script>
    </body>
</html>