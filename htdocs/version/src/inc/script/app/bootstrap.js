///<reference path='../def/definitions.d.ts' />
requirejs.config({
    baseUrl: 'inc/script',
    waitSeconds: 15,
    paths: {
        requireLib: 'vendor/require/require',
        jquery: 'vendor/jquery/jquery',
        jqueryui: 'vendor/jquery/jqueryui',
    },
    map: {},
    shim: {
        'class.mutators': {
            deps: [
                'jquery'
            ],
            exports: 'classmutators'
        },
    }
});
requirejs([
    'app/Main',
    'lib/externals'
], function (Main) {
    new Main.default();
});
