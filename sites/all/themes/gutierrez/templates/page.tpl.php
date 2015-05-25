 <!--.l-header region -->
 <?php 
   global $base_url;
 ?>
  <header role="banner" class="l-header">
    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
      <!-- <div class="test"></div> -->
        <nav class="top-bar"<?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
          </ul>
          <section class="top-bar-section right">
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) :?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>          
        </nav>
        <div class="toggle">
           <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
</div>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
    <section class="row <?php print $alt_header_classes; ?>">

      <?php if ($linked_logo): print $linked_logo; endif; ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name" class="element-invisible">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>

    </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region">
        <div class="large-12">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>


  </header>



<!--.page -->
<div role="document" class="page">

  <?php if (drupal_is_front_page() && isset($background)): ?>
    <div class="page-background" style="background-image:<?php print 'url(' . $background . ')'; ?> ">
          <?php if (!empty($page['featured']) || !drupal_is_front_page()): ?>
    <!--/.featured -->
    <div class="opacity">
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

    </div>
    </div>  
  <?php endif; ?>

 
  <!--/.l-header -->



  <main role="main" class="row l-main">


    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>

        </div>
      <?php endif; ?>

      <a id="main-content"></a>

     

      <?php if ($title && !$is_front): ?>
         <?php 
            $tid = $node->field_categorisation['und'][0]['tid'];
            $taxonomy_term = taxonomy_term_load($tid);
        ?>
        <span class="category"><?php print $taxonomy_term->name; ?></span>

        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_ads'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-third columns sidebar">
        <?php print render($page['sidebar_ads']); ?>
      </aside>
    <?php endif; ?>

    <?php if(!$is_front): ?>
      <?php hide($content['sidebar_second']); ?>
      <?php print render($content); ?>
    <?php endif; ?>
  </main>
  <!--/.main-->

 <!--  <?php if (!empty($page['gmap'])): ?>
    <div class="large-12 column">
      <?php print render($page['gmap']); ?>
    </div>
 <?php endif; ?> -->

  <div class="large-12 center map">
  <h2>Where to find Us</h2>
  
    <div class="row large-12 map_categories">
      <div id="map">
    <div id="map-navigation" class="map-navigation">
        <a data-zoom="2" data-position="37.7733,-122.4367">
            Whole Map
        </a>
        <a data-zoom="4" data-position="34.047863, 100.619655">
            Asia
        </a>
        <a data-zoom="4" data-position="-25.274398, 133.775136">
            Australia
        </a>
        <a data-zoom="4" data-position="54.525961, -105.255119">
            North America
        </a>
        <a data-zoom="4" data-position="-8.783195, -55.491477">
            South America
        </a>
        <a data-zoom="2" data-position="-82.86275189999999, -135">
            Antartica
        </a>
        <a data-zoom="3" data-position="47.516231, 14.550072">
            Europe
        </a>
    </div>
</div>
    </div>




     <div id="googleMap" style="width:100%;height:400px;"></div>
    </div>

<!-- Popular Post -->
 <?php if (!empty($page['popular_post'])): ?>
    <div class="row post-article-container">
      <h1>Popular Articles</h1>
      <div class="row large-9 post-article">
      <?php print render($page['popular_post']); ?>
      </div>
    </div>
 <?php endif; ?>



<!-- /.post -->
  <?php if (!empty($page['sub_menu'])): ?>
    <div class="row large-12 sub-menu">
      <?php print render($page['sub_menu']); ?>
    </div>
 <?php endif; ?>

 <?php if (!empty($page['footer_social'])): ?>
    <div class="row large-12">
      <?php print render($page['footer_social']); ?>
    </div>
 <?php endif; ?>

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first small-12 large-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second small-12 large-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third small-12 large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth small-12 large-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>
<a href="#" class="scrollup">Scroll</a>
  <!--.l-footer-->
  <footer class="row l-footer panel" role="contentinfo">
   <!--  <?php if (!empty($page['footer'])): ?>
      <div class="footer large-12 columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?> -->

    <?php if ($site_name) :?>
      <div class="copyright small-12 large-6 left">
        &copy; <?php print t('All rights reserved.'). ' ' . date('Y') . ' ' . check_plain($site_name); ?>
      </div>
    <?php endif; ?>
    <div class="developer small-12 large-6 right">
        <a href="http://globaledge-media.com">Designed & Developed By Globaledge Media Solutions Inc.</a>
      </div>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>



<!--/.page -->
<!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
<script>


function initialize() {

  jQuery.getJSON("<?php print $base_url; ?>/article-json", function(data){
  var data_length = data.nodes.length;

    var map;
    var continent;

    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
      mapTypeId: 'roadmap',
      disableDefaultUI: true,
      panControl: false,
      zoomControl: false,
      scaleControl: false,
      draggable: false,
      scrollwheel: false,
    };

  var myCenter=new google.maps.LatLng(51.508742,-0.120850);

  var mapProp = {
    center: myCenter,
    zoom:6,
    mapTypeId:google.maps.MapTypeId.ROADMAP

  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);


  google.maps.event.addListenerOnce(map, 'bounds_changed', function() {
  map.setZoom(2);
  });

  //Multiple Markers
    var markers = [];
    var infoWindowContent = [];

    for(var x=0;x<data_length;x++){
      var img_src = data.nodes[x].node['field_image'];
      var title = data.nodes[x].node['title'];
      var address = data.nodes[x].node['field_city'];
      var date = data.nodes[x].node['Post date'];
      var more = data.nodes[x].node['path'];
      markers.push([data.nodes[x].node['field_address_1'], data.nodes[x].node['field_address_2']]);
      infoWindowContent.push(['<div class="info_content large-12"><center><a href="'+more+'"><div class="image" style="background: url('+img_src.src+')  50% 50% no-repeat;"></div></a></center><h5>'+address+'</h5><div class="line-container"><hr class="line"></div><p class="address"><b></b></p><a href="'+more+'"><p class="title">'+title+'</p></a><p class="readmore"><a href="'+more+'">'+date+'</a></p></div>']);
     
     
    }


 var styles = [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}];

   // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map
    var category_img = "http://livinglifewithgutz.dev/sites/default/files/pin.png";
    for( i = 0; i < markers.length; i++ ) {
      var pin = markers[i][0];
        var position = new google.maps.LatLng(markers[i][0], markers[i][1]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            icon: category_img
        });


        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }
  
map.setOptions({styles: styles});
 var latitude = 0 ;
  var longitude = 0 ; 

var myLatLng = new google.maps.LatLng(-25.363882, 131.044922);
  var mapOptions = {
    zoom: 4,
    center: myLatLng,
    scrollwheel: false,
  };




    document.getElementById('map-navigation').onclick = function(e) {
    var pos = e.target.getAttribute('data-position');
    // console.log(pos.split(','))
    // var position = pos.split(',');
    
    var zoom = e.target.getAttribute('data-zoom');
    if (pos && zoom) {
        var position = pos.split(',');
        var z = parseInt(zoom);
          latitude = position[0];
          longitude = position[1];

        map.setZoom(z);
        map.setCenter(new google.maps.LatLng(latitude, longitude));
        return false;
    }
}
 });


}

</script>
<script type="text/javascript">

</script>
