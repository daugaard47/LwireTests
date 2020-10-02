<div>

    <label for="cardHolderName" class="block text-sm font-medium leading-5 text-gray-200">Name on the card</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input wire:model.lazy="cardHolderName" type="text" id="card-holder-name"
               class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5"/>
    </div>

    <label for="card" class="block text-sm font-medium leading-5 text-gray-200">Card Details</label>
    <div class="mt-1 mb-4 relative rounded-md shadow-sm">
        <div wire:eval id="card-element"
             class="form-input py-3 block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5"/>
    </div>
    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            // This is a dummy test code for stripe
            const stripe = Stripe('pk_test_4T57ajkUvg1pj6BV2NoEWVII');
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
    @endpush
    {{--THIS WORKS BUT WITH A FORM SUBMIT EMPTY HACK--}}
</div>

