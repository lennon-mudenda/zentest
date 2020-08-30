<div class="modal fade" id="modal-transaction-update">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Transaction Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="form-group row">
                        <label for="inputid" class="col-sm-4 col-form-label">Id</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputid" placeholder="Id" v-model="transaction.id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputname" class="col-sm-4 col-form-label">Customer Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputname" placeholder="Customer Name" v-model="transaction.customer.ccustname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputproduct" class="col-sm-4 col-form-label">Product</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputproduct" placeholder="Product" v-model="transaction.cproditem">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputproduct" class="col-sm-4 col-form-label">Product Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputproduct" placeholder="Product" v-model="transaction.cprodtitle">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputproducttype" class="col-sm-4 col-form-label">Product Type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputproducttype" placeholder="Product Type" v-model="transaction.cprodtype">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransaction" class="col-sm-4 col-form-label">Transaction Type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransaction" placeholder="Transaction Type" v-model="transaction.ctransaction">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionAffiliate" class="col-sm-4 col-form-label">Transaction Affiliate</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionAffiliate" placeholder="Transaction Affiliate" v-model="transaction.ctransaffiliate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionAmount" class="col-sm-4 col-form-label">Transaction Amount</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionAmount" placeholder="Transaction Amount" v-model="transaction.ctransamount">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionPayment" class="col-sm-4 col-form-label">Payment Method</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionPayment" placeholder="Payment Method" v-model="transaction.ctranspaymentmethod">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionVendor" class="col-sm-4 col-form-label">Vendor</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionVendor" placeholder="Vendor" v-model="transaction.ctransvendor">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionReceipt" class="col-sm-4 col-form-label">Receipt</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionReceipt" placeholder="Receipt" v-model="transaction.ctransreceipt">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionReceipt" class="col-sm-4 col-form-label">Up Sell Receipt</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionReceipt" placeholder="Up Sell Receipt" v-model="transaction.cupsellreceipt">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionAffiliateId" class="col-sm-4 col-form-label">Affiliate Id</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionAffiliateId" placeholder="Affiliate Id" v-model="transaction.caffitid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactiondetails" class="col-sm-4 col-form-label">Details</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactiondetails" placeholder="Details" v-model="transaction.cvendthru">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionVerificationCode" class="col-sm-4 col-form-label">Verification Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionVerificationCode" placeholder="Verification Code" v-model="transaction.cverify">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionTime" class="col-sm-4 col-form-label">Time</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputtransactionTime" placeholder="Time" v-model="transaction.ctranstime">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="updateTransaction()">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
