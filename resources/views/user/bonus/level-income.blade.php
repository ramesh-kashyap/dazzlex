<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between pb-0 border-0">
                    <div class="header-title ">
                        <h4 class="card-title">Milestone income</h4>
                    </div>
                </div>
                <div class="card-body">
                  
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped iq-table1" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>SR#</th>
                                    <th>User ID</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Level </th>
                                    <th>From ID </th>
                                    <th>Remarks </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                    <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                    @foreach ($level_income as $value)
                                        <tr>
                                            <td><?= $cnt += 1 ?></td>
                                            <td>{{ $value->user_id_fk }}</td>
                                            <td>{{currency()}} {{ $value->comm }} </td>
                                            <td>{{ $value->created_at }}</td>
                                            <td>{{ $value->level }}</td>
                                            <td>{{ $value->rname }}</td>

                                            <td>{{ $value->remarks }}</td>

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