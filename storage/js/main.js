function ShowValidation(tag, value) {
    if(value === "REMOVEALL") {
        if(tag.classList.contains("is-invalid")) {
            tag.classList.remove("is-invalid");
        }
        if(tag.classList.contains("is-valid")) {
            tag.classList.remove("is-valid");
        }
    } else {
        if(value === "is-valid") {
            if(!tag.classList.contains(value)) {
                tag.classList.add(value);
            }
            if(tag.classList.contains("is-invalid")) {
                tag.classList.remove("is-invalid");
            }
        } else {
            if(!tag.classList.contains(value)) {
                tag.classList.add(value);
            }
            if(tag.classList.contains("is-valid")) {
                tag.classList.remove("is-valid");
            }
        }
    }
}

function ApplyClass(element, css, value) {
    if(value) {
        if(element.classList.contains(css)) {
            element.classList.remove(css);
        }
    } else {
        if(!element.classList.contains(css)) {
            element.classList.add(css);
        }
    }
}

function SetDisable(element, value) {
    if(value) {
        element.setAttribute("disabled", "");
    } else {
        element.removeAttribute("disabled");
    }
}