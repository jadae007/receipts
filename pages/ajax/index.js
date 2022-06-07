$(document).ready(function () {
  $("#loginForm").submit(function (e) { 
    e.preventDefault();
    let data = new FormData(e.target)
    $.ajax({
      type: "POST",
      enctype:"multipart/form-data",
      url: "query/login",
      data,
      processData:false,
      contentType:false,
      cache:false,
      success: function (response) {
        const { status,message } = JSON.parse(response)
        console.log(status);
        console.log(message);
        if(status == "true"){
         window.location.href="overview-income"
        }
      }
    });
  });
});