@extends('layouts.app')

@section('content')
<div class="container">
    <section class="content-header set-bg-section">
        <div class="timeline-body">
          <a href="" title="Dashboard"><img src="{{asset('images/dashboard.png')}}" alt="..." class=""></a>
          <a href="" title="Students"><img src="{{asset('images/students.png')}}" alt="..." class=""></a>
          <a href="" title="Daily Reports"><img src="{{asset('images/reports.png')}}" alt="..." class=""></a>
          <a href="" title="Policies"><img src="{{asset('images/policies.png')}}" alt="..." class=""></a>
          <a href="" title="Checklist"><img src="{{asset('images/checklist.png')}}" alt="..." class=""></a>
          <a href="" title="Rostering"><img src="{{asset('images/rostering.png')}}" alt="..." class=""></a>
        </div>
    </section>

    <h2>Dashboard</h2>
    <h5>View and overview of management client</h5>
    <br/>
    <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-body"><img src="{{asset('images/dashboard-main.png')}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
                <div class="display-in-block">
                <div class="display-in-block"><span class="info-box-icon"><i class="fa fa-user fa-4x" aria-hidden="true"></i></span></div>
                <div class="display-in-block left-padding">
                    <h5 class="bold"><a href="">Students</a></h5>
                    <h6><a href="">Children's profile page</a></h6>
                </div>
                </div> 
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-body"><img src="{{asset('images/reports-main.png')}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
                <div class="display-in-block">
                <div class="display-in-block"><span class="info-box-icon"><i class="fa fa-book fa-4x" aria-hidden="true"></i></span></div>
                <div class="display-in-block left-padding">
                    <h5 class="bold"><a href="">Daily Reports</a></h5>
                    <h6><a href="">View various metric reports</a></h6>
                </div>
                </div> 
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-body"><img src="{{asset('images/policies-main.png')}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
                <div class="display-in-block">
                <div class="display-in-block"><span class="info-box-icon"><i class="fa fa-file-text-o fa-4x" aria-hidden="true"></i></span></div>
                <div class="display-in-block left-padding">
                    <h5 class="bold"><a href="">Policies</a></h5>
                    <h6><a href="">Documents, policies, procedures</a></h6>
                </div>
                </div> 
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-body"><img src="{{asset('images/checklist-main.png')}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
                <div class="display-in-block">
                <div class="display-in-block"><span class="info-box-icon"><i class="fa fa-calendar-check-o fa-4x" aria-hidden="true"></i></span></div>
                <div class="display-in-block left-padding">
                    <h5 class="bold"><a href="">Checklists</a></h5>
                    <h6><a href="">Student milestonoe, Achivements</a></h6>
                </div>
                </div> 
            </div>
          </div>
        </div><div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-body"><img src="{{asset('images/restoring-main.png')}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
                <div class="display-in-block">
                <div class="display-in-block"><span class="info-box-icon"><i class="fa fa-address-book-o fa-4x" aria-hidden="true"></i></span></div>
                <div class="display-in-block left-padding">
                    <h5 class="bold"><a href="">Rostering</a></h5>
                    <h6><a href="">Attendance, records, bookkeeping</a></h6>
                </div>
                </div> 
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-body"><img src="{{asset('images/students-main.png')}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
                <div class="display-in-block">
                <div class="display-in-block"><span class="info-box-icon"><i class="fa fa-user fa-4x" aria-hidden="true"></i></span></div>
                <div class="display-in-block left-padding">
                    <h5 class="bold"><a href="">Account</a></h5>
                    <h6><a href="">View and merge account info</a></h6>
                </div>
                </div> 
            </div>
          </div>
        </div>
    </div>
</div>

@endsection
