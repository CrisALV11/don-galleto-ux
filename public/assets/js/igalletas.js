$(document).ready(function() {
    $("#dtCaducidad").flatpickr();
    $("#dtCaducidadEdit").flatpickr({
        defaultDate: ["2022-11-25"]
    });
});


(() =>
{
    'use strict'
    const forms = document.querySelectorAll('.validacion-galletas');
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
                    text: 'Se ha agregado el producto de manera satisfactoria',
                    confirmButtonColor: '#D99E82'
                }).then((result) => {
                    if (result.isConfirmed)
                    {
                        window.location = '/inventariogalletas';
                    }
                });
            }
        }, false)
    });

    'use strict'
    const formsEdit = document.querySelectorAll('.validacion-galletas-editar');
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
                    text: 'Se ha editado la información del producto de manera satisfactoria',
                    confirmButtonColor: '#D99E82'
                }).then((result) => {
                    if (result.isConfirmed)
                    {
                        window.location = '/inventariogalletas';
                    }
                });
            }
        }, false)
    });
})();

const eliminarGalleta = () =>
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
                text: 'Se ha eliminado la galleta de manera satisfactoria',
                confirmButtonColor: '#D99E82'
            }).then((result) =>
            {
                if (result.isConfirmed)
                {
                    window.location = '/inventariogalletas';
                }
            });
        }
    });
}
