$(window).on('load', function(){

  $('body').toggleClass( 'loading-done' );

});

// DEFERRED LAZ LOAD 

$(document).ajaxStop(function(){
    $(".lazy").Lazy({ 
      scrollDirection: 'vertical',
      placeholder: "https://slrncl.com/dev/new/assets/img/loader.gif",
      threshold: 0,
      visibleOnly: true,
      onError: function(element) {
        console.log('error loading ' + element.data('src'));
      }
    });
});

$(document).ready(function() {

  // WORKS

  var projectsData = "https://slrncl.com/dev/new/assets/data/projects.json";

  $.getJSON( projectsData , function(data) {

    $.each( data.projects, function( i, project ) {

      $('.projects-feed').append(
        '<a class="block-link project-card col-100" href="' + data.projects[i].link + '" >' +
          '<img data-src="' + data.projects[i].image + '" alt="image for ' + data.projects[i].name + '" class="lazy fluid-img corner-radius-img medium-margin-bottom" width="1600px" height="1200px" >' +
          '<div class="project-details large-padding-bottom right-padded-col">' +
            '<p class="text-regular text-color-primary medium-margin-bottom line-height-100">' + data.projects[i].name + '</p>' +
            '<p class="text-small text-color-secondary medium-margin-bottom">' + data.projects[i].description + '</p>' +
            '<p class="text-small text-color-secondary no-margin">' + data.projects[i].category + ' &nbsp;&nbsp;&mdash;&nbsp;&nbsp; ' + data.projects[i].type + ' </p>' +
          '</div>' +
        '</a>'
      );

    });

  });

  // BIKES

  var bikesData = "https://slrncl.com/dev/new/assets/data/bikes.json";

  $.getJSON( bikesData , function(data) {

    $.each( data.bikes, function( i, bike ) {

      $('.bikes-feed').append(
        '<a class="block-link bike-card col-100 large-padding-bottom" >' +
          '<div class="bike-card__id text-small text-color-secondary">' + data.bikes[i].id + '</div>' +
          '<img data-src="' + data.bikes[i].image + '" alt="image for ' + data.bikes[i].model + ' - ' + data.bikes[i].surname + '" class="lazy fluid-img corner-radius-img" >' +
          '<p class="text-regular text-color-primary medium-margin-top line-height-100">' + data.bikes[i].model + '</p>' +
          '<p class="text-small text-color-secondary small-margin-top line-height-100">"' + data.bikes[i].surname + '"</p>' +
          '<div class="bike-card__metas">' +
            '<span class="text-small text-color-secondary line-height-100">' + data.bikes[i].years + '</span>' +
            '<span class="text-small text-color-secondary line-height-100">' + data.bikes[i].status + '</span>' +
            '<span class="text-small text-color-secondary line-height-100">' + data.bikes[i].mileage + '</span>' +
          '</div>' +
          '<p class="text-regular text-color-secondary no-margin">' + data.bikes[i].notes + ' </p>' +
        '</a>'
      );

    });
  });

  // NOTES

  var notesData = "https://slrncl.com/dev/new/assets/data/notes.json";

  $.getJSON( notesData , function(data) {

    $.each( data.notes, function( i, note ) {

      $('.notes-feed').append(
        '<a class="block-link note-card col-100" >' +
          '<div class="box big note-details medium-margin-bottom">' +
            '<p class="text-small text-color-secondary large-margin-bottom line-height-100">' + data.notes[i].id + ' — ' + data.notes[i].date + '</p>' +
            '<p class="text-large text-color-primary small-margin-bottom">' + data.notes[i].quote + '</p>' +
            '<p class="text-small text-color-primary large-margin-bottom line-height-100">&mdash; ' + data.notes[i].author + '</p>' +
            '<p class="text-small text-color-secondary no-margin">' + data.notes[i].notes + ' </p>' +
          '</div>' +
        '</a>'
      );

    });
  });

  // MOMENTS

  var activediapo = "";
  var lightboximage = "";
  var nextlightboximage = "";
  var previouslightboximage = "";

  $('.une-diapo').on( 'click', function() {

    $('body').css( "overflow-y", "hidden" );

    activediapo = $(this);
    lightboximage = $(this).attr('data-image-src');

    $('#body').prepend(
      '<div class="lightbox-container">' +
        '<div class="close-lightbox">Close</div>' +
        '<div class="prev-image"><<</div>' +
        '<div class="next-image">>></div>' +
        '<img src="' + lightboximage + '" class="lightbox-image"/>' +
        '<div class="lightbox-image-name">' + lightboximage.substr(38) + ' </div>' +
      '</div>'
    );

  });

  $(document).on("click", ".close-lightbox" , function() {
    $(this).parent().remove();
    $('body').css( "overflow-y", "auto" );
  });

  $(document).on("click", ".next-image" , function() {
    activediapo = activediapo.parent().next().find('.une-diapo');
    nextlightboximage = activediapo.attr('data-image-src');
    $( ".lightbox-image" ).attr( "src", nextlightboximage );
    $( ".lightbox-image-name" ).html( nextlightboximage.substr(38) );
  });

  $(document).on("click", ".prev-image" , function() {
    activediapo = activediapo.parent().prev().find('.une-diapo');
    previouslightboximage = activediapo.attr('data-image-src');
    $( ".lightbox-image" ).attr( "src", previouslightboximage );
    $( ".lightbox-image-name" ).html( previouslightboximage.substr(38) );
  });  

  // TABS

  $( ".one-project-row" ).on('click', function() {
    $(this).toggleClass( "active" );
    $(this).next().slideToggle();
  });

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

});