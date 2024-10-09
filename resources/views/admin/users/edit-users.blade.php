        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Edit Users</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>User Name</th>
                                            <th>User Id</th>
                                            <th>Email ID</th>
                                                <th>Mobile No.</th>
                                                <!--<th>Rank</th>-->
                                                <th>Joining Date</th>
                                                <th>Activation Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($edit_users) || is_object($edit_users)){ ?>

                                                <?php $cnt =$edit_users->perPage() * ($edit_users->currentPage() - 1); ?>
                                                 @foreach($edit_users as $value)
                                                  <tr>
                                                      <td><?= $cnt += 1?></td>
                                                      <td>{{$value->name}}</td>
                                                      <td>{{$value->username}}</td>
                                                      <td>{{$value->email}}</td>
                                                      <td>{{$value->phone}}</td>
                                                      <td>{{$value->created_at}}</td>
                                                      <td>{{$value->adate}}</td>
                                                      <td >{{$value->active_status}}</td>
                    
                                                      <td ><a href="{{ route('admin.edit-user-view', ['id'=> Crypt::encrypt($value->id)]) }}" class="badge green" style="background: green;">Edit User</a></td>
                    
                                                  </tr>
                                                  @endforeach
                    
                                             <?php }?>
                                        </tbody>
                                       
                                    </table>
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
