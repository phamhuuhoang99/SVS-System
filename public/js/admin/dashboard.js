$(document).ready(() => {

    /** get total trial users number */
    getTotalTrialUser();

    /** get total contact number */
    getTotalContact();

});

function getTotalTrialUser() {
    return $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/admin/tai-khoan-dung-thu/so-luong",
        method: "GET",
        dataType: "json",
        success: (result) => {
            if (result.data !== null && result.data !== undefined)
                document.getElementById("totalTrialUser").innerHTML = result.data;
            else
                console.error(result.message);
        },
        error: (error) => console.error(error)
    });
}

function getTotalContact() {
    return $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/admin/thong-tin-lien-he/so-luong",
        method: "GET",
        dataType: "json",
        success: (result) => {
            if (result.data !== null && result.data !== undefined)
                document.getElementById("totalContact").innerHTML = result.data;
            else
                console.error(result.message);
        },
        error: (error) => console.error(error)
    });
}