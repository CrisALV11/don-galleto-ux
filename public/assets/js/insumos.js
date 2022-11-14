$(document).ready(function() {
    $("#dtCaducidad").flatpickr();
    $("#dtCaducidadEdit").flatpickr({
        defaultDate: ["2025-12-10"]
    });
    $("#kt_datatable_example_1").DataTable();
});


(() =>
{
    'use strict'
    const forms = document.querySelectorAll('.validacion-insumos');
    Array.from(forms).forEach(form =>
        {
        form.addEventListener('submit', event =>
        {
            if (!form.checkValidity())
            {
                event.preventDefault()
                event.stopPropagation()
                form.classList.add('was-validated');
                Swal.fire({
                    icon: 'warning',
                    title: '¡Atención!',
                    text: 'Hay campos que estan vacios o mal llenados',
                    confirmButtonColor: '#D99E82'
                });
            }
            else
            {
                form.classList.remove('was-validated');
                event.preventDefault();
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: 'Se ha agregado el insumo de manera satisfactoria',
                    confirmButtonColor: '#D99E82'
                }).then((result) => {
                    if (result.isConfirmed)
                    {
                        window.location = '/inventarioinsumos';
                    }
                });
            }
        }, false)
    });

    'use strict'
    const formsEdit = document.querySelectorAll('.validacion-insumos-editar');
    Array.from(formsEdit).forEach(form =>
        {
        form.addEventListener('submit', event =>
        {
            if (!form.checkValidity())
            {
                event.preventDefault()
                event.stopPropagation()
                form.classList.add('was-validated');
                Swal.fire({
                    icon: 'warning',
                    title: '¡Atención!',
                    text: 'Hay campos que estan vacios o mal llenados',
                    confirmButtonColor: '#D99E82'
                });
            }
            else
            {
                form.classList.remove('was-validated');
                event.preventDefault();
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: 'Se ha editado la información del insumo de manera satisfactoria',
                    confirmButtonColor: '#D99E82'
                }).then((result) => {
                    if (result.isConfirmed)
                    {
                        window.location = '/inventarioinsumos';
                    }
                });
            }
        }, false)
    });
})();

const eliminarInsumo = () =>
{
    Swal.fire({
        icon: 'warning',
        title: '¿Estás seguro?',
        text: 'Esta acción no se puede deshacer',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#D99E82'
    }).then((result) => {
        if (result.isConfirmed)
        {
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: 'Se ha eliminado el insumo de manera satisfactoria',
                confirmButtonColor: '#D99E82'
            }).then((result) =>
            {
                if (result.isConfirmed)
                {
                    window.location = '/inventarioinsumos';
                }
            });
        }
    });
}
