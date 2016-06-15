import refdef = require('../def/ReferenceDefinitions');

/**
 * Created by MacBookDjordan on 19/02/16.
 */

class Main
{
	constructor()
	{
		this.init();
		this.hoverThumbnail();
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

	private hoverThumbnail()
	{
		var thumbHeight = $(".thumbnail").height();

		console.log(thumbHeight);

		$(".thumbnail-overlay").css("top", thumbHeight).css("display", "block");

		$(".thumbnail").hover(()=>
		{
			$(".thumbnail-overlay").animate({
				top: 0
			}, 500, "linear", ()=>
			{
			});
		}, () =>
		{
			$(".thumbnail-overlay").animate({
				top: thumbHeight
			}, 500, "linear", ()=>
			{
			});
		});

		$(".thumbnail").on("mouseenter", () =>
		{
			$(".thumbnail-overlay").animate({
				top: 0
			}, 500, "linear", ()=>
			{
			});
		}).on("mouseleave", () => {
			$(".thumbnail-overlay").animate({
				top: thumbHeight
			}, 500, "linear", ()=>
			{
			});
		})
	}


}

export default Main