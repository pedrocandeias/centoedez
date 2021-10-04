// File#: _2_init-prj-content
// Usage: codyhouse.co/license
(function() {
  var slidingPanels = document.getElementsByClassName('js-s-panels');
	if( slidingPanels.length > 0 ) {
		for( var i = 0; i < slidingPanels.length; i++) {(function(i){
      slidingPanels[i].addEventListener('slidingPanelOpen', function(){
        // trigger resize to restart masonry/reveal effects
        window.dispatchEvent(new Event('resize'));
      });
    })(i);}
	}
}());