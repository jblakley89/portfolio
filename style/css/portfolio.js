$(function() {
 
    // if the function argument is given to overlay,
    // it is assumed to be the onBeforeLoad event listener
    $("a[rel]").overlay({
 
        mask: 'grey',
       // effect: 'apple',
 
        onBeforeLoad: function() {
 
            // grab wrapper element inside content
            var wrap = this.getOverlay().find("#frameHolder");
			//var frame = this.getOverlay().find("frameHolder");
			//frame.attr('visibility','visible');
			//frame.attr('height','90%').attr('width','90%');
 
            // load the page specified in the trigger
            wrap.html('<iframe src="' + this.getTrigger().attr("href") + '" width="100%" height="100%"></iframe>');
			
        }
 
    });
});

function webOpen(url){
    window.open(url);
	return false;
}