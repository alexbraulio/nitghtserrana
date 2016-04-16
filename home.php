<?php
$usuario="admin";
$senha="nightserrana2016";

function msg_erro(){
    header('WWW-Authenticate: Basic realm="NIGHTSERRANA - Acesso Restrito"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<h1>Acesso Restrito - Digite os dados de Autenticação</h1>';
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
     msg_erro();
}else{
     if ($_SERVER['PHP_AUTH_USER']!=$usuario || $_SERVER['PHP_AUTH_PW']!=$senha) {
              msg_erro();
     }
}
?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="worldvision3d">

    <title>NightSerrana</title>
<link rel="icon" type="image/png" href="/nightserrana/img/ico.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

   

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

   

      



    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Night</span> Serrana
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Night</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#chopp">Bares | Choperias</a>
                    </li>
                      <li>
                        <a class="page-scroll" href="#casasnoturna">Casas Noturna</a>
                    </li>

                      <!-- navbar <li>
                        <a class="page-scroll" href="#bar">c</a>
                    </li> -->                   
                  
                    <li>
                        <a class="page-scroll" href="#restaurante">Restaurantes</a>
                    </li>                  
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 align="center">NightSerrana</h2>
                        <p class="intro-text">As melhores opções da noite Petropolitana.<br>
                            Saiba de todas as baladas que estão rolando no momento.<br>
                            Conheça todos os bares disponíveis e muito mais.</p>
                             <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>NightSerrana</h2>
 <p>A NightSerrana vem apresentar tudo que há de melhor na noite petropolitana,
  para que você e seus amigos possam curtir as melhores baladas da cidade!!
Conheça as <a href="http://www.nightserrana.com.br/home.php#casasnoturna">Casas Noturnas</a>
 e todas as <a href="http://www.nightserrana.com.br/home.php#chopp">Chopperias disponíveis</a>.
</p>
<p>Gostaria de reunir os amigos e tomar aquela cerveja bem gelada, 
mas não sabe onde ir?! Então a NightSerrana lhe mostra todos os 
<a href="http://www.nightserrana.com.br/home.php#chopp">Bares</a> 
da cidade de Petrópolis. Aqui você ficará por dentro de tudo que há 
de disponível para sua Night, e ainda pode encontrar os melhores 
<a href="http://www.nightserrana.com.br/home.php#restaurante">Restaurantes</a>.</p>
                <p>Na NightSerrana você conhece todos os lugares em um só lugar.</p>
            </div>
        </div>
    </section>

    <!-- Download Section 
    <section id="bar" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <font color="black"><h2>Conheça os Bares de Petrópolis.</h2></font>
                    <font color="black"><p>Veja todos os detalhes abaixo.</p></font>
                    <a href="http://www.nightserrana.com.br/bares" class="btn btn-default btn-lg">Visitar Bares</a>
                </div>
            </div>
        </div>
    </section>-->

<!--#########CASA NOTURNA #########-->

  <section id="casasnoturna" class="container  text-center">
    <br><br><br>   <br><br><br>   
<font color="#FFFFFF"><h2>Conheça as Boates de Petrópolis.</h2></font>
                     <ul class="list-inline banner-social-buttons">                    
                    <li>
                <a href="http://www.nightserrana.com.br/bares" class="btn btn-default btn-lg">
                    <i class="fa fa-github fa-fw"></i> <span class="network-name">Ver todas as opções</span></a>
                    </li>                  
                </ul>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
  

                      <div class="mbr-box mbr-section mbr-section--relative mbr-section-
                      -fixed-size mbr-section--bg-adapted item dark center mbr-section-
                      -full-height" style="background-image: url(img/casanoturna02.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">

                                    <br><br>
                                  <font color="black"><h1>Casa Bela Noite</h1></font> 
                                   <font color="black"> <p class="mbr-hero__subtext">Venha conhecer o melhor da noite!!!</p></font> 
                                </div>
                                 <br><br><br><br><br><br>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center">
            <a class="mbr-buttons__btn btn btn-lg btn-default" href="http://www.nightserrana.com.br/bares">Clique e conheça</a>
            <br><br><br><br>
        </div>
                            </div></div>
                        </div>
                    </div>
                </div>


    </div>

    <div class="item">


      
                      <div class="mbr-box mbr-section mbr-section--relative mbr-section-
                      -fixed-size mbr-section--bg-adapted item dark center mbr-section-
                      -full-height" style="background-image: url(img/casanoturna03.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">

                                    <br><br>
    <font color="black"><h1>Casa Big Night</h1></font>
                                    <p class="mbr-hero__subtext">O melhor da noite bebida liberada e muito mais.</p>
                                </div>
                                 <br><br><br><br><br><br>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center">
            <a class="mbr-buttons__btn btn btn-lg btn-default" 
            href="http://www.nightserrana.com.br/bares">Clique e conheça</a>
            <br><br><br><br>
        </div>
                            </div></div>
                        </div>
                    </div>
                </div>


    </div>

    <div class="item">
   

                      <div class="mbr-box mbr-section mbr-section--relative mbr-section-
                      -fixed-size mbr-section--bg-adapted item dark center mbr-section-
                      -full-height" style="background-image: url(img/casanoturna04.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">

                                    <br><br>
                                    <h1 class="mbr-hero__text">Boate Point</h1>
    <font color="#FFFFFF"><H3 >O point da balada é aqui!</H3>
                               </font></div>
                                <br><br><br><br><br><br>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center">
            <a class="mbr-buttons__btn btn btn-lg btn-default" href="http://www.nightserrana.com.br/bares">Clique e conheça</a>
            <br><br><br><br>
        </div>
                            </div></div>
                        </div>
                    </div>
                </div>



    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

  

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <section id="chopp" class="container text-center">
        <br><br>

<br>
<br>
<br>
         <div class="col-lg-8 col-lg-offset-2">
                <h2>Os bares e choperias da cidade Petropolitana.</h2>
                <ul class="list-inline banner-social-buttons">                    
                    <li>
                <a href="http://www.nightserrana.com.br/bares" class="btn btn-default btn-lg">
                    <i class="fa fa-github fa-fw"></i> <span class="network-name">Ver todas as opções</span></a>
                    </li>                  
                </ul>
        </div>
    
<script>

(function(h,g,c,j,e,l,k){/*! Jssor */
new(function(){});var f={zc:function(a){return-c.cos(a*c.PI)/2+.5},gd:function(a){return a},dd:function(a){return-a*(a-2)},Ee:function(a){return a*a*a},Je:function(a){return a==0?0:c.pow(2,10*(a-1))}},d={R:f.zc,D:f.gd,Tb:f.dd,r:f.Ee,s:f.Je};var b=new function(){var d=this,Bb=/\S+/g,G=1,db=2,hb=3,gb=4,lb=5,H,r=0,i=0,s=0,W=0,z=0,J=navigator,pb=J.appName,o=J.userAgent,p=parseFloat;function zb(){if(!H){H={sf:"ontouchstart"in h||"createTouch"in g};var a;if(J.pointerEnabled||(a=J.msPointerEnabled))H.rd=a?"msTouchAction":"touchAction"}return H}function v(j){if(!r){r=-1;if(pb=="Microsoft Internet Explorer"&&!!h.attachEvent&&!!h.ActiveXObject){var e=o.indexOf("MSIE");r=G;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on W=@_jscript_version@*/;i=g.documentMode||s}else if(pb=="Netscape"&&!!h.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=db;i=p(o.substring(d+8))}else if(b>=0){var k=o.substring(0,b).lastIndexOf("/");r=f>=0?gb:hb;i=p(o.substring(k+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=G;i=s=p(a[1])}}if(c>=0)z=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=lb;i=p(a[2])}}}return j==r}function q(){return v(G)}function R(){return q()&&(i<6||g.compatMode=="BackCompat")}function fb(){return v(hb)}function kb(){return v(lb)}function wb(){return fb()&&z>534&&z<535}function K(){v();return z>537||i>42||r==G&&i>=11}function P(){return q()&&i<9}function xb(a){var b,c;return function(f){if(!b){b=e;var d=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,e){var b=a;if(e)b=g+d;if(f.style[b]!=k)return c=b})}return c}}function vb(b){var a;return function(c){a=a||xb(b)(c)||b;return a}}var L=vb("transform");function ob(a){return{}.toString.call(a)}var F;function Hb(){if(!F){F={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){F["[object "+a+"]"]=a.toLowerCase()})}return F}function n(b,d){var a,c;if(ob(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function C(a){return a==j?String(a):Hb()[ob(a)]||"object"}function mb(a){for(var b in a)return e}function A(a){try{return C(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function sb(b,a){setTimeout(b,a||0)}function I(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function ub(b,a){if(i<9)b.style.filter=a}d.yf=zb;d.sd=q;d.wf=fb;d.vd=kb;d.tf=K;d.mb=P;xb("transform");d.xd=function(){return i};d.qf=function(){v();return z};d.dc=sb;function Z(a){a.constructor===Z.caller&&a.Bd&&a.Bd.apply(a,Z.caller.arguments)}d.Bd=Z;d.Fb=function(a){if(d.vf(a))a=g.getElementById(a);return a};function t(a){return a||h.event}d.Kd=t;d.jc=function(b){b=t(b);var a=b.target||b.srcElement||g;if(a.nodeType==3)a=d.Ed(a);return a};d.Id=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function D(c,d,a){if(a!==k)c.style[d]=a==k?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&h.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function bb(b,c,a,d){if(a!==k){if(a==j)a="";else d&&(a+="px");D(b,c,a)}else return p(D(b,c))}function m(c,a){var d=a?bb:D,b;if(a&4)b=vb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Eb(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Gb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=I(h,[i],d);ub(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var M={a:["rotate"],ab:["rotateX"],bb:["rotateY"],Wb:["skewX"],Vb:["skewY"]};if(!K())M=B(M,{v:["scaleX",2],B:["scaleY",2],ib:["translateZ",1]});function N(d,a){var c="";if(a){if(q()&&i&&i<10){delete a.ab;delete a.bb;delete a.ib}b.j(a,function(d,b){var a=M[b];if(a){var e=a[1]||0;if(O[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(K()){if(a.qb||a.ob||a.ib)c+=" translate3d("+(a.qb||0)+"px,"+(a.ob||0)+"px,"+(a.ib||0)+"px)";if(a.v==k)a.v=1;if(a.B==k)a.B=1;if(a.v!=1||a.B!=1)c+=" scale3d("+a.v+", "+a.B+", 1)"}}d.style[L(d)]=c}d.Nc=m("transformOrigin",4);d.Ve=m("backfaceVisibility",4);d.df=m("transformStyle",4);d.cf=m("perspective",6);d.bf=m("perspectiveOrigin",4);d.je=function(a,b){if(q()&&s<9||s<10&&R())a.style.zoom=b==1?"":b;else{var c=L(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=I(e,[g],f);a.style[c]=d}};d.gc=function(b,a){return function(c){c=t(c);var f=c.type,e=c.relatedTarget||(f=="mouseout"?c.toElement:c.fromElement);(!e||e!==a&&!d.af(a,e))&&b(c)}};d.g=function(a,e,b,c){a=d.Fb(a);if(a.addEventListener){e=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(e,b,c)}else if(a.attachEvent){a.attachEvent("on"+e,b);c&&a.setCapture&&a.setCapture()}};d.V=function(a,c,e,b){a=d.Fb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",e,b);a.removeEventListener(c,e,b)}else if(a.detachEvent){a.detachEvent("on"+c,e);b&&a.releaseCapture&&a.releaseCapture()}};d.Ub=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=e;a.returnValue=l};d.mf=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=e};d.U=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};d.Zb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function nb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(V(a,b)==c)return a;if(!e){var d=nb(a,c,e,b);if(d)return d}}}d.F=nb;function T(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){V(a,b)==d&&c.push(a);if(!f){var e=T(a,d,f,b);if(e.length)c=c.concat(e)}}return c}function ib(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=ib(a,c,d);if(b)return b}}}d.We=ib;function yb(a,c,e){var b=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){(!c||a.tagName==c)&&b.push(a);if(!e){var d=yb(a,c,e);if(d.length)b=b.concat(d)}}return b}d.Xe=yb;d.Ye=function(b,a){return b.getElementsByTagName(a)};function B(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==k){a=c[b];var h=d[b];d[b]=g&&(A(h)||A(a))?B(g,{},h,a):a}}return d}d.G=B;function ab(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(A(a)&&A(b)){a=ab(a,b);e=!mb(a)}!e&&(d[c]=a)}}return d}d.Uc=function(a){return C(a)=="function"};d.vf=function(a){return C(a)=="string"};d.cd=function(a){return!isNaN(p(a))&&isFinite(a)};d.j=n;function S(a){return g.createElement(a)}d.pb=function(){return S("DIV")};d.Qc=function(){};function X(b,c,a){if(a==k)return b.getAttribute(c);b.setAttribute(c,a)}function V(a,b){return X(a,b)||X(a,"data-"+b)}d.M=X;d.o=V;function x(b,a){if(a==k)return b.className;b.className=a}d.Jc=x;function rb(b){var a={};n(b,function(b){a[b]=b});return a}function tb(b,a){return b.match(a||Bb)}function Q(b,a){return rb(tb(b||"",a))}d.ke=tb;function cb(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){x(a,cb(" ",B(ab(Q(x(a)),Q(c)),Q(b))))}d.Ed=function(a){return a.parentNode};d.W=function(a){d.db(a,"none")};d.E=function(a,b){d.db(a,b?"none":"")};d.Xd=function(b,a){b.removeAttribute(a)};d.ie=function(){return q()&&i<10};d.ce=function(d,a){if(a)d.style.clip="rect("+c.round(a.k)+"px "+c.round(a.z)+"px "+c.round(a.C)+"px "+c.round(a.f)+"px)";else if(a!==k){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=I(g,f,"");b.cc(d,e)}};d.gb=function(){return+new Date};d.O=function(b,a){b.appendChild(a)};d.Ob=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};d.ac=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};d.Vd=function(a,b){n(a,function(a){d.ac(a,b)})};d.Zc=function(a){d.Vd(d.Zb(a,e),a)};d.Ud=function(a,b){var c=d.Ed(a);b&1&&d.J(a,(d.q(c)-d.q(a))/2);b&2&&d.K(a,(d.u(c)-d.u(a))/2)};d.ee=function(b,a){return parseInt(b,a||10)};d.de=p;d.af=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return l}return b===a};function Y(e,c,b){var a=e.cloneNode(!c);!b&&d.Xd(a,"id");return a}d.Z=Y;d.xb=function(f,g){var a=new Image;function b(f,e){d.V(a,"load",b);d.V(a,"abort",c);d.V(a,"error",c);g&&g(a,e)}function c(a){b(a,e)}if(kb()&&i<11.6||!f)b(!f);else{d.g(a,"load",b);d.g(a,"abort",c);d.g(a,"error",c);a.src=f}};d.Wd=function(e,a,f){var c=e.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&f&&f(a)}n(e,function(a){d.xb(a.src,b)});b()};d.he=function(a,g,i,h){if(h)a=Y(a);var c=T(a,g);if(!c.length)c=b.Ye(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=Y(i);x(e,x(d));b.cc(e,d.style.cssText);b.Ob(e,d);b.ac(d)}return a};function Ib(a){var l=this,p="",r=["av","pv","ds","dn"],f=[],q,j=0,h=0,e=0;function i(){E(a,q,f[e||j||h&2||h]);b.eb(a,"pointer-events",e?"none":"")}function c(){j=0;i();d.V(g,"mouseup",c);d.V(g,"touchend",c);d.V(g,"touchcancel",c)}function o(a){if(e)d.Ub(a);else{j=4;i();d.g(g,"mouseup",c);d.g(g,"touchend",c);d.g(g,"touchcancel",c)}}l.Rd=function(a){if(a===k)return h;h=a&2||a&1;i()};l.pd=function(a){if(a===k)return!e;e=a?0:3;i()};l.sb=a=d.Fb(a);var m=b.ke(x(a));if(m)p=m.shift();n(r,function(a){f.push(p+a)});q=cb(" ",f);f.unshift("");d.g(a,"mousedown",o);d.g(a,"touchstart",o)}d.fc=function(a){return new Ib(a)};d.eb=D;d.rb=m("overflow");d.K=m("top",2);d.J=m("left",2);d.q=m("width",2);d.u=m("height",2);d.Pd=m("marginLeft",2);d.Ue=m("marginTop",2);d.H=m("position");d.db=m("display");d.N=m("zIndex",1);d.Eb=function(b,a,c){if(a!=k)Gb(b,a,c);else return Eb(b)};d.cc=function(a,b){if(b!=k)a.style.cssText=b;else return a.style.cssText};var U={e:d.Eb,k:d.K,f:d.J,cb:d.q,X:d.u,Ab:d.H,Kf:d.db,Q:d.N};function w(g,l){var f=P(),b=K(),e=wb(),h=L(g);function i(b,d,a){var e=b.tb(u(-d/2,-a/2)),f=b.tb(u(d/2,-a/2)),g=b.tb(u(d/2,a/2)),h=b.tb(u(-d/2,a/2));b.tb(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(e,a){a=a||{};var g=a.ib||0,l=(a.ab||0)%360,m=(a.bb||0)%360,o=(a.a||0)%360,p=a.Jf;if(f){g=0;l=0;m=0;p=0}var c=new Db(a.qb,a.ob,g);c.ab(l);c.bb(m);c.Md(o);c.Td(a.Wb,a.Vb);c.Dc(a.v,a.B,p);if(b){c.vb(a.zb,a.yb);e.style[h]=c.Zd()}else if(!W||W<9){var j="";if(o||a.v!=k&&a.v!=1||a.B!=k&&a.B!=1){var n=i(c,a.lb,a.kb);d.Ue(e,n.y);d.Pd(e,n.x);j=c.ge()}var r=e.style.filter,s=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),q=I(r,[s],j);ub(e,q)}}w=function(f,c){c=c||{};var h=c.zb,i=c.yb,g;n(U,function(a,b){g=c[b];g!==k&&a(f,g)});d.ce(f,c.i);if(!b){h!=k&&d.J(f,c.Ld+h);i!=k&&d.K(f,c.Hd+i)}if(c.Nd)if(e)sb(d.U(j,N,f,c));else a(f,c)};d.Hb=N;if(e)d.Hb=w;if(f)d.Hb=a;else if(!b)a=N;d.I=w;w(g,l)}d.Hb=w;d.I=w;function Db(i,l,p){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,i||0,l||0,p||0,1],h=c.sin,g=c.cos,m=c.tan;function f(a){return a*c.PI/180}function o(a,b){return{x:a,y:b}}function n(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return n.apply(j,(a||b).concat(c))}d.Dc=function(a,c,d){if(a==k)a=1;if(c==k)c=1;if(d==k)d=1;if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.vb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.ab=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.bb=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.Md=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.Td=function(a,c){if(a||c){i=f(a);l=f(c);b=e([1,m(l),0,0,m(i),1,0,0,0,0,1,0,0,0,0,1])}};d.tb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return o(a[12],a[13])};d.Zd=function(){return"matrix3d("+b.join(",")+")"};d.ge=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.v=function(b,c){return a.Cd(b,c,0)};a.B=function(b,c){return a.Cd(b,0,c)};a.Cd=function(a,c,d){return b(a,[[c,0],[0,d]])};a.tb=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var O={Ld:0,Hd:0,zb:0,yb:0,c:1,v:1,B:1,a:0,ab:0,bb:0,qb:0,ob:0,ib:0,Wb:0,Vb:0};d.Dd=function(a){var c=a||{};if(a)if(b.Uc(a))c={oc:c};else if(b.Uc(a.i))c.i={oc:a.i};return c};d.Fd=function(l,m,w,n,y,z,o){var a=m;if(l){a={};for(var g in m){var A=z[g]||1,v=y[g]||[0,1],d=(w-v[0])/v[1];d=c.min(c.max(d,0),1);d=d*A;var u=c.floor(d);if(d!=u)d-=u;var h=n.oc||f.zc,i,B=l[g],q=m[g];if(b.cd(q)){h=n[g]||h;var x=h(d);i=B+q*x}else{i=b.G({Xb:{}},l[g]);b.j(q.Xb||q,function(e,a){if(n.i)h=n.i[a]||n.i.oc||h;var c=h(d),b=e*c;i.Xb[a]=b;i[a]+=b})}a[g]=i}var t=b.j(m,function(b,a){return O[a]!=k});t&&b.j(O,function(c,b){if(a[b]==k&&l[b]!==k)a[b]=l[b]});if(t){if(a.c)a.v=a.B=a.c;a.lb=o.lb;a.kb=o.kb;a.Nd=e}}if(m.i&&o.vb){var p=a.i.Xb,s=(p.k||0)+(p.C||0),r=(p.f||0)+(p.z||0);a.f=(a.f||0)+r;a.k=(a.k||0)+s;a.i.f-=r;a.i.z-=r;a.i.k-=s;a.i.C-=s}if(a.i&&b.ie()&&!a.i.k&&!a.i.f&&a.i.z==o.lb&&a.i.C==o.kb)a.i=j;return a}};function n(){var a=this,d=[];function i(a,b){d.push({nc:a,mc:b})}function g(a,c){b.j(d,function(b,e){b.nc==a&&b.mc===c&&d.splice(e,1)})}a.Lb=a.addEventListener=i;a.removeEventListener=g;a.m=function(a){var c=[].slice.call(arguments,1);b.j(d,function(b){b.nc==a&&b.mc.apply(h,c)})}}var m=function(z,C,i,J,M,L){z=z||0;var a=this,q,n,o,u,A=0,G,H,F,B,y=0,g=0,m=0,D,k,f,d,p,w=[],x;function O(a){f+=a;d+=a;k+=a;g+=a;m+=a;y+=a}function t(o){var h=o;if(p&&(h>=d||h<=f))h=((h-f)%p+p)%p+f;if(!D||u||g!=h){var j=c.min(h,d);j=c.max(j,f);if(!D||u||j!=m){if(L){var l=(j-k)/(C||1);if(i.Jd)l=1-l;var n=b.Fd(M,L,l,G,F,H,i);if(x)b.j(n,function(b,a){x[a]&&x[a](J,b)});else b.I(J,n)}a.qc(m-k,j-k);m=j;b.j(w,function(b,c){var a=o<g?w[w.length-c-1]:b;a.hb(m-y)});var r=g,q=m;g=h;D=e;a.Rb(r,q)}}}function E(a,b,e){b&&a.Sb(d);if(!e){f=c.min(f,a.Lc()+y);d=c.max(d,a.sc()+y)}w.push(a)}var r=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.msRequestAnimationFrame;if(b.wf()&&b.xd()<7)r=j;r=r||function(a){b.dc(a,i.fb)};function I(){if(q){var d=b.gb(),e=c.min(d-A,i.Tc),a=g+e*o;A=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)K(B);else r(I)}}function s(h,i,j){if(!q){q=e;u=j;B=i;h=c.max(h,f);h=c.min(h,d);n=h;o=n<g?-1:1;a.Vc();A=b.gb();r(I)}}function K(b){if(q){u=q=B=l;a.Wc();b&&b()}}a.Yc=function(a,b,c){s(a?g+a:d,b,c)};a.id=s;a.nb=K;a.ae=function(a){s(a)};a.Y=function(){return g};a.ed=function(){return n};a.Cb=function(){return m};a.hb=t;a.vb=function(a){t(g+a)};a.Mc=function(){return q};a.Qd=function(a){p=a};a.Sb=O;a.Oc=function(a,b){E(a,0,b)};a.kc=function(a){E(a,1)};a.Lc=function(){return f};a.sc=function(){return d};a.Rb=a.Vc=a.Wc=a.qc=b.Qc;a.Fc=b.gb();i=b.G({fb:16,Tc:50},i);p=i.Xc;x=i.fe;f=k=z;d=z+C;H=i.A||{};F=i.Ib||{};G=b.Dd(i.l)};var p=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.Sd=function(d){for(var e=[],a,b=0;b<d.S;b++)for(a=0;a<d.n;a++)g(e,c.ceil(1e5*c.random())%13,[b,a]);return e}},s=function(k,s,q,t,y){var d=this,u,g,a,x=0,w=t.Yd,r,h=8;function i(g,d){var a={fb:d,p:1,dc:0,n:1,S:1,e:0,c:0,i:0,vb:l,L:l,Jd:l,be:p.Sd,T:{jb:0,Sc:0},l:f.zc,A:{},Qb:[],Ib:{}};b.G(a,g);a.l=b.Dd(a.l);a.lf=c.ceil(a.p/a.fb);a.gf=function(c,b){c/=a.n;b/=a.S;var f=c+"x"+b;if(!a.Qb[f]){a.Qb[f]={cb:c,X:b};for(var d=0;d<a.n;d++)for(var e=0;e<a.S;e++)a.Qb[f][e+","+d]={k:e*b,z:d*c+c,C:e*b+b,f:d*c}}return a.Qb[f]};if(a.ic){a.ic=i(a.ic,d);a.L=e}return a}function o(B,h,a,w,o,m){var z=this,u,v={},i={},n=[],f,d,s,q=a.T.jb||0,r=a.T.Sc||0,g=a.gf(o,m),p=C(a),D=p.length-1,t=a.p+a.dc*D,x=w+t,k=a.L,y;x+=50;function C(a){var b=a.be(a);return a.Jd?b.reverse():b}z.ad=x;z.ec=function(d){d-=w;var e=d<t;if(e||y){y=e;if(!k)d=t-d;var f=c.ceil(d/a.fb);b.j(i,function(a,e){var d=c.max(f,a.Ze);d=c.min(d,a.length-1);if(a.fd!=d){if(!a.fd&&!k)b.E(n[e]);else d==a.ef&&k&&b.W(n[e]);a.fd=d;b.I(n[e],a[d])}})}};h=b.Z(h);b.Hb(h,j);if(b.mb()){var E=!h["no-image"],A=b.Xe(h);b.j(A,function(a){(E||a["jssor-slider"])&&b.Eb(a,b.Eb(a),e)})}b.j(p,function(h,j){b.j(h,function(G){var K=G[0],J=G[1],t=K+","+J,n=l,p=l,x=l;if(q&&J%2){if(q&3)n=!n;if(q&12)p=!p;if(q&16)x=!x}if(r&&K%2){if(r&3)n=!n;if(r&12)p=!p;if(r&16)x=!x}a.k=a.k||a.i&4;a.C=a.C||a.i&8;a.f=a.f||a.i&1;a.z=a.z||a.i&2;var E=p?a.C:a.k,B=p?a.k:a.C,D=n?a.z:a.f,C=n?a.f:a.z;a.i=E||B||D||C;s={};d={k:0,f:0,e:1,cb:o,X:m};f=b.G({},d);u=b.G({},g[t]);if(a.e)d.e=2-a.e;if(a.Q){d.Q=a.Q;f.Q=0}var I=a.n*a.S>1||a.i;if(a.c||a.a){var H=e;if(b.mb())if(a.n*a.S>1)H=l;else I=l;if(H){d.c=a.c?a.c-1:1;f.c=1;if(b.mb()||b.vd())d.c=c.min(d.c,2);var N=a.a||0;d.a=N*360*(x?-1:1);f.a=0}}if(I){var h=u.Xb={};if(a.i){var w=a.Af||1;if(E&&B){h.k=g.X/2*w;h.C=-h.k}else if(E)h.C=-g.X*w;else if(B)h.k=g.X*w;if(D&&C){h.f=g.cb/2*w;h.z=-h.f}else if(D)h.z=-g.cb*w;else if(C)h.f=g.cb*w}s.i=u;f.i=g[t]}var L=n?1:-1,M=p?1:-1;if(a.x)d.f+=o*a.x*L;if(a.y)d.k+=m*a.y*M;b.j(d,function(a,c){if(b.cd(a))if(a!=f[c])s[c]=a-f[c]});v[t]=k?f:d;var F=a.lf,A=c.round(j*a.dc/a.fb);i[t]=new Array(A);i[t].Ze=A;i[t].ef=A+F-1;for(var z=0;z<=F;z++){var y=b.Fd(f,s,z/F,a.l,a.Ib,a.A,{vb:a.vb,lb:o,kb:m});y.Q=y.Q||1;i[t].push(y)}})});p.reverse();b.j(p,function(a){b.j(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=h;if(e||f)a=b.Z(h);b.I(a,v[d]);b.rb(a,"hidden");b.H(a,"absolute");B.xf(a);n[d]=a;b.E(a,!k)})})}function v(){var b=this,c=0;m.call(b,0,u);b.Rb=function(d,b){if(b-c>h){c=b;a&&a.ec(b);g&&g.ec(b)}};b.bd=r}d.ff=function(){var a=0,b=t.Kb,d=b.length;if(w)a=x++%d;else a=c.floor(c.random()*d);b[a]&&(b[a].ub=a);return b[a]};d.of=function(w,x,l,m,b){r=b;b=i(b,h);var j=m.hd,f=l.hd;j["no-image"]=!m.Nb;f["no-image"]=!l.Nb;var n=j,p=f,v=b,e=b.ic||i({},h);if(!b.L){n=f;p=j}var t=e.Sb||0;g=new o(k,p,e,c.max(t-e.fb,0),s,q);a=new o(k,n,v,c.max(e.fb-t,0),s,q);g.ec(0);a.ec(0);u=c.max(g.ad,a.ad);d.ub=w};d.Jb=function(){k.Jb();g=j;a=j};d.hf=function(){var b=j;if(a)b=new v;return b};if(b.mb()||b.vd()||y&&b.qf()<537)h=16;n.call(d);m.call(d,-1e7,1e7)},i=function(p,fc){var d=this;function Bc(){var a=this;m.call(a,-1e8,2e8);a.kf=function(){var b=a.Cb(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{ub:f,pf:d,Ab:e}};a.Rb=function(b,a){var f=c.floor(a);if(f!=a&&a>b)f++;Ub(f,e);d.m(i.rf,t(a),t(b),a,b)}}function Ac(){var a=this;m.call(a,0,0,{Xc:q});b.j(C,function(b){D&1&&b.Qd(q);a.kc(b);b.Sb(ib/bc)})}function zc(){var a=this,b=Tb.sb;m.call(a,-1,2,{l:f.gd,fe:{Ab:Zb},Xc:q},b,{Ab:1},{Ab:-2});a.bc=b}function nc(o,n){var b=this,f,g,h,k,c;m.call(b,-1e8,2e8,{Tc:100});b.Vc=function(){M=e;S=j;d.m(i.uf,t(w.Y()),w.Y())};b.Wc=function(){M=l;k=l;var a=w.kf();d.m(i.nf,t(w.Y()),w.Y());!a.Ab&&Dc(a.pf,s)};b.Rb=function(i,e){var b;if(k)b=c;else{b=g;if(h){var d=e/h;b=a.zf(d)*(g-f)+f}}w.hb(b)};b.Yb=function(a,d,c,e){f=a;g=d;h=c;w.hb(a);b.hb(0);b.id(c,e)};b.jf=function(a){k=e;c=a;b.Yc(a,j,e)};b.Te=function(a){c=a};w=new Bc;w.Oc(o);w.Oc(n)}function pc(){var c=this,a=Xb();b.N(a,0);b.eb(a,"pointerEvents","none");c.sb=a;c.xf=function(c){b.O(a,c);b.E(a)};c.Jb=function(){b.W(a);b.Zc(a)}}function xc(o,g){var f=this,r,L,v,k,y=[],x,B,W,G,Q,F,h,w,p;m.call(f,-u,u+1,{});function E(a){r&&r.nd();T(o,a,0);F=e;r=new I.P(o,I,b.de(b.o(o,"idle"))||lc);r.hb(0)}function Z(){r.Fc<I.Fc&&E()}function M(p,r,o){if(!G){G=e;if(k&&o){var h=o.width,c=o.height,n=h,m=c;if(h&&c&&a.wb){if(a.wb&3&&(!(a.wb&4)||h>K||c>J)){var j=l,q=K/J*c/h;if(a.wb&1)j=q>1;else if(a.wb&2)j=q<1;n=j?h*J/c:K;m=j?J:c*K/h}b.q(k,n);b.u(k,m);b.K(k,(J-m)/2);b.J(k,(K-n)/2)}b.H(k,"absolute");d.m(i.Ae,g)}}b.W(r);p&&p(f)}function Y(b,c,d,e){if(e==S&&s==g&&N)if(!Cc){var a=t(b);A.of(a,g,c,f,d);c.ye();U.Sb(a-U.Lc()-1);U.hb(a);z.Yb(b,b,0)}}function cb(b){if(b==S&&s==g){if(!h){var a=j;if(A)if(A.ub==g)a=A.hf();else A.Jb();Z();h=new vc(o,g,a,r);h.ld(p)}!h.Mc()&&h.hc()}}function R(d,e,l){if(d==g){if(d!=e)C[e]&&C[e].xe();else!l&&h&&h.we();p&&p.pd();var m=S=b.gb();f.xb(b.U(j,cb,m))}else{var k=c.min(g,d),i=c.max(g,d),o=c.min(i-k,k+q-i),n=u+a.ve-1;(!Q||o<=n)&&f.xb()}}function db(){if(s==g&&h){h.nb();p&&p.ue();p&&p.te();h.zd()}}function eb(){s==g&&h&&h.nb()}function ab(a){!P&&d.m(i.se,g,a)}function O(){p=w.pInstance;h&&h.ld(p)}f.xb=function(c,a){a=a||v;if(y.length&&!G){b.E(a);if(!W){W=e;d.m(i.re,g);b.j(y,function(a){if(!b.M(a,"src")){a.src=b.o(a,"src2");b.db(a,a["display-origin"])}})}b.Wd(y,k,b.U(j,M,c,a))}else M(c,a)};f.qe=function(){var h=g;if(a.jd<0)h-=q;var d=h+a.jd*tc;if(D&2)d=t(d);if(!(D&1))d=c.max(0,c.min(d,q-u));if(d!=g){if(A){var e=A.ff(q);if(e){var i=S=b.gb(),f=C[t(d)];return f.xb(b.U(j,Y,d,f,e,i),v)}}bb(d)}};f.Ec=function(){R(g,g,e)};f.xe=function(){p&&p.ue();p&&p.te();f.md();h&&h.pe();h=j;E()};f.ye=function(){b.W(o)};f.md=function(){b.E(o)};f.oe=function(){p&&p.pd()};function T(a,c,d){if(b.M(a,"jssor-slider"))return;if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.M(a,"src")){Q=e;a["display-origin"]=b.db(a);b.W(a)}}b.mb()&&b.N(a,(b.N(a)||0)+1)}var f=b.Zb(a);b.j(f,function(f){var h=f.tagName,i=b.o(f,"u");if(i=="player"&&!w){w=f;if(w.pInstance)O();else b.g(w,"dataavailable",O)}if(i=="caption"){if(c){b.Nc(f,b.o(f,"to"));b.Ve(f,b.o(f,"bf"));b.o(f,"3d")&&b.df(f,"preserve-3d")}else if(!b.sd()){var g=b.Z(f,l,e);b.Ob(g,f,a);b.ac(f,a);f=g;c=e}}else if(!F&&!d&&!k){if(h=="A"){if(b.o(f,"u")=="image")k=b.We(f,"IMG");else k=b.F(f,"image",e);if(k){x=f;b.db(x,"block");b.I(x,V);B=b.Z(x,e);b.H(x,"relative");b.Eb(B,0);b.eb(B,"backgroundColor","#000")}}else if(h=="IMG"&&b.o(f,"u")=="image")k=f;if(k){k.border=0;b.I(k,V)}}T(f,c,d+1)})}f.qc=function(c,b){var a=u-b;Zb(L,a)};f.ub=g;n.call(f);b.cf(o,b.o(o,"p"));b.bf(o,b.o(o,"po"));var H=b.F(o,"thumb",e);if(H){f.ne=b.Z(H);b.W(H)}b.E(o);v=b.Z(fb);b.N(v,1e3);b.g(o,"click",ab);E(e);f.Nb=k;f.od=B;f.hd=o;f.bc=L=o;b.O(L,v);d.Lb(203,R);d.Lb(28,eb);d.Lb(24,db)}function vc(y,g,p,q){var a=this,n=0,u=0,h,j,f,c,k,t,r,o=C[g];m.call(a,0,0);function v(){b.Zc(L);cc&&k&&o.od&&b.O(L,o.od);b.E(L,!k&&o.Nb)}function w(){a.hc()}function x(b){r=b;a.nb();a.hc()}a.hc=function(){var b=a.Cb();if(!B&&!M&&!r&&s==g){if(!b){if(h&&!k){k=e;a.zd(e);d.m(i.me,g,n,u,h,c)}v()}var l,p=i.qd;if(b!=c)if(b==f)l=c;else if(b==j)l=f;else if(!b)l=j;else l=a.ed();d.m(p,g,b,n,j,f,c);var m=N&&(!E||F);if(b==c)(f!=c&&!(E&12)||m)&&o.qe();else(m||b!=f)&&a.id(l,w)}};a.we=function(){f==c&&f==a.Cb()&&a.hb(j)};a.pe=function(){A&&A.ub==g&&A.Jb();var b=a.Cb();b<c&&d.m(i.qd,g,-b-1,n,j,f,c)};a.zd=function(a){p&&b.rb(jb,a&&p.bd.If?"":"hidden")};a.qc=function(b,a){if(k&&a>=h){k=l;v();o.md();A.Jb();d.m(i.le,g,n,u,h,c)}d.m(i.ze,g,a,n,j,f,c)};a.ld=function(a){if(a&&!t){t=a;a.Lb($JssorPlayer$.Od,x)}};p&&a.kc(p);h=a.sc();a.kc(q);j=h+q.td;f=h+q.ud;c=a.sc()}function Kb(a,c,d){b.J(a,c);b.K(a,d)}function Zb(c,b){var a=x>0?x:eb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){pb=M;Ib=z.ed();G=w.Y()}function gc(){Pb();if(B||!F&&E&12){z.nb();d.m(i.Be)}}function ec(f){if(!B&&(F||!(E&12))&&!z.Mc()){var d=w.Y(),b=c.ceil(G);if(f&&c.abs(H)>=a.wd){b=c.ceil(d);b+=hb}if(!(D&1))b=c.min(q-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&pb)z.ae(Ib);else if(d==b){sb.oe();sb.Ec()}else z.Yb(d,b,e*Vb)}}function Hb(a){!b.o(b.jc(a),"nodrag")&&b.Ub(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.Kd(a);var k=b.jc(a);if(!O&&!b.o(k,"nodrag")&&sc()&&(!c||a.touches.length==1)){B=e;yb=l;S=j;b.g(g,c?"touchmove":"mousemove",Bb);b.gb();P=0;gc();if(!pb)x=0;if(c){var h=a.touches[0];ub=h.clientX;vb=h.clientY}else{var f=b.Id(a);ub=f.x;vb=f.y}H=0;gb=0;hb=0;d.m(i.Se,t(G),G,a)}}function Bb(d){if(B){d=b.Kd(d);var f;if(d.type!="mousemove"){var l=d.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.Id(d);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||eb&O;if((j||k)&&!x){if(O==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=O;if(mb&&x==1&&c.abs(k)-c.abs(j)>3)yb=e}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(q-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-gb<-2)hb=0;else if(H-gb>2)hb=-1;gb=H;H=a;rb=G-H/i/(Y||1);if(H&&x&&!yb){b.Ub(d);if(!M)z.jf(rb);else z.Te(rb)}}}}}function ab(){qc();if(B){B=l;b.gb();b.V(g,"mousemove",Bb);b.V(g,"touchmove",Bb);P=H;z.nb();var a=w.Y();d.m(i.Ce,t(a),a,t(G),G);E&12&&Pb();ec(e)}}function jc(c){if(P){b.mf(c);var a=b.jc(c);while(a&&v!==a){a.tagName=="A"&&b.Ub(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){C[s];s=t(a);sb=C[s];Ub(a);return s}function Dc(a,b){x=0;Jb(a);d.m(i.Re,t(a),b)}function Ub(a,c){wb=a;b.j(T,function(b){b.vc(t(a),a,c)})}function sc(){var b=i.yd||0,a=X;if(mb)a&1&&(a&=1);i.yd|=a;return O=a&~b}function qc(){if(O){i.yd&=~X;O=0}}function Xb(){var a=b.pb();b.I(a,V);b.H(a,"absolute");return a}function t(a){return(a%q+q)%q}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),q-u);d=l}else if(D&2){b=t(b+wb);d=l}bb(b,a.uc,d)}function xb(){b.j(T,function(a){a.tc(a.Mb.Hf<=F)})}function hc(){if(!F){F=1;xb();if(!B){E&12&&ec();E&3&&C[s].Ec()}}}function Ec(){if(F){F=0;xb();B||!(E&12)||gc()}}function ic(){V={cb:K,X:J,k:0,f:0};b.j(Q,function(a){b.I(a,V);b.H(a,"absolute");b.rb(a,"hidden");b.W(a)});b.I(fb,V)}function ob(b,a){bb(b,a,e)}function bb(g,f,j){if(Rb&&(!B&&(F||!(E&12))||a.Ad)){M=e;B=l;z.nb();if(f==k)f=Vb;var d=Cb.Cb(),b=g;if(j){b=d+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,q-u));var i=(b-d)%q;b=d+i;var h=d==b?0:f*c.abs(i);h=c.min(h,f*u*1.5);z.Yb(d,b,h||1)}}d.Qe=bb;d.Yc=function(){if(!N){N=e;C[s]&&C[s].Ec()}};d.Oe=function(){return P};function W(){return b.q(y||p)}function lb(){return b.u(y||p)}d.lb=W;d.kb=lb;function Eb(c,d){if(c==k)return b.q(p);if(!y){var a=b.pb(g);b.Jc(a,b.Jc(p));b.cc(a,b.cc(p));b.db(a,"block");b.H(a,"relative");b.K(a,0);b.J(a,0);b.rb(a,"visible");y=b.pb(g);b.H(y,"absolute");b.K(y,0);b.J(y,0);b.q(y,b.q(p));b.u(y,b.u(p));b.Nc(y,"0 0");b.O(y,a);var h=b.Zb(p);b.O(p,y);b.eb(p,"backgroundImage","");b.j(h,function(c){b.O(b.o(c,"noscale")?p:a,c);b.o(c,"autocenter")&&Mb.push(c)})}Y=c/(d?b.u:b.q)(y);b.je(y,Y);var f=d?Y*W():c,e=d?c:Y*lb();b.q(p,f);b.u(p,e);b.j(Mb,function(a){var c=b.ee(b.o(a,"autocenter"));b.Ud(a,c)})}d.Ne=Eb;d.kd=function(a){var d=c.ceil(t(ib/bc)),b=t(a-s+d);if(b>u){if(a-s>q/2)a-=q;else if(a-s<=-q/2)a+=q}else a=s+b-d;return a};n.call(d);d.sb=p=b.Fb(p);var a=b.G({wb:0,ve:1,lc:1,Ac:0,wc:l,Pb:1,Gb:e,Ad:e,jd:1,Hc:3e3,Ic:1,uc:500,zf:f.dd,wd:20,Kc:0,n:1,pc:0,Me:1,rc:1,Rc:1},fc);a.Gb=a.Gb&&b.tf();if(a.Le!=k)a.Hc=a.Le;if(a.Ke!=k)a.pc=a.Ke;var eb=a.rc&3,tc=(a.rc&4)/-4||1,kb=a.Pe,I=b.G({P:r,Gb:a.Gb},a.Cf);I.Kb=I.Kb||I.Bf;var Fb=a.Gf,Z=a.Ie,db=a.He,R=!a.Me,y,v=b.F(p,"slides",R),fb=b.F(p,"loading",R)||b.pb(g),Nb=b.F(p,"navigator",R),dc=b.F(p,"arrowleft",R),ac=b.F(p,"arrowright",R),Lb=b.F(p,"thumbnavigator",R),oc=b.q(v),mc=b.u(v),V,Q=[],uc=b.Zb(v);b.j(uc,function(a){if(a.tagName=="DIV"&&!b.o(a,"u"))Q.push(a);else b.mb()&&b.N(a,(b.N(a)||0)+1)});var s=-1,wb,sb,q=Q.length,K=a.Ge||oc,J=a.Fe||mc,Wb=a.Kc,zb=K+Wb,Ab=J+Wb,bc=eb&1?zb:Ab,u=c.min(a.n,q),jb,x,O,yb,T=[],Qb,Sb,Ob,cc,Cc,N,E=a.Ic,lc=a.Hc,Vb=a.uc,qb,tb,ib,Rb=u<q,D=Rb?a.Pb:0,X,P,F=1,M,B,S,ub=0,vb=0,H,gb,hb,Cb,w,U,z,Tb=new pc,Y,Mb=[];if(a.Gb)Kb=function(a,c,d){b.Hb(a,{qb:c,ob:d})};N=a.wc;d.Mb=fc;ic();b.M(p,"jssor-slider",e);b.N(v,b.N(v)||0);b.H(v,"absolute");jb=b.Z(v,e);b.Ob(jb,v);if(kb){cc=kb.Df;qb=kb.P;tb=u==1&&q>1&&qb&&(!b.sd()||b.xd()>=8)}ib=tb||u>=q||!(D&1)?0:a.pc;X=(u>1||ib?eb:-1)&a.Rc;var Gb=v,C=[],A,L,Db=b.yf(),mb=Db.sf,G,pb,Ib,rb;Db.rd&&b.eb(Gb,Db.rd,([j,"pan-y","pan-x","none"])[X]||"");U=new zc;if(tb)A=new qb(Tb,K,J,kb,mb);b.O(jb,U.bc);b.rb(v,"hidden");L=Xb();b.eb(L,"backgroundColor","#000");b.Eb(L,0);b.Ob(L,Gb.firstChild,Gb);for(var cb=0;cb<Q.length;cb++){var wc=Q[cb],yc=new xc(wc,cb);C.push(yc)}b.W(fb);Cb=new Ac;z=new nc(Cb,U);if(X){b.g(v,"mousedown",Yb);b.g(v,"touchstart",rc);b.g(v,"dragstart",Hb);b.g(v,"selectstart",Hb);b.g(g,"mouseup",ab);b.g(g,"touchend",ab);b.g(g,"touchcancel",ab);b.g(h,"blur",ab)}E&=mb?10:5;if(Nb&&Fb){Qb=new Fb.P(Nb,Fb,W(),lb());T.push(Qb)}if(Z&&dc&&ac){Z.Pb=D;Z.n=u;Sb=new Z.P(dc,ac,Z,W(),lb());T.push(Sb)}if(Lb&&db){db.Ac=a.Ac;Ob=new db.P(Lb,db);T.push(Ob)}b.j(T,function(a){a.xc(q,C,fb);a.Lb(o.yc,kc)});b.eb(p,"visibility","visible");Eb(W());b.g(v,"click",jc);b.g(p,"mouseout",b.gc(hc,p));b.g(p,"mouseover",b.gc(Ec,p));xb();a.lc&&b.g(g,"keydown",function(b){if(b.keyCode==37)ob(-a.lc);else b.keyCode==39&&ob(a.lc)});var nb=a.Ac;if(!(D&1))nb=c.max(0,c.min(nb,q-u));z.Yb(nb,nb,0)};i.se=21;i.Se=22;i.Ce=23;i.uf=24;i.nf=25;i.re=26;i.Ae=27;i.Be=28;i.rf=202;i.Re=203;i.me=206;i.le=207;i.ze=208;i.qd=209;var o={yc:1};var t=function(a,g,h){var c=this;n.call(c);var r,q,d,f,i;b.q(a);b.u(a);function k(a){c.m(o.yc,a,e)}function p(c){b.E(a,c||!h.Pb&&d==0);b.E(g,c||!h.Pb&&d>=q-h.n);r=c}c.vc=function(b,a,c){if(c)d=a;else{d=b;p(r)}};c.tc=p;var m;c.xc=function(c){q=c;d=0;if(!m){b.g(a,"click",b.U(j,k,-i));b.g(g,"click",b.U(j,k,i));b.fc(a);b.fc(g);m=e}};c.Mb=f=b.G({De:1},h);i=f.De;if(f.Dc==l){b.M(a,"noscale",e);b.M(g,"noscale",e)}if(f.Bb){b.M(a,"autocenter",f.Bb);b.M(g,"autocenter",f.Bb)}},q=function(g,B){var h=this,z,p,a,v=[],x,w,d,q,r,u,t,m,s,f,k;n.call(h);g=b.Fb(g);function A(n,f){var g=this,c,m,l;function q(){m.Rd(p==f)}function i(e){if(e||!s.Oe()){var a=d-f%d,b=s.kd((f+a)/d-1),c=b*d+d-a;h.m(o.yc,c)}}g.ub=f;g.Pc=q;l=n.ne||n.Nb||b.pb();g.bc=c=b.he(k,"thumbnailtemplate",l,e);m=b.fc(c);a.Gc&1&&b.g(c,"click",b.U(j,i,0));a.Gc&2&&b.g(c,"mouseover",b.gc(b.U(j,i,1),c))}h.vc=function(b,e,f){var a=p;p=b;a!=-1&&v[a].Pc();v[b].Pc();!f&&s.Qe(s.kd(c.floor(e/d)))};h.tc=function(a){b.E(g,a)};var y;h.xc=function(D,C){if(!y){z=D;c.ceil(z/d);p=-1;m=c.min(m,C.length);var h=a.Db&1,n=u+(u+q)*(d-1)*(1-h),k=t+(t+r)*(d-1)*h,B=n+(n+q)*(m-1)*h,o=k+(k+r)*(m-1)*(1-h);b.H(f,"absolute");b.rb(f,"hidden");a.Bb&1&&b.J(f,(x-B)/2);a.Bb&2&&b.K(f,(w-o)/2);b.q(f,B);b.u(f,o);var j=[];b.j(C,function(l,g){var i=new A(l,g),e=i.bc,a=c.floor(g/d),k=g%d;b.J(e,(u+q)*k*(1-h));b.K(e,(t+r)*k*h);if(!j[a]){j[a]=b.pb();b.O(f,j[a])}b.O(j[a],e);v.push(i)});var E=b.G({wc:l,Ad:l,Ge:n,Fe:k,Kc:q*h+r*(1-h),wd:12,uc:200,Ic:1,rc:a.Db,Rc:a.Ef||a.Ff?0:a.Db},a);s=new i(g,E);y=e}};h.Mb=a=b.G({Bc:0,Cc:0,n:1,Db:1,Bb:3,Gc:1},B);x=b.q(g);w=b.u(g);f=b.F(g,"slides",e);k=b.F(f,"prototype");u=b.q(k);t=b.u(k);b.ac(k,f);d=a.S||1;q=a.Bc;r=a.Cc;m=a.n;a.Dc==l&&b.M(g,"noscale",e)};function r(e,d,c){var a=this;m.call(a,0,c);a.nd=b.Qc;a.td=0;a.ud=c}jssor_1_slider_init=function(){var g=[{p:1200,c:1,l:{c:d.r,e:d.Tb},e:2},{p:1e3,c:11,L:e,l:{c:d.s,e:d.D},e:2},{p:1200,c:1,a:1,Ib:{c:[.2,.8],a:[.2,.8]},l:{c:d.R,e:d.D,a:d.R},e:2,A:{a:.5}},{p:1e3,c:11,a:1,L:e,l:{c:d.s,e:d.D,a:d.s},e:2,A:{a:.8}},{p:1200,x:.5,n:2,c:1,T:{jb:15},l:{f:d.r,c:d.r,e:d.D},e:2},{p:1200,x:4,n:2,c:11,L:e,T:{jb:15},l:{f:d.s,c:d.s,e:d.D},e:2},{p:1200,x:.6,c:1,a:1,Ib:{f:[.2,.8],c:[.2,.8],a:[.2,.8]},l:{f:d.R,c:d.R,e:d.D,a:d.R},e:2,A:{a:.5}},{p:1e3,x:-4,c:11,a:1,L:e,l:{f:d.s,c:d.s,e:d.D,a:d.s},e:2,A:{a:.8}},{p:1200,x:-.6,c:1,a:1,Ib:{f:[.2,.8],c:[.2,.8],a:[.2,.8]},l:{f:d.R,c:d.R,e:d.D,a:d.R},e:2,A:{a:.5}},{p:1e3,x:4,c:11,a:1,L:e,l:{f:d.s,c:d.s,e:d.D,a:d.s},e:2,A:{a:.8}},{p:1200,x:.5,y:.3,n:2,c:1,a:1,T:{jb:15},l:{f:d.r,k:d.r,c:d.r,e:d.Tb,a:d.r},e:2,A:{a:.7}},{p:1e3,x:.5,y:.3,n:2,c:1,a:1,L:e,T:{jb:15},l:{f:d.s,k:d.s,c:d.s,e:d.D,a:d.s},e:2,A:{a:.7}},{p:1200,x:-4,y:2,S:2,c:11,a:1,T:{Sc:28},l:{f:d.r,k:d.r,c:d.r,e:d.Tb,a:d.r},e:2,A:{a:.7}},{p:1200,x:1,y:2,n:2,c:11,a:1,T:{jb:19},l:{f:d.r,k:d.r,c:d.r,e:d.Tb,a:d.r},e:2,A:{a:.8}}],j={wc:e,Pe:{P:s,Kb:g,Yd:1},Ie:{P:t},He:{P:q,S:2,n:6,Bc:14,Cc:12,Db:2,pc:156}},f=new i("jssor_1",j);function a(){var b=f.sb.parentNode.clientWidth;if(b){b=c.min(b,960);b=c.max(b,300);f.Ne(b)}else h.setTimeout(a,30)}a();b.g(h,"load",a);b.g(h,"resize",a);b.g(h,"orientationchange",a)}})(window,document,Math,null,true,false)

</script>

<style>

.jssora05l,.jssora05r{display:block;position:absolute;width:40px;height:40px;cursor:pointer;background:url('img/a17.png') no-repeat;overflow:hidden}.jssora05l{background-position:-10px -40px}.jssora05r{background-position:-70px -40px}.jssora05l:hover{background-position:-130px -40px}.jssora05r:hover{background-position:-190px -40px}.jssora05l.jssora05ldn{background-position:-250px -40px}.jssora05r.jssora05rdn{background-position:-310px -40px}.jssort01-99-66 .p{position:absolute;top:0;left:0;width:99px;height:66px}.jssort01-99-66 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none}.jssort01-99-66 .w{position:absolute;top:0;left:0;width:100%;height:100%}.jssort01-99-66 .c{position:absolute;top:0;left:0;width:95px;height:62px;border:#000 2px solid;box-sizing:content-box;background:url('img/t01.png') -800px -800px no-repeat;_background:none}.jssort01-99-66 .pav .c{top:2px;_top:0;left:2px;_left:0;width:95px;height:62px;border:#000 0 solid;_border:#fff 2px solid;background-position:50% 50%}.jssort01-99-66 .p:hover .c{top:0;left:0;width:97px;height:64px;border:#fff 1px solid;background-position:50% 50%}.jssort01-99-66 .p.pdn .c{background-position:50% 50%;width:95px;height:62px;border:#000 2px solid}* html .jssort01-99-66 .c,* html .jssort01-99-66 .pdn .c,* html .jssort01-99-66 .pav .c{width:99px;height:66px}

</style>

<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
<!-- Loading Screen -->
<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
</div>
<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
<div data-p="150.00" style="display: none;">   
<img data-u="image" src="img/bares/01.jpg" /> <a href="http://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                   
<img data-u="thumb" src="img/bares/thumb-01.jpg" />
</div>
<div data-p="150.00" style="display: none;">
 <a href="http://www.nightserrana.com.br"><img data-u="image" src="img/bares/02.jpg" /></a>
<img data-u="thumb" src="img/bares/thumb-02.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<a href="http://www.nightserrana.com.br"><img data-u="image" src="img/bares/03.jpg" /></a>
<img data-u="thumb" src="img/bares/thumb-03.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<a href="http://www.nightserrana.com.br"><img data-u="image" src="img/bares/04.jpg" /></a>

<img data-u="thumb" src="img/bares/thumb-04.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<a href="http://www.nightserrana.com.br"><img data-u="image" src="img/bares/05.jpg" /></a>
 
<img data-u="thumb" src="img/bares/thumb-05.jpg"/>
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/06.jpg" />
<img data-u="thumb" src="img/bares/thumb-06.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/07.jpg" />
<img data-u="thumb" src="img/bares/thumb-07.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/08.jpg" />
<img data-u="thumb" src="img/bares/thumb-08.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/09.jpg" />
<img data-u="thumb" src="img/bares/thumb-09.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/10.jpg" />
<img data-u="thumb" src="img/bares/thumb-10.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/11.jpg" />
<img data-u="thumb" src="img/bares/thumb-11.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/12.jpg" />
<img data-u="thumb" src="img/bares/thumb-12.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/13.jpg" />
<img data-u="thumb" src="img/bares/thumb-13.jpg" />
</div>
<div data-p="150.00" style="display: none;">
<img data-u="image" src="img/bares/14.jpg" />
<img data-u="thumb" src="img/bares/thumb-14.jpg" />
</div>
</div>
<!-- Thumbnail Navigator -->
<div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:full;" data-autocenter="2">
<!-- Thumbnail Item Skin Begin -->
<div data-u="slides" style="cursor: default;">
<div data-u="prototype" class="p">
<div class="w">
<div data-u="thumbnailtemplate" class="t"></div>
</div>
<div class="c"></div>
</div>
</div>
<!-- Thumbnail Item Skin End -->
</div>
<!-- Arrow Navigator -->
<span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" 
data-autocenter="2"></span>
<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" 
data-autocenter="2"></span>
</div>



<script>
jssor_1_slider_init();
</script>
    </section>


<br><br>
   


<section id="restaurante" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <font color="black"><h2>Conheça os Resturantes.</h2></font>
                    <font color="black"><p>Veja todos os detalhes abaixo.</p></font>
                    <a href="http://www.nightserrana.com.br/bares" class="btn btn-default btn-lg">Visitar Restaurantes.</a>
                </div>
            </div>
        </div>
    </section>

    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>







     <!-- Contact Section -->
    <section id="contact" class="container  text-center">
      <br><br><br>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contato da NightSerrana</h2>
                <p>Se um de nossos representantes ainda não entrou em contato, não perca tempo, preencha o formulário abaixo e entre em contato conosco!!!</p>
            
                <p><a href="mailto:feedback@nightserrana.com">feedback@nightserrana.com.br</a>
                </p>
              
 <div class="col-sm-12">
                <div class="row">
<div class="col-lg-8 col-lg-offset-2">
   <form action="enviar.php"  class="form-horizontal" role="form" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome"></label>
      
        <input type="text" class="form-control" name="nomeremetente" placeholder="Seu Nome">
      
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"></label>
      
        <input type="text" class="form-control" name="emailremetente" placeholder="Seu email">
      
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="telefone"></label>
      
        <input type="text" class="form-control" name="telefone" placeholder="Seu Telefone">
      
  </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="assunto"></label>
      
        <input type="text" class="form-control" name="assunto" placeholder="Seu Assunto">
      
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="msg"></label>
                
        <textarea  type="text" class="form-control" name="mensagem"  rows="7" placeholder="Sua Mensagem"></textarea>
      
    </div>
  
    <div class="mbr-buttons mbr-buttons--right">
<button name="enviar" type="submit" class="btn btn-default btn-lg">Enviar</button></div>
   
    </div>
  </form>
</div>
                  
        
            </div>
        </div>
    </section>





<br><br>
  
<?php 
require_once('footer.php'); ?>
    
    


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at http://developers.google.com/maps/ -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
