$(document).ready(() => {

    /** get list of trial users for table */
    getTrialUserListForTable();

});

function getTrialUserListForTable() {
    return $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/admin/tai-khoan-dung-thu/danh-sach",
        method: "GET",
        dataType: "json",
        success: (result) => {
            $('#trialUsersTable').DataTable({
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
                    { data: 'email' },
                    { data: 'phone' },
                    { data: 'created_at' },
                ],
                order: [
                    [2, 'desc']
                ],
            });
            if (!result.data)
                $('.error-message-trialUsersTable').text(result.message);
        },
        error: (error) => console.error(error)
    });
}