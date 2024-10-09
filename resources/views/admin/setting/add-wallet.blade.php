   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Wallet</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Wallet</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.update-wallets') }}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Wallet Type</label>
                                             
                                                <select class="form-control"  name="currency" > 
                                                
                                                <option value="USDT.TRC20">USDT.TRC20</option>
                                                <option value="USDT.BEP20">USDT.BEP20</option>
                                                <option value="USDT.ARBITRUM">USDT.ARBITRUM</option>
                                                </select>
                                            </div>
     
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Wallet Address</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Wallet Address" type="text" value="" name="wallet">
                                            </div>
     
                                       
                                           
                                        </div>
     
                                      
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
     
     
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Wallets Reports</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>Wallet</th>
                                                <th>Currency</th>
                                         
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($wallets) || is_object($wallets)){ ?>
                
                                            <?php $cnt = $wallets->perPage() * ($wallets->currentPage() - 1); ?>
                                            @foreach ($wallets as $value)
                                                <tr>
                                                    <td><?= $cnt += 1 ?></td>
                                                    <td>{{ $value->wallet }}</td>
                                                    <td>{{ $value->currency }}</td>
                                                
                                                
                                                    <td> <a href="{{route('admin.delete-wallet')}}?id={{ $value->id }}"> <span
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
     