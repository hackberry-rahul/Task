
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="card card-body text-center mt-5">
            <h1 class="heading display-5 pb-3">Loan Calculator</h1>
            <form id="loan-form">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">₹</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="amount"
                    placeholder="Loan Amount"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">%</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="interest"
                    placeholder="Interest"
                  />
                </div>
              </div>
              <div class="form-group">
                <input
                  type="number"
                  id="years"
                  class="form-control"
                  placeholder="Years To Repay"
                />
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Calculate"
                  class="btn btn-dark btn-block"
                />
              </div>
            </form>
            <!-- Loader Here -->
            <div id="loading">
              <img
                src="https://media.giphy.com/media/jAYUbVXgESSti/giphy.gif"
                alt=""
              />
            </div>
            <!-- Results -->
            <div id="result">
              <h5>Results</h5>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Monthly Payment</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="monthly-payment"
                    disabled
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Total Payment</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="total-payment"
                    disabled
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Total Interest</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="total-interest"
                    disabled
                  />
                </div>
              </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>