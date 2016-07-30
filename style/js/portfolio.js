$(function() {

    $("a[rel]").overlay({

        mask: 'grey',

        onBeforeLoad: function() {

            if(this.getTrigger().attr("class") == "web"){
              var wrap = this.getOverlay().find("#webFrameHolder");
              wrap.html('<iframe src="' + this.getTrigger().attr("href") + '" width="100%" height="100%"></iframe>');
            }
            if(this.getTrigger().attr("class") == "hDoc"){
              var wrap = this.getOverlay().find("#hDocFrameHolder");
              wrap.html('<img src="' + this.getTrigger().attr("href") + '">');
            }
        }
    });
});

function webOpen(url){
    window.open(url, '_blank');
	return false;
}

