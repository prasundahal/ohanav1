
<section class="parallax default-padding" id="p-effect">
    <div class="container">
        <div class="donate m-auto text-center">
            <div class="title-description-wrapper mb-4">
                <div class="title text-center text-white mb-3">
                    <h1>Account Information</h1>
                </div>
            </div>

            {{-- <div class="discription w-75 text-center mx-auto text-white">{{$settings->donation_text}}
            </div> --}}

            <ul class="content-wrap text-white mx-auto text-center my-3 d-inline-block p-3">
                <li class="mb-1">
                    {{$settings->bank_name}}
                </li>
                <li class="mb-1"> Currency Type: {{$settings->currency_type}}
                </li>
                <li class="mb-1">
                    Account name: {{$settings->account_name}}
                </li>
                <li class="mb-1">
                    Account Number: {{$settings->account_num}}

                </li>


            </ul>
        </div>
    </div>
</section>