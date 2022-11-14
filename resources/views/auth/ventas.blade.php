@extends('layout')
@section('title')
    Ventas
@endsection

@section('link')
@endsection

@section('content')
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
            </h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="" disabled>
                    Registrar nueva venta&nbsp;&nbsp;
                    <span class="svg-icon svg-icon-primary svg-icon-1x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"/>
                                <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"/>
                            </g>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="card-body pt-5">
            <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-bold fs-6 text-muted">
                        <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Folio</font>
                            </font>
                        </th>
                        <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Concepto</font>
                            </font>
                        </th>
                        <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Fecha</font>
                            </font>
                        </th>
                        <th style="overflow: hidden;">&nbsp;</th>
                        <th style="overflow: hidden;">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">00484192</td>
                        <td class="align-middle">Venta de galletas de chocolate</td>
                        <td class="align-middle">13/11/2022</td>
                        <td class="align-middle text-center">
                            <button type="button" class="btn btn-icon btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalVisualizar">
                                <span class="svg-icon svg-icon-success svg-icon-1x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z"
                                                fill="#FFF" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z"
                                                fill="#FFF" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        </td>
                        <td class="align-middle text-center">
                            <button type="button" class="btn btn-icon btn-sm btn-secondary ms-3" disabled>
                                <span class="svg-icon svg-icon-primary svg-icon-1x text-light">
                                    <span class="svg-icon svg-icon-primary svg-icon-1x">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z"
                                                    fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" x="8" y="2"
                                                    width="8" height="2" rx="1" />
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalVisualizar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Información de la venta</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex pt-3 border-bottom">
                        <p class="pb-3 mb-0 small lh-sm">
                            <strong class="d-block text-gray-dark pb-2">Folio</strong>
                            00484192
                        </p>
                    </div>
                    <div class="d-flex pt-3 border-bottom pb-2">
                        <p class="pb-3 mb-0 small lh-sm">
                            <strong class="d-block text-gray-dark">Concepto</strong>
                            Venta de galletas de chocolate
                        </p>
                    </div>
                    <div class="d-flex pt-3 border-bottom pb-2">
                        <p class="pb-3 mb-0 small lh-sm">
                            <strong class="d-block text-gray-dark">Fecha</strong>
                            13/11/2022
                        </p>
                    </div>
                    <div class="d-flex pt-3 border-bottom pb-2">
                        <p class="pb-3 mb-0 small lh-sm">
                            <strong class="d-block text-gray-dark">Total</strong>
                            $150 MXN
                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-row-bordered gy-5">
                            <thead>
                                <tr class="fw-bold fs-6 text-muted">
                                    <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Presentación</font>
                                        </font>
                                    </th>
                                    <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Galleta</font>
                                        </font>
                                    </th>
                                    <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Cantidad</font>
                                        </font>
                                    </th>
                                    <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Precio</font>
                                        </font>
                                    </th>
                                    <th style="overflow: hidden;">&nbsp;</th>
                                    <th style="overflow: hidden;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">Paquete</td>
                                    <td class="align-middle">Chocolate</td>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">$150 MXN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalEditar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Editar información del insumo</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="validacion-insumos" novalidate>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" value="Harina" required>
                        </div>
                        <div class="mb-4">
                            <label for="txtCantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="txtCantidad" value="10">
                        </div>
                        <div class="mb-4">
                            <label for="dtCaducidadEdit" class="form-label">Fecha de caducidad</label>
                            <input type="date" class="form-control" id="dtCaducidadEdit" value="2022-12-10" required>
                        </div>
                        <div class="mb-4">
                            <label for="txtStockM" class="form-label">Stock mínimo</label>
                            <input class="form-control" id="txtStockM" value="20" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/insumos.js') }}"></script>
@endsection
