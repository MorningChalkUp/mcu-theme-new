$(document).ready(function(){

  $('#quote1').textfit('bestfit');
  $('#quote2').textfit('bestfit');

});

$('.js-share-email').on('click', function() {
  document.location = 'mailto:?subject=TITLE&body=LINK';
});

$('.js-share-facebook').on('click', function() {
  FB.ui({
    method: 'feed',
    link: 'http://morningchalkup.com?utm_source=facebook&utm_campaign=article-share&utm_medium=share',
    caption: 'Morning Chalk Up',
    picture: 'https://placekitten.com/770/515',
    name: 'TITLE',
    description: "SUMMERY",
  }, function(response){});
});

$('.js-share-twitter').on('click', function() {
  window.open('https://twitter.com/intent/tweet?text=' + 'TITLE' + ' via Morning Chalk Up' + '&link=' + 'URL', '_blank');
});

$('input.event-state').on('change', function() {
  if (window.location.search !== "") {
    window.location = window.location.search + "&state=" + $('input.event-state').data('val');
  } else {
    window.location = '?state=' + $('input.event-state').data('val');
  }
});

$('input.event-month').on('change', function() {
  if (window.location.search !== "") {
    window.location = window.location.search + "&month=" + $('input.event-month').data('val');
  } else {
    window.location = '?month=' + $('input.event-month').data('val');
  }
});

$('input.event-type').on('change', function() {
  if (window.location.search !== "") {
    window.location = window.location.search + "&type=" + $('input.event-type').data('val');
  } else {
    window.location = '?type=' + $('input.event-type').data('val');
  }
});

$('.search-btn').on('click', function() {
  $('.search-bar').slideToggle(100);
  $('.overlay').toggle();
});


$( '#URL' ).val( location.protocol + '//' + location.host + location.pathname );
if (getQueryVariable('utm_source')) {
  $('#UTM_SOURCE').val(getQueryVariable('utm_source'));
}
if (getQueryVariable('utm_medium')) {
  $('#UTM_MEDIUM').val(getQueryVariable('utm_medium'));
}
if (getQueryVariable('utm_campaign')) {
  $('#UTM_CAMP').val(getQueryVariable('utm_campaign'));
}
if (getQueryVariable('gclid')) {
  $('#GCLID').val(getQueryVariable('gclid'));
}
// if (getQueryVariable('fname')) {
//   $('#FNAME').val(getQueryVariable('fname'));
// }
// if (getQueryVariable('lname')) {
//   $('#LNAME').val(getQueryVariable('lname'));
// }
// if (getQueryVariable('email')) {
//   $('#EMAIL').val(getQueryVariable('email'));
// }

function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split('&');
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split('=');
    if (decodeURIComponent(pair[0]) == variable) {
      return decodeURIComponent(pair[1]);
    }
  }
}
