$(window).on('load', function(){

  $('body').toggleClass( 'loading-done' );

});

if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
  $('body').addClass( 'dark-mode' );
}

// DEFERRED STUFF

$(document).ajaxStop(function(){

    if (document.body.classList.contains('page-work') || document.body.classList.contains('page-bikes') || document.body.classList.contains('page-things')) {
      $(".lazy").Lazy({ 
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        effectTime: 500,
        placeholder: "https://slrncl.com/assets/img/loader.gif",
        threshold: 0,
        visibleOnly: true
      });
    }

    if (document.body.classList.contains('page-bikes')) {
      var bikeCount = $('.one-bike').length;
      $('.bikes-counter').html(bikeCount);
    }

    if (document.body.classList.contains('page-notes')) {
      var noteCount = $('.one-note').length;
      $('.notes-counter').html(noteCount); 
    }

    if (document.body.classList.contains('page-things')) {
      var thingsCount = $('.one-thing').length;
      $('.things-counter').html(thingsCount); 
    }
    
});

$(document).ready(function() {

  // SHOWREAL PLAY/PAUSE

  var video = document.getElementById('showreel');

  $(document).on('click', '.video-container__button', function () {   
    
    $(this).toggleClass('playing');
    if ( $(this).hasClass('playing') ) {
      video.play();
    }
    else {
      video.pause();
    }

  });

  // WORKS

  if (document.body.classList.contains('page-work')) {

    var projectsData = "https://slrncl.com/assets/data/projects.json";

    $.getJSON( projectsData, {
      format: "json",
      type: 'GET',
      dataType: 'jsonp',
      CORS: true ,
      contentType:'application/json',
      secure: true,
      headers: {
      'Access-Control-Allow-Origin': '*',
      }
    })
      .done(function( data ) {

      $.each( data.projects, function( i, project ) {

        $('.projects-feed').append(
          '<a class="block-link large-margin-bottom" href="' + data.projects[i].link + '" >' +
            '<div class="large-container" >' +
              '<div class="row" >' +
                '<div class="col-100" >' +
                  '<img data-src="' + data.projects[i].image + '" alt="image for ' + data.projects[i].name + '" class="lazy fluid-img corner-radius-img medium-margin-bottom" width="1600" height="1200" >' +
                '</div>' +
              '</div>' +
            '</div>' +
            '<div class="container" >' +
              '<div class="row" >' +
                '<div class="row" >' +
                  '<div class="col-25" >' +
                    '<p class="text-regular text-color-secondary small-margin-bottom line-height-100 show-on-desktop-only">' + data.projects[i].year + '</p>' +
                  '</div>' +
                  '<div class="col-75" >' +
                    '<h2 class="no-margin-top">' + data.projects[i].name + '</h2>' +
                    '<p class="text-regular text-color-secondary small-margin-bottom">' + data.projects[i].description + '</p>' +
                    '<p class="text-small text-color-secondary no-margin">' + data.projects[i].category + ' &nbsp;&nbsp;&mdash;&nbsp;&nbsp; ' + data.projects[i].type + ' </p>' +
                  '</div>' +
                '</div>' +
              '</div>' +
            '</div>' +
          '</a>'
        );

      });

    });
  }

  // BIKES

  if (document.body.classList.contains('page-bikes')) {

    var bikesData = "https://slrncl.com/assets/data/bikes.json";

    $.getJSON( bikesData, {
      format: "json",
      type: 'GET',
      dataType: 'jsonp',
      CORS: true ,
      contentType:'application/json',
      secure: true,
      headers: {
      'Access-Control-Allow-Origin': '*',
      }
    })
      .done(function( data ) {

      $.each( data.bikes, function( i, bike ) {

        $('.bikes-feed').append(
          '<div class="one-bike large-padding-bottom" >' +
            '<img data-src="' + data.bikes[i].image + '" alt="image for ' + data.bikes[i].model + ' - ' + data.bikes[i].surname + '" class="lazy fluid-img zoomlightbox-trigger" >' +
            '<h2 class="text-color-primary medium-margin-top">' + data.bikes[i].model + '<span class="text-color-secondary"> "' + data.bikes[i].surname + '"</span></h2>' +
            '<div class="bike-card__metas small-margin-top medium-margin-bottom ">' +
              '<span class="label small secondary">' + data.bikes[i].years + '</span>' +
              '<span class="label small secondary">' + data.bikes[i].status + '</span>' +
              '<span class="label small secondary">' + data.bikes[i].mileage + ' mi</span>' +
            '</div>' +
            '<p class="text-regular text-color-secondary no-margin">' + data.bikes[i].notes + ' </p>' +
          '</div>'
        );

      });

    });

  }

  // THINGS

  if (document.body.classList.contains('page-things')) {

    var thingsData = "https://slrncl.com/assets/data/things.json";

    $.getJSON( thingsData, {
      format: "json",
      type: 'GET',
      dataType: 'jsonp',
      CORS: true ,
      contentType:'application/json',
      secure: true,
      headers: {
      'Access-Control-Allow-Origin': '*',
      }
    })
      .done(function( data ) {

      $.each( data.things, function( i, thing ) {

        $('.things-feed').append(
          '<div class="one-thing row large-margin-bottom" id="' + data.things[i].slug + '">' +
            '<div class="col-50">' +
              '<img data-src="' + data.things[i].image + '" alt="image for ' + data.things[i].name + '" class="lazy fluid-img thing-card__img" >' +
            '</div>' +
            '<div class="col-50">' +
              '<p class="text-small text-color-secondary">' + data.things[i].origin + ' &bull; ' + data.things[i].category + ' </p>' +
              '<p class="text-large">' + data.things[i].name + '</p>' +
              '<p class="text-small text-color-primary medium-margin-top small-margin-bottom">' + data.things[i].note + '</p>' +
              '<a href="' + data.things[i].link + '" class="text-small text-color-secondary">&rarr; ' + data.things[i].linklabel + '</a>' +
            '</div>' +
          '</div>'
        );

      });

    });

  }

  // NOTES

  if (document.body.classList.contains('page-notes')) {

    var notesData = "https://slrncl.com/assets/data/notes.json";

    $.getJSON( notesData, {
      format: "json",
      type: 'GET',
      dataType: 'jsonp',
      CORS: true ,
      contentType:'application/json',
      secure: true,
      headers: {
      'Access-Control-Allow-Origin': '*',
      }
    })
      .done(function( data ) {

      $.each( data.notes, function( i, note ) {

        $('.notes-feed').append(
          '<div class="one-note box large secondary-bg no-border medium-margin-bottom">' +
            '<p class="text-small text-color-secondary large-margin-bottom line-height-100">' + data.notes[i].date + '</p>' +
            '<p class="text-large text-color-primary small-margin-bottom">' + data.notes[i].quote + '</p>' +
            '<p class="text-small text-color-secondary large-margin-bottom line-height-100">&mdash; ' + data.notes[i].author + '</p>' +
            '<p class="text-small text-color-secondary no-margin">' + data.notes[i].notes + ' </p>' +
          '</div>'
        );

      });

    });

  }

  // SMOOTH SCROLL
  $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
  });

}); // END Document.ready

// LIGHTBOX

$(document).on('click', '.zoomlightbox-trigger', function () {

  $('body').css( "overflow-y", "hidden" );

  var lightboximage = $(this).attr('src');
  var imagefilename = lightboximage.slice(lightboximage.lastIndexOf('/') + 1); // get end of the string after the last occurence of /

  $('body').prepend(
    '<div class="zoomlightbox-container">' +
      '<div class="zoomlightbox-image-name">' + imagefilename + ' </div>' +
      '<img src="' + lightboximage + '" class="zoomlightbox-image"/>' +
      '<div class="close-zoomlightbox">Click/tap to close</div>' +
    '</div>'
  );

});

$(document).on('click', '.zoomlightbox-container', function () {
  $(this).remove();
  $('body').css( 'overflow-y', 'auto' );
});

// MOMENTS

if (document.body.classList.contains('page-moments')) {

  $(".lazy").Lazy({ 
    scrollDirection: 'vertical',
    effect: 'fadeIn',
    effectTime: 500,
    placeholder: "https://slrncl.com/assets/img/loader.gif",
    threshold: 0,
    visibleOnly: true
  });

}
