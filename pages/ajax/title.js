$(document).ready(function () {
  const no = $("#no").val()
  showDetailTitle(no)
});

const showDetailTitle = (no) =>{

  $.ajax({
    type: "GET",
    url: "query/showOneTitle",
    data: {
      no
    },
    success: function (response) {
      const { listIntitleObj } = JSON.parse(response)
      if(listIntitleObj){
        console.log(listIntitleObj);
      }else{
        console.log("null jaaa");
      }
    }
  });
}