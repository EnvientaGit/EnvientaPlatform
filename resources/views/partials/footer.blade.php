<!-- Footer -->

<div class="section bg-info py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-2">
                <img class="d-block img-fluid mx-auto" src="{{ URL::to('img/envienta_platform_logo_big.png') }}">
            </div>
            <div class="col-md-4 my-2">
                <div class="text-center my-2">
                    <b class="text-white">FOLLOW US</b>
                </div>
                <div class="text-center">
                    <a><i class="fa fa-fw fa-facebook text-white fa-2x"></i></a>&nbsp;&nbsp;
                    <a><i class="fa fa-fw fa-twitter text-white fa-2x"></i></a>&nbsp;&nbsp;
                    <a><i class="fa fa-fw fa-google-plus text-white fa-2x"></i></a>&nbsp;&nbsp;
                    <a><i class="fa fa-fw fa-linkedin text-white fa-2x"></i></a>&nbsp;&nbsp;
                    <a><i class="fa fa-fw fa-instagram text-white fa-2x"></i></a>&nbsp;&nbsp;
                    <a><i class="fa fa-fw fa-youtube-play text-white fa-2x"></i></a>
                </div>
            </div>
            <div class="col-md-4 my-2 text-center">
                <div class="text-center">
                    <form class="form-inline">
                        <input type="email" class="form-control" placeholder="Enter email">
                        <button type="submit" class="btn btn-info" style="width:144px">
                            <b>SUBSCRIBE</b>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr class="bg-primary">
        <div class="row">
            <div class="col-md-3 my-1">
                <h5 class="text-primary"><b>CAMPAIGNING</b></h5>
                <p class="text-justify my-1">Start Your Campaign
                <br>InDemand
                <br>Equity
                <br>Enterprise
                <br>Generosity
                <br>Success Stories
                <br>Pricing</p>
            </div>
            <div class="col-md-3 my-1">
                <h5 class="text-primary"><b>CONTRIBUTING</b></h5>
                <p class="text-justify my-1">Explore
                <br>Collections
                <br>Partner
                <br>Pages
                <br>Help
                <br>FAQ
                <br>News </p>
            </div>
            <div class="col-md-3 my-1">
                <h5 class="text-primary"><b>ABOUT ENVIENTA</b></h5>
                <p class="text-justify my-1">How It Works
                <br>Careers
                <br>Brand
                <br>Resources
                <br>Press
                <br>Blog</p>
            </div>
            <div class="col-md-3 my-1">
                <h5 class="text-primary"><b>HELP</b></h5>
                <p class="text-justify my-1">Essential Guide
                <br>Trust &amp; Safety
                <br>Help &amp; Support
                <br>Contact Us&nbsp;
                <br>FAQ
                <br>News </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <hr class="bg-primary"> 
                <b class="text-white">
                    <span style="font-weight: normal;" class="style-footer">
                    Terms of Use &nbsp; | &nbsp; Privacy Policy &nbsp; | &nbsp; Cookie  Policy &nbsp; | &nbsp; Partner Terms &nbsp; | &nbsp; © 2017 Envienta        Association. All Rights Reserved</span>
                </b>
            </div>
        </div>
    </div>
</div>
<!--CAPTCHA CODE-->
        <div style="text-align:left;">
            <div class="g-recaptcha" data-sitekey="6LdznCwUAAAAAAblIY11zkroyvcBb2mir4AdQYHT"
                 data-size="invisible" data-callback="onLoginSubmit"></div>
        </div>
        <!--CAPTCHA CODE-->
{{-- <h3>This is gonna be the <b>footer</b> part</p> --}}

<!-- Scripts -->

{{-- <script src="{{ URL::to('js/owl.carousel.min.js') }}"></script> --}}
<script src="{{ URL::to('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ URL::to('js/tether.min.js') }}"></script>
<script src="{{ URL::to('js/bootstrap-4.0.0-alpha.6.min.js') }}"></script>
<script src="{{ URL::to('js/typing_text_animation.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#login_form_submit').click(function(e) {
      e.preventDefault();
      grecaptcha.execute();
    });
  });
  
  function onLoginSubmit(token) {
    $('#login_form_token').val(token);
    $('#login_form').submit();
  }
</script>