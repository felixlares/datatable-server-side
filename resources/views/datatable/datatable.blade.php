@extends('welcome')

@section('content')
<div class="">
    <h1 class="p-2">{{ __('products.products') }}</h1>
    <div class="card-body p-2">
        <table id="products" class="table table-bordered table-sm table-hover dt-responsive nowrap table-adjust" style="width: 100%">
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
<script type="module">

    // async function consultar() {
    //     let a = await axios.get('products')
    //     .then(response => {
    //         let products = response.data;
    //         console.log({products});
    //     })
    //     .catch(e => {
    //         console.log(e);
    //     })
    // }
    // consultar()

    // $(document).ready(function () {
    //     console.log("ready!");
    // });
    $(document).ready(function () {
        $('#products').DataTable({
            processing: true,
            serverSide: true,
            scrollY:        540,
            scrollCollapse: true,
            scroller: {
                loadingIndicator: false
            },
            ordering: false,
            searching: false,
            ajax: "{{ route('products') }}",
            pagingType: 'simple_numbers',
            lengthMenu: [ [-1, 5, 10, 25, 50, 100, 250, 500], ["{{ __('global.all') }}", 5, 10, 25, 50, 100, 250, 500] ],
            pageLength: 25,
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

<script type="module">
// console.log($.fn.dataTable.colvis.version);

    // let currentPage = "product";

    // let isActiveMultiselect = false
    // let exportOptionSelect = ""
    // let exportOptionSelectExcel = "excelHtml5"
    // let pin = false
    // var table = $('#products').DataTable({
    //   processing: true,
    //   serverSide: true,
    //   ajax: "{{ route('products') }}",
    //   language: {
    //     search: '',
    //     paginate: {
    //       first: '<i class="las la-angle-double-left"></i>',
    //     //   previous: '<i class="las la-angle-left"></i>',
    //     //   next: '<i class="las la-angle-right"></i>',
    //       last: '<i class="las la-angle-double-right"></i>'
    //     }
    //   },
    //   stateSaveParams: function (settings, data) {
    //     data.search.search = "";
    //   },
    //   pagingType: 'simple_numbers',
    //   lengthMenu: [ [-1, 5, 10, 25, 50, 100, 250, 500], ["{{ __('global.all') }}", 5, 10, 25, 50, 100, 250, 500] ],
    //   pageLength: 25,
    //   deferRender: true,
    //   responsive: true,
    //   paging: true,
    // //   fixedHeader: {
    // //     header: true,
    // //     headerOffset: $('#topBar').outerHeight() + 88 + (pin ? 52 : 0)
    // //   },
    //   scrollY:        540,
    //   scrollCollapse: true,
    //   // colReorder: true,
    //   colReorder: {
    //     fixedColumnsLeft:  1  //colvis edited
    //   },
    //   stateSave: true,
    //   stateDuration: 0, // Default 7200 "2 Hours"
    //   select: {
    //     style: 'os'
    //   },
    //   dom: '<"row mx-0 pt-3 justify-content-between position-sticky table-top-toolbar bg-white z-index-1"<"col-auto toolbar-buttons pt-4"B><"col toolbar"><"col-auto"f>><"row mx-0"<"col px-0"rt>><"row mx-0 position-sticky bottom-0 pt-1 border-top bg-white fh-fixedFooter"<"container-fluid"<"row"<"col totals-div">><"row justify-content-between"<"col-auto mb-2"i><"col-auto mt-1"l><"col-auto"p>>>>',
    //   buttons: [
    //     {
    //       text: '<i class="fas fa-plus" id="tableBtnNewProduct" data-target="#productModal" data-route="products/create"></i>',
    //       action: async function ( e, dt, node, config ) {
    //         if (window.global.preventEscOrSave) {
    //           return
    //         }
    //         lockClickModal("app")
    //         try { await checkLoginAuthenticationOrPermission("create products") } catch (error) { 
    //           setTimeout(() => {
    //             // unLockClickModal()
    //           }, 200);
    //           return 
    //         }
    //         removeActiveTab();
    //         $('#productModal').modal('show');
    //         getModal("#tableBtnNewProduct");
    //       },
    //       titleAttr: "{{ __('products.new_product') }}",
    //       className: 'btn-success'
    //     },
    //     {
    //       text: '<i class="fas fa-folder-open" id="tableBtnOpenProduct" data-target="#productModal" data-route=""></i>',
    //       action: async function ( e, dt, node, config ) {
    //         if (window.global.preventEscOrSave) {
    //           return
    //         }
    //         lockClickModal("app")
    //         var selectedRows = getSelectedRows("products");
    //         var len = selectedRows.length;
    //         if (len == 1) {
    //             try {
    //               let responseDelete = await axios.get(`{{ Request::root() }}/products/${selectedRows[0]}/check-one-deleted?type=open_or_print`)
    //             } catch (error) {
    //               let err = Object.assign({}, error)
    //               console.log(err);
    //               (error.response.status !== 401 && error.response.status !== 403) && Swal.fire({
    //                 title: '{!! __("global.warning") !!}',
    //                 html: err.response.data.message,
    //                 icon: 'warning',
    //                 confirmButtonText: '{!! __("global.ok") !!}',
    //                 iconHtml: '!'
    //               })
    //               setTimeout(() => {
    //                 // unLockClickModal()
    //               }, 200);
    //               return
    //             }
    //             removeActiveTab();
    //             $('#tableBtnOpenProduct').data('route','products/'+selectedRows+'/edit');
    //             $('#productModal').modal('show');
    //             getModal("#tableBtnOpenProduct");
    //         } else if(len == 0) {
    //           Swal.fire({
    //             icon: 'warning',
    //             title: '{!! __("products.swal_title_error_open") !!}',
    //             text: '{!! __("products.swal_text_error_open_null") !!}'
    //           })
    //           setTimeout(() => {
    //             // unLockClickModal()
    //           }, 200);
    //         } else {
    //           Swal.fire({
    //             icon: 'warning',
    //             title: '{!! __("products.swal_title_error_open") !!}',
    //             text: '{!! __("products.swal_text_error_open") !!}'
    //           })
    //           setTimeout(() => {
    //             // unLockClickModal()
    //           }, 200);
    //         }
    //       },
    //       titleAttr: "{{ __('products.open_product') }}",
    //       className: 'btn-info'
    //     }@can('export products'),
    //     {
    //       extend: 'collection',
    //       text: '<span class="d-inline-block" style="transform: translateY(-2px)"><img class="header-icon d-inline-block" src="./images/icons/buttons/export-3.png" height="14" /></span>',
    //       titleAttr: "{!! __('products.export') !!}",
    //       autoClose: true,
    //       className: 'exportingBtn',
    //       buttons: [
    //         {
    //           extend: "excelHtml5",
    //           text: "{!! __('products.all_grid') !!}",
    //           title: "{!! __('products.excel_title') !!}",
    //           filename: "{!! __('products.excel_filename') !!}",
    //           exportOptions: {
    //             columns: "th:not(.noExport)",
    //             modifier: {
    //               page: 'all',
    //               selected: null,
    //             }
    //           }
    //         },
    //         {
    //           extend: "excelHtml5",
    //           text: "{!! __('products.selected_rows') !!}",
    //           title: "{!! __('products.excel_title') !!}",
    //           filename: "{!! __('products.excel_filename') !!}",
    //           action: function (e, dt, button, config) {
    //             console.log({e, dt, button, config});
    //             if ($("#products").DataTable().rows('.selected').data().length > 0) {
    //               $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, button, config);
    //             } else {
    //               Swal.fire({
    //                 icon: 'error',
    //                 title: '@lang("global.title_export_error_no_rows")',
    //                 html: '@lang("global.text_export_error_no_rows")'
    //               })
    //             }
    //           },
    //           exportOptions: {
    //             columns: "th:not(.noExport)",
    //             modifier: {
    //               page: 'all',
    //               selected: true,
    //             }
    //           }
    //         }
    //       ]
    //     }@endcan,
    //     {
    //       attr: {
    //         id: 'colvisList'
    //       },
    //       extend: 'colvis',
    //       columns: ':not(.never)',
    //       text: '<i class="fas fa-columns"></i>',
    //       titleAttr: "{!! __('global.show_columns') !!}",
    //       columnText: function ( dt, idx, title ) {
    //         switch (idx) {
    //           // case 0:
    //           //   return "{{ __('quotes.plus') }}";
    //           //   break;
    //           default:
    //           return title;
    //           break;
    //         }
    //       }
    //     },
    //     {
    //       text: '<i class="fas fa-sync-alt"  id="tableBtnRefreshProduct"></i>',
    //       action: async function ( e, dt, node, config ) {
    //         if (window.global.preventEscOrSave) {
    //           return
    //         }
    //         if (typeof window.PUPPETEER === 'undefined') {
    //           lockClickModal("app")
    //         }
    //         try { await checkLoginAuthenticationOrPermission("show products") } catch (error) { 
    //           setTimeout(() => {
    //             // unLockClickModal()
    //           }, 200);
    //           return 
    //         }
    //         // await reloadDataTable(table, "{{ route('products', ['datatable' => '1']) }}", "@lang('global.processing')")
    //         refreshProducts()
    //       },
    //       titleAttr: "{{ __('global.refresh') }}",
    //       className: 'btn-warning'
    //     },
    //     {
    //       extend: 'collection',
    //       text: "{!! __('global.actions') !!}",
    //       autoClose: true,
    //       buttons: [
    //         {
    //           text: '{!! __("products.delete_product") !!}',
    //           action: async function ( e, dt, node, config ) {
    //             if (window.global.preventEscOrSave) {
    //               return
    //             }
    //             lockClickModal("app")
    //             var selectedRows = getSelectedRows("products");
    //             var len = selectedRows.length;
    //             if (len > 0) {
    //               try { await checkLoginAuthenticationOrPermission('delete products') } catch (error) {
    //                 enableButtons()
    //                 return true
    //               }
    //               let selectedRowsProductsToDelete = $('#products').DataTable().rows('.selected').data()
    //               let selectedProductsToDelete = []

    //               for (let i = 0; i < selectedRowsProductsToDelete.length; i++) {
    //                 const element = selectedRowsProductsToDelete[i];
    //                 selectedProductsToDelete.push(element)
    //               }

    //               let selectedProductsToDeleteIds = selectedProductsToDelete.reduce((acum, product, index) => {
    //                 if (selectedProductsToDelete.length - 1 == index) {
    //                   return acum + `${product.id}`
    //                 } else {
    //                   return acum + `${product.id},`
    //                 }
    //               }, "")

    //               try {
    //               let responseDelete = await axios.get(`{{ Request::root() }}/products/check-deleted?id=${selectedProductsToDeleteIds}`)
    //               if (responseDelete.data.message) {
    //                 Swal.fire({
    //                   title: '{!! __("global.warning") !!}',
    //                   html: '{!! __("products.one_or_more_selected_products_was_deleted_the_product_list_needs_to_be_refreshed_in_order_to_proceed") !!}',
    //                   icon: 'warning',
    //                   confirmButtonText: '{!! __("global.ok") !!}',
    //                   iconHtml: '!'
    //                 })
    //                 setTimeout(() => {
    //                 //   unLockClickModal()
    //                 }, 200);
    //                 return
    //               }
    //               } catch (error) {
    //                 console.log(Object.assign({}, error));
    //                 Swal.fire({
    //                   title: '{!! __("global.warning") !!}',
    //                   html: error?.response?.data?.message || '@lang("global.unknown_error")',
    //                   icon: 'warning',
    //                   confirmButtonText: '{!! __("global.ok") !!}',
    //                   iconHtml: '!'
    //                 })
    //                 setTimeout(() => {
    //                 //   unLockClickModal()
    //                 }, 200);
    //                 return
    //               }

    //               Swal.fire({
    //                 title: '{!! __("products.swal_title_confirm_del", ["len" => "len"]) !!}',
    //                 text: "{!! __('products.swal_text_confirm_delete_product') !!}",
    //                 icon: 'error',
    //                 showCancelButton: true,
    //                 confirmButtonText: '{!! __("products.swal_btn_confirm_del") !!}',
    //                 iconHtml: '?'
    //               }).then(async (result) => {
    //                 if (result.value) {
    //                   try { await checkLoginAuthenticationOrPermission('delete products') } catch (error) {
    //                     enableButtons()
    //                     return true
    //                   }
    //                   let selectedRowsProductsToDelete = $('#products').DataTable().rows('.selected').data()
    //                   let selectedProductsToDelete = []

    //                   for (let i = 0; i < selectedRowsProductsToDelete.length; i++) {
    //                     const element = selectedRowsProductsToDelete[i];
    //                     selectedProductsToDelete.push(element)
    //                   }

    //                   let selectedProductsToDeleteIds = selectedProductsToDelete.reduce((acum, product, index) => {
    //                     if (selectedProductsToDelete.length - 1 == index) {
    //                         return acum + `${product.id}`
    //                     } else {
    //                         return acum + `${product.id},`
    //                     }
    //                   }, "")

    //                   try {
    //                     let responseDelete = await axios.get(`{{ Request::root() }}/products/check-deleted?id=${selectedProductsToDeleteIds}`)
    //                     if (responseDelete.data.message) {
    //                       Swal.fire({
    //                         title: '{!! __("global.warning") !!}',
    //                         html: '{!! __("products.one_or_more_selected_products_was_deleted_the_product_list_needs_to_be_refreshed_in_order_to_proceed") !!}',
    //                         icon: 'warning',
    //                         confirmButtonText: '{!! __("global.ok") !!}',
    //                         iconHtml: '!'
    //                       })
    //                       setTimeout(() => {
    //                         // unLockClickModal()
    //                       }, 200);
    //                       return
    //                     }
    //                   } catch (error) {
    //                     console.log(Object.assign({}, error));
    //                     Swal.fire({
    //                       title: '{!! __("global.warning") !!}',
    //                       html: error?.response?.data?.message || '@lang("global.unknown_error")',
    //                       icon: 'warning',
    //                       confirmButtonText: '{!! __("global.ok") !!}',
    //                       iconHtml: '!'
    //                     })
    //                     setTimeout(() => {
    //                     //   unLockClickModal()
    //                     }, 200);
    //                     return
    //                   }

    //                   var formData = { "_token": "{{ csrf_token() }}" };
    //                   $.ajax({
    //                     url: 'products/' + selectedRows,
    //                     type: 'DELETE',
    //                     data: formData,
    //                     success: async function (data, status, $xhr) {
    //                       if (data.cant_deleted) {
    //                         console.log("here cant delete");
    //                         Swal.fire(
    //                           "{!! __('products.swal_title_cant_deleted') !!}",
    //                           "{!! __('products.product_cant_deleted') !!}",
    //                           'error'
    //                         );
    //                       }else{
    //                         $( '#selectedRows' ).val( '[]' );
    //                         Swal.fire(
    //                           '{!! __("products.swal_title_deleted") !!}',
    //                           '{!! __("products.swal_text_deleted") !!}',
    //                           'success'
    //                         );
    //                         // await reloadDataTable(table, "{{ route('products', ['datatable' => '1']) }}", "@lang('global.processing')", initTableProducts)
    //                       }
    //                       setTimeout(() => {
    //                         // unLockClickModal()
    //                       }, 200);
    //                     }
    //                   }).fail(function($xhr) {
    //                     setTimeout(() => {
    //                     //   unLockClickModal()
    //                     }, 200);
    //                     console.log($xhr);
    //                     if($xhr?.responseJSON) {
    //                       ($xhr.status !== 401 && $xhr.status !== 403) && Swal.fire(
    //                           "{!! __('global.error') !!}",
    //                           $xhr.responseJSON,
    //                           'error'
    //                       );
    //                     } else {
    //                       Swal.fire({
    //                           icon: 'error',
    //                           title: 'Error',
    //                           html: "An error occurred, if the problem persists contact support"
    //                       })
    //                     }
    //                   });
    //                 } else {
    //                   setTimeout(() => {
    //                     // unLockClickModal()
    //                   }, 200);
    //                 }
    //               });
    //             } else {
    //               Swal.fire({
    //                 icon: 'warning',
    //                 title: '{!! __("products.swal_title_error_del") !!}',
    //                 text: '{!! __("products.swal_text_error_del") !!}'
    //               })
    //               setTimeout(() => {
    //                 // unLockClickModal()
    //               }, 200);
    //             }
    //           }
    //         }
    //       ],
    //       className: 'ml-3'
    //     }
    //   ],
    //   columns: [
    //     { data: 'id', width: '30px', render: function(data, type) { return ''; } },
    //     { data: 'part_number' },
    //     { data: 'name', render: function ( data, type, row, meta ) { return '<a href="javascript:void(0);" onclick="openProduct('+row.id+')">'+data+'</a>'; } },
    //     { name: 'manufacturer', data: 'manufacturer' },
    //     { name: 'category', data: 'category' },
    //     { name: 'warehouse_section', data: 'warehouse_section' },
    //     { data: 'qty_purchased' },
    //     { data: 'qty_booked_in' },
    //     { data: 'qty_due_from_pos' },
    //     { data: 'qty_booked_out' },
    //     { data: 'qty_allocated_to_sos' },
    //     { name: 'qty_in_stock', data: 'qty_in_stock' },
    //     { data: 'qty_available' },
    //     { data: 'qty_available_alert_below' },
    //     { data: 'cost_min' },
    //     { data: 'cost_max' },
    //     { data: 'cost_last' },
    //     { name: 'cost_average', data: 'cost_average' },
    //     { data: 'price_min' },
    //     { data: 'price_max' },
    //     { data: 'price_last' },
    //     { data: 'price_average' },
    //     { name: 'descontinued_flag', data: 'descontinued_flag', render: function ( data, type, row, meta ) { if (data > 0) { return '<span class="px-3 custom-tooltip-text" data-toggle="tooltip" data-placement="bottom" title="{{ __('products.product_descontinued') }}"><img src="./images/products-table/descontinued.png" /></span><span class="d-none">{{ __('global.yes') }}</span>'; } else { return ''; } } },
    //     { name: 'clearance_flag', data: 'clearance_flag', render: function ( data, type, row, meta ) { if (data > 0) { return '<span class="px-3 custom-tooltip-text" data-toggle="tooltip" data-placement="bottom" title="{{ __('products.product_clearance') }}"><img src="./images/products-table/clearance.png" /></span><span class="d-none">{{ __('global.yes') }}</span>'; } else { return ''; } } },
    //     { data: 'in_alert', className: 'never' },
    //     { data: 'product_value', className: 'never' },
    //     { name: 'in_stock', data: 'in_stock', className: 'never' }
    //   ],
    //   columnDefs: [
    //     { orderable: false, targets: 0 },
    //     { orderable: true, targets: 1 },
    //     { responsivePriority: 0, targets: 0 },
    //     { responsivePriority: 1, targets: 2 },
    //     { responsivePriority: 2, targets: 1 },
    //     { responsivePriority: 3, targets: 4 },
    //     { responsivePriority: 4, targets: 5 },
    //     { responsivePriority: 5, targets: 19 },
    //     { responsivePriority: 6, targets: 23 },
    //     { responsivePriority: 7, targets: 13 },
    //     // { targets: [5,6,7,9,14,15,18,19,22,23], visible: false },
    //     // { className: 'text-center', targets: [6,7] },
    //     { className: 'dt-body-left', targets: [22,23] },
    //     { className: 'dt-body-right', targets: [6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21] },
    //     { orderable: false, visible: false, targets: [24,25] },
    //     { searchable: false, targets: [0,25] }
    //   ],
    //   order: [[ 2, 'asc' ], [ 1, 'asc' ]],
    //   initComplete: function(settings, json) {
    //     addToolbar();
    //     console.log("initComplete should appear once")
        
    //   },
    //   createdRow: function (row,data) {
    //     console.log("createdRow");
    //     $(row).css('height', "{{ isset($config_GridRowsHeight) ?  $config_GridRowsHeight : '0.3rem'}}");
    //   },
    //   drawCallback: function() {
    //     // $('#products td.dtr-control').off('click', iniTooltip)
    //     // $('#products td.dtr-control').on('click', iniTooltip)
    //     console.log("It should appear once")
    //     initTableProducts();
    //     // iniTooltip()
    //   },
    //   rowCallback: function (row,data) {
    //     console.log("rowCallback");
    //     $(row).css('height', "{{ isset($config_GridRowsHeight) ?  $config_GridRowsHeight : '0.3rem'}}");
    //   },
    //   // footerCallback: function ( row, data, start, end, display ) {
    //   //   var api = this.api(), data;
    //   //   // Remove the formatting to get integer data for summation
    //   //   var intVal = function ( i ) {
    //   //     return typeof i === 'string' ?
    //   //       i.replace(/[\$,]/g, '')*1 :
    //   //       typeof i === 'number' ?
    //   //       i : 0;
    //   //   };
    //   //   // Total over all pages
    //   //   totalCost = api
    //   //     .column( 'cost_average:name' )
    //   //     .data()
    //   //     .reduce( function (a, b) {
    //   //       return intVal(a) + intVal(b);
    //   //     }, 0 );
    //   //   totalStock = api
    //   //     .column( 'qty_in_stock:name' )
    //   //     .data()
    //   //     .reduce( function (a, b) {
    //   //       return intVal(a) + intVal(b);
    //   //     }, 0 );
    //   //   total = totalCost * totalStock;
    //   //   // Update footer
    //   //   $( api.column( 'cost_average:name' ).footer() ).html(
    //   //     'Prod. value: £'+numberRound(total, 2)
    //   //   );
    //   // }
    // })

    // function initTableProducts() {
    //     // $(".modal-link").unbind("click");
    //     // $(".modal-link").click(function() {
    //     //     getModal(this);
    //     // });
    //     if (table) {
    //     //   setTimeout(() => table.responsive.recalc(), 180)
    //       // table.responsive.recalc();
    //     //   updateTotals()
    //     }
    // }

    // function removeActiveTab() {
    //     localStorage.removeItem('productActiveTab');
    // }

    // $(document).ready(function() {
    //   let excuteTableInterval = setInterval(() => {
    //     if (table !== null) {
    //       // WHEN PLUS COLUMN IS DISPLAYED IT IS NEEDED ADJUST HEADERS AGAIN
    //       table.on( 'column-visibility.dt', function ( e, settings, column, state ) {
    //         table.columns.adjust().draw();
    //       });
    //       // SHOW LOADER
    //       // showLoader();

    //       // ADD MENU ACTIVE
    //       $('#menuProducts').addClass('active');

    //       // ON SELECT / DESELECT
    //       table
    //       .on( 'select', function ( e, dt, type, indexes ) {
    //         var rowData = table.cells( '.selected', 0 ).data().toArray();
    //         $( '#selectedRows' ).val( JSON.stringify( rowData ) );
    //       } )
    //       .on( 'deselect', function ( e, dt, type, indexes ) {
    //         var rowData = table.cells( '.selected', 0 ).data().toArray();
    //         $( '#selectedRows' ).val( JSON.stringify( rowData ) );
    //       } );

    //       // ON COLREORDER
    //       table.on( 'column-reorder', function ( e, settings, details ) {
    //         $(".modal-link").unbind("click");
    //         $(".modal-link").click(function() {
    //           getModal(this);
    //         });
    //         $(function () {
    //           $('[data-toggle="tooltip"]').tooltip()
    //         })
    //       } );
          
    //       table.on( 'search.dt', function () {
    //         // this adjust table and columns
    //         // table.columns.adjust();
    //         // fixDataTable(table);
    //         // this adjust table and columns
    //         // updateInAlert();
    //         setTimeout(() => {
    //           if ( $( "#multiselect-container" ).length ) {
    //             $( "#multiselect-separator" ).remove();
    //             $( "#multiselect-container" ).remove();
    //           }
    //           appendMultiselect()
    //         }, 200)
    //       })

    //       $(document).ready(function () {
    //         setTimeout(() => {
    //           $('#products_wrapper > div:nth-child(2)').css('min-height', '580px')
    //           // $("#users_wrapper > div.row.mx-0.position-sticky.bottom-0.pt-1.border-top.bg-white.fh-fixedFooter > div > div.row.justify-content-between").css('height', '30px;')
    //           $("#products_info").css('padding-top','1em' )
    //           $("#products_length").css('padding-top','1em' )
    //           $("#products_paginate").css('padding-top','1em' )
    //           $("#products_wrapper > div.row.mx-0.pt-3.justify-content-between.position-sticky.table-top-toolbar.bg-white.z-index-1").css('z-index','99999' )
    //         }, 0)
    //       })

    //       refreshProducts()
          
    //       initTableProducts()
        
    //     //   setTimeout(() => hideLoader(), 200);

    //       clearInterval(excuteTableInterval)
    //     }
    //   }, 1000)
    // });

    // function addToolbar(){
    //     // TOOLBAR
    //     $("div.toolbar").append('<div class="row toolbar-row"><div class="col-auto pt-4 pl-1 d-xxl-none"><button type="button" class="btn btn-primary btn-filter" data-toggle="modal" data-target="#productFiltersModal">{{ __('products.filters') }}</button></div></div>');

    //     // SEARCH FILTER
    //     var searchFilterPrependHtml = '<label class="d-block pl-2">{{ __('global.search') }}</label>';
    //     $("#products_filter label").addClass("form-group").prepend(searchFilterPrependHtml);



        

    //     $("div.toolbar .toolbar-row").append('<div class="col-auto  mb-3 d-none d-xxl-block"><div class="row checkbox-filter-a ml-1"></div><div class="row checkbox-filter-b ml-1"></div></div>');

    //     // DESCONTINUED FILTER
    //     var descontinuedFilterHtml = '<div class="form-group form-check col-auto"><input type="checkbox" class="form-check-input mt-1 descontinued-filter" id="descontinuedFilter"><label class="form-check-label" for="descontinuedFilter">{{ __('products.descontinued') }}</label></div>';
    //     $("div.toolbar .checkbox-filter-a").append(descontinuedFilterHtml);
    //     $(".descontinued-filter").change(function(){
    //       if($(this).is(":checked")){
    //         table.columns( 'descontinued_flag:name' ).search( '{{ __('global.yes') }}' ).draw();
    //         $(".descontinued-filter").prop( "checked", true );
    //       } else {
    //         table.columns( 'descontinued_flag:name' ).search( '' ).draw();
    //         $(".descontinued-filter").prop( "checked", false );
    //       }
    //     //   updateInAlert();
    //       updateBtnFilters();
    //     //   updateTotals();
    //     //   fixDataTable(table);
    //     });
    //     // table.columns( 'descontinued_flag:name' ).search( '' ).draw();

    //     // CLEARANCE FILTER
    //     var clearanceFilterHtml = '<div class="form-group form-check col-auto mb-0"><input type="checkbox" class="form-check-input mt-1 clearance-filter" id="clearanceFilter"><label class="form-check-label" for="clearanceFilter">{{ __('products.clearance') }}</label></div>';
    //     $("div.toolbar .checkbox-filter-b").append(clearanceFilterHtml);
    //     $(".clearance-filter").change(function(){
    //       if($(this).is(":checked")){
    //         table.columns( 'clearance_flag:name' ).search( '{{ __('global.yes') }}' ).draw();
    //         $(".clearance-filter").prop( "checked", true );
    //       } else {
    //         table.columns( 'clearance_flag:name' ).search( '' ).draw();
    //         $(".clearance-filter").prop( "checked", false );
    //       }
    //     //   updateInAlert();
    //       updateBtnFilters();
    //     //   updateTotals();
    //     //   fixDataTable(table);
    //     });
    //     // table.columns( 'clearance_flag:name' ).search( '' ).draw();

    //     // IN STOCK FILTER 
    //     var inStockFilterHtml = '<div class="form-group form-check col-auto"><input type="checkbox" class="form-check-input mt-1 in-stock-filter" id="inStockFilter"><label class="form-check-label" for="inStockFilter">{{ __('products.in_stock') }}</label></div>';
    //     $("div.toolbar .checkbox-filter-a").append(inStockFilterHtml);
    //     $(".in-stock-filter").change(function(){
    //       if($(this).is(":checked")){
    //         table.columns( 'in_stock:name' ).search( '1' ).draw();
    //         $(".in-stock-filter").prop( "checked", true );
    //       } else {
    //         table.columns( 'in_stock:name' ).search( '' ).draw();
    //         $(".in-stock-filter").prop( "checked", false );
    //       }
    //     //   updateInAlert();
    //       updateBtnFilters();
    //     //   updateTotals();
    //     //   fixDataTable(table);
    //     });
    //     // table.columns( 'in_stock:name' ).search( '' ).draw();

    //     $("div.toolbar .toolbar-row").append('<div class="col-auto  border-right mb-3 d-none d-xxl-block" style="border-right: 2px solid #dee2e6 !important;"><div class="row checkbox-filter-c ml-1"></div><div class="row checkbox-filter-d ml-1"></div></div>');

    //     // IN ALERT FILTER
    //     var inAlertFilterHtml = '<div class="form-group form-check col-auto"><input type="checkbox" class="form-check-input mt-1 in-alert-filter" id="inAlertFilter"><label class="form-check-label in-alert-label" for="inAlertFilter">{{ __('products.in_alert') }}</label></div>';
    //     $("div.toolbar .checkbox-filter-c").append(inAlertFilterHtml);
    //     $(".in-alert-filter").change(function(){
    //       if($(this).is(":checked")){
    //         table.columns( 24 ).search( '1' ).draw();
    //         $(".in-alert-filter").prop( "checked", true );
    //       } else {
    //         table.columns( 24 ).search( '' ).draw();
    //         $(".in-alert-filter").prop( "checked", false );
    //       }
    //     //   updateInAlert();
    //       updateBtnFilters();
    //     //   updateTotals();
    //     //   fixDataTable(table);
    //     });
    //     // table.columns( 24 ).search( '' ).draw();
    //     $("div.toolbar .checkbox-filter-d").append('<span class="font-weight-bold mr-3 in-alert"></span>');

    //     // updateInAlert();

    //     // table.on( 'search.dt', function () {
    //     //   updateInAlert();
    //     //   updateTotals();
    //     // } );

    //     // TOTALS
    //     // var totalsDivHtml = '<p class="font-weight-bold mb-1 mt-2">{{ __('products.total_cost') }}:</p><p class="font-weight-bold mb-1"><span class="totals-value"></span></p>';
    //     var totalsDivHtml = `
    //       <div class="container-fluid">
    //         <div class="row" style="max-width: 500px;">
    //           <div class="col-6 col-sm-3 px-1">
    //             <b class="d-block text-right totals-color">{{ __('products.total_cost') }}<span style="color: black;" class="cursor-help" data-toggle="tooltip" data-placement="top" title="{{ __('products.total_cost_in_stock_based_on_the_average_cost') }}"><i class="far fa-question-circle color-red"></i></span></b>
    //             <input type="text" class="form-control form-control-sm text-right font-weight-bold totals-cost-value" disabled>
    //           </div>
    //         </div>
    //       </div>
    //     `;
    //     $(".totals-div").append(totalsDivHtml);
    //     // updateTotals();

    //     // SET TOOLBAR TOP
    //     $('.table-top-toolbar').css('top',$("#topBar").outerHeight() + (pin ? 52 : 0));
    //     appendMultiselect()

    //     $('#products_length > label > select').on('change', function () {
    //       appendMultiselect()
    //     //   fixDataTable(table);
    //     })

    //     $('input[type=search]').on('input', function () {
    //     //   fixDataTable(table);
    //     })

    //     $('#products_paginate').on('click', function () {
    //       appendMultiselect()
    //       // fixDataTable(table);
    //     })

    //     // $('#products_wrapper > div.row.mx-0.position-sticky.bottom-0.pt-1.border-top.bg-white.fh-fixedFooter > div').css('height', '120px')
        
    //     $('#products_wrapper > div:nth-child(2) > div > div.dataTables_scroll > div.dataTables_scrollBody').css('min-height', '530px')
    // }

    // $("#colvisList").on('click', function() {
    //   let height = window.innerHeight;
    //   const columnsCount = table.init().columns.filter(column => !column?.className?.includes("never")).length
    //   const limitHeight = 288 + (columnsCount * 27) - 34
    //   console.log({limitHeight});

    //   if (height < limitHeight) {
    //     setTimeout(() => {
    //       $(".dropdown-menu").css({ 
    //         'overflow': 'auto',
    //         'height': `${height - 250}px`
    //       });
    //     }, 180)
    //   } else {
    //     setTimeout(() => {
    //       $(".dropdown-menu").css({
    //         'overflow': '',
    //         'height': ``
    //       });
    //     }, 180)
    //   }
    // })

    // function refreshProducts() {
    //   $(".manufacturer-filter").val("");
    //   $(".category-filter").val("");
    //   $(".descontinued-filter").prop( "checked", false );
    //   $(".clearance-filter").prop( "checked", false );
    //   $(".in-stock-filter").prop( "checked", false );
    //   $(".in-alert-filter").prop( "checked", false );
    //   table.order( [[ 2, 'asc' ], [ 1, 'asc' ]] ).search('')
    //     .columns( [
    //       'manufacturer:name',
    //       'category:name',
    //       'descontinued_flag:name',
    //       'clearance_flag:name',
    //       'in_stock:name',
    //       24
    //     ] ).search('')
    //   .draw();
    // //   updateInAlert();
    //   updateBtnFilters();
    // //   updateTotals();
    //   $( '#selectedRows' ).val( '[]' );
    // //   fixDataTable(table);
    //   setTimeout(() => {
    //     // unLockClickModal()
    //   }, 200);
    // }

    // function togglePinTitle() {
    //     let page = "{{ __('products.products') }}";

    //     pin = !pin
    //     if (pin) {
    //         $("#titleBarPinned").removeClass("d-none")
    //         $("#iconTitleBar").attr('src', "{{ Request::root() }}/images/icons/products/boxes-big-icon.png")
    //         $("#pageNameTitleBar").html(page)
    //     } else {
    //         $("#titleBarPinned").addClass("d-none")
    //     }
        
    //     $('.table-top-toolbar').css('top',$("#topBar").outerHeight() + (pin ? 52 : 0));
    //     table.fixedHeader.headerOffset($('#topBar').outerHeight() + 88 + (pin ? 52 : 0));
    // }


    // $("#pin").on("click", togglePinTitle)

    // $("#unpin").on("click", togglePinTitle)

    // // function updateInAlert() {
    // //   let tableInterval = setInterval(() => {
    // //     if (table) {
    // //       inAlertTotal = table.column( 24, { filter: 'applied' } ).data().reduce( function (a, b) { return a + b; }, 0 );
    // //       $(".in-alert").removeClass('text-danger').removeClass('text-success');
    // //       $(".in-alert-label").removeClass('text-danger');
    // //       if(inAlertTotal < 1){
    // //           $(".in-alert").text('{{ __('products.none') }}').addClass('text-success');
    // //       } else {
    // //           $(".in-alert").text(inAlertTotal + ' {{ __('products.products') }}').addClass('text-danger');
    // //           $(".in-alert-label").addClass('text-danger');
    // //       }
    // //       clearInterval(tableInterval)
    // //     }
    // //   }, 200)
    // // }

    // function updateBtnFilters() {
    //     $(".btn-filter").removeClass("btn-primary").removeClass("btn-danger");
    //     var isManufacturerFilter = $(".manufacturer-filter").val() == 0 ? 0 : 1;
    //     var isCategoryFilter = $(".category-filter").val() == 0 ? 0 : 1;
    //     var isDescontinuedFilter = $(".descontinued-filter").is(":checked") ? 1 : 0;
    //     var isClearanceFilter = $(".clearance-filter").is(":checked") ? 1 : 0;
    //     var isInStockFilter = $(".in-stock-filter").is(":checked") ? 1 : 0;
    //     var isInAlertFilter = $(".in-alert-filter").is(":checked") ? 1 : 0;
    //     var isFilter = isManufacturerFilter + isCategoryFilter + isDescontinuedFilter + isClearanceFilter + isInStockFilter + isInAlertFilter;
    //     if (isFilter > 0) {
    //         $(".btn-filter").addClass("btn-danger");
    //     } else {
    //         $(".btn-filter").addClass("btn-primary");
    //     }
    // }

    // // function updateTotals() {
    // //   let tableInterval = setInterval(() => {
    // //     if (table) {
    // //       var intVal = function ( i ) {
    // //           return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0;
    // //       };
    // //       productValueTotals = table.column( 25, { filter: 'applied' } ).data().reduce( function (a, b) { return intVal(a) + intVal(b); }, 0 );
    // //       console.log({productValueTotals});
    // //       $(".totals-cost-value").val(MoneyConverter.toMoney(productValueTotals))
    // //       clearInterval(tableInterval)
    // //     }
    // //   }, 200)
    // // }

    // function appendMultiselect() {
    //   // $('#quote_headers_wrapper > div.row.mx-0.position-sticky.bottom-0.pt-1.border-top.bg-white.fh-fixedFooter > div > div.row.justify-content-between > div.col-auto.mb-2 > div').append(`
    //   if (!$('#multiselect-container').html()) { 
    //   $('#products_info').prepend(`
    //     <div id="multiselect-container" class="d-inline-block pl-1">
    //       <label>
    //         <input type="checkbox" name="multiselect" id="multiselect" ${ isActiveMultiselect && "checked" } onchange="changeMultiSelection(this)" />
    //         <span class="d-inline-block pr-2">Multiselect</span><span id="dashSymbol"></span> 
    //       </label>
    //     </div>
    //     <div id="multiselect-separator" class="d-inline-block mr-1" style="width: 1px; height: 27px; background-color: #a3a3a3; transform: translateY(7px)"></div>
    //   `)
    //   }
    // }

    // function changeMultiSelection(e) {
    //   if ($(`#${e.id}`).is(':checked')) {
    //     table.select.style( 'multi+shift' );
    //     isActiveMultiselect = true
    //   } else {
    //     isActiveMultiselect = false
    //     $('#products').DataTable().rows().deselect()
    //     table.select.style( 'os' )
    //   }
    // }

    // // document.body.addEventListener("keydown", buttonsEventSaveOrClose);

    // // function buttonsEventSaveOrClose(event) {
    // //   if ($('#productModal').hasClass('show') && !$('body').hasClass('swal2-shown') && !$("#loginModal").hasClass("show") && !$('#companiesRemindersGlobalModal').hasClass('show')) {
    // //     if (event.keyCode == 13 && !$('textarea').is(":focus") && !$('input').is(":focus") && !$('select').is(":focus")) {
    // //         if ( $( "#btnProductNewSave" ).length ) {
    // //           setTimeout(() => $( "#btnProductNewSave" ).click(), 100)
    // //         }

    // //         if ( $( "#btnProductEditSave" ).length ) {
    // //           setTimeout(() => $( "#btnProductEditSave" ).click(), 100)
    // //         }
    // //     } else if (event.keyCode == 27) {
    // //       $('#productModal').modal('hide')
    // //     }
    // //   }
    // // }

    // // function mouseOverTooltip() {
    // //   // console.log("Once mouseOverTooltip");
    // //   $(this).tooltip('show');
    // // }
    // // function mouseLeaveTooltip() {
    // //   // console.log("Once mouseLeaveTooltip");
    // //   $(this).tooltip('hide');
    // // }
    // // function clickTooltip() {
    // //   console.log("Once clickTooltip");
    // //   $(this).tooltip('show');
    // //   setTimeout(() => {
    // //     $(this).tooltip('hide');
    // //   }, 700)
    // // }

    // // function iniTooltip() {
    // //   //Unbind tooltips events
    // //   $('.dt-buttons button').unbind("mouseover", mouseOverTooltip)
    // //   $('.dt-buttons button').unbind("mouseleave", mouseLeaveTooltip)
    // //   $('.dt-buttons button').unbind("click", clickTooltip)
    // //   $('.head-tooltip').unbind("mouseover", mouseOverTooltip)
    // //   $('.head-tooltip').unbind("mouseleave", mouseLeaveTooltip)
    // //   $('.head-tooltip').unbind("click", clickTooltip)
    // //   $('.custom-tooltip-text').unbind("mouseover", mouseOverTooltip)
    // //   $('.custom-tooltip-text').unbind("mouseleave", mouseLeaveTooltip)
    // //   $('.custom-tooltip-text').unbind("click", clickTooltip)

    // //   $('.dt-buttons').removeClass('btn-group');
    // //   $('.dt-buttons button').tooltip({placement:'top', trigger: 'manual'});
    // //   $('.dt-buttons button').mouseover(mouseOverTooltip);
    // //   $('.dt-buttons button').mouseleave(mouseLeaveTooltip);
    // //   $('.dt-buttons button').click(clickTooltip);

    // //   $('.head-tooltip').tooltip({placement:'top', trigger: 'manual'});
    // //   $('.head-tooltip').mouseover(mouseOverTooltip);
    // //   $('.head-tooltip').mouseleave(mouseLeaveTooltip);
    // //   $('.head-tooltip').click(clickTooltip);

    // //   $('.custom-tooltip-text').tooltip({placement:'top', trigger: 'manual'});
    // //   $('.custom-tooltip-text').mouseover(mouseOverTooltip);
    // //   $('.custom-tooltip-text').mouseleave(mouseLeaveTooltip);
    // //   $('.custom-tooltip-text').click(clickTooltip);
      
    // //   $(function () {
    // //       $('[data-toggle="tooltip"]').tooltip()
    // //   })

    // //   $('button').on('focus', function () {
    // //     $(this).blur()
    // //   })
    // // }

    // async function openProduct(id) { 
    //   lockClickModal("app")
    //   try {
    //     let responseDelete = await axios.get(`{{ Request::root() }}/products/${id}/check-one-deleted?type=open_or_print`)
    //   } catch (error) {
    //     let err = Object.assign({}, error)
    //     console.log(err);
    //     (error.response.status !== 401 && error.response.status !== 403) && Swal.fire({
    //       title: '{!! __("global.warning") !!}',
    //       html: err.response.data.message,
    //       icon: 'warning',
    //       confirmButtonText: '{!! __("global.ok") !!}',
    //       iconHtml: '!'
    //     })
    //     setTimeout(() => {
    //     //   unLockClickModal()
    //     }, 200);
    //     return
    //   }
    //   removeActiveTab();
    //   $('#tableBtnOpenProduct').data('route','products/'+id+'/edit');
    //   $('#productModal').modal('show');
    //   getModal("#tableBtnOpenProduct");
    // }
    
    // $( window ).resize(function() {
    //   // console.log("aqui", table);
    // //   fixDataTable(table);
    // });

    // function menuFixDataTableDisable() {
    //   table.fixedHeader.disable();
    // }
    // function menuFixDataTableEnable() {
    //   table.fixedHeader.enable();
    // }
    // function menuFixDataTable() {
    // //   fixDataTable(table);
    // }
  </script>
@endsection