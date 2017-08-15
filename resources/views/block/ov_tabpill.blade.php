          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#home" class="nav-link active"><b>DETAILS</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu1" class="nav-link"><b>BLUEPRINTS</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu2" class="nav-link"><b>COMMENTS</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu3" class="nav-link"><b>FAQ</b></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="home" class="tab-pane animated fadeInRight active">
                @include('tabpill.ov_details')
            </div>
            
            <div id="menu1" class="tab-pane animated fadeInRight">
              <div class="row">
                @include('tabpill.ov_blueprintsdownloads')
              </div>
            </div>
            <div id="menu2" class="tab-pane animated fadeInRight">
              <div class="row">
                @include('tabpill.ov_commentsfaq')
              </div>
            </div>
            <div id="menu3" class="tab-pane animated fadeInRight">
              <div class="row">
                @include('tabpill.ov_faq')
              </div>
            </div>
          </div>