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
		$("body").on("mousedown", (e)=>
		{
			return $(e.target).addClass("is-mouse-down");
		}).on("mouseup", (e)=>
		{
			return $(e.target).removeClass("is-mouse-down");
		});
	}


}

export default Main