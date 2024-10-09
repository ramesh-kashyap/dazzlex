
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Total Users</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Total Users</h4>
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
                                                <th>Password</th>
                                                <th>Txn Password</th>
                                                <th>Joining Date</th>
                                               
                                                <th>Sponsor ID</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($alluserlist) || is_object($alluserlist)){ ?>
                
                                            <?php $cnt = $alluserlist->perPage() * ($alluserlist->currentPage() - 1); ?>
                                            @foreach ($alluserlist as $value)
                                                <tr>
                                                    <td><?= $cnt += 1 ?></td>
                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value->email }}</td>
                                                    <td>{{ $value->phone }}</td>
                                                    <td>{{ $value->PSR }}</td>
                                                    <td>{{ $value->TPSR }}</td>
                
                                                    <td>{{ $value->created_at }}</td>
                                                 
                                                    <td> {{ $value->sponsor_detail ? $value->sponsor_detail->username : 0 }}</td>
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
