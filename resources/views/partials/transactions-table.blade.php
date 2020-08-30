<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Transactions Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Product ID</th>
                        <th>Product Title</th>
                        <th>Transaction</th>
                        <th>Payment Method</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="t in filtered_transactions">
                        <td v-text="t.id"></td>
                        <td v-text="t.customer.ccustname"></td>
                        <td v-text="t.cproditem"></td>
                        <td v-text="t.cprodtitle"></td>
                        <td v-text="t.ctransaction"></td>
                        <td v-text="t.ctranspaymentmethod"></td>
                        <td v-text="t.ctransamount"></td>
                        <td v-text="t.ctranstime"></td>
                        <td>
                            <div class="btn-group">
                                <button @click="transaction = t" class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-transaction-detail"><i class="fas fa-eye"></i></button>
                                <button @click="transaction = t" class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-transaction-update"><i class="fas fa-edit"></i></button>
                                <button @click="transaction = t" class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-transaction-delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#" @click="decrease_trans_page()">&laquo;</a></li>
                    <li class="page-item" v-for="page in total_trans_pages"><a class="page-link" href="#" v-text="page" @click="transactions_page = page"></a></li>
                    <li class="page-item"><a class="page-link" href="#" @click="increase_trans_page()">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
