$(document).ready(function() {

	// Loading Userlist in Datatables
    $('#userListTbl').DataTable();

	// Getting CSRF token for Ajax calls
    getCsrfAjaxToken();

    // Getting User data when modal popup is open
    $(".addEditUserModal").on('click', function() {
        let userId = $(this).attr('userId');
        getUserData(userId);
    });

    // Saving User..
    $("#saveUserForm").on('click', function() {
        addUpdateUserData();
    });

    // Deleting User...
    $(".deleteUserBtn").on('click', function() {

        let userId = $(this).attr('userId');

        if (confirm('Are you sure?')) {
            deleteUser(userId, $(this));
        }

        return false;
    });

    // Clearing Form when modal is closed
    $('#addEditUserModal').on('hidden.bs.modal', function() {
        $(this).find("input,textarea,select").val('').end();
    });
});


function getUserData(userId) {

    if (!userId) {
        return false;
    }

    $.ajax({
        type: 'GET',
        url: 'user/' + userId + '/edit',
        success: function(data) {

            let user = data;

            $("#user_id").val(user.id)
            $("#id_name").val(user.name)
            $("#id_email").val(user.email)
            $("#id_phone").val(user.phone)
            $("#id_city").val(user.city)
        },
        error: function() {
            alert("An error has occurred!");
        },
    });
}

function addUpdateUserData() {

    let userForm = $("#userForm").serialize();
    let errorDiv = $('#div_id_error');
    errorDiv.html("");

    $.ajax({
        type: 'POST',
        url: 'user',
        data: userForm,
        success: function(data) {
            alert("SUCCESS");
        },
        error: function(log) {

            var errors = log.responseJSON;

            let errorsHtml = '<div class="alert alert-danger col-md-12"><ul>';

            $.each(errors, function(key, value) {
                errorsHtml += '<li>' + value + '</li>';
            });

            errorsHtml += '</ul></div>';

            errorDiv.html(errorsHtml);
        },
    });
}

function deleteUser(userId, currentRow) {

    if (!userId) {
        return false;
    }

    $.ajax({
        type: 'DELETE',
        url: 'user/' + userId,
        success: function(data) {
            currentRow.parents('tr').remove();
            alert("Record Deleted");
        },
        error: function() {
            alert('Error occured While deleting record');
        },
    });
}

function getCsrfAjaxToken() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}