<div id="paypal-button-container"></div>
<div id="paypal-button">
</div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
  env: 'sandbox',
  client: {
    sandbox: 'ASNcLExBdl5aBteqUqLzikREART_wRITAROQ7NncDiVXceeLKvf93L6n4t-GKQ-_S_YoY4QwQaRZNoIt'
  },
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '300',
          currency: 'MXN'
        }
      }]
    });
  },
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        window.location = "https://api.sandbox.paypal.com/v1/orderDetails.php?paymentID="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&pid=1";
      });
  }
}, '#paypal-button');
</script>
