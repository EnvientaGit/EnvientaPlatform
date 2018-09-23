<?php
    use App\Utils;
?>

@extends('00_header.platform')

@section('content')

    <div class="container p-3"><!-- Begin of the container -->
      <form method="post">
        {{ csrf_field() }}
      <div class="row mb-4"><!-- Begin of the Row -->
        <div class="col-md-12"><!-- Begin of the Main colum -->
          <div class="" style="height: 100px;"></div>

          <div class="row"><!-- Telegram attention -->
            <div class="col-md-12">
              <a href="https://t.me/envienta" target="_blank">
                <div class="card border border-dark mb-5 _bpulse">
                  <div class="card-body">
                    <h6 class="text-center mb-0">
                      Hi everyone. In order to further develop our platform, we need your feedback and help. Also if you have any questions, don't hesitate to ask. We are waiting for you in our Telegram channel. Click here: <a href="https://t.me/envienta" target="_blank"></a> <i class="fab fa-telegram-plane _blue"></i>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
          </div><!-- End of  Telegram attention -->

          <div class="row my-5">
            <div class="col-md-12">
              <div class="text-center">
                <h3>
                  <i class="fa fa-user-plus _clr" aria-hidden="true"></i>
                    Please pick your user type! <br>
                  <h5>You can pick more!</h5>
                </h3>
              </div>
            </div>
          </div>

          <hr>

          <div class="row my-5"><!-- Begin of the - Maker/Projects/Investor -->
            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-cogs fa-3x _clr mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input name="isMaker" class="form-check-input" type="checkbox" id="maker_check" {{$user->isMaker ? 'checked="true"' : ''}}>
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Maker</h5>
                      <small class="_clr">Available</small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-briefcase fa-3x text-dark /*_clr*/ mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Projects</h5>
                      <small><i>Unavailable</i> </small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-money fa-3x text-dark /*_clr*/ mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Investor</h5>
                      <small><i>Unavailable</i> </small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End of the - Maker/Projects/Investor -->

          <div class="row mb-5"><!-- Begin of the - Manufacturer/Distributor/Customer -->
            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-industry fa-3x _clr mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input name="isManufacturer" class="form-check-input" type="checkbox" id="manufacturer_check" {{$user->isManufacturer ? 'checked="true"' : ''}}>
                    <label class="form-check-label" for="manufacturer_check">
                      <h5 class="card-text">Manufacturer</h5>
                      <small class="_clr">Available</small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-dot-circle-o fa-3x text-dark mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Distributor</h5>
                      <small><i>Unavailable</i> </small>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-shopping-basket fa-3x _clr mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input name="isCustomer" class="form-check-input" type="checkbox" id="customer_check" {{$user->isCustomer ? 'checked="true"' : ''}} >
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Customer</h5>
                      <small class="_clr">Available</small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End of the - Manufacturer/Distributor/Customer -->

          <hr>


          <div class="row my-5"><!-- Begin of the Fill-form -->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}" readonly="true">
                  <!--small id="emailHelp" class="form-text text-muted">Please enter a valid email addres</small-->
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="username">
                    <i class="fa fa-user" aria-hidden="true"></i> Username</label>
                  <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username" value="{{$user->username}}">
                  <small id="emailHelp" class="form-text text-muted">Please enter a valid username</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="real_name">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i> Real name</label>
                  <input type="text" class="form-control" name="realname" id="real_name" aria-describedby="emailHelp" placeholder="Enter real name" value="{{$user->realname}}">
                  <small id="emailHelp" class="form-text text-muted">Please enter a valid real name</small>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card border border-dark">
                  <div class="card-header">
                    <h6 class="float-left">Enable password based authenticaton</h6>
                    <div class="form-check float-right">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1"></label>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="w-75 mb-0 float-left">Here you are able to define a personal password instead of the pin code login method</p>
                    <button type="button" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#add_pw" disabled="disabled">Set</button>
                  </div>
                </div>
              </div>

          </div><!-- End of the Fill-form -->

            <div class="row"><!-- Begin of the Photo/Social/Bio Row -->
              <div class="col-md-3">
                <div class="card border border-dark">
                  <div class="card-body text-center">
                    <!-- div class="bg-secondary rounded" style="height: 8.3em;" -->
                      <img class="fa fa-camera text-light img-thumbnail" width="250" aria-hidden="true" src="{{ Utils::userAvatarBig() }}"/>
                    <!-- /div-->
                    <!--
                    <hr>
                    <form>
                      <div class="form-group mb-0">
                        <label for="upload_photo">Your Gravatar profile</label>
                        <!- <label for="upload_photo">Upload photo</label> ->
                        <!- <input type="file" class="form-control-file" id="upload_photo"> ->
                      </div>
                    </form>
                  -->
                  </div>
                </div>
              </div>
              <div class="col-md-9"><!-- Begin of the Social Col-md-9 -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" id="" name="profileUrl" placeholder="Facebook link" value="{{$user->profileUrl}}">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="twitterUrl" id="" placeholder="Twitter link" value="{{$user->twitterUrl}}">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="linkedinUrl" id="" placeholder="LinkedIn link" value="{{$user->linkedinUrl}}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fab fa-ethereum"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="walletAddress" id="" placeholder="ERC-20" value="{{$user->walletAddress}}">
                    </div>
                    <div class="mb-4 ml-1">
                      <small>Please be sure this is an ERC-20 wallet address. Otherwise your transaction could be lost.</small>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card border border-dark">
                      <div class="card-body text-left">
                        <div class="form-group mb-0">
                          <label for="exampleFormControlTextarea1"><h6>Description</h6>
                          <small class="text-muted">Short description about you</small></label>
                          <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3">{{$user->bio}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End of the Social Col-md-9 -->
            </div><!-- End of the Photo/Social/Bio Row -->
          </div><!-- End of the Main colum -->
        </div><!-- End of the row -->

        <hr>

        <div class="row mb-4 animated fadeIn {{$user->isMaker ? '' : '_hide'}}" id="_maker"><!-- Begin of the Maker Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">

                <h6 class="text-left mb-3">
                  You picked the <b class="_clr">Maker</b> user type,
                  then please add a few tag about your skills <br>
                  <small>Be aware that, these informations just about to define your order - not gonna be public!</small>
                </h6>


                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Skills</span>
                  </div>
                  <input name="skills" type="text" class="form-control proplist" id="basic-url" aria-describedby="basic-addon3" placeholder="Php, 3D printing.. etc" value="{{$user->skills}}">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Interests</span>
                  </div>
                  <input name="interests" type="text" class="form-control proplist" id="basic-url" aria-describedby="basic-addon3" placeholder="Robotics, AI.. etc" value="{{$user->interests}}">
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of the Maker Section -->

        <div class="row mb-4 animated fadeIn {{$user->isManufacturer ? '' : '_hide'}}" id="_manufacturer"><!-- Begin of the Manufacturer Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">
                <h6 class="text-left mb-3">
                  You picked the <b class="_clr">Manufacturer</b> user type,
                  then please fill out a few details about you <br>
                  <small>Be aware that, these informations just about to define your order - not gonna be public!</small>
                </h6>
                <div class="row">
                  <div class="col-md-10">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Address</div>
                      </div>
                      <input id="manufacturerAddress" name="manufacturerAddress" type="text" class="form-control"  placeholder="Your address" value="{{$user->manufacturerAddress}}">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-primary float-right geocomplete-button" data-geocomplete-target="manufacturerAddressTarget" data-geocomplete-field="manufacturerAddress">Find</button>
                  </div>
                </div>

                <div class="row mb-2" id="manufacturerAddressTarget">
                  <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Country</div>
                      </div>
                      <input name="manufacturerAddressCountry" type="text" class="form-control" value="{{$user->manufacturerAddressCountry}}" data-geo="country_short" readonly="true">
                    </div>
                  </div> 
                  <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Zip code</div>
                      </div>
                      <input name="manufacturerAddressZip" type="text" class="form-control" value="{{$user->manufacturerAddressZip}}" data-geo="postal_code" readonly="true">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">City</div>
                      </div>
                      <input name="manufacturerAddressCity" type="text" class="form-control" value="{{$user->manufacturerAddressCity}}" data-geo="locality" readonly="true">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Street</div>
                      </div>
                      <input name="manufacturerAddressStreet" type="text" class="form-control" value="{{$user->manufacturerAddressStreet}}" data-geo="route" readonly="true">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Number</div>
                      </div>
                      <input name="manufacturerAddressStreetNumber" type="text" class="form-control" value="{{$user->manufacturerAddressStreetNumber}}" data-geo="street_number" readonly="true">
                    </div>
                  </div>
                  <input type="hidden" name="manufacturerAddressLat" data-geo="lat">
                  <input type="hidden" name="manufacturerAddressLon" data-geo="lng">
                </div>

                <hr>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Manufacturer name</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your manufacturer name">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Billing address</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your address">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Phone number</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your pohne number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Website address</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your website address">
                    </div>
                    <select class="custom-select mb-2">
                      <option selected>Working times:</option>
                      <option value="1">10 hour/week</option>
                      <option value="2">20 hour/week</option>
                      <option value="3">30 hour/week</option>
                      <option value="3">40 hour/week</option>
                      <option value="3">50 hour/week</option>
                    </select>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Tools</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="3D printer, laqser cutter, milling..etc">
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <h6 class="mb-3">Additional conditions and possiblities</h6>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                         Cutting machines that cut a variety of materials (plastics, metal, plaster, and other common materials) with precision (laser, water jet, knife)
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Decorative materials for painting, embroidery and embellishing projects
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Joining machines that use computer control to sew, weld, or bond in other ways
                      </label>
                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            3D printers that are capable of producing three-dimensional objects
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Milling and routing machines that drill and shape complex parts
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Electronic parts and tools
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Tools for precision mechanics
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Traditional hand and power tools, including soldering irons
                          </label>
                        </div>

                      </div>

                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Computers, cameras, softwares
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Craft and art supplies
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Building materials
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Junk for recycling into new products
                          </label>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Batteries
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Library
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of the Manufacturer Section -->

        <div class="row mb-4 animated fadeIn {{$user->isCustomer ? '' : '_hide'}}" id="_customer"><!-- Begin of the Customer Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">
                <h6 class="text-left mb-3">
                  You picked the <b class="_clr">Customer</b> user type,
                  then please add a few tag about your skills
                </h6>

                <div class="row">
                  <div class="col-md-10">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Delivery address</div>
                      </div>
                      <input name="customerAddress" type="text" class="form-control geocomplete" id="customerAddress" placeholder="Your delivery address" value="{{$user->customerAddress}}">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-primary float-right geocomplete-button" data-geocomplete-target="customerAddressTarget" data-geocomplete-field="customerAddress">Find</button>
                  </div>
                </div>

                <div class="row mb-2" id="customerAddressTarget">
                  <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Country</div>
                      </div>
                      <input name="customerAddressCountry" type="text" class="form-control" value="{{$user->customerAddressCountry}}" data-geo="country_short" readonly="true">
                    </div>
                  </div> 
                  <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Zip code</div>
                      </div>
                      <input name="customerAddressZip" type="text" class="form-control" value="{{$user->customerAddressZip}}" data-geo="postal_code" readonly="true">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">City</div>
                      </div>
                      <input name="customerAddressCity" type="text" class="form-control" value="{{$user->customerAddressCity}}" data-geo="locality" readonly="true">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Street</div>
                      </div>
                      <input name="customerAddressStreet" type="text" class="form-control" value="{{$user->customerAddressStreet}}" data-geo="route" readonly="true">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Number</div>
                      </div>
                      <input name="customerAddressStreetNumber" type="text" class="form-control" value="{{$user->customerAddressStreetNumber}}" data-geo="street_number" readonly="true">
                    </div>
                  </div>
                  <input type="hidden" name="customerAddressLat" data-geo="lat">
                  <input type="hidden" name="customerAddressLon" data-geo="lng">
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Phone number</div>
                      </div>
                      <input name="customerPhone" type="text" class="form-control" id="" placeholder="Your phone number" value="{{$user->customerPhone}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Billing address</div>
                      </div>
                      <input name="customerBillingAddress" type="text" class="form-control" id="" placeholder="Your billing address" value="{{$user->customerBillingAddress}}">
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div><!-- End of the Customer Section -->

        <hr>

        <div class="row mb-5">
          <div class="col-md-12">

            <a href="{{ url('/') }}">
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-chevron-left mr-1" aria-hidden="true"></i> Back to the front page</button>
            </a>

            <a href="#">
              <button type="submit" class="btn btn-sm btn-primary float-right">
                Save <i class="fa fa-floppy-o ml-1" aria-hidden="true"></i>
              </button>
            </a>
          </div>
        </div>

      </form>
      </div><!-- End of the container -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Password Modal -->
            <div class="modal fade" id="add_pw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Set your custom password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fas fa-key"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Enter new password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="far fa-key"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Re-type new password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <script type="text/javascript">

        // Maker Checkbox
        $('#maker_check').click(function(){
          //$(this).toggleClass("_pulse");
          $("#_maker").toggleClass("_hide");
        });

        // Manufacturer Checkbox
        $('#manufacturer_check').click(function(){
           //$(this).toggleClass("_pulse");
           $("#_manufacturer").toggleClass("_hide");
        });

        // Customer Checkbox
        $('#customer_check').click(function(){
          //$(this).toggleClass("_pulse");
          $("#_customer").toggleClass("_hide");
        });

        $('.geocomplete-button').each(function() {
          var geocomplete_target = $(this).attr('data-geocomplete-target');
          var geocomplete_field = $(this).attr('data-geocomplete-field');
          console.log(geocomplete_field);
          $('#' + geocomplete_field).geocomplete({
            details: "#" + geocomplete_target,
            detailsAttribute: "data-geo"
          });
          $(this).click(function() {
            $('#' + geocomplete_field).trigger("geocode");
          })
        });

      </script>

@endsection
