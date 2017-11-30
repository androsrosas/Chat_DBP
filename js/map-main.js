/* MAPS */
function initMap() {
		var sandia = {lat: -16.383794, lng: -71.542711};
       
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: sandia
        });

        var marker = new google.maps.Marker({
          position: sandia,
          map: map,
          title: "Corazón de Sandía - Arreglos Frutales"
        });

        var text = '<h2> Corazón de Sandía</h2>' + '<p> Cuartel general</p>' + '<a href="http://corazondesandia.pe/">Página web</a>';
		
		var info = new google.maps.InfoWindow({
			content: text
		});

		marker.addListener('click',function(){
			info.open(map,marker);
		});

		/*-----------------------------------------------------*/		
		var sandia_local = {lat: -16.390253, lng: -71.546663};
       
        var map1 = new google.maps.Map(document.getElementById('map1'), {
          zoom: 17,
          center: sandia_local
        });

        var marker1 = new google.maps.Marker({
          position: sandia_local,
          map: map1,
          title: "Corazón de Sandía - Arreglos Frutales"
        });

        var text1 = '<h2>Corazón de Sandía</h2>' + '<p> Pedacito de corazón </p>' + '<a href="http://corazondesandia.pe/">Página web</a>';
		
		var info1 = new google.maps.InfoWindow({
			content: text1
		});

		marker1.addListener('click',function(){
			info1.open(map1,marker1);
		});
      }