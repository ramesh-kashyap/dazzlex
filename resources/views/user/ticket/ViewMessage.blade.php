<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between pb-0 border-0">
                    <div class="header-title ">
                        <h4 class="card-title">Support Message</h4>
                    </div>
                </div>
                <div class="card-body">
                  
                    <div class="table-responsive">
                        <table  class="table table-striped iq-table1" >
                            <?php if(is_array($open_ticket_msg) || is_object($open_ticket_msg)){ ?>
                                <?php $count= 0; ?>
                                <?php foreach ($open_ticket_msg as $item): ?>
                                <?php if($item->reply_by == 'user'){ }  ?>

                                <h5 class="form-header" style="width: 260px; background:#e92266;padding: 7px;color: #fff;border-radius: 10px;"> <?= $item->category ?> (<?=$item->gen_date?>)</h5>
                                <br>
                               <p class="comp_bank_p" style="color:#fff" ><?= $item->msg ?></p>
                               <p class="text-right" style="margin-right: 30px;color:#fff;margin-left:300px"><?=($item->reply_by == 'admin')? 'Admin' : 'You'?></p>
                               <?php endforeach; ?>
                               <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>