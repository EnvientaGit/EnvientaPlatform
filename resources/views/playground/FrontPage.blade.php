@extends('layouts.FrontMain')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr class=""> </div>
    </div>
  </div>
  <div class="">
    <div class="container p-3">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#home" class="nav-link active"><b>MAKER</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu1" class="nav-link"><b>CONSUMER</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu2" class="nav-link"><b>DISTRIBUTOR</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu3" class="nav-link"><b>VISITOR</b></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="home" class="tab-pane fade show active">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">MAKER</h3>
                  <p>Itt Persze megemlítve, hogy nem csak a Makerekről van szó hane ma Producerekről is. Viszont a Maker az inkább felkelti a figyelmet véleményem szerint. :3</p>
                </div>
              </div>
              <div class="row my-4">
                <div class="container bg-warning mx-3 p-3">
                  <h1 class="text-info">Envienta is <span class="txt-rotate" data-period="2000" data-rotate="[  &quot;shape your future.&quot;, &quot;human centered design.&quot;, &quot;alternative lifestyle.&quot;, &quot;open source everything!&quot; ]">
                    </span> </h1>
                  <h4 class="text-danger">Our unique ideas that makes you apart from the other.</h4>
                </div>
              </div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">CONSUMER</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">DISTRIBUTOR</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div id="menu3" class="tab-pane fade">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">VISITOR</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row my-4">
            <div class="col-md-12">
              <div aria-multiselectable="true" id="accordion" role="tablist">
                <div class="card">
                  <div class="card-header bg-info" role="tab" id="headingOne">
                    <h5 class="mb-0">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tdn text-white"><i class="fa fa-arrow-right animated shake" aria-hidden="true"></i>&nbsp;&nbsp;What You can do with this platform?</a>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block"> Non aliquam viverra blandit, diamlorem, nunc error, ut! Est, sint quia mollitia sociosqu? Ratione, quasi, diam rhoncus cupidatat eaque molestiae, metus? Justo ducimus distinctio quia eligendi do, tempus dignissimos pariatur montes
                      quod elementum soluta voluptates justo. Morbi recusandae excepturi asperiores quia sit quam litora, eaque sem sed hac nostra, habitant, quasi recusandae neque aptent! Laboris fames faucibus, mattis est necessitatibus, consectetuer.
                      Volutpat, faucibus delectus tellus quos nonummy nostrud litora rhoncus? Inceptos mollitia? Eiusmod consequat aliquid. At quam, mauris, quos mollit architecto ex, possimus exercitation, pretium luctus perspiciatis inventore, sapien
                      montes! Illum quidem, semper semper tincidunt sodales, error incidunt aperiam porro. </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-info" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                      <a class="collapsed tdn text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-arrow-right animated shake" aria-hidden="true"></i>&nbsp;&nbsp;Why is different than the others?</a>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block"> Non aliquam viverra blandit, diamlorem, nunc error, ut! Est, sint quia mollitia sociosqu? Ratione, quasi, diam rhoncus cupidatat eaque molestiae, metus? Justo ducimus distinctio quia eligendi do, tempus dignissimos pariatur montes
                      quod elementum soluta voluptates justo. Morbi recusandae excepturi asperiores quia sit quam litora, eaque sem sed hac nostra, habitant, quasi recusandae neque aptent! Laboris fames faucibus, mattis est necessitatibus, consectetuer.
                      Volutpat, faucibus delectus tellus quos nonummy nostrud litora rhoncus? Inceptos mollitia? Eiusmod consequat aliquid. At quam, mauris, quos mollit architecto ex, possimus exercitation, pretium luctus perspiciatis inventore, sapien
                      montes! Illum quidem, semper semper tincidunt sodales, error incidunt aperiam porro. </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-info" role="tab" id="headingThree">
                    <h5 class="mb-0">
                      <a class="collapsed tdn text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-arrow-right animated shake" aria-hidden="true"></i>&nbsp;&nbsp;Case Study or Proof or work!?</a>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-block"> Non aliquam viverra blandit, diamlorem, nunc error, ut! Est, sint quia mollitia sociosqu? Ratione, quasi, diam rhoncus cupidatat eaque molestiae, metus? Justo ducimus distinctio quia eligendi do, tempus dignissimos pariatur montes
                      quod elementum soluta voluptates justo. Morbi recusandae excepturi asperiores quia sit quam litora, eaque sem sed hac nostra, habitant, quasi recusandae neque aptent! Laboris fames faucibus, mattis est necessitatibus, consectetuer.
                      Volutpat, faucibus delectus tellus quos nonummy nostrud litora rhoncus? Inceptos mollitia? Eiusmod consequat aliquid. At quam, mauris, quos mollit architecto ex, possimus exercitation, pretium luctus perspiciatis inventore, sapien
                      montes! Illum quidem, semper semper tincidunt sodales, error incidunt aperiam porro. </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="list-group">
              <li class="list-group-item px-2 bg-info text-white"><i class="fa fa-newspaper-o fa-2x mx-1"></i><b class="style-backer">&nbsp;&nbsp;CHECK OUT OUR NEWS!</b></li>
            </ul>
            <div class="card-block card-warning">
              <h4 class="text-info"><b>BE A MEMBER !</b></h4>
              <p>Come and take a part in our online magazine network. Be up to date with us and share the alternative solutions around the globe!</p>
              <p><i class="fa fa-podcast fa-fw text-danger"></i><b>&nbsp;&nbsp;&nbsp;Currently Popular: <span class="bg-info">&nbsp;<a href="#" class="text-white tdn">Blockchain</a>&nbsp;</span></b>
                <br><i class="fa fa-eye fa-fw text-danger"></i><b>&nbsp;&nbsp;&nbsp;Most readed: <span class="bg-info">&nbsp;<a href="#" class="text-white tdn">Ethereum</a>&nbsp;</span></b></p>
              <p>
                <a href="http://envienta.net/" class="btn btn-block btn-outline-danger btn-sm" target="_blank"><b>VISIT THE WEBSITE</b></a>
              </p>
            </div>
          </div>
          <br>
          <div class="card">
            <ul class="list-group">
              <li class="list-group-item text-white px-2 bg-info"><i class="fa fa-users fa-2x mx-1"></i><b class="style-backer">&nbsp;&nbsp;STUDENT COMMUNITY</b></li>
            </ul>
            <div class="card-block card-warning">
              <h4 class="text-info"><b>BE AN INTERN !</b></h4>
              <p>Join into our awesome student community network and meet with other like you. Here you will find you interest about everything among Us. </p>
              <p><i class="fa fa-podcast fa-fw text-danger"></i><b>&nbsp;&nbsp;&nbsp;Currently Popular: <span class="bg-info">&nbsp;<a href="#" class="text-white tdn">Platform</a>&nbsp;</span></b>
                <br><i class="fa fa-quora fa-fw text-danger"></i><b>&nbsp;&nbsp;&nbsp;Most discussed: <span class="bg-info">&nbsp;<a href="#" class="text-white tdn">Wind turbine</a>&nbsp;</span></b></p>
              <p>
                <a href="http://education.envienta.org/" class="btn btn-block btn-outline-danger btn-sm" target="_blank"><b>VISIT THE WEBSITE</b></a>
              </p>
            </div>
          </div>
          <br>
          <div class="card">
            <ul class="list-group">
              <li class="list-group-item text-white px-2 bg-info"><i class="fa fa-globe fa-2x mx-1"></i><b class="style-backer">&nbsp;&nbsp;OPEN SOURCE EVERYTHING</b></li>
            </ul>
            <div class="card-block card-warning">
              <h4 class="text-info"><b>ENVIENTA.. ?</b></h4>
              <p>Envienta is a community-based solution package for the 21st century, which provides share of know-how, resources, goods, products, food and water for the members.</p>
              <p>As an open source model based on modern technology, it offers business plans for free as well as full transparency.</p>
              <p>
                <a href="http://envienta.co/" class="btn btn-block btn-outline-danger btn-sm" target="_blank"><b>VISIT THE WEBSITE</b></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <hr class=""> </div>
      </div>
    </div>
  </div>
@endsection 