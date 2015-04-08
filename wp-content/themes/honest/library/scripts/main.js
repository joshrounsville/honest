'use strict';

$(function() {

  //////// set booleans for window size
  var body = $('body');
  var isPhone = body.css('padding-bottom') === '1px';
  var isDesktop = body.css('margin-bottom') !== '1px';
  var notDesktop = body.css('margin-bottom') === '1px';

  $(window).resize(function() {
    isPhone = body.css('padding-bottom') === '1px';
    isDesktop = body.css('margin-bottom') !== '1px';
    notDesktop = body.css('margin-bottom') === '1px';
  });



  //////// svg fallback
  Modernizr.addTest('svgasimg', document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Image', '1.1'));

  if ( !Modernizr.svgasimg ) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }




  //////// hide/show mobile nav
  var mobileNav = function() {
    var btn = $('.js--hide-show-nav');

    btn.on('touchstart click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      body.toggleClass('show-mobile-nav');

    });

  };

  mobileNav();




  //////// instagram feed
  var getInstagram = function() {
    $.getJSON('https://api.instagram.com/v1/users/34310299/media/recent?access_token=34310299.8620aa1.ad482bdd76c0447db57ec7c5c3125da0&count=6&callback=?', function(data) {

      // do nothing

    }).done(function(data) {

      buildInstagram(data);

    });

  };

  var buildInstagram = function(photos) {
    var target = $('#js--feed-instagram');

    $.each(photos.data, function() {

      $('<li>', {
        'class': 'item-instagram'
      }).appendTo(target);

      $('<a>', {
        'href': this.link,
        'target': '_blank'
      }).appendTo('.item-instagram:last');

      $('<img>', {
        'src': this.images.low_resolution.url
      }).appendTo('.item-instagram:last a');

    });

  };




  //////// twitter feed

  var twitterFeed = function() {

    var config = {
      'id': '567240723917856768',
      'domId': 'js--feed-twitter',
      'maxTweets': 1,
      'enableLinks': true,
      'showUser': false,
      'showTime': true,
      'dateFunction': dateFormatter,
      'showRetweet': false,
      'showInteraction': false,
      'showImages': false
    };

    twitterFetcher.fetch(config);

    function dateFormatter(date) {
      return date.toDateString();
    }

  };




  //////// yelp feed

  var getYelp = function() {

    var auth = {
      consumerKey: 'R_aqIjawzAS3_EE1XjVtNQ',
      consumerSecret: 'sw1TWLvI9p_Xd_sfJdXOYprfPmQ',
      accessToken: 'ljMfqV651Aj0sHfuUD3gI0x-XCj1NCmn',
      accessTokenSecret: 'Zg0z1LMBlKO0UQr3gTSrHHns7j0',
      serviceProvider: {
        signatureMethod: 'HMAC-SHA1'
      }
    };

    var accessor = {
      consumerSecret: auth.consumerSecret,
      tokenSecret: auth.accessTokenSecret
    };

    var parameters = [];
    //parameters.push(['term', terms]);
    //parameters.push(['location', near]);
    parameters.push(['callback', 'cb']);
    parameters.push(['oauth_consumer_key', auth.consumerKey]);
    parameters.push(['oauth_consumer_secret', auth.consumerSecret]);
    parameters.push(['oauth_token', auth.accessToken]);
    parameters.push(['oauth_signature_method', 'HMAC-SHA1']);

    var message = {
      'action': 'http://api.yelp.com/v2/business/honest-training-portland',
      'method': 'GET',
      'parameters': parameters
    };

    OAuth.setTimestampAndNonce(message);
    OAuth.SignatureMethod.sign(message, accessor);

    var parameterMap = OAuth.getParameterMap(message.parameters);
    parameterMap.oauth_signature = OAuth.percentEncode(parameterMap.oauth_signature);

    $.ajax({
      'url': message.action,
      'data': parameterMap,
      'cache': true,
      'dataType': 'jsonp',
      'jsonpCallback': 'cb',
      'success': function(data, textStats, XMLHttpRequest) {

        buildYelp(data);

      }
    });

  };


  var buildYelp = function(data) {
    var target = $('#js--feed-yelp');
    var review = data.reviews[0];

    $('<li>', {
      'class': 'item-yelp'
    }).prependTo(target);

    $('<a>', {
      'href': data.url + '#super-container',
      'html': review.excerpt,
      'target': '_blank'
    }).appendTo('.item-yelp:last');

    $('<span>').appendTo('.item-yelp:last');

    $('<a>', {
      'href': 'http://www.yelp.com/user_details?userid=' + review.user.id,
      'html': review.user.name,
      'target': '_blank'
    }).appendTo('.item-yelp:last span');

  };




  if ( body.hasClass('home') ) {
    getInstagram();
    twitterFeed();
    getYelp();
  }



  //////// carousel setup
  var slider = $('.slider');

  slider.owlCarousel({
    items : 1,
    slideSpeed : 200,
    autoPlay : false,
    navigation : true,
    rewindNav : false,
    scrollPerPage : false,
    singleItem : true,
    pagination : false,
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    baseClass : 'owl-carousel',
    mouseDrag : false,
    addClassActive : true
  });




  /// accept the link and launch small window
  var openShareWindow = function(link) {
    if ( isDesktop ) {
      window.open(link, null, 'toolbar=no,menubar=no,width=540,height=380');
    } else {
      document.location.href = link;
    }
  };


  /// accept the social type and create link
  /// call openShareWindow and send link
  var socialShare = function(type, title, url) {
    var link;

    if ( type === 'twitter') {

      link = 'http://twitter.com/intent/tweet?text=' + title + '&amp;url=' + url + '&amp;hashtags=HonestTraining';

    } else if ( type === 'facebook' ) {

      if ( notDesktop ) {
        link = 'https://m.facebook.com/sharer.php?u=' + url;
      } else {
        link = 'https://www.facebook.com/sharer/sharer.php?u=' + url;
      }

    } else {

      link = 'https://plus.google.com/share?url=' + url;

    }

    openShareWindow(link);

  };



  /// on share btn click figure out social type
  /// call socialShare and send type
  $('.js--share').on('click', function(e) {
    e.preventDefault();

    var type = $(this).attr('data-type');
    var title = $(this).attr('data-title');
    var url = $(this).attr('data-url');
    socialShare(type, title, url);

  });

});