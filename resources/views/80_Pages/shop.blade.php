@extends('00_header.platform')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="" style="height: 150px;"></div>

        <div class="row mb-5">
          <div class="col-md-12">
            <h2>Ready to buy products</h2>
            <p class="text-dark">
              Simply just click on the <b class="_clr">Buy now</b> button and select the Makerspace
            </p>
          </div>
        </div>

        <!-- Cards -->
        <div class="row">
          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="" style="height: 500px;"></div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>
        </div><!-- end of the row -->

      </div><!-- end of the col-md-12 -->

    </div><!-- end of the row -->
    <div class="" style="height: 150px;"></div>

  </div><!-- end of the container -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 600px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose a <b class="_clr">Makerspace</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pb-0 _scroll">

                <!-- Makerspace card/part -->
                <div class="card w-100 border border-secondary mb-3">
                  <div class="card-header">
                    <div class="float-left mr-3">
                      <img class="card-img-top img-fluid img-thumbnail rounded" style="width: 150px;" src="img/800x600_1.jpg" alt="Card image cap">
                    </div>
                    <h5 class="card-title text-truncate">Makerspace_here</h5>
                    <p class="card-text mb-0 text-truncat">Address_here</p>
                    <p class="card-text mb-0 text-truncat">Phone_here</p>
                    <p class="card-text mb-0 text-truncat">Mail_here</p>
                  </div>
                  <div class="card-body">
                    <p class="card-text text-justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius esse eveniet velit at voluptatibus earum accusantium sed aliquam, iusto consequuntur?
                    </p>
                  </div>
                  <div class="card-footer">
                    <h5 class="float-left my-2">Price_here</h5>
                    <a href="#" class="btn btn-primary float-right">Order/buy</a>
                  </div>
                </div><!-- End of the Makerspace card/part -->

                <!-- Sign In part -->
                <div class="card w-100 border border-secondary mb-3">
                  <div class="card-header text-truncat text-center">
                    <h4 class="card-title text-truncate ">Oops..
                      <i class="fa fa-frown-o" aria-hidden="true"></i>
                    </h4>
                    <p class="card-text mb-0 text-truncat">
                      You have not yet signed in.
                    </p>
                  </div>
                  <div class="card-body">
                    <p class="card-text text-center">
                      You have to <b class="_clr">Sign in</b> to able to buy in the Shop
                    </p>
                  </div>
                  <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Sign in / Sign up</a>
                  </div>
                </div><!-- End of the Sign In part -->

                <!-- "fill out profile" part -->
                <div class="card w-100 border border-secondary mb-3">
                  <div class="card-header text-truncat text-center">
                    <h4 class="card-title text-truncate ">Oops..
                      <i class="fa fa-frown-o" aria-hidden="true"></i>
                    </h4>
                    <p class="card-text mb-0 text-truncat">
                      You have not yet filled out your Profile.
                    </p>
                  </div>
                  <div class="card-body">
                    <p class="card-text text-center">
                      You have to fill out your <b class="_clr">Profile</b> to able to buy in the Shop
                    </p>
                  </div>
                  <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Got to profile</a>
                  </div>
                </div><!-- End of the "fill out profile" part -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div><!-- End of the modal -->

        <!-- Verification Modal -->
        <div class="modal fade" id="exampleModalCenterVerify" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Your order
                  <i class="fa fa-envelope-o _clr" aria-hidden="true"></i>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-header text-truncat text-center">
                  <h5 class="card-title">Your email has been sent successfully
                    <i class="fa fa-check _clr" aria-hidden="true"></i>
                  </h5>
                </div>
                <div class="card-body text-center">
                  <p class="card-text">
                    The selected makerspace will respond soon
                  </p>
                  <h5>Thank you for your order!
                    <i class="fa fa-smile-o _clr" aria-hidden="true"></i>
                  </h5>
                  <small>(Please note that it may take time because of the occupancy)</small>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
