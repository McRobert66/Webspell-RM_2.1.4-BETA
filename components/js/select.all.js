    function SelectAll() {
    "use strict";
    var x, y;
    for (x = 0; x < document.form.elements.length; x++) {
        y = document.form.elements[x];
        if (y.name !== "ALL") {
            y.checked = document.form.ALL.checked;
        }
    }
}