<link rel="stylesheet" type="text/css" href="/skins/gro-base-08/layout.css" />
<h1 class="accesibility">Portal Oficial del Gobierno del Estado de Guerrero</h1>
<div class="accesibility"><a href="#content">Ir al contenido</a></div>
<!-- Inicia encabezado -->
<div id="encabezado%%CODE%% $P = $base->getVariable('P'); if ('inicio' == $P || empty($P)) {$TEXT .= '-main';}%%ENDCODE%%">
    <div id="encabezado-pleca">
       <div>
           <a href="/?P=readart&amp;ArtOrder=ReadArt&amp;Article=3775">RSS <img src="/skins/icons/feed.gif" alt="Rss" width="12" height="11" /></a> | <a href="/?P=mapa">Mapa del sitio</a>
       </div>
    </div>
    
    <div id="encabezado-redes">
       <div>
           <img style="width:126px" src="/skins/icons/comunidades.jpg" alt="Siguenos en las redes sociales" width="14" height="14" /> 
           <a href="http://www.facebook.com/portalguerrero"><img src="/skins/icons/facebook.jpg" alt="Facebook" width="14" height="14" /></a> 
           <a href="http://twitter.com/portalguerrero"><img src="/skins/icons/twitter.jpg" alt="Twitter" width="14" height="14" /></a> 
           <a href="http://www.youtube.com/portalguerrero"><img src="/skins/icons/youtube.jpg" alt="Youtube" width="14" height="14" /></a> 
           <a href="http://www.myspace.com/portalguerrero"><img src="/skins/icons/myspace.jpg" alt="MySpace" width="14" height="14" /></a>
       </div>
    </div>
    
    <div id="logo"><a href="/"><img src="/skins/images/spacer.gif" alt="Ir al inicio" /></a></div>
    <div id="welcome">
        <h2>Bienvenidos al portal del Gobierno del Estado de Guerrero</h2>
        <div id="buscador">
            <form method="get" action="http://www.google.com/custom" enctype="application/x-www-form-urlencoded" name="busqueda">
            <label for="q">Buscador</label>
            <input name="q" type="text" id="q" accesskey="2" size="20"  />
            <input type="submit" value="Buscar" />          
            <input type="hidden" name="domains" value="www.guerrero.gob.mx" />
            <input type="hidden" name="sitesearch" value="www.guerrero.gob.mx" />
            <input type="hidden" name="cof" value="S:http://www.guerrero.gob.mx;VLC:#4A79B2;AH:left;BGC:white;LH:120;LC:#0000FF;L:http://www.guerrero.gob.mx/skins/gro-base-08/buscador.php?P=%%CODE%% $TEXT .= $base->getVariable('P'); $TEXT .= '&amp;key=' . $base->getVariable('key'); %%ENDCODE%%;ALC:#FFE56C;LW:771;T:#000000;" />
            <input type="hidden" name="P" value="%%CODE%% $TEXT .= $base->getVariable('P'); %%ENDCODE%%" />
            <input type="hidden" name="key" value="%%CODE%% $TEXT .= $base->getVariable('key'); %%ENDCODE%%" />
            </form>
        </div>
    </div>
</div>
<!-- fin encabezado -->