function confirmDelete(event) {
    event.preventDefault();
    if (confirm("Bạn có chắc chắn muốn xóa?") )
        window.location = event.target.href;
}

function confirmDeleteContact(el) {
    if (confirm("Bạn có chắc chắn muốn xóa?")) {
        const idContact = $(el).attr('data-id');
        window.location = `/admin/contact/delete/${idContact}`;
    }
}

function confirmDeleteCate(el) {
    if (confirm("Bạn có chắc chắn muốn xóa?")) {
        const idCate = $(el).attr('data-id');
        window.location = `/admin/cate/delete/${idCate}`;
    }
}

function confirmDeleteProduct(el) {
    if (confirm("Bạn có chắc chắn muốn xóa?")) {
        const idProduct = $(el).attr('data-id');
        window.location = `/admin/product/delete/${idProduct}`;
    }
}
