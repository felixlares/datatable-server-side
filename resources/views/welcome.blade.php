<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.css"/>
         
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
                

    </head>
    <body class="antialiased">
        <div class="card m-5">
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
                        <tr>
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>     
          <button id="ok" class="btn btn-primary">OK</button>
        <script>
            $(document).ready(function () {
                $('#product').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: 'scripts/server_processing.php',
                });
            });
        </script>
    </body>
</html>
