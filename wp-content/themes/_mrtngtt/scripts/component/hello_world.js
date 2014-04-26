define(function (require) {

  'use strict';

  /**
   * Module dependencies
   */

  var defineComponent = require('flight/lib/component');

  /**
   * Module exports
   */

  return defineComponent(helloWorld);

  /**
   * Module function
   */

  function helloWorld() {
    this.defaultAttrs({

    });

    this.after('initialize', function () {
      console.log('hello world');
    });
  }

});
