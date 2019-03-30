<?php include "./includes/header.php";?>

<main>
<!-- Section: Stats -->
<!-- <section class="section section-stats blue center">
  <div class="row">
  <div class="col s12">
   
    <p></p>
  </div>
  </div>
  </section> -->

  <section class="section section-stats  center">
    <div class="container">
    <div class="row">
      <div class="col s12 m4 ">
        <div class="card-panel blue darken-3 lighten-1 white-text center">
        <i class="fab fa-facebook-square fa-10x  "></i>
            <!-- <i class="material-icons large">monetization_on</i> -->
            <h5>Facebook</h5>
            <a class="waves-effect waves-light btn-large blue darken-3">
            <i class="fab fa-facebook-square  "></i>
            Run The Hack</a>
        </div>
      </div>

      <div class="col s12 m4 ">
        <div class="card-panel blue-text center">
            <i class="fab fa-twitter fa-10x"></i>
            <h5>Twitter</h5>
            <a class="waves-effect waves-light btn-large blue">
            <i class="fab fa-twitter "></i>
            Run The Hack</a>
          </div>
      </div>

      <div class="col s12 m4 ">
        <div class="card-panel   lighten-1 orange-text center">
            <i class="fab fa-reddit fa-10x"></i>
            <!-- <i class="material-icons large">monetization_on</i> -->
            <h5>Reddit</h5>
            <a class="waves-effect waves-light btn-large orange">
            <i class="fab fa-reddit   "></i>
            Run The Hack</a>
        </div>
      </div>




      <!-- </div> -->


      </div>
    </div>
  </section>

</main>










<!-- Preloader -->
<div class="loader preloader-wrapper big active">
  <div class="spinner-layer spinner-blue-only">
    <div class="circle-clipper left">
      <div class="circle"></div>
    </div>
    <div class="gap-patch">
      <div class="circle"></div>
    </div>
    <div class="circle-clipper right">
      <div class="circle"></div>
    </div>
  </div>
</div>
</main>



<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery3.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

<script>
  // Hide Sections
  $('.section').hide();
  setTimeout(function () {
    $(document).ready(function () {
      // Show Sections
      $('.section').fadeIn();

      // Hide Preloaders
      $('.loader').fadeOut();

      //Init Side nav
      $('.button-collapse').sideNav();
      // Counter
      $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
            duration: 1000,
            easing: 'swing',
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
      });
      // Comments-Approve & Deny
      $('.approve').click(function (e) {
        Materialize.toast('Comment Approved', 3000);
        e.preventDefault();
      });
      $('.deny').click(function (e) {
        Materialize.toast('Comment Denied', 3000);
        e.preventDefault();
      });

    });
  }, 1000);

</script>
</body>

</html>
