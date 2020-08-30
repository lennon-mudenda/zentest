<div class="modal fade" id="modal-customer-detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Customer Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="form-group row">
                        <label for="inputid" class="col-sm-4 col-form-label">Id</label>
                        <div class="col-sm-8">
                            <p v-text="customer.id"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputname" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <p v-text="customer.ccustname"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputemail" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <p v-text="customer.email"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputstate" class="col-sm-4 col-form-label">State Code</label>
                        <div class="col-sm-8">
                            <p v-text="customer.ccuststate"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcountry" class="col-sm-4 col-form-label">Country Code</label>
                        <div class="col-sm-8">
                            <p v-text="customer.ccustcc"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">View Full Detail</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
