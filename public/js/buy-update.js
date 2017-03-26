$(document).ready(function(){

    var url = "/ajax-crud/public/tasks";

    //display modal form for task editing
    $(".buy-button").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

        var formData = {
          pname: e.target.getAttribute('pname'),
          cname: "Boy Xu"
        };


        //used to determine the http verb to use [add=POST], [update=PUT]

        var type = "POST"; //for creating new resource
        var my_url = url;

        if (e.target.getAttribute("quantity") !== "0"){
            type = "PUT";
            formData['puttime'] = e.target.getAttribute('puttime');
        }

        $.ajax({

            type: type,
            url: '/purchases',
            data: formData,
            dataType: 'json',
            success: function (data) {
                debugger;
                // var task = '<tr id="task' + data.id + '"><td>' + data.id + '</td><td>' + data.task + '</td><td>' + data.description + '</td><td>' + data.created_at + '</td>';
                // task += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                // task += '<button class="btn btn-danger btn-xs btn-delete delete-task" value="' + data.id + '">Delete</button></td></tr>';
                //
                // if (state == "add"){ //if user added a new record
                //     $('#tasks-list').append(task);
                // }else{ //if user updated an existing record
                //
                //     $("#task" + task_id).replaceWith( task );
                // }
                //
                // $('#frmTasks').trigger("reset");
                //
                // $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});
