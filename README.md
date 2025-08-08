# EasyBuild-API
A simple and extensible PHP API controller to handle dynamic actions with ease!

## How It Works

- Frontend sends an action name to the PHP API via URL query.  
- API runs the matching PHP function and returns a JSON response.  
- Frontend handles the response asynchronously (optionally reloads the page).

## Sample

A `sample` folder is included with example code showing how to use the API in practice.

### JavaScript (script.js)

js
function CON_MODAL_BUTTON(action, file) {
    fetch(file + '?action=' + encodeURIComponent(action))
        .then(res => res.json())
        .then(data => alert(data.message));
}

function reloadPage() {
    location.reload();
}
