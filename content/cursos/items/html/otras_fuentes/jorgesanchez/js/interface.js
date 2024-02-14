//constantes de animación, corta y larga
const T_ANIM_MIN=200;
const T_ANIM_MAX=500;

//Anchuras
var anchoMenu=40;

/* Variables para el control del menú
 * El orden es el orden de los elementos slide
 */

var menu=[
    "#inicio",
    "#bd",
    "#gbd",
    "#abd",
    "#er",
    "#ar",
    "#web",
    "#lmsgi",
    "#iaw",
    "#html",
    "#xml",
    "#php",
    "#libroiaw",
    "#programacion",
    "#fpr",
    "#java",
    "#c",
    "#cpp",
    "#imagen",
    "#ofimatica"
];
var menuActual=0; //inicialmente se muestra Inicio

//variables para el control del swipe
var xInicio;
var swipe=false;


var intervalorInicio;
var clicksInicio=0;


function clickMenu(){
    clicksInicio++;
    if(clicksInicio==1) {
        $("#btMenu").trigger("click");
        setInterval(clickMenu,1000);
    }
    else if(clicksInicio==2)
        $("#btMenu").trigger("click");
}

/**
 * Carga si es necesario el contenido de una sección
 * @param seccion id de la sección a cargar, incluye el #
 */
function cargaSeccion(seccion){
    if (!($(seccion).find(" .contenido").length)) {
        $.get("templates/partials/" + seccion.substring(1) + ".html", function (data) {
            $(seccion).append(data);
        });
    }
}

/**
 * Función añadida a jQuery para rotar elementos (propiedad CSS rotate)
 * @param angulo Ángulo de rotación en Grados
 * @param duracion Duración de la rotación (ms)
 * @param completo Función que se invoca cuando finaliza la rotación
 * @returns {*}
 */
$.fn.animRotar=function(angulo, duracion,completo) {
    return this.each(function(){
        var $elem=$(this);

        $({deg: 0}).animate({deg: angulo}, {
            duration: duracion,
            step: function(now) {
                $elem.css({
                    "-moz-transform": 'rotate(' + now + 'deg)',
                    "-ms-transform": 'rotate(' + now + 'deg)',
                    transform: 'rotate(' + now + 'deg)'
                });
            },
            complete:completo || $.noop
        });
    });
};

/**
 * Código lanzado al inicio
 */
