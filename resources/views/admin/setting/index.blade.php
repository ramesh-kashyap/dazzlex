   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">General </a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">General Settings</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.update-settings') }}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Company Users :  {{\App\Models\User::where('active_status','Active')->count()+\DB::table('company_users')->sum('member')}} </label>
                                                <input class="form-control" id="inputEmail3" placeholder="" type="text" value="" name="company_users">
                                            </div>
     
                                           
                                           
                                        </div>
     
                                      
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
     
     
     
     
                </div>
            </div>
        </div>
        <!--**********************************
                 Content body end
             ***********************************-->
     