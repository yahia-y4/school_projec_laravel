function showEdit(id, name, email, specialization, phone, classroom_id) {
    const form = document.getElementById("form_edit");
    form.action = `/dashboard/teachers/edit/${id}`;
    document.getElementById("name_edit").value = name;
    document.getElementById("email_edit").value = email;
    document.getElementById("specialization_edit").value = specialization;
    document.getElementById("phone_edit").value = phone;
    document.getElementById("classroom_edit").value = classroom_id;

    const edit = document.getElementById("edit-page-id");
    if (edit) edit.style.display = "flex";
}
function hideEdit() {
    const edit = document.getElementById("edit-page-id");
    if (edit) edit.style.display = "none";
}

window.showEdit = showEdit;
window.hideEdit = hideEdit;
