@extends('welcome')

@section('content')
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
  <button id="ok" class="btn btn-primary">OK</button>
<script type="module">

    async function consultar() {
        let a = await axios.get('products')
        .then(response => {
            let products = response.data;
            console.log({products});
        })
        .catch(e => {
            console.log(e);
        })
    }
    consultar()

    $(document).ready(function () {
        console.log("ready!");
    });
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
@endsection