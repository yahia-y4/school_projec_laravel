

function showEdit(){
    const edit = document.getElementById("edit-page-id")
    if(edit) edit.style.display="flex"
}
function hideEdit(){
    const edit = document.getElementById("edit-page-id")
    if(edit) edit.style.display="none"
}


window.showEdit=showEdit;
window.hideEdit=hideEdit;
