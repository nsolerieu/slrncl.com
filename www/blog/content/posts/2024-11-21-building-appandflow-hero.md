# Building App&Flow’s hero

I got the chance to design App&Flow latest website. The new tagline: “Turbocharged React Native Engineering, Powered by Expo” inspired the design of the hero piece. The ring frames the app icons and create a feeling of smoothness via a reveal effect and then infinite rotation. The composition directly illustrates the tagline by combining the tech logos mentioned. The ring around provides a frame and a touch of motion.

See demo on Codepen: https://codepen.io/nsolerieu/pen/WNVqOMB


<video width="1400" height="1070" controls style="border: 1px solid rgba(0,0,0,0.1);">
  <source src="https://slrncl.com/blog/content/img/hero-appandflow.mp4" type="video/mp4">
</video>


## HTML/CSS
The ring of ellipses is an inline SVG with a unique class on each ellipse. This allows to set a unique opacity and rotation target to create the reveal effect. The values are a gradual range of rotation and opacity.

The `.hero__center` is a flex container centered via `position: absolute`. The same class toggle reveals the constituents. A mix of translation and rotation creates the snap-in lockup—all three with the same timing and easing.

The back glow is created via a `::before` pseudo-element on the parent container and uses a `filter: blur(80px)`. The rest is simple absolute positioning and a color variable.

CSS color variables are used to support light and dark modes. In the production version, the entire site can be toggled between light and dark mode via an extended set of variables.

I did not use animation software who would have exported a mush of code. I type every line of the ring `<svg>` in sublime text (I did export the plus sign from figma). I’m not asking for a trophy for that, simply suggesting to reduce dependencies on tools and, for the love of code, keep the DOM clean!


	<div class="hero-visual">
      
      <svg width="456" height="456" viewBox="0 0 456 456" fill="none" xmlns="http://www.w3.org/2000/svg" class="ring">
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-1" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-2" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-3" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-4" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-5" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-6" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-7" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-8" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-9" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-10" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-11" />
        <ellipse cx="228" cy="228" rx="185" ry="135" class="ellipse e-12" />
      </svg>

      <div class="hero__center">
        <div class="hero__center__appicon-left"></div>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5036 2.46533V6.49634L11.5346 6.49634V7.50409L7.5036 7.50409L7.5036 11.5351H6.49585L6.49585 7.50409H2.46484V6.49634H6.49585V2.46533H7.5036Z" class="hero__center__plus"/>
        </svg>
        <div class="hero__center__appicon-right"></div>
      </div>
      
    </div>

## JS
The javascript is only here to toggle the classes needed for the 2 states: onload, and post-reveal. I used `jquery` here for simplicity (laziness - because codepen is too convenient), vanillaJS could do the same.

When the `.loading-done` class gets toggled on the body, the target values get activated, and each ellipse goes from `opacity: 0; transform: rotate(0);` to their unique values. The reveal lasts `6s` as set by the `.ellipse` class transition property `transition: all cubic-bezier(.5,.01,.14,.99) 6s;`. I used a `setTimeout` function to delay by 5.5s  the addition of the `.spin` class on the ring. The `0.5s` offset is dialed in to start the infinite spin before the reveal is fully done to avoid an awkward stop between the 2 states.

	$(window).on('load', function(){
  		$('body').toggleClass( 'loading-done' ); // Animation last 6s

  		setTimeout(function () {
    		$(".ring").addClass("spin");
  		}, 5500);

	});

## Ethos
All this is rudimentary when one considers what can be done these days with CSS, SVG, and JS. I could have done something like that back in 2015. My key priorities were to find a clear concept and build a smooth experience. Smoothness is achieved here by using basic CSS which allows to hit 60fps easily. This example sums up my `70% baked` rule. I’m not the apple web design team or an award-winning studio, I aim to deliver something good, not great, consistently, using sustainable means. 