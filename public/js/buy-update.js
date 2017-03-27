$(document).ready(function(){

  $("#home-button").click(function(event) {
    window.location.replace("/");
  });

  $("#search-button").click(function (event) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })

    var keyword = $("#search-keyword")[0].value,
        customer = $("#customer-name")[0].value === "" ? "dummy" : $("#customer-name")[0].value;

    $.ajax({

        type: "GET",
        url: '/customer/' + customer.toLowerCase(),
        dataType: 'json',
        success: function (data) {
          if(data.length !== 0) {
            var customerName = data[0].cname;
            window.sessionStorage.customerName = customerName;
            window.location.replace('/product?name=' + keyword.toLowerCase());
            document.getElementById('logged-in-user').innerText = customerName;
          }
        },
        error: function (data) {
          console.log('Error:', data);
        }
    });
  });

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
          cname: window.sessionStorage.customerName
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
              location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});
