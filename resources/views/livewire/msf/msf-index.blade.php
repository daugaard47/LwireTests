<div>
    <div class="text-blue-600 text-sm my-2">{{ json_encode($state) }}</div>

    @if($step === 1) <livewire:msf.step-one :state="$state"/> @endif
    @if($step === 2) <livewire:msf.step-two :state="$state"/> @endif
    @if($step === 3) <livewire:msf.step-three :state="$state"/> @endif
</div>
@push('stripe-js')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
@push('scripts')
    <script>
        window.addEventListener('fire-event', event => {
            console.log("The JS TEST is working");
        })
    </script>
@endpush
@push('stripe-js')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
@push('stripe-scripts')
    <script>
        window.addEventListener('stripe-card', (e) => {
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
        });
    </script>
@endpush
