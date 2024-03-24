@extends('layouts.front')

@section('title')
    &vert; Event
@endsection

@section('content')
    <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">Event - Add</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/person.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="row mb-2">
                            <label for="name" class="col-md-2 col-form-label">Name :</label>

                            <div class="col-md-10">
                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror js-identification"
                                    value="{{ old('name') }}" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="description" class="col-md-2 col-form-label">Description :</label>

                            <div class="col-md-10">
                                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror js-identification"
                                    value="{{ old('description') }}" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="date_execution" class="col-md-2 col-form-label">date_execution :</label>

                            <div class="col-md-10">
                                <input id="date_execution" name="date_execution" type="text" class="form-control @error('date_execution') is-invalid @enderror js-identification"
                                    value="{{ old('date_execution') }}" autofocus>

                                @error('date_execution')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="total_tickets" class="col-md-2 col-form-label">total_tickets :</label>

                            <div class="col-md-10">
                                <input id="total_tickets" name="total_tickets" type="text" class="form-control @error('total_tickets') is-invalid @enderror js-identification"
                                    value="{{ old('total_tickets') }}" autofocus>

                                @error('total_tickets')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                       
                      

                       
                       

                       
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('event.index') }}"" role=" button" tabindex="-1">
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
