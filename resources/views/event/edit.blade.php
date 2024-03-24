@extends('layouts.front')

@section('title')
    &vert; Event
@endsection

@section('content')
    <form method="POST" action="{{ route('event.update', [$event->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-7">
                <div class="card mb-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">Event - Edit</div>

                            <div class="col text-center">
                                <strong>{{ str_pad($event->id, 5, '0', STR_PAD_LEFT) }}</strong>
                            </div>

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
                                    value="{{ $event->name }}" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="description" class="col-md-2 col-form-label">Description :</label>

                            <div class="col-md-10">
                                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror js-identification"
                                    value="{{ $event->description }}" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="date_execution" class="col-md-2 col-form-label">date_execution :</label>

                            <div class="col-md-10">
                                <input id="date_execution" name="date_execution" type="text" class="form-control @error('date_execution') is-invalid @enderror js-identification"
                                    value="{{ $event->date_execution }}" autofocus>

                                @error('date_execution')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="total_tickets" class="col-md-2 col-form-label">total_tickets :</label>

                            <div class="col-md-10">
                                <input id="total_tickets" name="total_tickets" type="text" class="form-control @error('total_tickets') is-invalid @enderror js-identification"
                                    value="{{ $event->total_tickets }}" autofocus>

                                @error('total_tickets')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                       

                     
                      
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-secondary text-white btn-sm" tabindex="-1" onclick="history.back();">
                                    <i class="bi bi-arrow-left-short"></i>
                                </button>
                            </div>

                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary text-white btn-sm" tabindex="-1">Send</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-5">
                <div class="card mb-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">System</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/system.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <label for="created_at" class="col-md-5 col-form-label">Date created :</label>
                            <div class="col-md-6">
                                <input type="text" readonly class="form-control-plaintext" id="created_at" value="{{ $event->created_at }}" tabindex="-1">
                            </div>
                        </div>

                        <div class="row">
                            <label for="updated_at" class="col-md-5 col-form-label">Date updated :</label>
                            <div class="col-md-6">
                                <input type="text" readonly class="form-control-plaintext" id="updated_at" value="{{ $event->updated_at }}" tabindex="-1">
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

        $('#delivery_address_country').select2({
            theme: "bootstrap-5",
            minimumResultsForSearch: 31,
            placeholder: "Choose ...",
            language: "en",
            allowClear: true,
        }).on('change', function() {
            document.getElementById('delivery_address_postal_code').focus();
        }).on('select2:close', function() {
            document.getElementById('delivery_address_postal_code').focus();
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
        /* ------------------------------------------- */
        $('#btnMapDelivery').click(function() {
            const href = "https://www.google.nl/maps/place/";

            const place = [
                ($('#delivery_address_street').val() ?? ''),
                ($('#delivery_address_number').val() ?? '') + ',',
                ($('#delivery_address_postal_code').val() ?? ''),
                ($('#delivery_address_place').val() ?? '')
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
