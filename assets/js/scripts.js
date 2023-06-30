document.addEventListener('DOMContentLoaded', function() {
    var deleteLinks = document.querySelectorAll('a[data-confirm]');

    deleteLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            var message = link.getAttribute('data-confirm');
            if (!confirm(message)) {
                event.preventDefault();
            }
        });
    });
});
