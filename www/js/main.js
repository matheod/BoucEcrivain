animation_en_cours = false;
function tournerpage()
{
	if(!animation_en_cours)
	{
		animation_en_cours = true;
		$('.anciennes-pages').addClass('tourner');
		setTimeout(function(){
			$('.nouvelles-pages').addClass('tourner');
		},2000);
		setTimeout(function(){
			$('.pages').removeClass('tourner');
			np = $('.nouvelles-pages');
			ap = $('.anciennes-pages');
			np.removeClass('nouvelles-pages').addClass('anciennes-pages');
			ap.removeClass('anciennes-pages').addClass('nouvelles-pages');
			animation_en_cours = false;
		},4000);
	}
}