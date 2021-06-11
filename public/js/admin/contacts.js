$(document).ready(() => {

    /** get list of contact for table */
    getContactListForTable();

});

function getContactListForTable() {
    return $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/admin/thong-tin-lien-he/danh-sach",
        method: "GET",
        dataType: "json",
        success: (result) => {
            $('#contactsTable').DataTable({
                language: {
                    emptyTable: 'Không có dữ liệu',
                    lengthMenu: 'Hiện _MENU_ dòng',
                    info: 'Thể hiện _START_ tới _END_ trong tổng cộng _TOTAL_ dòng',
                    loadingRecords: 'Đang tải...',
                    search: 'Tìm kiếm: ',
                    zeroRecords: 'Không tìm thấy dữ liệu tương ứng',
                    paginate: {
                        first: "Đầu",
                        last: "Cuối",
                        next: "Tiếp theo",
                        previous: "Trước đó",
                    },
                },
                data: result.data,
                columns: [
                    { data: 'fullName' },
                    { data: 'phone' },
                    { data: 'email' },
                    { data: 'message' },
                    { data: 'created_at' },
                ],
                order: [
                    [4, 'desc']
                ],
            });
            if (!result.data)
                $('.error-message-contactsTable').text(result.message);
        },
        error: (error) => console.error(error)
    });
}