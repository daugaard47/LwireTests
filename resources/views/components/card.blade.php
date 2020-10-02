<div>

    <label for="cardHolderName" class="block text-sm font-medium leading-5 text-gray-200">Name on the card</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input wire:model.lazy="cardHolderName" type="text" id="card-holder-name"
               class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5"/>
    </div>

    <label for="card" class="block text-sm font-medium leading-5 text-gray-200">Card Details</label>
    <div class="mt-1 mb-4 relative rounded-md shadow-sm">
        <div wire:ignore id="card-element"
             class="form-input py-3 block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5"/>
    </div>

</div>


{{--This goes to Scripts before body close--}}

@section('in-page-scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('pk_test_0h4UPE9RPWi4y6T6Fbh8nhcN00PgYY87GJ');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardButton.addEventListener('click', async (e) => {
            const {setupIntent, error} = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {name: cardHolderName.value}
                    }
                }
            );
            if (error) {
                let errorWrapper = document.getElementById('error-wrapper')
                errorWrapper.textContent = error.error
                console.info(error)
            } else {
                //   console.info(setupIntent.payment_method)
            @this.set('paymentMethod', setupIntent.payment_method)
            @this.call('submit')
            }
        });
    </script>
@endsection
{{--THIS WORKS BUT WITH A FORM SUBMIT EMPTY HACK--}}

