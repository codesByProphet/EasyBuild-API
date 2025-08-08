# EasyBuild-API
A simple and extensible PHP API controller to handle dynamic actions with ease!

## How It Works

- The frontend sends an action name to the PHP API via query parameters.
- The API checks if a PHP function with that action name exists, executes it, and returns a JSON response.
- The frontend handles the response asynchronously without page reloads (you can optionally reload after actions).

## Example Usage

### JavaScript (e.g., `script.js`)

```js
function CON_MODAL_BUTTON(action, file) {
    fetch(file + '?action=' + encodeURIComponent(action))
        .then(res => res.json())
        .then(data => alert(data.message));
}

function reloadPage() {
    location.reload();
}
