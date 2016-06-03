// export files as typescript module in which a javascript define() is used instead of a typescript export.
// this way they can be imported as "import externals from "lib/externals";" in a typescript file.
declare module "lib/externals"
{
	// dummy export, needed for not removing the import
	var ext:any;
export default ext;
}

declare module "lib/polyfill/polyfills"
{
	// dummy export, needed for not removing the import
	var ext:any;
export default ext;
}

declare module "app/config/config"
{
	// dummy export, needed for not removing the import
	var cfg:any;
export default cfg;
}


// declare global libaries and variables that have no typescript definitions
declare var DEBUG:boolean;
declare var RELEASE:boolean;
declare var isMobile:boolean;
declare var XRegExp:any;

declare type Class = any;
declare type int = number;
declare type uint = number;
declare type float = number;
declare type URI = string;