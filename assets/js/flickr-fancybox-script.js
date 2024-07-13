(function($) {
    "use strict";
   
    /*-------------------------------- FANCYBOX ----------------------------*/
	
	var fancyboxImage = $('.fancybox').attr('rel', 'gallery');
	var fancyboxVideo = $('.fancybox-media');
	
	fancyboxImage.fancybox({
        'speedIn': 600,
        'speedOut': 200,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',

	});

	fancyboxVideo.fancybox({
        'speedIn': 600,
        'speedOut': 200,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'autoScale': true,
        'titleShow': true,
        'type': 'iframe'
	});

		
	
	
	 /*------------------------------------------FLICKER------------------------------*/
	 
	 var flickerPhotoGal = $('.flickr-list');		 
	 flickerPhotoGal.jflickrfeed({
		 limit:8,
		 qstrings: {id: '47264806@N00'},
		 itemTemplate: '<li>' +'<a class="fancybox" rel="gallery" href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +'</li>'
     });
	
	
	
}(jQuery));