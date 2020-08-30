<div class="modal fade" id="modal-customer-update">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Customer Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="form-group row">
                        <label for="inputid" class="col-sm-4 col-form-label">Id</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputid" placeholder="Id" v-model="customer.id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputname" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputname" placeholder="Name" v-model="customer.ccustname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputemail" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputemail" placeholder="Email" v-model="custmer.email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputstate" class="col-sm-4 col-form-label">State Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputstate" placeholder="State Code" v-model="customer.ccuststate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcountry" class="col-sm-4 col-form-label">Country Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputcountry" placeholder="Country Code" v-model="customer.ccustcc">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="updateCustomer()">Update</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
