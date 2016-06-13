///<reference path='../def/definitions.d.ts' />

requirejs.config({
	baseUrl: 'inc/script',
	waitSeconds: 5,
	paths: {
		requireLib:     'vendor/require/require',
		jquery:         'vendor/jquery/jquery',
	},
	map: {},
	shim: {
	}
});

requirejs([
	'app/Main',
	'lib/externals'
], function (Main) {
	new Main.default();
});
