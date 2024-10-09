    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Active Users</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active Users</h4>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($active_user) || is_object($active_user)){ ?>
                    
                                            <?php $cnt = $active_user->perPage() * ($active_user->currentPage() - 1); ?>
                                            @foreach ($active_user as $value)
                                                <tr>
                                                    <td><?= $cnt += 1 ?></td>
                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value->email }}</td>
                                                    <td>{{ $value->phone }}</td>
                                                    <td>{{ $value->created_at }}</td>
                                                    <td>{{ $value->adate }}</td>
                                                    <td><span
                                                            class="badge bg-{{ $value->active_status == 'Active' ? 'success' : 'danger' }}">{{ $value->active_status }}</span>
                                                    </td>
                    
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
