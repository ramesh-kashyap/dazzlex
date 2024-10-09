
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Ads Reports</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ads Reports</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>Url</th>
                                         
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($alluserlist) || is_object($alluserlist)){ ?>
                
                                            <?php $cnt = $alluserlist->perPage() * ($alluserlist->currentPage() - 1); ?>
                                            @foreach ($alluserlist as $value)
                                                <tr>
                                                    <td><?= $cnt += 1 ?></td>
                                                    <td>{{ $value->url }}</td>
                                                
                                                
                                                    <td> <a href="{{route('admin.delete-task')}}?id={{ $value->id }}"> <span
                                                            class="badge bg-danger">Delete</span> </a>
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
