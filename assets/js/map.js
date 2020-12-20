
(function($){
        //Travel map
    if ($('#home-map').length){
          google.maps.event.addDomListener(window, "load", mash_contact_googlemap);
        }           
        var clatitude = $('#home-map').data( "latitudeValue" );
        var clongtitude = $('#home-map').data( "longtitudeValue" );
        var ctitle = $('#home-map').data( "titleValue" );
        var cicon = $('#home-map').data( "iconValue" );
        var czoom = $('#home-map').data( "zoomValue" );
        var ccolor = $('#home-map').data( "hueValue" );
        function mash_contact_googlemap(){
          var cMapOptions = {
            center: new google.maps.LatLng(clatitude,clongtitude),
            zoom: czoom,
            scrollwheel: false,
            backgroundColor: ccolor,
            mapTypeControl: false,                  
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var cMap = new google.maps.Map(document.getElementById("home-map"),cMapOptions);
          var cLatlng = new google.maps.LatLng(clatitude,clongtitude);             
          var cMarker = new google.maps.Marker({
            position: cLatlng,
            map: cMap,
            title: ctitle,
            icon: cicon,
          backgroundColor: ccolor,
          });    
        }
})(jQuery);
