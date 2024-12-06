document.querySelector('.btn-especificaciones').addEventListener('click', function() {
    var tabla = document.getElementById('tabla-especificaciones');
    if (tabla.style.display === 'none' || tabla.style.display === '') {
        tabla.style.display = 'block';
    } else {
        tabla.style.display = 'none';
    }
});
