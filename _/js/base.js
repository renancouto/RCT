// BASE

var Base = {
	
	// Objects
	$window: $(window),
	$wrapper: $('#wrapper'),
	$content: $('#content'),
	
	// Templates
	$templates: {
		portfolio: {
			showcase: $('script.showcase'),
			_item: $('script.portfolio-item')
		}
	},
	
	// Methods
	Init: function() {
		Base.$wrapper.djax('.updatable');		
		Base.$window.bind('djaxLoad', function(e, data) {
			//console.log(data.response);
			//var responseObj = $('<div>'+data.response+'</div>');
			//do stuff here
		});
		
		Base.$window.on('unload', function(){
			$.get('http://127.0.0.1:8888/RenanPrototipo/destroy.php');
		});
	},
	
	Page: function() {
	}
};