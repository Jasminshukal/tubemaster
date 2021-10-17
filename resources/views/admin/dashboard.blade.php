@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .card-box {
      position: relative;
      color: #fff;
      padding: 20px 10px 56px;
      margin: 20px 0px;
  }
  .card-box:hover {
      text-decoration: none;
      color: #f1f1f1;
  }
  .card-box:hover .icon i {
      font-size: 100px;
      transition: 1s;
      -webkit-transition: 1s;
  }
  .card-box .inner {
      padding: 5px 10px 0 10px;
  }
  .card-box h3 {
      font-size: 27px;
      font-weight: bold;
      margin: 0 0 8px 0;
      white-space: nowrap;
      padding: 0;
      text-align: left;
  }
  .card-box p {
      font-size: 15px;
  }
  .card-box .icon {
      position: absolute;
      top: auto;
      bottom: 5px;
      right: 5px;
      z-index: 0;
      font-size: 72px;
      color: rgba(0, 0, 0, 0.15);
  }
  .card-box .card-box-footer {
      position: absolute;
      left: 0px;
      bottom: 0px;
      text-align: center;
      padding: 3px 0;
      color: rgba(255, 255, 255, 0.8);
      background: rgba(0, 0, 0, 0.1);
      width: 100%;
      text-decoration: none;
  }
  .card-box:hover .card-box-footer {
      background: rgba(0, 0, 0, 0.3);
  }
  .bg-blue {
      background-color: #14581c !important;
  }
  .bg-green {
      background-color: #6f6f10 !important;
  }
  .bg-purpl {
      background-color: purple !important;
  }
  .bg-red {
      background-color: #d9534f !important;
  }
  </style>
<div class="page-content-wrapper py-3">
      <div class="container">
        <div class="card">
          <div class="card-body">

            
           <div class="row">

            <div class="col-lg-4 col-sm-6">
              <a href="{{route('clients.index')}}">
              <div class="card-box bg-blue">
                  <div class="inner">
                      <p> Clients </p>
                  </div>
                  <div class="icon">
                      <i class="fa fa-users" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </a>
          </div>

          <div class="col-lg-4 col-sm-6">
            <a href="{{route('equipments.index')}}">
            <div class="card-box bg-green">
                <div class="inner">
                    <p> Equipment </p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </a>
        </div>



        <div class="col-lg-4 col-sm-6">
          <a href="{{route('projects.index')}}">
          <div class="card-box bg-purpl">
              <div class="inner">
                  <p> Project </p>
              </div>
              <div class="icon">
                  <i class="fa fa-sitemap" aria-hidden="true"></i>
              </div>
              <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </a>
      </div>

           </div>
          </div>
        </div>
      </div>
    </div>
    @endsection