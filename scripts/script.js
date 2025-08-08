function CON_MODAL_BUTTON(action, file) {
    fetch(file + '?action=' + encodeURIComponent(action))
        .then(res => res.json())
        .then(data => alert(data.message));
}

function reloadPage() {
    location.reload();
}