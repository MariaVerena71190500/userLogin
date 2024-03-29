$(document).ready(function(){

    // Add Data
        if (addSuccess) {
            toastr.success(addSuccess)
        }
    // Update Data
        if (successMsg) {
            toastr.success(successMsg)
        }
    //  Delete Data
        if (deleteMsg) {
            toastr.error(deleteMsg)
        }


        $('.password').DataTable({
            processing: true,
            serverSide: true,
            ajax: "/super",
            scrollY: '400px',
            scrollX: true,
            scrollCollapse: true,
            columns: [
                {data: 'no', name: 'no'},
                {data: 'nama', name: 'nama'},
                {data: 'username', name: 'username'},
                {data: 'role', name: 'role'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });

