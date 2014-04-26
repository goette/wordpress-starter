define(function (require) {

    'use strict';

    /**
    * Module dependencies
    */

    var defineComponent = require('flight/lib/component');

    /**
    * Module exports
    */

    return defineComponent(pjaxNavTrigger);

    /**
    * Module function
    */

    function pjaxNavTrigger() {
        this.defaultAttrs({
            navItemSelector: '.menu-item > a'
        });

        this.handleClick = function (e) {
            e.preventDefault();

            var href = $(e.currentTarget).attr('href');
            this.trigger('uiPjaxNav', {href: href});
        }

        this.after('initialize', function () {
            this.on(this.select('navItemSelector'), 'click', this.handleClick);
        });
    }

});
