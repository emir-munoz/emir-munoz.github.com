(function($){
	$(document).ready(function(){
		$('.bibtex.thesis').parent('li').addClass('thesis');
		$('.bibtex.journal').parent('li').addClass('journal');
		$('.bibtex.conference').parent('li').addClass('conference');
		$('.bibtex.workshop').parent('li').addClass('workshop');
		$('.bibtex.poster_demo').parent('li').addClass('poster_demo');
		$('.bibtex.patent').parent('li').addClass('patent');
	});
})(jQuery);
