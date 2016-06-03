/**
 * Created by MacBookDjordan on 19/02/16.
 */

class Main
{
	constructor()
	{
		this.init();
		console.log('JDJJD');
	}

	private init()
	{
		this.parallexFunctionality();
	}

	private parallexFunctionality()
	{
		var jumboHeight = $('.jumbotron').outerHeight();
		function parallax(){
			var scrolled = $(window).scrollTop();
			$('.bg').css('height', (jumboHeight-scrolled) + 'px');
		}

		$(window).scroll(function(e){
			parallax();
		});
	}
}

export default Main