function showStdInfo(){
    const teacher = document.getElementById("teachers-info-div")
    if(teacher) teacher.style.display = "flex";
}

function hideStdInfo(){
    const teacher = document.getElementById("teachers-info-div")
    if(teacher) teacher.style.display = "none";
}

function showEdit(){
    const edit = document.getElementById("edit-page-id")
    if(edit) edit.style.display="flex"
}

window.showStdInfo = showStdInfo;  
window.hideStdInfo = hideStdInfo;

document.getElementById("cancel-teachers-but").onclick = () => hideStdInfo();
document.getElementById("edit-teachers-but").onclick =()=>showEdit()