<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Customers Table</h3>

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>State Code</th>
                            <th>Country Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="c in filtered_customers">
                            <td v-text="c.id"></td>
                            <td v-text="c.ccustname"></td>
                            <td v-text="c.email"></td>
                            <td v-text="c.ccuststate"></td>
                            <td v-text="c.ccustcc"></td>
                            <td>
                                <div class="btn-group">
                                    <button @click="customer = c" class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-customer-detail"><i class="fas fa-eye"></i></button>
                                    <button @click="customer = c" class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-customer-update"><i class="fas fa-edit"></i></button>
                                    <button @click="customer = c" class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-customer-delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#" @click="decrease_cust_page()">&laquo;</a></li>
                    <li class="page-item" v-for="page in total_cust_pages"><a class="page-link" href="#" v-text="page" @click="customers_page = page"></a></li>
                    <li class="page-item"><a class="page-link" href="#" @click="increase_cust_page()">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
