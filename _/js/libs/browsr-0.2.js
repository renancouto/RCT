/*	Browsr
	
	Places classes on <html> with:
		Engine name;
		Browser name and version;
		OS name;
		
	Creates a Browsr global var

	Author:		Renan Couto
	Version:	0.2
	Created:	Aug Fri 02 2011
	Updated:	Apr Wed 04 2012		
*/

var _Browsr = {
	
	browsr:			{},
	
	_engines:		['webkit', 'gecko', 'trident', 'presto'],
	_browsers:		['msie', 'chrome', 'firefox', 'safari', 'opera'],
	_oss:			['windows', 'android', 'linux', 'ipad', 'iphone', 'macos'],
	
	_attributes:	['engine', 'browser', 'os', 'version'],
	
	Init: function(n) {
		var ua = n.userAgent.toLowerCase()
			.replace(/ /g, '')
			.replace(/\//g, '');
			
		for (i in this._attributes) {
			var p = this._attributes[i];
			
			if (p === 'version') {
				this.GetVersion(ua);
			}
			else {
				this.GetProp(ua, p, this['_' + p + 's']);
			}
		}
		
		window.Browsr = this.browsr;
		this.WriteClasses();
	},
	
	GetProp: function(ua, property, properties) {
		for (i in properties) {
			var p = ua.match(properties[i]);
			if (p) {
				this.browsr[property] = properties[i];				
				return;
			}
		}
	},
	
	GetVersion: function(ua) {
		var re = new RegExp('version([0-9]+)');
		var version = ua.match(re);
		
		if (!version) {
			re = new RegExp(this.browsr.browser + '([0-9]+)');
			version = ua.match(re);
		}
		
		this.browsr.version = version[1];
	},
	
	WriteClasses: function() {
		var html = document.getElementsByTagName('html')[0];
		var c = html.className;
		
		for (i in this._attributes) {
			var p = this._attributes[i];
			if (p) {
				c += ' ';
				if (p === 'version') {
					c += this.browsr.browser;
				}
				c += this.browsr[p];
			}
		}
		
		html.className = c;
	}
};

_Browsr.Init(navigator);