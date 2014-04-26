'use strict';

requirejs.config({
    baseUrl: 'wp-content/themes/_mrtngtt/bower_components',
    paths: {
        'component': '../scripts/component',
        'page': '../scripts/page'
    }
});

require(
    [
        'flight/lib/compose',
        'flight/lib/registry',
        'flight/lib/advice',
        'flight/lib/logger',
        'flight/lib/debug'
    ],

    function(compose, registry, advice, withLogging, debug) {
        debug.enable(true);
        compose.mixin(registry, [advice.withAdvice]);

        require(['page/default'], function(initializeDefault) {
            initializeDefault();
        });
    }
);
