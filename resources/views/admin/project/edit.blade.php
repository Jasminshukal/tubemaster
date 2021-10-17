@extends('admin.layout')

@section('title', 'Edit Project')

@section('content')
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- Header Content -->
        <div class="header-content position-relative d-flex align-items-center justify-content-between">
          <!-- Back Button -->
          <div class="back-button"><a href="{{route('home')}}">
              <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
              </svg></a></div>
          <!-- Page Title -->
          <div class="page-heading">
            <h6 class="mb-0">Projects</h6>
          </div>
          <!-- Settings -->
          <div class="setting-wrapper">
            <div class="setting-trigger-btn" id="settingTriggerBtn">
              <svg class="bi bi-gear" width="18" height="18" viewBox="0 0 16 16" fill="url(#gradientSettings)" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="gradientSettings" spreadMethod="pad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0" style="stop-color: #0134d4; stop-opacity:1;"></stop>
                    <stop offset="100%" style="stop-color: #28a745; stop-opacity:1;"></stop>
                  </linearGradient>
                </defs>
                <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"></path>
                <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"></path>
              </svg><span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- Element Heading -->
        
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form action="{{ route('projects.update',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
               <div class="form-group">
                   <label for="my-input" class="mb-2">Title</label>
                   <input id="my-input" class="form-control" value="{{$project->title}}" type="text" name="title">
               </div>

               <div class="form-group">
                <label for="my-input" class="mb-2">Address</label>
                <input id="my-input" class="form-control" value="{{$project->address}}" type="text" name="address">
                </div>

                <div class="form-group">
                    <label for="my-input" class="mb-2">City</label>
                    <select name="city_id" id="" class="form-control">
                        <option value="">select city</option>
                        @foreach ($citys as $city)
                        <option @if($city->id==$project->city_id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
    
                    </select>
                </div>

                <div class="form-group">
                    <label for="my-input" class="mb-2">Client</label>
                    <select name="client_id" id="" class="form-control">
                        <option value="">select client</option>
                        @foreach ($clients as $client)
                        <option @if($client->id==$project->client_id) selected @endif value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach
    
                    </select>
                </div>

                <div class="form-group">
                  <label for="my-input" class="mb-2">Equipment</label>
                  <select name="equipment_id" id="" class="form-control">
                      <option value="">select equipment</option>
                      @foreach ($equipment as $equipment)
                      <option @if($equipment->id==$project->equipment_id) selected @endif  value="{{$equipment->id}}">{{$equipment->name}}</option>
                      @endforeach
  
                  </select>
              </div>

                <div class="form-group">
                    <label for="my-input" class="mb-2">Phone</label>
                    <input id="my-input" value="{{$project->contactphone}}" class="form-control" type="text" name="contactphone">
                </div>
                
                <div class="form-group">
                    <label for="my-input" class="mb-2">Email</label>
                    <input id="my-input" value="{{$project->contactemail}}" class="form-control" type="email" name="contactemail">
                </div>

             
            
            <div class="form-group">
                <label for="my-input" class="mb-2">Status</label>
                <select name="status" id="" class="form-control">
                    <option @if($project->status==1) selected @endif value="1">Active</option>
                    <option @if($project->status==1) selected @endif value="0">In Active</option>
                </select>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 @endsection   
    <!-- Footer Nav -->
    