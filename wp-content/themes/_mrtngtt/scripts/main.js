'use strict';

requirejs.config({
    baseUrl: 'wp-content/themes/_mrtngtt/bower_components',
    paths: {
        'component_ui'  : '../scripts/component_ui',
        'boot'          : '../scripts/boot',
        'lodash'        : 'lodash/dist/lodash.min',
        'pjax'          : 'jquery-pjax/jquery.pjax',
        'nprogress'     : 'nprogress/nprogress',
        'foundation'    : 'foundation/js/foundation.min'
    },
    shim: {
        'lodash': {
            exports: '_'
        },
        'pjax': {
            exports: 'jQuery.fn.pjax'
        },
        'nprogress': {
            exports: 'nprogress'
        }
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

    function(compose, registry, advice, withLogging, debug, _) {
        debug.enable(true);
        compose.mixin(registry, [advice.withAdvice]);

        require(['boot/page'], function(initializeDefault) {
            initializeDefault();
        });
    }
);
