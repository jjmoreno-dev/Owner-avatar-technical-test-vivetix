@extends('layouts.front')

@section('title')
    &vert; Sales
@endsection

@section('content')
<style>
    legend {
        display: block;
        width: 100%;
        padding: 0 5px;
        margin-bottom: 0;
        font-size: inherit;
        line-height: inherit;
        border: auto;
        border-bottom: none;
        float: right;
    }
    

    fieldset {
        border: 1px groove threedface;
        padding: 5px;
    }


</style>
    <form method="POST" action="{{ route('sales.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">Sales - Add</div>

                            <div class="col fs-5 text-end">
                                <i class="bi bi-credit-card-2-front-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <fieldset >
                            <legend style="text-align: right;margin-top: -15px;"><small class="badge bg-secondary"
                                    style="font-size: 14px;">customer data</small></legend>
                            <div class="row ">                                
                                <div class="col-md-12">
                                    <label for="customer_last_name" class="col-md-2 col-form-label">First name :</label>
                                    <input id="customer_last_name" name="customer_last_name" type="text"
                                        class="form-control @error('customer_last_name') is-invalid @enderror js-identification"
                                        value="{{ old('customer_last_name') }}">
                        
                                    @error('customer_first_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">                                
                                <div class="col-md-12">
                                    <label for="customer_first_name" class="col-md-2 col-form-label">First name :</label>
                                    <input id="customer_first_name" name="customer_first_name" type="text"
                                        class="form-control @error('customer_first_name') is-invalid @enderror js-identification"
                                        value="{{ old('customer_first_name') }}">
                        
                                    @error('customer_first_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset >
                            <legend style="text-align: right;margin-top: -15px;" ><small class="badge bg-secondary" style="font-size: 14px;">customer address</small></legend> 
                            <br>
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

                            </fieldset>
                       
                       

                       
                        <br>
                        <fieldset >
                            <legend style="text-align: right;margin-top: -15px;" ><small class="badge bg-secondary" style="font-size: 14px;">purchase information</small></legend> 
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <label for="event_id" class="col-md-2 col-form-label">Event :</label>
                                    <select name="event_id" id="event_id" class="form-select">
                                        <option value="">Choose ...</option>
                                        @foreach ($event as $event)
                                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('event_id ')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">

                                    <label for="total_tickets" class="col-md-2 col-form-label">total_tickets :</label>
                                    <div class="input-group">
                                        <input id="total_tickets" name="total_tickets" type="number" class="form-control @error('total_tickets') is-invalid @enderror" value="{{ old('email') }}">
                                      
                                    </div>
                                    @error('total_tickets')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror

                                </div>

    
                                
                            </div>
                            <br>
    
                            <div class="row">
                                
                                <label for="image_paid_support" class="col-md-2 col-form-label">image_paid_support :</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input class="form-control form-control-lg" id="image_paid_support" name="image_paid_support" type="file">
                                    </div>
    
                                    @error('image_paid_support')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            </fieldset>
                        
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
    
       
        
       
    </script>
@endpush
