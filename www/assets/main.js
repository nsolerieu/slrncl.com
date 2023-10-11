$(window).on('load', function(){
  $('body').toggleClass( 'loading-done' );
});

$(document).ready(function() {

  var projectsData = "https://slrncl.com/dev/new/assets/data/projects.json";

  $.getJSON( projectsData , function(data) {

    $.each( data.projects, function( i, project ) {

      $('.feed').append(
        '<a class="block-link project-card col-100" href="' + data.projects[i].link + '" >' +
          '<img src="' + data.projects[i].image + '" alt="image for ' + data.projects[i].name + '" class="fluid-img corner-radius-img medium-margin-bottom" width="1600" height="1200" >' +
          '<div class="project-details large-padding-bottom right-padded-col">' +
            '<p class="text-regular text-color-primary medium-margin-bottom line-height-100">' + data.projects[i].name + '</p>' +
            '<p class="text-small text-color-secondary medium-margin-bottom">' + data.projects[i].description + '</p>' +
            '<p class="text-small text-color-secondary no-margin">' + data.projects[i].category + ' &nbsp;&nbsp;&mdash;&nbsp;&nbsp; ' + data.projects[i].type + ' </p>' +
          '</div>' +
        '</a>'
      );

    });
  });

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

  $( ".one-project-row" ).on('click', function() {
    $(this).toggleClass( "active" );
    $(this).next().slideToggle();
  });

});