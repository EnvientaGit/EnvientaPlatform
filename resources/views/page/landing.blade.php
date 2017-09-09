@extends('layouts.landingmain')

@section('content')

  <div class="container p-3">
    <div class="row">
      <div class="col-md-12">
      <h2>Wish wall</h2>
        <div class="row">
          <div class="card">
            <div class="card-block">
              <div class="col-md-12">
                <div class="row" style="height:20em; overflow:auto;">
                  
                  <div class="col-md-4">
                    <div class="card card-body">
                      <h4 class="card-title">Lorem Ipsum</h4>
                      <p class="card-text" align="justify">
                        Aliquip quos, dolore, lacus penatibus aute numquam alias maiores nisi aute ullamco? Justo dictum harum, laboris nullam,
                      </p>
                      <a href="#" class="btn btn-info">Read</a>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card card-body">
                      <h4 class="card-title">Lorem Ipsum</h4>
                      <p class="card-text" align="justify">
                        Aliquip quos, dolore, lacus penatibus aute numquam alias maiores nisi aute ullamco? Justo dictum harum, laboris nullam
                        Aliquip quos, dolore, lacus penatibus aute numquam alias maiores nisi aute ullamco? Justo dictum harum, laboris nullam
                      </p>
                      <a href="#" class="btn btn-info">Read</a>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card card-body">
                      <h4 class="card-title">Lorem Ipsum</h4>
                      <p class="card-text" align="justify">
                        Aliquip quos, dolore, lacus penatibus aute numquam alias maiores nisi aute ullamco? Justo dictum harum, laboris nullam, 
                        Aliquip quos, dolore, lacus penatibus aute numquam alias  
                      </p>
                      <a href="#" class="btn btn-info">Read</a>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="card card-body">
                      <h4 class="card-title">Lorem Ipsum</h4>
                      <p class="card-text" align="justify">
                        Aliquip quos, dolore, lacus penatibus aute numquam alias maiores nisi aute ullamco? Justo dictum harum, laboris nullam,
                        Aliquip quos, dolore, lacus penatibus aute numquanatibus aute numquam alias maiores nisi aute ullamco? Justo dictum harum, laboris nullam,
                      </p>
                      <a href="#" class="btn btn-info">Read</a>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card card-body">
                      <h4 class="card-title">Lorem Ipsum</h4>
                      <p class="card-text" align="justify">
                        Aliquip quos, dolore, s nisi aute ullamco? Justo dictum harum, laboris nullam, 
                      </p>
                      <a href="#" class="btn btn-info">Read</a>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card card-body">
                      <h4 class="card-title">Lorem Ipsum</h4>
                      <p class="card-text" align="justify">
                        Aliquip quos, dolore, lacus penatibus aute numquam alias maiores nisi aute ullamco? Justo dictum harum, laboris nullam, 
                      </p>
                      <a href="#" class="btn btn-info">Read</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div class="container p-3">
    <div class="row">
      <div class="col-md-8">
        @include('block.landing_tabpill')
      </div>
      <div class="col-md-4">
        @include('block.landing_perksidebar')
      </div>
    </div>
      <br>
        <br>
        <br>
        <h4>To do:</h4>
        <ol>
          <li>Create Project box</li>
          <li>Project Library</li>
          <li>Envienta divisions (Prezi and/or Angular Carousel)</li>
          <li>News Feed + My Project Status(Pinned)</li>
          <li>Wish Wall</li>
          <li>Profile Widget</li>
          <li><i class="fa fa-star" aria-hidden="true"></i> Star/Popular Projects</li>
          <li>Search(bar)</li>
          <li></li>
        </ol>
  </div>

@endsection 