@extends('layouts.back')

@section('title')
    &vert; Customer
@endsection

@section('content')
    <form method="POST" action="{{ route('back.customers.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">Customer - Add</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/person.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="customer_last_name" class="col-md-2 col-form-label">Last name :</label>

                            <div class="col-md-10">
                                <input id="customer_last_name" name="customer_last_name" type="text" class="form-control @error('customer_last_name') is-invalid @enderror js-identification"
                                    value="{{ old('customer_last_name') }}" autofocus>

                                @error('customer_last_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="customer_first_name" class="col-md-2 col-form-label">First name :</label>

                            <div class="col-md-10">
                                <input id="customer_first_name" name="customer_first_name" type="text" class="form-control @error('customer_first_name') is-invalid @enderror js-identification"
                                    value="{{ old('customer_first_name') }}">

                                @error('customer_first_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr class="narrow" />

                       
                       

                        <div class="row mb-2">
                            <label for="address_street" class="col-md-2 col-form-label">Street :</label>

                            <div class="col-md-6">
                                <input id="address_street" name="address_street" type="text" class="form-control @error('address_street') is-invalid @enderror" value="{{ old('address_street') }}">

                                @error('address_street')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <label for="address_street" class="col-md-1 col-form-label">N° :</label>

                            <div class="col-md-2">
                                <input id="address_number" name="address_number" type="text" class="form-control @error('address_number') is-invalid @enderror" value="{{ old('address_number') }}">

                                @error('address_number')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-secondary" id="btnMapFacturation" name="btnMapFacturation" title="Show address on map" tabindex="-1">
                                    <img src="{{ asset('img/icons/google-maps-location.png') }}" class="img-fluid mx-auto d-block" />
                                </button>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="address_country" class="col-md-2 col-form-label">Country :</label>

                            <div class="col-md-3">
                                <select name="address_country" id="address_country" class="form-select">
                                    <option value="">Choose ...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->iso2 }}">{{ $country->name_en }}</option>
                                    @endforeach
                                </select>
                                @error('address_country')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <label for="address_country" class="col-md-1 col-form-label">PC :</label>

                            <div class="col-md-2">
                                <input id="address_postal_code" name="address_postal_code" type="text" class="form-control @error('address_postal_code') is-invalid @enderror"
                                    value="{{ old('address_postal_code') }}">

                                @error('address_postal_code')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <label for="address_country" class="col-md-1 col-form-label">Place :</label>

                            <div class="col-md-3">
                                <input id="address_place" name="address_place" type="text" class="form-control @error('address_place') is-invalid @enderror" value="{{ old('address_place') }}">

                                @error('address_place')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <hr class="narrow" />

                        <div class="row mb-2">
                            <label for="phone" class="col-md-2 col-form-label">Phone :</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="email" class="col-md-2 col-form-label">E-mail :</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.customers.index') }}"" role=" button" tabindex="-1">
                                    <i class="bi bi-arrow-left-short"></i>
                                </a>
                            </div>

                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary text-white btn-sm" tabindex="-1">Send</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            
        </div>
    </form>
@endsection

@push('scripts')
    <script type="module">
        /* -------------------------------------------------------------------------------------------- */
        $('#address_country').select2({
            theme: "bootstrap-5",
            minimumResultsForSearch: 31,
            placeholder: "Choose ...",
            language: "en",
            allowClear: true,
        }).on('change', function() {
            document.getElementById('address_postal_code').focus();
        }).on('select2:close', function() {
            document.getElementById('address_postal_code').focus();
        });

    
        /* -------------------------------------------------------------------------------------------- */
        $('#btnMapFacturation').click(function() {
            const href = "https://www.google.nl/maps/place/";

            const place = [
                ($('#address_street').val() ?? ''),
                ($('#address_number').val() ?? '') + ',',
                ($('#address_postal_code').val() ?? ''),
                ($('#address_place').val() ?? '')
            ].filter(Boolean).join("+");

            if (place > ',') {
                window.open(href + place).focus();
            } else {
                showToast({
                    type: 'info',
                    title: 'Show address ...',
                    message: 'No address available.',
                });
            }
        });
    
        /* -------------------------------------------------------------------------------------------- */
       
        /* ------------------------------------------- */

        /* -------------------------------------------------------------------------------------------- */
        document.addEventListener('change', function(e) {
            if (e.target && $(e.target).attr('class').includes('js-identification')) {
                getCustomers(
                    document.querySelector('#customer_last_name').value,
                    document.querySelector('#customer_first_name').value,
                    document.querySelector('#company_name').value
                );
            }
        });
        /* -------------------------------------------------------------------------------------------- */
        function getCustomers(customerLastName, customerFirstName, companyName) {
            if (customerLastName || customerFirstName || companyName) {
                $.ajax({
                    method: 'GET',
                    url: "{{ route('back.customers.getAlikes') }}",
                    data: {
                        customer_last_name: customerLastName,
                        customer_first_name: customerFirstName,
                        company_name: companyName,
                    },
                    success: function(response) {
                        document.getElementById('MyCustomers').innerHTML = response;
                    }
                });
            } else {
                document.getElementById('MyCustomers').innerHTML = '';
            }
        }
        /* -------------------------------------------------------------------------------------------- */
    </script>
@endpush
