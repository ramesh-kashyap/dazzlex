
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Deposit </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Pending Deposit</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pending Deposit</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>User Name</th>
                                                <th>User Id</th>
                                                <th>Amount</th>
                                                <th>Transaction Date.</th>
                
                                                <th>Transaction ID</th>
                                                <th>Payment Mode</th>
                
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                                                <?php $cnt = $deposit_list->perPage() * ($deposit_list->currentPage() - 1); ?>
                                                 @foreach($deposit_list as $value)
                
                                                  <tr>
                                                      <td><?= $cnt += 1?></td>
                                                      <td>{{$value->user->name}}</td>
                                                      <td>{{$value->user_id_fk}}</td>
                                                      <td>$ {{$value->amount}}</td>
                                                      <td>{{$value->created_at}}</td>
                                                      <td>{{$value->transaction_id}}</td>
                                                      <td>{{$value->payment_mode}}</td>
                                                      <!--<td><a target="_blank" href="{{asset('')}}{{$value->slip}}"><img style="width: 50px;height: 50;" src="{{asset('')}}{{$value->slip}}"></a></td>-->
                
                                                      <td ><span class="badge bg-{{ $value->status == 'Active' ? 'success' : 'danger' }}">{{$value->status}}</span></td>
                                                         <td><a href="{{route('admin.deposit_request_done')}}?id={{$value->id}}&user_Id={{$value->user_id}}&deposit_status=success" class='btn btn-success'>Success</a> <a href="{{route('admin.deposit_request_done')}}?id={{$value->id}}&user_Id={{$value->user_id}}&deposit_status=blocked" class='btn btn-danger'>Reject</a></td>
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
