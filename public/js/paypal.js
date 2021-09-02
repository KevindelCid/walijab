paypal.Button.render({
    env: 'sandbox', // sandbox | production
    style: {
        label: 'checkout',  // checkout | credit | pay | buynow | generic
        size:  'responsive', // small | medium | large | responsive
        shape: 'pill',   // pill | rect
        color: 'gold'   // gold | blue | silver | black
    },

    // PayPal Client IDs - replace with your own
    // Create a PayPal app: https://developer.paypal.com/developer/applications/create

    client: {
        sandbox:    'AYSaPOpSAY0hkzp0GinLbXfkEegCbZSWj_649wZHJ17LEXVRUWC9n1Sq5J6xPAtW4ngRHejZS_zGLPhj',
        production: ''
    },

    // Wait for the PayPal button to be clicked

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                        amount: { total: '0.01', currency: 'MXN' }, 
                        description:"Compra de productos a Develoteca:$0.01",
                        custom:"Codigo"
                    }
                ]
            }
        });
    },

    // Wait for the payment to be authorized by the customer

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function() {
            console.log(data);
            window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
        });
    }

}, '#paypal-button-container');
