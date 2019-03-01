@extends('user.layout.base')

@section('title', 'Top Up Wallet ')

@section('content')

<div class="col-md-9">
    <div class="dash-content">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title">@lang('user.topupwallet')</h4>
            </div>
        </div>
        @include('common.notify')

        <div id="saveWarningText"></div>

        <div class="row no-margin edit-pro">
            <form id="myForm">
                <script src="https://js.paystack.co/v1/inline.js"></script>
                {{ csrf_field() }}

                <div class="form-group col-md-6">
                    <label>@lang('user.profile.amountp')</label>
                    <input type="number" class="form-control" name="amount" required placeholder="@lang('user.profile.amountp')"
                        value="Amount">
                </div>

                <div class="form-group col-md-6">
                    <label>@lang('user.profile.first_name')</label>
                    <input type="text" class="form-control" name="first_name" disabled required placeholder="@lang('user.profile.first_name')"
                        value="{{Auth::user()->first_name}}">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('user.profile.last_name')</label>
                    <input type="text" class="form-control" name="last_name" disabled required placeholder="@lang('user.profile.last_name')"
                        value="{{Auth::user()->last_name}}">
                </div>

                <div class="form-group col-md-6">
                    <label>@lang('user.profile.email')</label>
                    <input type="email" class="form-control" placeholder="@lang('user.profile.email')" disabled
                        readonly value="{{Auth::user()->email}}">
                </div>

                <div class="form-group col-md-6">
                    <label>@lang('user.profile.mobile')</label>
                    <input type="text" class="form-control" name="mobile" disabled required placeholder="@lang('user.profile.mobile')"
                        value="{{Auth::user()->mobile}}">
                </div>

                <div class="form-group col-md-6">
                    </br>
                </div>

                <div class="col-md-6 pull-right">
                    <button onclick="payWithPaystack()" type="button" id="info" class="form-sub-btn big">@lang('user.profile.topup')</button>
                </div>

                <div id="info" />

            </form>
        </div>
        <script>
            function payWithPaystack() {
    var handler = PaystackPop.setup({
        key: '{{ Setting::get('paystack_publishable_key')}}',
        email: '{{Auth::user()->email}}',
        amount: document.getElementsByName("amount")[0].value * 100,
        currency: "NGN",
        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        firstname: '{{Auth::user()->first_name}}',
        lastname: '{{Auth::user()->last_name}}',
        // label: "Optional string that replaces customer email"
        metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
        </script>
    </div>
</div>

@endsection