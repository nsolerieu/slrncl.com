$(window).on('load', function(){
  $('body').toggleClass( 'loading-done' );
});


$(document).ready(function() {

  startTime();
  getYear();

  $.each( projects, function( i ) {
    $('.feed').append(
      '<div class="one-project-row row full-row-border-top scroll-fade">' +
        '<div class="col-50 project-name">' +
          '<p class="text-regular text-color-primary">' + projects[i].name + '</p>' +
        '</div>' +
        '<div class="col-50 text-align-right project-year">' +
          '<p class="text-regular text-color-secondary">' + projects[i].year + '</p>' +
        '</div>' +
      '</div>' +
      '<div class="one-project-details-row small-padding-bottom" style="display: none">' +
        '<div class="row">' +
          '<div class="one-project-details-row__image col-100">' +
            '<img src="' + projects[i].image + '" alt="image for ' + projects[i].name + '" class="fluid-img corner-radius-img project-image" width="1600" height="1200" >' +
          '</div>' +
        '</div>' +
        '<div class="row">' +
          '<div class="col-100 right-padded-col">' +
            '<p class="text-small text-color-secondary small-margin-bottom">' + projects[i].category + ' | ' + projects[i].type + '</p>' +
            '<p class="text-small small-margin-bottom">' + projects[i].description + '</p>' +
            '<a class="text-small" href="' + projects[i].link + '" >' + projects[i].linklabel + ' &nearr;</a>' +
          '</div>' +
        '</div>' +
      '</div>'
    );

  });

  $( ".one-project-row" ).on('click', function() {
    $(this).toggleClass( "active" );
    $(this).next().slideToggle();
  });

  $( ".menu-item" ).on('click', function() {
    $( ".menu-item" ).removeClass( "active" );
    $(this).addClass( "active" );
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


  // --------------------------------------------------------- //
  // STOPwatch
  // --------------------------------------------------------- //
  let [milliseconds,seconds,minutes,hours] = [0,0,0,0];
  let timerRef = document.querySelector('.timer-display');
  let int = null;

  document.getElementById('start-timer').addEventListener('click', ()=>{
      if(int!==null){
          clearInterval(int);
      }
      int = setInterval(displayTimer,10);
      $('#pause-timer').show();
      $('#start-timer').hide();
  });

  document.getElementById('pause-timer').addEventListener('click', ()=>{
      clearInterval(int);
      $('#pause-timer').hide();
      $('#start-timer').show();
  });

  document.getElementById('reset-timer').addEventListener('click', ()=>{
      clearInterval(int);
      [milliseconds,seconds,minutes,hours] = [0,0,0,0];
      timerRef.innerHTML = '00 : 00 : 00';
  });

  function displayTimer(){
      milliseconds+=10;
      if(milliseconds == 1000){
          milliseconds = 0;
          seconds++;
          if(seconds == 60){
              seconds = 0;
              minutes++;
              if(minutes == 60){
                  minutes = 0;
                  hours++;
              }
          }
      }

   let h = hours < 10 ? "0" + hours : hours;
   let m = minutes < 10 ? "0" + minutes : minutes;
   let s = seconds < 10 ? "0" + seconds : seconds;
   let ms = milliseconds < 10 ? "00" + milliseconds : milliseconds < 100 ? "0" + milliseconds : milliseconds;

   timerRef.innerHTML = ` ${h} : ${m} : ${s}`;
  }

  $( ".take-a-moment-btn" ).on('click', function() {
    $(this).hide();
    $('.stopwatch-controls__btns').show();
    $('.timer-display').show();
    $('#pause-timer').hide();
    $('#start-timer').show();
  });

  $( ".close-take-a-moment-btn" ).on('click', function() {
    clearInterval(int);
    [milliseconds,seconds,minutes,hours] = [0,0,0,0];
    timerRef.innerHTML = '00 : 00 : 00';
    $( ".take-a-moment-btn" ).show();
    $('.stopwatch-controls__btns').hide();
    $('.timer-display').hide();
    $('#pause-timer').hide();
    $('#start-timer').show();
  });

  $( ".feedback-button" ).on('click', function() {
    $('.answers').html("<div class='message text-small text-color-primary'>Thanks mate, human, machine or whatever you identify as.</div>");
  });


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


// --------------------------------------------------------- //
// DATA
// --------------------------------------------------------- //

var projects = [
  {
    "year":"2023",
    "name":"GitHub Universe23",
    "category":"Web design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-github-universe23.png",
    "description":"Landing page for GitHub Universe 2023 with a fresh new layout and branding kit. The design aims at being a reusable container for future events branding and content - simple layout, big boxes and expressive typography.",
    "link":"https://githubuniverse.com/",
    "linklabel":"Live site"
  },
  {
    "year":"2023",
    "name":"Roam",
    "category":"Web design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-roam.png",
    "description":"Roam is the platform for affordable home ownership. I helped shape the first 2 versions of the branding and the website.",
    "link":"https://dribbble.com/SLRNCL/projects/6784869-Roam",
    "linklabel":"View project folder"
  },
  {
    "year":"2023",
    "name":"Ottomate",
    "category":"Branding, Web design & dev",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-ottomate.png",
    "description":"Ottomate is a lifecycle marketing company providing consulting and training. I got the chance to shape from idea to production. Black and white circular logo. Custom HTML/CSS build, no framework.",
    "link":"https://ottomate.co",
    "linklabel":"Live site"
  },
  {
    "year":"2023",
    "name":"Café Welina",
    "category":"Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-welina.png",
    "description":"Café Welina is a Hawaiian-themed café in the Montréal metro area. The branding aimed to emulate tasteful notes of Polynesian culture through historical and natural artifacts such as the Lehua flower.",
    "link":"https://www.behance.net/gallery/166322611/Caf-Welina",
    "linklabel":"Case study"
  },
  {
    "year":"2023",
    "name":"Mona Sans Microsite",
    "category":"Web design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-mona-microsite.png",
    "description":"I took part in the design to the page and various assets presenting the fonts by GitHub. The design uses a bold poster aestetic and was built around showcasing the capabilities of the variable font.",
    "link":"https://github.com/mona-sans",
    "linklabel":"Live page"
  },
  {
    "year":"2023",
    "name":"emdashreads",
    "category":"Web design, Branding, Web development",
    "type":"Self-initiated",
    "image":"https://slrncl.com/assets/img/slrncl-emdashreads.png",
    "description":"Initially a side project to put a friend book out there. We made —reads to publish online books by independent authors. No legacy file formats, no Amazon or Apple games.",
    "link":"https://emdashreads.com/",
    "linklabel":"View project"
  },
  {
    "year":"2022",
    "name":"GitHub CI/CD solution page",
    "category":"Web design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-github-cicd.png",
    "description":"I designed the first solutions page for GitHub CICD suite. This page present the tools and features offered by GitHub to solve CI/CD problematics. The page artulates around a simple storyline: Build > Test > Deploy, with animated demo and specs for each.",
    "link":"https://github.com/solutions/ci-cd/",
    "linklabel":"Live page"
  },
  {
    "year":"2022",
    "name":"App & Flow",
    "category":"Web design",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-appandflow.png",
    "description":"App & Flow is a Montreal-based development team for hire. I redesigned their website and refreshed the branding: minimal 2 column layout, responsive, dark theme, Isometric illustration, and a bit of gradient glow.",
    "link":"https://www.behance.net/gallery/149794437/appandflowcom",
    "linklabel":"Case study"
  },
  {
    "year":"2022",
    "name":"Github Copilot page",
    "category":"Web design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-github-copilot.png",
    "description":"Copilot is Github's Ai product. It uses the OpenAI Codex to suggest code and entire functions in real-time, right from your editor. I got to design the page layout and the various animated graphics for the product launch.",
    "link":"https://dribbble.com/shots/18548324-Github-Copilot-landing-page",
    "linklabel":"Case study"
  },
  {
    "year":"2022",
    "name":"GitHub Discussions page",
    "category":"Web design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-github-discussions.png",
    "description":"Discussions is GitHub's community oriented tab, right in the ecosystem. I worked on the design and animated demos.",
    "link":"https://github.com/features/discussions",
    "linklabel":"See the page"
  },
  {
    "year":"2022",
    "name":"Eisen",
    "category":"Web design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-eisen.png",
    "description":"I helped designing the first version of Eisen visual identity and website in a few weeks. Eisen is a crypto infrastructure startup.",
    "link":"https://www.behance.net/gallery/143364781/Eisen-branding-web",
    "linklabel":"Case study"
  },
  {
    "year":"2021",
    "name":"Opendoor illustrations",
    "category":"Illustration",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-illo-3.png",
    "description":"Selected illustrations made for Opendoor's blog between 2021-2022",
    "link":"https://www.behance.net/gallery/133881157/2021-Opendoor-Illustrations",
    "linklabel":"Case study"
  },
  {
    "year":"2021",
    "name":"The Manual",
    "category":"Product design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-the-manual.png",
    "description":"The Compound Manual – is a web based platform that features wealth planning resources for founders and startup employees. The design approach for this project was to find ways to make references to physical books in the UI. Artifacts such as covers, grain, and page paper bend when opening the navigation are visual hints at the physical book via the UI on screen.",
    "link":"https://www.behance.net/gallery/134549135/The-Compound-Manual",
    "linklabel":"Case study"
  },
  {
    "year":"2021",
    "name":"Kicks",
    "category":"Web design, Branding, Illustration",
    "type":"Personal",
    "image":"https://slrncl.com/assets/img/slrncl-kicks.png",
    "description":"I tried to make a an NFT collection with friends. It didn't go anywhere but it was fun and I got to make a bunch of stuff, fun times.",
    "link":"https://dribbble.com/SLRNCL/projects/6021437-Kicks",
    "linklabel":"View project folder"
  },
  {
    "year":"2021",
    "name":"Opendoor.com",
    "category":"Web design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-com.png",
    "description":"As a designer at Opendoor between 2016-2022, my main focus was the evolution of the website. One of the most important task was to evolve the homepage to reflect new product, strategies, design system and conversion.",
    "link":"https://dribbble.com/SLRNCL/projects/6114439-Opendoor-com",
    "linklabel":"View project folder"
  },
  {
    "year":"2021",
    "name":"Opendoor product design",
    "category":"Product design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-product.png",
    "description":"Work done for Opendoor's various products between 2016-2022",
    "link":"https://dribbble.com/SLRNCL/projects/6114722-Opendoor-Product-design",
    "linklabel":"View project folder"
  },
  {
    "year":"2021",
    "name":"Opendoor brand design",
    "category":"Branding",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-brand.png",
    "description":"I worked on all things brand at Opendoor: Guidelines, illustrations, icon and other facets of how Opendoor looks and feel.",
    "link":"https://dribbble.com/SLRNCL/projects/6114722-Opendoor-Product-design",
    "linklabel":"View project folder"
  },
  {
    "year":"2020",
    "name":"Opendoor Brand evolution",
    "category":"Branding, Illustration",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-brand-evolution.png",
    "description":"I led the brand/visual work during the brand evolution effort where Opendoor set out to elevate by improving consistency of its patterns and establish a strong system geared toward production quality.",
    "link":"https://www.behance.net/gallery/117603565/Brand-evolution",
    "linklabel":"Case study"
  },
  {
    "year":"2020",
    "name":"Opendoor illustrations",
    "category":"Illustration",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-illo-2.png",
    "description":"I got the opportunity of working on a bunch of illustrations over the years. Mostly blog covers, social promotions and press announcements.",
    "link":"https://www.behance.net/gallery/117737779/Opendoor-Illustrations-2019-2020",
    "linklabel":"Case study on behance"
  },
  {
    "year":"2020",
    "name":"Cosmodrome",
    "category":"Illustration",
    "type":"Personal",
    "image":"https://slrncl.com/assets/img/slrncl-cosmodrome.gif",
    "description":"A series of poster inspired by the retro-futurist aestetic.",
    "link":"https://www.behance.net/gallery/126865249/Cosmodrome",
    "linklabel":"View posters"
  },
  {
    "year":"2020",
    "name":"Broadcast",
    "category":"Product design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-broadcast.png",
    "description":"Broadcast streamlines recurring updates, empowering every person with information they need when they need it. I helped Broadcast define it's early product and brand.",
    "link":"https://dribbble.com/SLRNCL/projects/6021368-Broadcast",
    "linklabel":"View project folder"
  },
  {
    "year":"2020",
    "name":"Realkit website",
    "category":"Web design",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-realkit.png",
    "description":"Designed realkit.com - a simple, 4 pages, responsive website. Showcasing the beautiful real estate media assets created by Realkit.",
    "link":"https://www.behance.net/gallery/148310877/Realkit-website",
    "linklabel":"Case study"
  },
  {
    "year":"2020",
    "name":"Realkit",
    "category":"Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-realkit-branding.png",
    "description":"Realkit – is a marketing suite for anyone in the real estate community. The goal and vision behind the company is to harness and provide many marketing tools for commercial and residential real estate agents. The visual identity's goal was to simply convey the concept of realtor's kit.",
    "link":"https://www.behance.net/gallery/103448529/Realkit-identity",
    "linklabel":"Case study on behance"
  },
  {
    "year":"2020",
    "name":"Irrational Labs",
    "category":"Product design",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-irrational-labs.png",
    "description":"I have been helping Irrational labs translate their insights into mockups fitting their clients brand and product ecosystems. Since 2020, we collaborated on projects for Linkedin, TikTok, Belong health, Envestnet, Microsoft News.",
    "link":"locked",
    "linklabel":"Client work locked"
  },
  {
    "year":"2019",
    "name":"Compound",
    "category":"Product design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-compound.png",
    "description":"Compound's mission is to offer a solution to manage your holistic financial life. I got the chance to shape the first version of the brand visual identity, landing page, and product UI.",
    "link":"https://www.behance.net/gallery/125846711/Compound-2019",
    "linklabel":"Case study on behance"
  },
  {
    "year":"2019",
    "name":"Trym",
    "category":"Web design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-trym.png",
    "description":"Trym is an online insurance marketplace dedicated to small business. My role was to help get the team's vision off the ground and give it its first shape.",
    "link":"https://dribbble.com/SLRNCL/projects/1728975-Trym",
    "linklabel":"View project folder"
  },
  {
    "year":"2019",
    "name":"Federal Compass",
    "category":"Web design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-federal-compass.png",
    "description":"Federal Compass is a SaaS solution that enables strategy, growth, and process for federal contractors. I worked on the branding and first homepage.",
    "link":"https://dribbble.com/SLRNCL/projects/6114415-Federal-Compass",
    "linklabel":"View project folder"
  },
  {
    "year":"2018",
    "name":"Culdesac",
    "category":"Web design, Branding",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-culdesac-2018.png",
    "description":"I had the chance of working with Culdesac in 2018 as the company just started. Culdesac is a technology-driven developer and property manager building car-free communities from scratch. I created the first version of the guidelines, landing page and resident app focusing on the neighborly vibe with warm color and lots of white space.",
    "link":"https://www.behance.net/gallery/89158781/Culdesac-2018",
    "linklabel":"Case study"
  },
  {
    "year":"2018",
    "name":"Opendoor illustrations",
    "category":"Illustration",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-illo-1.png",
    "description":"I've created a bunch of illustrations for various project at Opendoor. We started to develop our own style across our different product and platform. I have been able to introduce illustration at Opendoor thanks to numerous marketing projects and tests. After seeing traction and enthusiasm around them we started to include more illustrations in our product and website.",
    "link":"https://www.behance.net/gallery/65825837/Opendoor-Illustrations-2017-2018",
    "linklabel":"Case study"
  },
  {
    "year":"2017",
    "name":"Opendoor Email",
    "category":"Web design",
    "type":"In-house",
    "image":"https://slrncl.com/assets/img/slrncl-opendoor-email.png",
    "description":"I've been in charge of defining the style guide for Opendoor emails (marketing, internal, transactional). I spent a lot of time reacting to requests form different team. As the company scaled I defined a simple and robust style guide that reflected the look and feel of the brand emails while being flexible and compatible enough to accommodate each type of email we send. I also coded a set of HTML templates including all the basic components we used in our emails.",
    "link":"https://www.behance.net/gallery/65505535/Reshaping-Opendoors-email",
    "linklabel":"Case study"
  },
  {
    "year":"2017",
    "name":"Egalapagos.com",
    "category":"Web design",
    "type":"Freelance",
    "image":"https://slrncl.com/assets/img/slrncl-egalapagos.gif",
    "description":"Egalapagos is a travel agency specialized in Galapagos cruises tailored to the US and European market. The ask was to create a mobile first booking platform. The company being the child of a larger travel services group I also created the branding. The goal was to create a first version of the platform. A simple, functional UI for listing and booking cruises.",
    "link":"https://www.behance.net/gallery/65469253/eGalapagoscom",
    "linklabel":"Case study"
  },
  {
    "year":"2016",
    "name":"Tout Equateur",
    "category":"Web design",
    "type":"Agency",
    "image":"https://slrncl.com/assets/img/slrncl-toutequateur.png",
    "description":"Tout equateur is a french travel platform created to share information and experiences in Ecuador. I designed, and built the entire website in wordpress (20+ pages).",
    "link":"https://www.behance.net/gallery/26028731/Tout-equateur",
    "linklabel":"Case study"
  },
  {
    "year":"2016",
    "name":"Mark's Bookeeping Services",
    "category":"Web design",
    "type":"Agency",
    "image":"https://slrncl.com/assets/img/slrncl-mbs.png",
    "description":"Rebranding project for an NYC accounting firm. I worked closely with the team through 2 iterations of the website as they adjusted their business model to transition to digital first.",
    "link":"https://dribbble.com/SLRNCL/projects/426019-MBS",
    "linklabel":"View project folder"
  },
  {
    "year":"2016",
    "name":"Nobody's Perfekt Media",
    "category":"Web design",
    "type":"Agency",
    "image":"https://slrncl.com/assets/img/slrncl-npm.png",
    "description":"My first freelance gig with a US company –  I worked with an agency, designing their identity and website.",
    "link":"https://dribbble.com/SLRNCL/projects/426020-Nobody-s-Perfekt-Media",
    "linklabel":"View project folder"
  },
  {
    "year":"2016",
    "name":"Iris Interactive",
    "category":"Web design",
    "type":"Agency",
    "image":"https://slrncl.com/assets/img/slrncl-irisinteractive.png",
    "description":"Prior to moving to the US I was working at an agency in center France. I had great time and learned a ton, I wish I kept more of the work I did there for memory's sake.",
    "link":"https://dribbble.com/SLRNCL/projects/426022-Iris-Interactive",
    "linklabel":"View project folder"
  }
];

