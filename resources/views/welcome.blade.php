<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- comentar luego los cdn y probar bien el vite --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.css"/>
         
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
                

    </head>
    <body class="antialiased">
        <div class=" m-5">
            <h1 class="p-2">{{ __('products.products') }}</h1>
            <div class="card-body p-2">
                <table id="product" class="table table-bordered table-sm table-hover dt-responsive nowrap table-adjust">
                    <thead>
                        <tr>
                            <th class="noExport"><span class="d-none">{{ __('products.plus') }}</span></th>
                            <th>{{ __('products.part_number') }}</th>
                            <th>{{ __('products.name') }}</th>
                            <th>{{ __('products.manufacturer') }}</th>
                            <th>{{ __('products.category') }}</th>
                            <th>{{ __('products.warehouse') }}</th>
                            <th>{{ __('products.qt_phurchased') }}</th>
                            <th>{{ __('products.qt_booked_in') }}</th>
                            <th class="head-tooltip" title="{{ __('products.qt_due_from_pos') }}">{{ __('products.qty_due') }}</th>
                            <th>{{ __('products.qt_booked_out') }}</th>
                            <th class="head-tooltip" title="{{ __('products.qt_allocated_to_sos') }}">{{ __('products.qty_alloc') }}</th>
                            <th>{{ __('products.qt_in_stock') }}</th>
                            <th class="head-tooltip" title="{{ __('products.qt_available') }}">{{ __('products.qty_avail') }}</th>
                            <th>{{ __('products.qty_alert') }}</th>
                            <th>{{ __('products.cost_min') }}</th>
                            <th>{{ __('products.cost_max') }}</th>
                            <th>{{ __('products.cost_last') }}</th>
                            <th class="head-tooltip" title="{{ __('products.cost_average') }}">{{ __('products.cost_avg') }}</th>
                            <th>{{ __('products.price_min') }}</th>
                            <th>{{ __('products.price_max') }}</th>
                            <th>{{ __('products.price_last') }}</th>
                            <th class="head-tooltip" title="{{ __('products.price_average') }}">{{ __('products.price_avg') }}</th>
                            <th class="head-tooltip" title="{{ __('products.product_descontinued') }}"><img src="./images/products-table/descontinued.png" /><span class="d-none">{{ __('products.descontinued') }}</span></th>
                            <th class="head-tooltip" title="{{ __('products.product_clearance') }}"><img src="./images/products-table/clearance.png" /><span class="d-none">{{ __('products.clearance') }}</span></th>
                            <th class="noExport"></th>
                            <th class="noExport"></th>
                            <th class="noExport"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
                            <td> </td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> texto de prueba</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> texto de prueba 2</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> texto de prueba 3</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>     
          {{-- <button id="ok" class="btn btn-primary">OK</button> --}}
        <script>
            $(document).ready(function () {
                $('#product').DataTable({
                    processing: false,
                    serverSide: true,
                    ajax: "{{ route('products') }}",
                    columns: [
                        { data: 'id', width: '30px', render: function(data, type) { return ''; } },
                        { data: 'part_number' },
                        { data: 'name', render: function ( data, type, row, meta ) { return '<a href="javascript:void(0);" onclick="openProduct('+row.id+')">'+data+'</a>'; } },
                        { name: 'manufacturer', data: 'manufacturer' },
                        { name: 'category', data: 'category' },
                        { name: 'warehouse_section', data: 'warehouse_section' },
                        { data: 'qty_purchased' },
                        { data: 'qty_booked_in' },
                        { data: 'qty_due_from_pos' },
                        { data: 'qty_booked_out' },
                        { data: 'qty_allocated_to_sos' },
                        { name: 'qty_in_stock', data: 'qty_in_stock' },
                        { data: 'qty_available' },
                        { data: 'qty_available_alert_below' },
                        { data: 'cost_min' },
                        { data: 'cost_max' },
                        { data: 'cost_last' },
                        { name: 'cost_average', data: 'cost_average' },
                        { data: 'price_min' },
                        { data: 'price_max' },
                        { data: 'price_last' },
                        { data: 'price_average' },
                        { name: 'descontinued_flag', data: 'descontinued_flag', render: function ( data, type, row, meta ) { if (data > 0) { return '<span class="px-3 custom-tooltip-text" data-toggle="tooltip" data-placement="bottom" title="{{ __('products.product_descontinued') }}"><img src="./images/products-table/descontinued.png" /></span><span class="d-none">{{ __('global.yes') }}</span>'; } else { return ''; } } },
                        { name: 'clearance_flag', data: 'clearance_flag', render: function ( data, type, row, meta ) { if (data > 0) { return '<span class="px-3 custom-tooltip-text" data-toggle="tooltip" data-placement="bottom" title="{{ __('products.product_clearance') }}"><img src="./images/products-table/clearance.png" /></span><span class="d-none">{{ __('global.yes') }}</span>'; } else { return ''; } } },
                        { data: 'in_alert', className: 'never' },
                        { data: 'product_value', className: 'never' },
                        { name: 'in_stock', data: 'in_stock', className: 'never' }
                    ],
                    columnDefs: [
                        { orderable: false, targets: 0 },
                        { orderable: true, targets: 1 },
                        { responsivePriority: 0, targets: 0 },
                        { responsivePriority: 1, targets: 2 },
                        { responsivePriority: 2, targets: 1 },
                        { responsivePriority: 3, targets: 4 },
                        { responsivePriority: 4, targets: 5 },
                        { responsivePriority: 5, targets: 19 },
                        { responsivePriority: 6, targets: 23 },
                        { responsivePriority: 7, targets: 13 },
                        { targets: [5,6,7,9,14,15,18,19,22,23], visible: false },
                        // { className: 'text-center', targets: [6,7] },
                        { className: 'dt-body-left', targets: [22,23] },
                        { className: 'dt-body-right', targets: [6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21] },
                        { orderable: false, visible: false, targets: [24,25] },
                        { searchable: false, targets: [0,25] }
                    ],
                });
            });
        </script>
    </body>
</html>
