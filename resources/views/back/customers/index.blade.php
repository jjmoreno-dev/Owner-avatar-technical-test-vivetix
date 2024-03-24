@extends('layouts.front')

@section('title')
    &vert; Customers
@endsection

@section('content')
    <div class="card mb-2">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Customers</div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/icons/persons.png') }}" />
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="d-flex justify-content-between p-1">
                <div id="ToolbarLeft"></div>
                <div id="ToolbarCenter"></div>
                <div id="ToolbarRight"></div>
            </div>

            <table id="sqltable" class="table table-bordered table-striped table-sm table-hover dataTable">
                <thead class="table-primary">
                    <tr>
                      
                        <th scope="col">Last name</th>
                        <th scope="col">First name</th>
                     
                        <th scope="col">Address</th>
                        <th scope="col">Country</th>
                        <th scope="col">Place</th>
                        <th scope="col">Phone</th>
                       
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        /* ------------------------------------------------------------------------ */
        let dtButtonsLeft = $.extend(true, [], $.fn.dataTable.defaults.buttons);
        let dtButtonsCenter = [];
        let dtButtonsRight = [];
        /* ------------------------------------------------------------------------ */
        let createButton = {
            className: 'btn-success',
            text: '<i class="bi bi-plus"></i>',
            titleAttr: 'Add',
            enabled: true,
            action: function(e, dt, node, config) {
                document.location.href = '{{ route('back.customers.create') }}';
            }
        }
        dtButtonsCenter.push(createButton)

        let showButton = {
            extend: 'selectedSingle',
            className: 'btn-secondary selectOne',
            text: '<i class="bi bi-eye"></i>',
            titleAttr: 'Show',
            enabled: false,
            action: function(e, dt, node, config) {
                const id = dt.row({
                    selected: true
                }).data().id;

                document.location.href = '{{ route('back.customers.show', 'id') }}'.replace("id", id);
            }
        }
        dtButtonsCenter.push(showButton)

        let editButton = {
            extend: 'selectedSingle',
            className: 'btn-primary selectOne',
            text: '<i class="bi bi-pencil"></i>',
            titleAttr: 'Edit',
            enabled: false,
            action: function(e, dt, node, config) {
                const id = dt.row({
                    selected: true
                }).data().id;

                document.location.href = '{{ route('back.customers.edit', 'id') }}'.replace("id", id);
            }
        }
        dtButtonsCenter.push(editButton)

        let clearButton = {
            className: 'btn-secondary',
            text: '<i class="bi bi-arrow-counterclockwise"></i>',
            titleAttr: 'Remove filter and sort',
            action: function(e, dt, node, config) {
                dt.state.clear();
                window.location.reload();
            }
        }
        dtButtonsRight.push(clearButton)

        let deleteButton = {
            extend: 'selected',
            className: 'btn-danger selectMultiple',
            text: '<i class="bi bi-trash"></i>',
            titleAttr: 'Delete',
            enabled: false,
            url: "{{ route('back.customers.massDestroy') }}",
            action: function(e, dt, node, config) {
                const ids = $.map(dt.rows({
                    selected: true
                }).data(), function(entry) {
                    return entry.id;
                });

                bootbox.confirm({
                    title: 'Delete item(s) ...',
                    message: '<div class="alert alert-danger" role="alert">Are you sure?</div>',
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-primary'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-secondary'
                        }
                    },
                    callback: function(confirmed) {
                        if (confirmed) {
                            $.ajax({
                                method: 'POST',
                                url: config.url,
                                data: {
                                    ids: ids,
                                    _method: 'DELETE'
                                },
                                success: function(response) {
                                    dt.draw();

                                    showToast({
                                        type: 'success',
                                        title: 'Delete ...',
                                        message: 'The selection has been deleted.',
                                    });
                                }
                            });
                        }
                    }
                });
            }
        }
        dtButtonsRight.push(deleteButton)
        /* ------------------------------------------------------------------------ */
        let dtOverrideGlobals = {
            ajax: {
                url: "{{ route('back.customers.index') }}",
                data: function(d) {}
            },
            columns: [             
                {
                    data: 'customer_last_name',
                    name: 'customer_last_name',
                },
                {
                    data: 'customer_first_name',
                    name: 'customer_first_name',
                },
               
                {
                    data: 'address_street',
                    name: 'address_street',
                },
                {
                    data: 'address_country',
                    name: 'address_country',
                    className: 'text-center',
                },
                {
                    data: 'address_place',
                    name: 'address_place',
                },
                {
                    data: 'phone',
                    name: 'phone',
                },
                
            ],
            select: {
                selector: 'td:not(.no-select)',
            },
            ordering: true,
            order: [
                [1, "asc"],
                [2, "asc"],
                [3, "asc"],
            ],
            preDrawCallback: function(settings) {
                oTable.columns.adjust();
            },
        };
        /* ------------------------------------------- */
        let oTable = $('#sqltable').DataTable(dtOverrideGlobals);
        /* ------------------------------------------------------------------------ */
        new $.fn.dataTable.Buttons(oTable, {
            name: 'BtnGroupLeft',
            buttons: dtButtonsLeft
        });
        new $.fn.dataTable.Buttons(oTable, {
            name: 'BtnGroupCenter',
            buttons: dtButtonsCenter
        });
        new $.fn.dataTable.Buttons(oTable, {
            name: 'BtnGroupRight',
            buttons: dtButtonsRight
        });

        oTable.buttons('BtnGroupLeft', null).containers().appendTo('#ToolbarLeft');
        oTable.buttons('BtnGroupCenter', null).containers().appendTo('#ToolbarCenter');
        oTable.buttons('BtnGroupRight', null).containers().appendTo('#ToolbarRight');
        /* ------------------------------------------------------------------------ */
        oTable.on('select deselect', function(e, dt, type, indexes) {
            const selectedRows = oTable.rows({
                selected: true
            }).count();

            oTable.buttons('.selectOne').enable(selectedRows === 1);
            oTable.buttons('.selectMultiple').enable(selectedRows > 0);
        });
        
       
        /* ------------------------------------------- */
        function setValue(table, id, key, value) {
            $.ajax({
                method: 'POST',
                url: "{{ route('back.general.setValueDB') }}",
                data: {
                    table: table,
                    id: id,
                    key: key,
                    value: value,
                },
                success: function(response) {
                    oTable.rows(id).invalidate().draw(false);

                    showToast(response);
                }
            });
        };
        /* ------------------------------------------------------------------------ */
    </script>
@endpush
