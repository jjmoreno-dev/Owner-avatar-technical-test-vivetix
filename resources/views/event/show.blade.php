@extends('layouts.front')

@section('title')
    &vert; Event
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-7">
            <div class="card mb-2">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Event</div>

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
                        <label for="name" class="col-md-2 col-form-label">name :</label>

                        <div class="col-md-10">
                            <input id="name" name="name" type="text" readonly class="form-control-plaintext" value="{{ $event->name }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="name" class="col-md-2 col-form-label">description :</label>

                        <div class="col-md-10">
                            <input id="description" name="description" type="text" readonly class="form-control-plaintext" value="{{ $event->description }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="name" class="col-md-2 col-form-label">date_execution :</label>

                        <div class="col-md-10">
                            <input id="date_execution" name="date_execution" type="text" readonly class="form-control-plaintext" value="{{ $event->date_execution }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="name" class="col-md-2 col-form-label">total_tickets :</label>

                        <div class="col-md-10">
                            <input id="total_tickets" name="total_tickets" type="text" readonly class="form-control-plaintext" value="{{ $event->total_tickets }}">
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
                    <div class="row mb-2">
                        <label for="created_at" class="col-md-5 col-form-label">Date created :</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control-plaintext" id="created_at" value="{{ $event->created_at }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="updated_at" class="col-md-5 col-form-label">Date updated :</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control-plaintext" id="updated_at" value="{{ $event->updated_at }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
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
        /* -------------------------------------------------------------------------------------------- */
    </script>
@endpush
