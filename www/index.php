<?php $page = "home";?>
<?php include "header.php";?>

<main>

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1 class="text-color-secondary medium-margin-bottom">
            <span class="text-color-primary">Nicolas Solerieu</span><br>
            Web & Brand designer<br>
            SLO, CA
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

          <p class="text-regular text-color-secondary medium-margin-top">
            I'm currently doing some web design stuff at <a href="https://github.com/nsolerieu">GitHub</a>. I'm used to working in fast-paced environments and collaborating with interdisciplinary teams. My specialty is web design but have been enjoying creating all sorts of visuals like icons, illustrations and prototypes. <br>
            <br>
            I'm a generalist focused on craft. My formula is doing the work, it's that simple (and hard). I'd label my design approach as realistic, supported by skills in frontend development — all that to say that I (roughly) know how to translate designs into code and understand the constraints of the digital ecosystem. You can follow my work on <a href="https://dribbble.com/SLRNCL">dribbble</a> or (very occasional) case study on <a href="https://behance.com/SLRNCL">Behance</a>.
          </p>
          

          <h2 class="large-margin-top">Directories</h2>

          <a href="/moments/" class="block-link small-margin-bottom">
            <div class="box large secondary-bg no-border">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Moments &#8599;</p>
              <p class="text-regular text-color-secondary small-margin-bottom">An instagram replacement, more like a camera roll folder. No tags, no likes, no links, low res only.</p>
              <p class="text-small line-height-100 text-color-secondary">Latest: 202403-slo-laguna-lake-1.jpg</p>
            </div>
          </a>

          <a href="/notes" class="block-link small-margin-bottom">
            <div class="box large secondary-bg no-border">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Notes &#8599;</p>
              <p class="text-regular text-color-secondary small-margin-bottom">Famous words and bumper stickers curated, collected, and annotated. Years of reading and conversation, distilled.</p>
              <p class="text-small line-height-100 text-color-secondary">Latest: 2024-03-14</p>
            </div>
          </a>

          <a href="/things" class="block-link small-margin-bottom">
            <div class="box large secondary-bg no-border">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Things &#8599;</p>
              <p class="text-regular text-color-secondary small-margin-bottom">What brings utility and joy to my days. A simple portrait as an homage with a short note. As anti elite-designer goods showcase.</p>
              <p class="text-small line-height-100 text-color-secondary">Latest: Titanium Long Handle Spoon</p>
            </div>
          </a>

          <a href="/bikes" class="block-link small-margin-bottom">
            <div class="box large secondary-bg no-border">
              <p class="text-regular text-color-primary line-height-100 small-margin-bottom">Bikes &#8599;</p>
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

  <section id="footnotes" class="footnotes padded-section">
    <div class="container">
      <div class="row large-padding-top full-row-border-top">
        <div class="col-100">
          <p class="text-small text-color-secondar medium-margin-bottom">
            Footnotes
          </p>
          <p class="text-small text-color-secondary medium-margin-bottom">
            Hello – again. This section is a sort of extended "About" section where I allow myself to blab. I don't have big ideas for this. I believe in learning things the long (often harder) way. Like finding the energy to have a website (or whatever this is). I'm not 100% sure it is a wise use of my time but it feels right to speak my truth. I design websites because I got good enough to get paid for it (crazy that I get to feed my family doing this). I probably sound like a basic techie. Perhaps. These few words, and what I do everyday are the only trace of my existence. There is so much stuff out there. It's at best distracting but realistically destructive (by fragmenting our attention, then intellect and ultimately our society). I don't want this for myself, my people, and honestly, the world. I crave contemplation but rarely get to it. Discipline and self examination keep me sane (and lots of walks and bike rides).
          </p>
          <p class="text-small text-color-secondary medium-margin-bottom">
            I was born and raised in France, then in late 2016, <a href="https://www.linkedin.com/in/kojessica/">this lovely lady</a> found me on dribbble and flew me to the Bay Area to join Opendoor's design team where I spent 5 years. In less than 6 years I went from living out of a few bags to have a family. It's been wild to say the least. I never planned any of that. While I'm filled with gratitude I want to put as much intention as I can to figure out where I want to live and what kind of life. That - takes most of my free time. I like to think that I practice a sort of socratic examined life; a wholesome <i>summum bonum</i>. It has been complicated for me to find much satisfaction in my contribution as a web designer. A website is a website. Yet almost ten years later I'm still here, making websites.
          </p>
          <p class="text-small text-color-secondary medium-margin-bottom">
            A mix of a weird work ethic and ego led me to define myself through the stuff I make. I like to make stuff (almost always too fast). That qualifies for the tech bro archetype, who needs to "make" things (often obvious mistakes) to learn. Unfortunately I am one of those monkeys for whom most learning comes from experience. As I age, I get reminded that the stuff that viscerally gets acknowledged rarely comes from passive consumption but rather from deeply engaged acts. Being a designer has been technical enough to make me believe I understand things better over time. But also abstract to keep me humble and hungry. Images and words are imperfect. It looks like we are just realizing the problem with words while we've been aware of how images can distort our perception for a long time. I'll keep making images and code stuff, that's my way to chip away at life's monolith, or to push my rock up the mountain like Sisyphus. I spend most of my time torn between ascetic ideals and pragmatic coping strategies, that's my version of the examined life.
          </p>
          <p class="text-small text-color-secondary medium-margin-bottom">
            After quitting social media I decided to put more intention in the way I use the internet in general. I used to think about things in terms of cost/benefit only and fell for the potential value without indexing the attention cost. I'm now reclaiming my fragmented attention. The few connections, ideas, and laughs I got from it are not worth the space it took in my head. Of course I'm afraid of the social stigma and the potential effect it could have on my career... after all I didn't delete my Linkedin account. It says something about me. Those who will examine my online presence will perceive this differently – be it. I know the design world is all up on twitter and instagram. Mostly for reach and interaction according to my understanding. Vanity, garbage, and burnout are too much for me to justify the effort of coping. I'll be active where I think it is relevant for me to be: Dribbble.
          </p>
          <p class="text-small text-color-secondary medium-margin-bottom">
            This page emits an estimated 3.196g of carbon dioxide equivalent per visitor (that's not great). The internet is a heavy beast and we tend to deny the true cost of pixels. It is not what most people envision or describe with fluffy words like pixels and cloud. Having a kid and failing at growing anything edible really made me realize the reality of energy scarcity. It's sad and appalling, but that's what it took me to realize it. As a designer I can do little more than not increasing the weight of things too much, one bit at the time. Simple things like compressing images or pulling back on animation can make a difference. Considering people's attention on the web, these details will probably not be noticeable anyway. That is the kind of honesty I preach and apply to my own work.
          </p>
          <p class="text-small text-color-secondary medium-margin-bottom">
            I don't think or care much about tech stack, data, accessibility or AI. A scary sentence to write but that is partially what motivated me to leave social media that seems obsessed with these matters. The web industry is increasingly fragmented and driven by highly specialized tools. This promotes a loss of autonomy by increasing dependencies and lack of (human) specialists. Too many inputs and tools have distracted me from the human reality of the creative process: consider context, take decisions, do the work and iterate. Limiting inputs narrows the context, it's crucial for me to stay functional. I often choose to center around tangibility and what I judge is the wisest feasible action. That may sound pretentious but it allows me to find meaning in what I do. Data and AI are two polarizing topics. I'm conformably stating that: They both are tools, and they will be leveraged to create the usual 80-20 ratio of trash to goodness. Designers seem perpetually threatened by democratization. Tool after tool, it's the same story. It's absurd. My interest lies in creating stuff grounded in good practices that reflect my team's opinion and best execution while using the simplest tool to make the thing. So far AI has been fun but not particularly insightful and Data has been frustrating as its source and meaning often seem to be here to justify a request more than a real need.
          </p>
          <p class="text-small text-color-secondary medium-margin-bottom" >
            While I’m not a technologist, I’m not a monk either. I’m way too fidgety and working on it. Modern tech devices really rub my monkey mind the wrong way but I get that I need to accept it as a part of life. So I've been a fair-weather meditator for a while now. Believing that discipline was the only thing keeping me away from the peace and insights (silly, I know) I've been practicing on and off for years. Recent ventures into Zen and Daoism thought have removed the goals from the ritual, providing just enough guidance to allow a glance of the feeling. A feeling, not words or any other symbols. Understanding the importance of the non-verbal experience of life has been eye-opening. So when time opens up, I sit, just to sit, relax what is between my eyes, and watch my posture and breath.
          </p>
          <p class="text-small text-color-secondary">
            <i>They say feedback is a gift</i>. While I don't track anything, I like to know how you feel about being here on my website so feel free to <a href="#links">reach out</a>. My gratitude for the opportunity to be here now is larger than an html file can hold. You could be anywhere &mdash; and yet, you are here now.<br>
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include "footer.php";?>