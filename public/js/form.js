function toggleFormIndependentResearches() {
    const formPage = document.getElementById("formIndependentResearches");
    if (formPage.classList.contains("h-0")) {
        formPage.classList.remove("h-0");
        formPage.classList.add("h-screen");
    } else {
        formPage.classList.add("h-0");
        formPage.classList.remove("h-screen");
    }
}

function dropHandler(ev) {
    console.log("File(s) dropped");

    // Prevent default behavior (Prevent file from being opened)
    ev.preventDefault();

    if (ev.dataTransfer.items) {
        // Use DataTransferItemList interface to access the file(s)
        [...ev.dataTransfer.items].forEach((item, i) => {
            // If dropped items aren't files, reject them
            if (item.kind === "file") {
                const file = item.getAsFile();
                document.getElementById("fileName").innerHTML = file.name;
                console.log(`… file[${i}].name = ${file.name}`);
            }
        });
    } else {
        // Use DataTransfer interface to access the file(s)
        [...ev.dataTransfer.files].forEach((file, i) => {
            document.getElementById("fileName").innerHTML = file.name;
            console.log(`… file[${i}].name = ${file.name}`);
        });
    }
}

function dragOverHandler(ev) {
    console.log("File(s) in drop zone");

    // Prevent default behavior (Prevent file from being opened)
    ev.preventDefault();
}

$("#fileInputWraper").change(function () {
    var file = $("#file_input")[0].files[0].name;
    $("#fileName").text(file);
});