$(function(){
    var hash=window.location.hash.substr(1);//obtener, si es necesario, el anchor de la URL
    //iniciar coordenada left de todos los slides
    var left=0;

    //control del ancho del menú de navegación
    anchoMenu=$("nav").width();

    //comprobar salto

    /**
     * Control de las slides
     */
    $(".slide").each(function(i){
        $(this).css("left",left+"%");
        left+=100;
    })
    // eventos de pantalla táctil
    .tapstart(function(e,touch) {
        swipe=true;
        xInicio= e.clientX;
    })
    .mousemove(function(e) {
        if(swipe) {
            var despl = e.clientX - xInicio;
            $(this).css("margin-left",despl+"px");
        }
    })
    .tapend(function(e,touch) {
        $(this).css("margin-left",0);
        swipe = false;
        //$(this).css("left",origenSlide+"px");
    })
    .swipeleft(function(e,touch){
        if(menuActual<menu.length-1){
            menuActual++;
            cargaSeccion(menu[menuActual]);
            $("#wrap").stop().scrollTo(menu[menuActual],T_ANIM_MIN, {easing:'easeInOutCubic'} );
            swipe=false;
        }
    })
    .swiperight(function(e,touch){
        if(menuActual>0){
            menuActual--;
            cargaSeccion(menu[menuActual]);
            $("#wrap").stop().scrollTo(menu[menuActual],T_ANIM_MIN, {easing:'easeInOutCubic'} );
            swipe=false;
        }
    });
    ///fin slides


    //rollover sociales
    $("#barraSocial a").on("mouseover",function(){
        var img=$(this).find("img");
        var imgAnt=img.attr("src");
        img.attr("src",imgAnt.substr(0,imgAnt.indexOf('.'))+"2.png");
        img.animRotar("360deg",T_ANIM_MIN);
    }).on("mouseout",function(){
        var img=$(this).find("img");
        var imgAnt=img.attr("src");
        img.attr("src",imgAnt.substr(0,imgAnt.indexOf('.')-1)+".png");
    });

    //recarga de las capas
    $(window).resize(function(){
        var leftCuerpo={};
        anchoMenu=$("nav").width();
        $("#wrap").stop().scrollTo(menu[menuActual],T_ANIM_MIN,
            {easing:'easeInOutCubic'}
        );

        if($("nav").css("left")=="0px"){
            //menú abierto
            leftCuerpo={left:anchoMenu+"px"};
        }
        else {
            //menú cerrado
            leftCuerpo={left:"0"};
            leftMenu={left:"-"+anchoMenu+"px"};
            $("nav").css({"left":-anchoMenu+"px"});
        }
        $("#cuerpo").animate(leftCuerpo,T_ANIM_MIN,function(){
            $("#wrap").stop().scrollTo(menu[menuActual],T_ANIM_MIN, {easing:'easeInOutCubic'} );
        });
        $("header").animate(leftCuerpo,T_ANIM_MIN);
    });

    //Manejo del menú lateral
    $("nav>ul>li>a").on("click",function(){
        var $parent=$(this).parent();
        //ocultar otros menús abiertos
        $("nav>ul>li>ul").hide(1000);
        $("nav>ul>li>a").each(function(i){
            $(this).text(">"+$(this).text().substr(1));
        });
        //abrir este submenú si es el caso
        if($(this).parent().html().indexOf("<li")!=-1) {
            $(this).parent().find("ul").show(1000);
            var texto=$(this).text();
            if($(this).text().substr(0,1)==">")
                $(this).html("&#709;" + texto.substr(1));
            else
                $(this).html(">" + texto.substr(1));
        }
    });


    //botón de cierre de menú
    $("#btMenu").on("click",function(){
        var cssCuerpo={};
        var leftMenu={};
        if($("nav").css("left")=="0px"){
            //se cierra el menú
            cssCuerpo={left:"0"};
            leftMenu={left:"-"+anchoMenu+"px"};
            $("#franja1").animRotar("0",T_ANIM_MIN)
                .animate({"top":"0"},T_ANIM_MIN);
            $("#franja2").show(T_ANIM_MIN);
            $("#franja3").animRotar("0",T_ANIM_MIN)
                .animate({"top":"66%"},T_ANIM_MIN);
            $("#barraSocial img").animRotar("-360deg",T_ANIM_MIN);
        }
        else {
            //se abre el menú
            cssCuerpo={left:anchoMenu+"px"};
            leftMenu={left:"0"};
            $("#franja1").animRotar("45deg",T_ANIM_MIN)
                .animate({"top":"6px"},T_ANIM_MIN);
            $("#franja2").hide(T_ANIM_MIN);
            $("#franja3").animRotar("-45deg",T_ANIM_MIN)
                .animate({"top":"6px"},T_ANIM_MIN);
            $("#barraSocial img").animRotar("360deg",T_ANIM_MIN);
        }
        $("#cuerpo").animate(cssCuerpo,T_ANIM_MIN,function(){
            $("#wrap").stop().scrollTo(menu[menuActual],T_ANIM_MIN, {easing:'easeInOutCubic'} );
        });
        $("header").animate(cssCuerpo,T_ANIM_MIN);
        $("nav").animate(leftMenu,T_ANIM_MIN);

    }).on("mouseover",function(){
        $(".franja").css("background-color","white");
    }).on("mouseout",function(){
        $(".franja").css("background-color","gray");
    });

    // scroll automático desde enlaces internos
    $('a[href^="#"]').on('click',function (e) {
        var scroll;
        var segundoScroll=null;
        var href = $(this).attr("href");
        // si el tamaño del href es mayor que uno, es que hay contenido de salto
        if (href.length > 1) {
            if (href.indexOf("-") != -1) { //si hay guión,
                scroll = href.substring(0, href.indexOf("-"));
                segundoScroll="#"+href.substring(href.indexOf("-")+1); //desde el guión hasta el final, consideramos un segundo scroll
            }
            else{
                scroll=href;
                //indagamos si la sección se encuentra en el menú para actualizarlo
                if(menu.indexOf(href)!=-1){
                    menuActual=menu.indexOf(href);
                }
            }

            //carga de la capa
            cargaSeccion(scroll);

            e.preventDefault();
            //cambiar fondo
            $("#fondoAlto").stop(true, true);//parar animaciones
            $("#fondoBajo").css({
                "background-image": "url('img/" + $(scroll).data("img") + "')"
            });
            //paso Gradual de fondos
            $this = $(this);
            $("#fondoAlto").animate({
                "opacity": 0
            }, 1500, function () {
                //al completar la animación preparamos el cambio
                $(this).css({
                    "background-image": "url('img/" + $(scroll).data("img") + "')",
                    "opacity": 1
                });
            });

            //scroll
            $("#wrap")
                .stop()
                .scrollTo(scroll,
                    T_ANIM_MAX,
                    {
                        easing: 'easeInOutCubic',
                        onAfter: function(){  //segundo scroll
                            if(segundoScroll){
                                $(scroll)
                                    .stop()
                                    .scrollTo(segundoScroll,
                                        T_ANIM_MAX, {
                                            easing: 'easeInOutCubic'
                                        }
                                    );
                            }
                        }
                    }
                );


            //colocar URl en la barra de direcciones
            window.history.replaceState("","titulo",scroll.replace("#","/"));


            menuActual = menu.indexOf($(this).attr("href"));
            //borrado de las marcas anteriores
            $("nav a").css("background-color","transparent");
            //marcado en el menú de la sección actual
            $(this).css("background-color","rgba(255,255,255,.2)");
        }
    });

    //click de soluciones de ejercicios
    $(".mostrarSolucion a").on("click",function(e){
        $(this).parent().next().toggle(T_ANIM_MIN);
        if($(this).text()=="Ver solución")
            $(this).text("Ocultar solución");
        else
            $(this).text("Ver solución");
    });

    //formulario de envío de Mail
    $("#cerrarMail").on("click",function(e) {
        $("#mail").fadeOut(1000);
    }).on("mouseover",function(e){
        $("#formularioMail").css({opacity:.5});
    }).on("mouseout",function(e){
        $("#formularioMail").css({opacity:1});
    });



    $(".enlaceMail").on("click",function(e){
        $("#mail").fadeIn({
            duration:1000,
            start:function(a){
                $(this).css({
                    "display":"flex"
                })
            }
        });
    });

    //lanzamiento de datos al servidor PHP
   $("#formMail").on("submit",function(e){
        e.preventDefault();
        $.post("/enviarMail.php", {
            nombre: $("#nombre").val(),
            email: $("#email").val(),
            asunto: $("#asunto").val(),
            contenido: $("#contenido").val(),
        }).done(function (data) {
           if(data=="OK") {
               $("#mensajeCorrecto").css({"display": "block"});
               $("#botonCorrecto").before("<p>Mensaje envíado</p>");
           }
           else{
               $("#mensajeError").css({"display": "block"});
               $("#botonError").before("<p>Fallo en el envío del mensaje</p>");
           }
        });
       $("#mail").fadeOut({
           duration:1000,
           start:function(a){
               $(this).css({
                   "display":"flex"
               })
           }
       });
    });

    //botones de cierre de mensajes
    $("#botonCorrecto").on("click",function(e){
       $("#mensajeCorrecto").css({"display":"none"});
    });
    $("#botonError").on("click",function(e){
       $("#mensajeError").css({"display":"none"});
    });

    $("#cuerpo").on("click",function(){
        var cssCuerpo={};
        var leftMenu={};
        if($("nav").css("left")=="0px"){
            //se cierra el menú
            cssCuerpo={left:"0"};
            leftMenu={left:"-"+anchoMenu+"px"};
            $("#franja1").animRotar("0",T_ANIM_MIN)
                .animate({"top":"0"},T_ANIM_MIN);
            $("#franja2").show(T_ANIM_MIN);
            $("#franja3").animRotar("0",T_ANIM_MIN)
                .animate({"top":"66%"},T_ANIM_MIN);
            $("#barraSocial img").animRotar("-360deg",T_ANIM_MIN);
            $("#cuerpo").animate(cssCuerpo,T_ANIM_MIN,function(){
                $("#wrap").stop().scrollTo(menu[menuActual],T_ANIM_MIN, {easing:'easeInOutCubic'} );
            });
            $("header").animate(cssCuerpo,T_ANIM_MIN);
            $("nav").animate(leftMenu,T_ANIM_MIN);
        }
    });

    //slideboom
    $(".slideboom").on("click",function(e){
        if($(this).next().css("display")=="none") {
            $(this).next().css({
                "display": "block"
            });
        }
        else{
            $(this).next().css({
                "display": "none"
            });
            $(this).parent().find("strong").trigger("click");
        }
    });

    //hacer que se abra el menú de inicio
    //intervalorInicio=setInterval(clickMenu,1000);

    //si hay hash en la URL, cargamos la sección el salto
    if(hash) {
        $('a[href^="#'+hash+'"]').trigger("click");
    }

    //carga en segundo plano de otras secciones
    for(var i=0;i<menu.length;i++){
        cargaSeccion(menu[i]);
    }

});
