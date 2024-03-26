<?php $page = "home";?>
<?php include "header.php";?>

<main>

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1 class="medium-margin-bottom">
            Nicolas Solerieu<br>
            <span class="text-color-secondary">Web & Brand designer</span>
          </h1>

          <div class="video-container">
            <div class="video-container__button">
              <div class="video-container__button__play">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 16V0L14 7.5L2 16Z" fill="black"/>
                </svg>
              </div>
              <div class="video-container__button__pause">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 16V0H7V16H2Z" fill="black"/>
                  <path d="M9 16V0H14V16H9Z" fill="black"/>
                </svg>
              </div>
            </div>
            <video loop muted width="1600" height="1200" id="showreel" poster="/assets/video/reel-cover.jpg">
              <source src="<?php echo BASE_URL; ?>/assets/video/slrncl-reel.webm" type="video/webm" />
              <source src="<?php echo BASE_URL; ?>/assets/video/slrncl-reel.mp4" type="video/mp4" />
            </video>
          </div>

          <p class="medium-margin-top">
            I'm currently doing some web design stuff at <a href="https://github.com/nsolerieu">GitHub</a>. I'm used to working in fast-paced environments and collaborating with interdisciplinary teams. My specialty is web design but have been enjoying creating all sorts of visuals like icons, illustrations and prototypes. <br>
            <br>
            I'm a generalist focused on craft. My formula is doing the work, it's that simple (and hard). I'd label my design approach as realistic, supported by skills in frontend development — all that to say that I (roughly) know how to translate designs into code and understand the constraints of the digital ecosystem. You can follow my work on <a href="https://dribbble.com/SLRNCL">dribbble</a> or (very occasional) case study on <a href="https://behance.com/SLRNCL">Behance</a>.
          </p>
          

          <h2 class="large-margin-top">Directories</h2>

          <a href="/moments/" class="block-link small-margin-bottom">
            <div class="box small secondary-bg">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Moments &#8594;</p>
              <p class="text-regular text-color-secondary small-margin-bottom">An instagram replacement, more like a camera roll folder. No tags, no likes, no links, low res only.</p>
              <p class="text-small line-height-100 text-color-secondary">Latest: 202403-slo-laguna-lake-1.jpg</p>
            </div>
          </a>

          <a href="/notes" class="block-link small-margin-bottom">
            <div class="box small secondary-bg">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Notes &#8594;</p>
              <p class="text-regular text-color-secondary small-margin-bottom">Famous words and bumper stickers curated, collected, and annotated. Years of reading and conversation, distilled.</p>
              <p class="text-small line-height-100 text-color-secondary">Latest: 2024-03-14</p>
            </div>
          </a>

          <a href="/things" class="block-link small-margin-bottom">
            <div class="box small secondary-bg">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Things &#8594;</p>
              <p class="text-regular text-color-secondary small-margin-bottom">What brings utility and joy to my days. A simple portrait as an homage with a short note. As anti elite-designer goods showcase.</p>
              <p class="text-small line-height-100 text-color-secondary">Latest: Titanium Long Handle Spoon</p>
            </div>
          </a>

          <a href="/bikes" class="block-link small-margin-bottom">
            <div class="box small secondary-bg">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Bikes &#8594;</p>
              <p class="text-regular text-color-secondary small-margin-bottom">One of the greatest human inventions, and part of my life. A little wall of fame for the bikes of mine, past and present.</p>
              <p class="text-small line-height-100 text-color-secondary">Latest: Giant Talon 1 "Dad bike"</p>
            </div>
          </a>


          <h2 class="large-margin-top">Contact</h2>

          <div class="item-value-row">
            <div class="item-value-row__item">Mail</div>
            <div class="item-value-row__value"><a href="mailto:hello@slrncl.com">hello@slrncl.com</a></div>
          </div>
          <div class="item-value-row">
            <div class="item-value-row__item">Read.cv</div>
            <div class="item-value-row__value"><a href="https://read.cv/nicolas">@nicolas</a></div>
          </div>
          <div class="item-value-row">
            <div class="item-value-row__item">Linkedin</div>
            <div class="item-value-row__value"><a href="https://www.linkedin.com/in/nicolas-solerieu/">nicolas-solerieu</a></div>
          </div>

        </div>
      </div>
    </div>
  </section>

</main>

<?php include "footer.php";?>