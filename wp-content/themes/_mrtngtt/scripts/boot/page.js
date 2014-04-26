define(function (require) {

    'use strict';

    /**
     * Module dependencies
     */
    var PjaxHandler = require('component_ui/nav_handler');
    var PjaxNavTrigger = require('component_ui/nav_trigger');

    /**
     * Module exports
     */

    return initialize;

    /**
     * Module function
     */

    function initialize() {
        PjaxHandler.attachTo(document);
        PjaxNavTrigger.attachTo('.js-pjax-nav');
    }
});
