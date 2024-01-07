<?php $page = "work";?>
<?php include "header.php";?>

<main>

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1  class="text-color-primary">Projects <sup class="text-small text-color-secondary">2016-<?php echo date("y"); ?></h1>
          <p class="text-regular text-color-secondary">
            I'm currently doing some web design stuff at <a href="https://github.com/nsolerieu">GitHub</a>. Before that I was at <a href="https://www.opendoor.com/">Opendoor</a> and aside of my main gig I've been working with early stage startup and friends.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="projects" >
    <div class="container">
      <div class="row projects-feed"></div>
    </div>
  </section>


  <section id="links" >
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h2 class="no-margin-top text-color-primary">Want more of my stuff?</h2>
          <div id="links" class="medium-margin-top">
            <a href="https://dribbble.com/SLRNCL" class="block-link">
              <div class="box-link">
                <p class="no-margin line-height-100 text-color-primary text-small">dribbble/slrncl</p>
                <p class="no-margin-bottom small-margin-top line-height-100 text-color-secondary text-small small">What I’m working on (regular updates)</p>
              </div>
            </a>
            <a href="https://behance.com/SLRNCL" class="block-link">
              <div class="box-link">
                <p class="no-margin line-height-100 text-color-primary text-small">behance/slrncl</p>
                <p class="no-margin-bottom small-margin-top line-height-100 text-color-secondary text-small small">Occasional case study (is this still a thing?)</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include "footer.php";?>
