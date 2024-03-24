@extends('layouts.front')

@section('title')
    &vert; Sales
@endsection

@section('content')
<div class="modal fade modal-scroll" id="modal_open_paid_support" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
           
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div id="open_paid_support" name="open_paid_support" class="modal-body" style="text-align: center;">
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">close</button>
            </div>
        </div>
      </div>
    </div>
</div>
    <div class="card mb-2">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Sales</div>

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
                        <th scope="col">customer</th>
                        <th scope="col">event</th>
                        <th scope="col">total_tickets</th>
                        <th scope="col">paid_support</th>
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
                document.location.href = '{{ route('sales.create') }}';
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

                document.location.href = '{{ route('sales.show', 'id') }}'.replace("id", id);
            }
        }
        dtButtonsCenter.push(showButton)

      

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
            url: "{{ route('event.massDestroy') }}",
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
      
        let dtOverrideGlobals = {
            ajax: {
                url: "{{ route('sales.index') }}",
                data: function(d) {}
            },           
            columns: [             

                { 
                    name: 'full_name_customer',
                    data: 'full_name_customer',            
                },          
                { 
                    name: 'name_event',
                    data: 'name_event',            
                },
                {
                    data: 'total_tickets',
                    name: 'total_tickets',
                },
                {
                    data: 'paid_support',
                    name: 'paid_support',
                    render: function (data, type, row) {
                        if (data) {
                            return '<a href="javascript:;" onclick="viewPaidSupport(&#39;' + data + '&#39;,&#39;select_date&#39;)" style="text-align:center"><span class="btn btn-sm buttons-selected-single btn-secondary selectOne"> <i class="bi bi-eye"></i> </span></<a>';
                        } else {
                            return 'Error paid_support';
                        }                        
                    },
                    
                    className: 'dt-body-center'
                },
                
               
                
            ],
            select: {
                selector: 'td:not(.no-select)',
            },
            ordering: true,
            //bFilter: false, bInfo: false,
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

        
        
       
        
        </script>
@endpush

@push('scripts')
    <script>
        function viewPaidSupport(id) {
            $("#modal_open_paid_support").modal('show');
            $("#open_paid_support").html('<img src="{{ asset('storage/paid_support/') }}' + "/"+id + '" width="350px" height="300px">');
        }
    </script>    
@endpush

