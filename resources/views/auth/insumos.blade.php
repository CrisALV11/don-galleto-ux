@extends('layout')
@section('title')
    Inventario de insumos
@endsection

@section('link')
@endsection

@section('content')
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
            </h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalAgregar">
                    Agregar&nbsp;&nbsp;
                    <span class="svg-icon svg-icon-primary svg-icon-1x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect fill="#000000" x="4" y="11" width="16" height="2"
                                    rx="1" />
                                <rect fill="#000000" opacity="0.3"
                                    transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                    x="4" y="11" width="16" height="2" rx="1" />
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
                                <font style="vertical-align: inherit;">Nombre</font>
                            </font>
                        </th>
                        <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Unidad de medida</font>
                            </font>
                        </th>
                        <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Cantidad</font>
                            </font>
                        </th>
                        <th class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Caducidad</font>
                            </font>
                        </th>
                        <th style="overflow: hidden;">&nbsp;</th>
                        <th style="overflow: hidden;">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">Harina</td>
                        <td class="align-middle">kg</td>
                        <td class="align-middle">10</td>
                        <td class="align-middle">10/12/2022</td>
                        <td class="align-middle text-center">
                            <button type="button" class="btn btn-icon btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalEditar">
                                <span class="svg-icon svg-icon-success svg-icon-1x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                height="2" rx="1" />
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        </td>
                        <td class="align-middle text-center">
                            <button type="button" class="btn btn-icon btn-sm btn-danger ms-3"
                                onclick="eliminarInsumo();">
                                <span class="svg-icon svg-icon-primary svg-icon-1x text-light">
                                    <span class="svg-icon svg-icon-primary svg-icon-1x">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <defs />
                                            <g id="Stockholm-icons-/-General-/-Trash" stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24"
                                                    height="24" />
                                                <path
                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                    id="round" fill="#FFF" fill-rule="nonzero" />
                                                <path
                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    id="Shape" fill="#FFF" opacity="0.3" />
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

    <div class="modal fade" tabindex="-1" id="modalAgregar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Agregar insumo</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="validacion-insumos" novalidate>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" required>
                        </div>
                        <div class="mb-4">
                            <label for="txtCantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="txtCantidad">
                        </div>
                        <div class="mb-4">
                            <label for="dtCaducidad" class="form-label">Fecha de caducidad</label>
                            <input type="date" class="form-control" id="dtCaducidad" required>
                        </div>
                        <div class="mb-4">
                            <label for="dtCaducidad" class="form-label">Stock mínimo</label>
                            <input class="form-control" id="dtCaducidad" required />
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

    <div class="modal fade" tabindex="-1" id="modalEditar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Editar información del insumo</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="validacion-insumos-editar" novalidate>
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
