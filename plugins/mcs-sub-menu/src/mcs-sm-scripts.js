(function($) {
$(document).ready(function(){

    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.page-sub-nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

        $('.page-sub-nav a').each(function() {
        	var highlighttext = $(this).text();
        	if ( highlighttext === 'Request More Info'){
        		$(this).addClass('highlight');
        	}
        });

        $('#page-nav-trigger').click(function() {
        	$('.sub-items').addClass('expanded');
        	$(this).remove();
        	return false;
        });

});
})(jQuery);
