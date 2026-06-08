// students.js
function showStdInfo(){
    const std = document.getElementById("students-info-div")
    if(std) std.style.display = "flex";
}

function hideStdInfo(){
    const std = document.getElementById("students-info-div")
    if(std) std.style.display = "none";
}

function showEdit(){
    const edit = document.getElementById("edit-page-id")
    if(edit) edit.style.display="flex"
}

window.showStdInfo = showStdInfo;  
window.hideStdInfo = hideStdInfo;

document.getElementById("cancel-std-but").onclick = () => hideStdInfo();
document.getElementById("edit-std-but").onclick =()=>showEdit()