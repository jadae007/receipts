$(document).ready(function () {
  var year = $("#year").val()
 console.log(year);
  ShowAllTitle(year);

  $("#btnChangeYear").click(function (e) { 
    e.preventDefault();
    let year = $("#inputYear").val()
    let status = Number(year) ? true : false
    console.log(status);
    (year.length == 4 && status) ? window.location.href="income?year="+year: false;
  });

  $("#openModal").click(function (e) {
    e.preventDefault();
    $("#formAddTitle")[0].reset();
  });

  $("#formAddTitle").submit(function (e) {
    e.preventDefault();
    let titleName = e.target.titleName.value 
    let no = e.target.no.value 
    let data = new FormData(e.target);
    $.ajax({
      type: "POST",
      enctype: "multipart/form-data",
      url: "query/addIncomeTitle",
      data,
      processData: false,
      contentType: false,
      success: function (response) {
        const { status, message } = JSON.parse(response);
        if(status == "true"){
          SoloAlert.alert({
            title:"Success!!",
            body: message,
            icon: "success",
            useTransparency: true,
            onOk :()=>{
              $("#addTitle").modal("hide")
              $("#titleMenu").append(`
              <div class="col-md-3 col-sm-6 col-sx-12 mt-4">
              <div class="card" style="width: 15rem; height:15 rem; cursor:pointer;">
              <div class="card-body" onclick="goToList(${no})">
              <h5 class="card-title">${no}</h5>
              <p class="card-text">${titleName}</p>
              </div>
              </div>
              </div>
              `);
            }
          });
        }else{
          SoloAlert.alert({
            title:"Failed!!",
            body: message,
            icon: "error",
            useTransparency: true,
          });
        }
      },
    });
  });
});

const ShowAllTitle = (year) => {
  
  $.ajax({
    type: "GET",
    url: "query/showAllTitle",
    data:{
      year,
    },
    success: function (response) {
      const { titleObj } = JSON.parse(response);
      if(titleObj){
        titleObj.forEach((element) => {
          $("#titleMenu").append(`
          <div class="col-md-3 col-sm-6 col-sx-12 mt-4">
          <div class="card" style="width: 15rem; height:15 rem; cursor:pointer;">
          <div class="card-body" onclick="goToList(${element.no})">
          <h5 class="card-title">${element.no}</h5>
          <p class="card-text">${element.titleName}</p>
          </div>
          </div>
          </div>
          `);
        });
      }else{
        SoloAlert.alert({
          title:"Empty!!",
          body: "ไม่พบรายการ",
          icon: "warning",
          useTransparency: true,
        });
      }
    },
  });
};

const goToList = (no) =>{
  window.location.href="title?no="+no
}
