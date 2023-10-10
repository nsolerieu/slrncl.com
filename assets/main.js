$(window).on('load', function(){
  $('body').toggleClass( 'loading-done' );
});


$(document).ready(function() {

  startTime();
  getYear();

  var projectData = "https://slrncl.com/dev/new/assets/data/projects.json";

  $.getJSON( projectData , function(data) {

    $.each( data.projects, function( i, project ) {

      $('.feed').append(
        '<a class="block-link project-card col-50" href="' + data.projects[i].link + '" >' +
          '<img src="' + data.projects[i].image + '" alt="image for ' + data.projects[i].name + '" class="fluid-img corner-radius-img medium-margin-bottom" width="1600" height="1200" >' +
          '<div class="project-details medium-padding-bottom">' +
            '<p class="text-small small-margin-bottom line-height-100">' + data.projects[i].name + ' - ' + data.projects[i].category + '</p>' +
            '<p class="text-small text-color-secondary no-margin line-height-100">' + data.projects[i].category + '</p>' +
          '</div>' +
        '</a>'
      );

      if ( i === 3 ) {
          return false; // max 4 project on the homepage
        }

    });
  });

  $( ".one-project-row" ).on('click', function() {
    $(this).toggleClass( "active" );
    $(this).next().slideToggle();
  });

  // --------------------------------------------------------- //
  // PROGRESSIVE SCROLL FADE
  // --------------------------------------------------------- //
  window.setTimeout(function() {  

    let intersectionCallback = (entries, observer) => {
      entries.forEach((entry) => { 
        
        entry.target.style.opacity = entry.intersectionRatio;
        // entry.target.style.filter = "blur(" + (10-(10*entry.intersectionRatio)) + "px)";

      });
    }

    let options = {
      root: null,
      rootMargin: "0px",
      threshold: [0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1]
    };

    let observer = new IntersectionObserver(intersectionCallback, options);

    const targets = document.querySelectorAll('.scroll-fade');

    targets.forEach( target => {
      observer.observe(target)
    });

  }, 0);

});


// --------------------------------------------------------- //
// JS CLOCK
// --------------------------------------------------------- //

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
    //document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function getYear() {
    
    var dateobj = new Date();
    var dateObject = dateobj.getFullYear();
    
    document.getElementById("year").innerHTML = dateObject;
}
