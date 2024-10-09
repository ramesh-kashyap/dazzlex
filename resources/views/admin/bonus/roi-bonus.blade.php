
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profit Summery </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Add Cash Income</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Cash Income</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>Name</th>
                                                <th>User ID</th>
                                                <th>Package</th>
                                                <th>Commission</th>
                                                <th>Transaction Date.</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($direct_incomes) || is_object($direct_incomes)){ ?>
                
                                                <?php $cnt =$direct_incomes->perPage() * ($direct_incomes->currentPage() - 1); ?>
                                                 @foreach($direct_incomes as $value)
                                                  <tr>
                                                      <td><?= $cnt += 1?></td>
                                                      <td>{{($value->user)?$value->user->name:''}}</td>
                                                      <td>{{$value->user_id_fk}}</td>
                                                      <td> {{currency()}}  {{$value->amt}} </td>
                                                      <td>  {{currency()}}   {{$value->comm}} </td>
                                                      <td>{{$value->created_at}}</td>
                
                                                      <td>{{$value->remarks}}</td>
                
                
                
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
