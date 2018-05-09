function mapLabel(latlng, markerText, className, offset) {
	this.text = '<div class="'+ className +'">'+ markerText +'</div>';
	this.latlng = latlng;
	this.div = null;
	this.offset = offset;
}
mapLabel.prototype = new google.maps.OverlayView();
mapLabel.prototype.onAdd = function(){
	var me = this;
	var div = document.createElement('DIV');
	div.style.border = 'none';
	div.style.position = 'absolute';
	div.style.zIndex = 999;
	div.innerHTML = this.text;
	this.div = div;
	var panes = this.getPanes();
	panes.floatPane.appendChild(div);
	//floatPane
	//https://developers.google.com/maps/documentation/javascript/customoverlays#introduction

	google.maps.event.addDomListener(div, 'click', function(){
		google.maps.event.trigger(me, 'click');
	});
}
mapLabel.prototype.draw = function(){
	var overlayProjection = this.getProjection();
	var latlng = overlayProjection.fromLatLngToDivPixel(this.latlng);
	var div = this.div;
	if (div) {
		var offset = this.offset ? this.offset : { 'left': 0, 'top': 0 };
		div.style.left = (latlng.x + offset.left) + 'px';
		div.style.top = (latlng.y + offset.top) + 'px';
	}
}
mapLabel.prototype.onRemove = function(){
	if (this.div && this.div.parentNode) {
		this.div.parentNode.removeChild(this.div);
		this.div = null;
	}
}