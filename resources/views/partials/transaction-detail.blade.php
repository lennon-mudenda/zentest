<div class="modal fade" id="modal-transaction-detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Transaction Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="form-group row">
                        <label for="inputid" class="col-sm-4 col-form-label">Id</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.id"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputname" class="col-sm-4 col-form-label">Customer Name</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.customer.ccustname"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputproduct" class="col-sm-4 col-form-label">Product</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.cproditem"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputproduct" class="col-sm-4 col-form-label">Product Title</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.cprodtitle"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputproducttype" class="col-sm-4 col-form-label">Product Type</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.cprodtype"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransaction" class="col-sm-4 col-form-label">Transaction Type</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.ctransaction"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionAffiliate" class="col-sm-4 col-form-label">Transaction Affiliate</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.ctransaffiliate"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionAmount" class="col-sm-4 col-form-label">Transaction Amount</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.ctransamount"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionPayment" class="col-sm-4 col-form-label">Payment Method</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.ctranspaymentmethod"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionVendor" class="col-sm-4 col-form-label">Vendor</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.ctransvendor"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionReceipt" class="col-sm-4 col-form-label">Receipt</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.ctransreceipt"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionReceipt" class="col-sm-4 col-form-label">Up Sell Receipt</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.cupsellreceipt"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionAffiliateId" class="col-sm-4 col-form-label">Affiliate Id</label>
                        <div class="col-sm-8">
                            <p  v-text="transaction.caffitid"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactiondetails" class="col-sm-4 col-form-label">Details</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.cvendthru"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionVerificationCode" class="col-sm-4 col-form-label">Verification Code</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.cverify"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtransactionTime" class="col-sm-4 col-form-label">Time</label>
                        <div class="col-sm-8">
                            <p v-text="transaction.ctranstime"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">View Transaction in Detail</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
