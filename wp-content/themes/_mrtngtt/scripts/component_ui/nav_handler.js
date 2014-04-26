define(function (require) {

    'use strict';

    /**
    * Module dependencies
    */

    var defineComponent = require('flight/lib/component');
    var pjax = require('pjax');
    var NProgress = require('nprogress');
    var foundation = require('foundation');

    /**
    * Module exports
    */

    return defineComponent(pjaxHandler);

    /**
    * Module function
    */

    function pjaxHandler() {
        this.after('initialize', function () {
            this.on(document, 'uiPjaxNav', this.handlePjax);

            $(document).on('pjax:send', function() { NProgress.start(); });
            $(document).on('pjax:complete', function() { NProgress.done(); });
            $(document).foundation({topbar: {}});
        });

        this.handlePjax = function (e, data) {
            $.pjax({
                url: data.href,
                container: '[data-pjax-container]',
                fragment: '[data-pjax-container]'
            });
        };
    }

});