@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
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

  .inner
  {
      color: #ffffff;
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
      background-color: #e67e22 !important;
  }
  .bg-green {
      background-color: #8e44ad !important;
  }
  .bg-purpl {
      background-color: #2c3e50 !important;
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
              <a href="{{route('clients.index')}}" >
              <div class="card-box bg-blue">
                  <div class="inner" style="color: #fffff!important;">
                       Clients
                  </div>
                  <div class="icon">
                      <i class="fa fa-users" aria-hidden="true"></i>
                  </div>
                  <a href="{{route('clients.index')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </a>
          </div>

          <div class="col-lg-4 col-sm-6">
            <a href="{{route('equipments.index')}}">
            <div class="card-box bg-green">
                <div class="inner">
                    Equipment
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <a href="{{route('equipments.index')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </a>
        </div>



        <div class="col-lg-4 col-sm-6">
          <a href="{{route('projects.index')}}">
          <div class="card-box bg-purpl">
              <div class="inner">
                  Project
              </div>
              <div class="icon">
                  <i class="fa fa-sitemap" aria-hidden="true"></i>
              </div>
              <a href="{{route('projects.index')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </a>
      </div>

           </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
