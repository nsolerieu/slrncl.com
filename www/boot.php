<?php $page = "boot";?>
<?php include "header.php";?>

<main>

  <section class="hero no-adding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1>Boot.css</h1>
          <p class="medium-margin-top small-margin-bottom text-small text-color-secondary max-width-400">
             This is a reaction the over engineered frameworks. An aggressively minimal and opinionated css framework. DOM-verbose. 2 breakpoints (Desktop + mobile). 5 column widths. 
          </p>
          <a href="https://slrncl.com/assets/css/boot.css" target="_blank" class="button primary small">Download</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="large-container">

      <div class="row">
        <div class="col-50 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-50</p>
          </div>
        </div>
        <div class="col-50 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-50</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-33 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-33</p>
          </div>
        </div>
        <div class="col-33 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-33</p>
          </div>
        </div>
        <div class="col-33 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-33</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-25 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-25</p>
          </div>
        </div>
        <div class="col-25 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-25</p>
          </div>
        </div>
        <div class="col-25 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-25</p>
          </div>
        </div>
        <div class="col-25 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-25</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-100 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-100</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-25 collapse-to-50 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-25.collapse-to-50</p>
          </div>
        </div>
        <div class="col-75 collapse-to-50 small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-75.collapse-to-50</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-50 dont-collapse small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-50.dont-collapse</p>
          </div>
        </div>
        <div class="col-50 dont-collapse small-margin-top">
          <div class="box small secondary-bg no-border">
            <p class="text-small">.col-50.dont-collapse</p>
          </div>
        </div>
      </div>

    </div>
  </section>

    <section class="padded-section">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h2>Grid</h2>
          <p class="small-margin-top text-color-secondary">
            The grid illustrate the ethos of this <code>boot.css</code>. It is opinionated and restrictive. The class names reflect their width in % (col-50 = 50%). By default, all columns will collapse to 100% width on mobile (any screen under <code>840px</code> wide). 2 columns are possible on mobile by using the classes <code>.col-50.dont-collapse</code> and <code>col-25.collapse-to-50</code> <code>col-75.collapse-to-50</code> .
          </p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-50 full-col-border-top large-margin-top">
          <h2>Buttons</h2>
          <div class="medium-margin-top">
            <a href="#" class="button regular primary">Huzah</a>
            <p class="text-small text-color-secondary">.button.regular.primary</p>
          </div>
          <div class="medium-margin-top">
            <a href="#" class="button small secondary">Hiyah</a>
            <p class="text-small text-color-secondary">.button.small.secondary</p>
          </div>
          <div class="medium-margin-top">
            <a href="#" class="button small brand">Kahboom</a>
            <p class="text-small text-color-secondary">.button.small.brand</p>
          </div>
        </div>
        <div class="col-50 full-col-border-top large-margin-top">
          <h2>Labels</h2>
          <div class="medium-margin-top">
            <span class="label regular primary border">Some kind</span>
            <p class="text-small text-color-secondary">.label.regular.primary.border</p>
          </div>
          <div class="medium-margin-top">
            <span class="label small secondary border">Another kind</span>
            <p class="text-small text-color-secondary">.label.small.secondary.border</p>
          </div>
          <div class="medium-margin-top">
            <span class="label small brand filled">Yet another</span>
            <p class="text-small text-color-secondary">.label.small.brand.filled</p>
          </div>
        </div>
      </div>
      <div class="row large-margin-top">
        <div class="col-100">
          <div class="box large secondary-bg no-border radius">
            <p class="text-color-secondary">// This is a <code>.box.large.radius.secondary-bg.no-border</code></p>
            
            <h2 class="medium-margin-top medium-margin-bottom border-top small-padding-top">Type</h2>
            
            <h1>Headling 1</h1>
            <h3>Headling 2 / 3 / 4 / 5 / 6</h3>
            
            <p class="text-large text-color-brand">.text-large.text-color-brand</p>
            <p class="text-regular text-color-primary">.text-regular.text-color-primary</p>
            <p class="text-small text-color-secondary">.text-small.text-color-secondary</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="padded-section">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h2><span class="text-color-secondary">(self-explanatory)</span> classes and variables</h2>
          <div class="box large text-regular">
            <span class="text-color-secondary">// Variables</span><br>
            --font-primary<br>
            --font-mono<br>
            --text-primary<br>
            --text-secondary<br>
            --bg-primary<br>
            --bg-secondary<br>
            --border<br>
            --border-darker<br>
            --brand-primary<br>
            --font-size-small<br>
            --font-size-regular<br>
            --font-size-large<br>
            --radius-large<br>
            --radius-regular<br>
            --radius-small<br>
            --spacer-small<br>
            --spacer-medium<br>
            --spacer-large<br>
            --gutter<br>
            <br>
            <span class="text-color-secondary">// Layout</span><br>
            .container<br>
            .large-container<br>
            .row<br>
            .col-100<br>
            .col-75.collapse-to-50<br>
            .col-50.dont-collapse<br>
            .col-33<br>
            .col-25.collapse-to-50<br>
            .row.unpadded<br>
            .right-padded-col<br>
            <br>
            <span class="text-color-secondary">// Keylines and borders</span><br>
            .full-row-border-top<br>
            .full-row-border-bottom<br>
            .full-col-border-top<br>
            .full-col-border-bottom<br>
            .border-all-around<br>
            .border-top<br>
            .border-bottom<br>
            .border-left<br>
            .border-right<br>
            <br>
            <span class="text-color-secondary">// Utilities</span><br>
            .auto-margins<br>
            .show-on-desktop-only<br>
            .show-on-mobile-only<br>
            .fluid-img<br>
            .max-width-400<br>
            .max-width-600<br>
            <br>
            <span class="text-color-secondary">// Box</span><br>
            .box.small.radius<br>
            .box.large.no-border<br>
            <br>
            <span class="text-color-secondary">// Backgrounds</span><br>
            .bg-primary<br>
            .bg-secondary<br>
            .bg-brand<br>
            <br>
            <span class="text-color-secondary">// Buttons</span><br>
            .button.small.secondary<br>
            .button.regular.primary<br>
            .button.brand<br>
            <br>
            <span class="text-color-secondary">// Labels</span><br>
            .label.primary.border<br>
            .label.secondary.filled<br>
            .label.brand<br>
            <br>
            <span class="text-color-secondary">// Text</span><br>
            .text-color-primary<br>
            .text-color-secondary<br>
            .text-color-brand<br>
            .text-align-right<br>
            .text-align-center<br>
            .line-height-100<br>
            .uppercase<br>
            .captialize:first-letter<br>
            .text-small<br>
            .text-regular<br>
            .text-large<br>
            .block-link<br>
            <br>
            <span class="text-color-secondary">// Spacing</span><br>
            .no-margin<br>
            .no-margin-top<br>
            .no-margin-bottom<br>
            .large-margin-bottom <br>
            .large-margin-top<br>
            .medium-margin-bottom<br>
            .medium-margin-top<br>
            .small-margin-bottom<br>
            .small-margin-top<br>
            .no-padding<br>
            .no-padding-top<br>
            .no-padding-bottom<br>
            .large-padding-bottom<br>
            .large-padding-top<br>
            .medium-padding-bottom<br>
            .medium-padding-top<br>
            .medium-padding-bottom<br>
            .medium-padding-top<br>
            .small-padding-bottom<br>
            .small-padding-top<br>
            .padded-section<br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="padded-section">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h2>What? Why?</h2>
          <p class="small-margin-top text-color-secondary">
            This is not a full-feldge framework covering all the possible layouts and UI elements. It is designed to force and enforce a minimal design approach. Spacious, focused and respectful of human attention. It covers 90% of my needs, and probably yours. It is the distillation of 10 years of me building websites and developing, my taste – a savant-melange of restraint and ignorance that shaped this tiny package. Its simplicity allows me to works with it in my mind or apply it in design software without plugin or other gadget.
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include "footer.php";?>
