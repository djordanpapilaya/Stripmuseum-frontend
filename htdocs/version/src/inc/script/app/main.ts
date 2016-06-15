///<reference path='../def/definitions.d.ts' />
/**
 * Created by MacBookDjordan on 19/02/16.
 */

class Main
{
	constructor()
	{
		this.init();
	}

	private init()
	{
		$("a").on("mousedown", (e)=>
		{
			return $(e.target).addClass("is-mouse-down");
		}).on("mouseup", (e)=>
		{
			return $(e.target).removeClass("is-mouse-down");
		});

		$("#scroll_top").on("click", (e)=>
		{
			e.preventDefault();
			scrollTo(document.body, 0, 600);
		});

		function scrollTo(element, to, duration)
		{
			if(duration <= 0)
			{
				return;
			}
			var difference = to - element.scrollTop;
			var perTick = difference / duration * 10;

			setTimeout(function()
			{
				element.scrollTop = element.scrollTop + perTick;
				if(element.scrollTop == to)
				{
					return;
				}
				scrollTo(element, to, duration - 10);
			}, 10);
		}
	}


}

export default Main