@extends('layouts.app')
<style>
.nav-tabs li a {
color: #777;
}
</style>

@section('content')
<div class="container">
    <!-- <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
     --><!-- <h3 class="text-center">Dashboard</h3> 
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home"><img src="{{asset('images/dashboard.png')}}">Dashboard</a></li>
      <li><a data-toggle="tab" href="#menu1"><img src="{{asset('images/dashboard.png')}}">School</a></li>
      <li><a data-toggle="tab" href="#menu2"><img src="{{asset('images/dashboard.png')}}">Colleage</a></li>
      <li><a data-toggle="tab" href="#menu2"><img src="{{asset('images/dashboard.png')}}">Colleage</a></li>
      <li><a data-toggle="tab" href="#menu2"><img src="{{asset('images/dashboard.png')}}">Colleage</a></li>
    </ul> -->

    <!-- <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h2>Mike Ross, Manager</h2>
        <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h2>Chandler Bing, Guitarist</h2>
        <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h2>Peter Griffin, Bass player</h2>
        <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
      </div>
    </div> -->
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-md-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body" style="background-color: #1c2754;">
                    <div class="col-md-2">
                        <a href="#"><img src="{{asset('images/dashboard.png')}}"></a>
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/dashboard.png')}}">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/dashboard.png')}}">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/dashboard.png')}}">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/dashboard.png')}}">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/dashboard.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-sm-4"> 
          <div class="panel panel-danger">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-sm-4"> 
          <div class="panel panel-success">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
    </div>
</div>

@endsection
