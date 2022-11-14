@extends('layout')
@section('title')
    Inventario de galletas
@endsection

@section('link')
@endsection

@section('content')
    <div class="card pb-3">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
            </h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar">
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
    </div>

    <div class="row pt-9">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body pt-5">
                    <div class="d-flex align-items-center text-center py-5 justify-content-center">
                        <img src="https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1080/1080/75/dam/disney-world/dining/disney-springs/gideons-bakehouse/GideonsGallery08-1x1.jpg?1651590356289"
                            class="img-fluid rounded-circle" width="140" height="140" />
                    </div>
                    <div class="d-flex bd-highlight">
                        <div class="flex-fill bd-highlight">
                            <h2 class="pt-6">Galleta de chocolate</h2>
                        </div>
                        <div class="flex-fill bd-highlight">
                            <span class="svg-icon svg-icon-4x float-end svg-icon-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Stock suficiente">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12"
                                            r="10" />
                                        <path
                                            d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex pt-3">
                        <p class="pb-3 mb-0 small lh-sm">
                            <strong class="d-block text-gray-dark pb-2">Cantidad</strong>
                            427
                        </p>
                    </div>
                    <div class="d-flex pt-3">
                        <p class="pb-3 mb-0 small lh-sm">
                            <strong class="d-block text-gray-dark pb-2">Precio</strong>
                            $15 MXN por pieza
                        </p>
                    </div>
                    <div class="d-flex pt-3">
                        <p class="pb-3 mb-0 small lh-sm">
                            <strong class="d-block text-gray-dark pb-2">Fecha</strong>
                            25/11/2022
                        </p>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6 py-2">
                            <button type="button" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#modalEditar"><i
                                    class="fas fa-edit"></i></button>
                        </div>
                        <div class="col-md-6 py-2">
                            <button type="button" class="btn btn-danger col-12" onclick="eliminarGalleta();"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalAgregar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Agregar galleta</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="validacion-galletas" novalidate>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="txtFoto" class="form-label">Fotografía</label>
                            <input type="file" class="form-control" id="txtFoto" accept="image/png, image/gif, image/jpeg" required>
                        </div>
                        <div class="mb-4">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" required>
                        </div>
                        <div class="mb-4">
                            <label for="txtCantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="txtCantidad">
                        </div>
                        <div class="mb-4">
                            <label for="txtPrecio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="txtCantidad" required>
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
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Editar información del producto</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="validacion-galletas-editar" novalidate>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="txtFoto" class="form-label">Fotografía</label>
                            <input type="file" class="form-control" id="txtFoto" accept="image/png, image/gif, image/jpeg" required>
                        </div>
                        <div class="mb-4">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" value="Galleta de chocolate" required>
                        </div>
                        <div class="mb-4">
                            <label for="txtCantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" value="427" id="txtCantidad">
                        </div>
                        <div class="mb-4">
                            <label for="txtPrecio" class="form-label">Precio</label>
                            <input type="number" class="form-control" value="15" id="txtCantidad" required>
                        </div>
                        <div class="mb-4">
                            <label for="dtCaducidadEdit" class="form-label">Fecha de caducidad</label>
                            <input type="date" class="form-control" id="dtCaducidadEdit" required>
                        </div>
                        <div class="mb-4">
                            <label for="dtCaducidad" class="form-label">Stock mínimo</label>
                            <input class="form-control" value="10" id="dtCaducidad" required />
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
    <script src="{{ asset('assets/js/igalletas.js') }}"></script>
@endsection
