'use strict';

var myApp = angular.module('sean_park_law', ['ngMap','duScroll', 'ng.deviceDetector']);

myApp.directive('owlAso', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      element.owlCarousel({
        items: 6,
        autoPlay: true,
        pagination: false
      });
    }
  };
}]);

myApp.directive('owlSingleNav', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      element.owlCarousel({
        autoPlay: true,
        singleItem: true
      });
    }
  };
}]);

myApp.directive('owlRelated', [function () {
  return {
    restrict: 'C',

    link: function (scope, element) {
      element.owlCarousel({
        items : 2,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        autoPlay: true
      });
    }
  };
}]);

myApp.directive('changeMenu', ['deviceDetector', '$window', '$document', function (deviceDetector, $window, $document) {
  return {
    restrict: 'A',

    link: function (scope, element) {
      var windowElement = angular.element($window);
      var bodyElement = angular.element($document[0].body);
      var $html = $('html');
      var $use = ((deviceDetector.browser == 'firefox' || deviceDetector.browser == 'ie') ? $html : bodyElement);

      var marginTop = element.css('margin-top').replace('px', '') * 1;
      var marginBottom = element.css('margin-bottom').replace('px', '') * 1;
      var height = (element.outerHeight() - element.outerHeight()) + marginBottom + marginTop;

      if ($use.scrollTop() > (height))
        element.addClass('white');
      else
        element.removeClass('white');

      windowElement.on('scroll', function () {
        if ($use) {
          if ($use.scrollTop() > (height))
            element.addClass('white');
          else
            element.removeClass('white');
        }
      });
    }
  };
}]);

myApp.directive('addIcon', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      var archive = element.hasClass('widget_archive');
      var tags = element.hasClass('widget_wpctc_widget');
      var title = element.find('.widget-title');
      if (archive) title.prepend('<span><i class="fa fa-archive"></i></span>');
      if (tags) title.prepend('<span><i class="fa fa-tag"></i></span>');
    }
  };
}]);

myApp.directive('addLink', [function () {
  return {
    restrict: 'C',

    link: function (scope, element) {
      var thumbnail = element.find('.crp_thumb');
      var link = element.find('.crp_title').attr('href');
      var title = element.find('.crp_title').text();
      var excerpt = element.find('.crp_excerpt').text();
      
      element.html('');

      element.append('<h3>' + title + '</h3>')

      element.append(thumbnail)

      element.append('<div><p>' + excerpt + '</p><div class="clearfix"></div></div>');

      var div = element.find('.clearfix');

      div.append('<a class="my-link link-1" href="">read full story <i class="fa fa-chevron-right"></i></a>')

      div.find('.link-1').attr('href', link);
    }
  };
}]);