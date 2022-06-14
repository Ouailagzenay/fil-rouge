function lovestory_googlemap_init(dom_obj, coords) {
	"use strict";
	if (typeof LOVESTORY_STORAGE['googlemap_init_obj'] == 'undefined') lovestory_googlemap_init_styles();
	LOVESTORY_STORAGE['googlemap_init_obj'].geocoder = '';
	try {
		var id = dom_obj.id;
		LOVESTORY_STORAGE['googlemap_init_obj'][id] = {
			dom: dom_obj,
			markers: coords.markers,
			geocoder_request: false,
			opt: {
				zoom: coords.zoom,
				center: null,
				scrollwheel: false,
				scaleControl: false,
				disableDefaultUI: false,
				panControl: true,
				zoomControl: true, //zoom
				mapTypeControl: false,
				streetViewControl: false,
				overviewMapControl: false,
				styles: LOVESTORY_STORAGE['googlemap_styles'][coords.style ? coords.style : 'default'],
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		};
		
		lovestory_googlemap_create(id);

	} catch (e) {
		
		dcl(LOVESTORY_STORAGE['strings']['googlemap_not_avail']);

	};
}

function lovestory_googlemap_create(id) {
	"use strict";

	// Create map
	LOVESTORY_STORAGE['googlemap_init_obj'][id].map = new google.maps.Map(LOVESTORY_STORAGE['googlemap_init_obj'][id].dom, LOVESTORY_STORAGE['googlemap_init_obj'][id].opt);

	// Add markers
	for (var i in LOVESTORY_STORAGE['googlemap_init_obj'][id].markers)
		LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].inited = false;
	lovestory_googlemap_add_markers(id);
	
	// Add resize listener
	jQuery(window).resize(function() {
		if (LOVESTORY_STORAGE['googlemap_init_obj'][id].map)
			LOVESTORY_STORAGE['googlemap_init_obj'][id].map.setCenter(LOVESTORY_STORAGE['googlemap_init_obj'][id].opt.center);
	});
}

function lovestory_googlemap_add_markers(id) {
	"use strict";
	for (var i in LOVESTORY_STORAGE['googlemap_init_obj'][id].markers) {
		
		if (LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].inited) continue;
		
		if (LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].latlng == '') {
			
			if (LOVESTORY_STORAGE['googlemap_init_obj'][id].geocoder_request!==false) continue;
			
			if (LOVESTORY_STORAGE['googlemap_init_obj'].geocoder == '') LOVESTORY_STORAGE['googlemap_init_obj'].geocoder = new google.maps.Geocoder();
			LOVESTORY_STORAGE['googlemap_init_obj'][id].geocoder_request = i;
			LOVESTORY_STORAGE['googlemap_init_obj'].geocoder.geocode({address: LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].address}, function(results, status) {
				"use strict";
				if (status == google.maps.GeocoderStatus.OK) {
					var idx = LOVESTORY_STORAGE['googlemap_init_obj'][id].geocoder_request;
					if (results[0].geometry.location.lat && results[0].geometry.location.lng) {
						LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[idx].latlng = '' + results[0].geometry.location.lat() + ',' + results[0].geometry.location.lng();
					} else {
						LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[idx].latlng = results[0].geometry.location.toString().replace(/\(\)/g, '');
					}
					LOVESTORY_STORAGE['googlemap_init_obj'][id].geocoder_request = false;
					setTimeout(function() { 
						lovestory_googlemap_add_markers(id); 
						}, 200);
				} else
					dcl(LOVESTORY_STORAGE['strings']['geocode_error'] + ' ' + status);
			});
		
		} else {
			
			// Prepare marker object
			var latlngStr = LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].latlng.split(',');
			var markerInit = {
				map: LOVESTORY_STORAGE['googlemap_init_obj'][id].map,
				position: new google.maps.LatLng(latlngStr[0], latlngStr[1]),
				clickable: LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].description!=''
			};
			if (LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].point) markerInit.icon = LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].point;
			if (LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].title) markerInit.title = LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].title;
			LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].marker = new google.maps.Marker(markerInit);
			
			// Set Map center
			if (LOVESTORY_STORAGE['googlemap_init_obj'][id].opt.center == null) {
				LOVESTORY_STORAGE['googlemap_init_obj'][id].opt.center = markerInit.position;
				LOVESTORY_STORAGE['googlemap_init_obj'][id].map.setCenter(LOVESTORY_STORAGE['googlemap_init_obj'][id].opt.center);				
			}
			
			// Add description window
			if (LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].description!='') {
				LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].infowindow = new google.maps.InfoWindow({
					content: LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].description
				});
				google.maps.event.addListener(LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].marker, "click", function(e) {
					var latlng = e.latLng.toString().replace("(", '').replace(")", "").replace(" ", "");
					for (var i in LOVESTORY_STORAGE['googlemap_init_obj'][id].markers) {
						if (latlng == LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].latlng) {
							LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].infowindow.open(
								LOVESTORY_STORAGE['googlemap_init_obj'][id].map,
								LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].marker
							);
							break;
						}
					}
				});
			}
			
			LOVESTORY_STORAGE['googlemap_init_obj'][id].markers[i].inited = true;
		}
	}
}

function lovestory_googlemap_refresh() {
	"use strict";
	for (id in LOVESTORY_STORAGE['googlemap_init_obj']) {
		lovestory_googlemap_create(id);
	}
}

function lovestory_googlemap_init_styles() {
	// Init Google map
	LOVESTORY_STORAGE['googlemap_init_obj'] = {};
	LOVESTORY_STORAGE['googlemap_styles'] = {
		'default': []
	};
	if (window.lovestory_theme_googlemap_styles!==undefined)
		LOVESTORY_STORAGE['googlemap_styles'] = lovestory_theme_googlemap_styles(LOVESTORY_STORAGE['googlemap_styles']);
}