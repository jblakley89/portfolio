$(document).ready(function(){

  var $iframe = document.getElementById("Blog");

  function setIframeHeight() {
      var $iframeDoc = ($iframe.contentWindow || $iframe.contentDocument);
      if($iframeDoc.document)
        $iframeDoc = $iframeDoc.document;

      $iframe.height = $iframeDoc.body.clientHeight;
  }

  $("#Blog").load(function(){
    setIframeHeight();
  });

  //Redundant but necessary for firefox
  $(window).load(function() {
      setIframeHeight();
  });

});