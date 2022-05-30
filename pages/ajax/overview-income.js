$(document).ready(function () {
  var year = $("#year").val()
  showAllIncome(year);

  $("#btnChangeYear").click(function (e) { 
    e.preventDefault();
    let year = $("#inputYear").val()
    let status = Number(year) ? true : false
    console.log(status);
    (year.length == 4 && status) ? window.location.href="overview-income?year="+year: false;
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
              showAllIncome();
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


  $("#formAddList").submit(function (e) { 
    e.preventDefault();
    let data = new FormData(e.target)

    $.ajax({
      type: "POST",
      enctype:"multipart/form-data",
      url: "query/addList",
      data,
      processData:false,
      contentType:false,
      success: function (response) {
        const {status , message} = JSON.parse(response)
        if(status=="true"){
          SoloAlert.alert({
            title:"Success!!",
            body: message,
            icon: "success",
            useTransparency: true,
            onOk :()=>{
              $("#addListModal").modal("hide")
              showAllIncome();
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
      }
    });
    
  });

  $("#formAddDetail").submit(function (e) { 
    e.preventDefault();
    let data = new FormData(e.target)

    $.ajax({
      type: "POST",
      enctype:"multipart/form-data",
      url: "query/addDetail",
      data,
      processData:false,
      contentType:false,
      success: function (response) {
        const {status , message} = JSON.parse(response)
        if(status=="true"){
          SoloAlert.alert({
            title:"Success!!",
            body: message,
            icon: "success",
            useTransparency: true,
            onOk :()=>{
              $("#detailModal").modal("hide")
              showAllIncome();
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
      }
    });
    
  });
});



const showAllIncome = (year) => {
  $.ajax({
    type: "get",
    url: "query/showAllIncome",
    data:{
      year,
    },
    success: function (response) {
      const { allIncomeObj } = JSON.parse(response);
      let html = "";
      let titleId =0
      if(allIncomeObj){
        $("#tbody").children().remove
        let no = Number(allIncomeObj[0].no);
      allIncomeObj.forEach((element,index) => {
        if (no == element.no) {
          html += "<tr>";
          html += `<td class="text-white">${++index}</td>`;
          html += `<td>${element.no}</td>`; // ลำดับ
          html += `<td>${element.titleName}</td>`
          html += `<td>${element.amount}</td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td><button type="button" class="btn btn-outline-success" onclick="addList(${element.title_id},'${element.titleName}')">+</button></td>`
          html += `</tr>`;
          no = no +1;
        }
        if(element.titleId != null && element.titleId != titleId){
          html += "<tr>";
          html += `<td class="text-white">${++index}</td>`;
          html +=  "<td></td>"
          html += `<td style=" padding-left: 20px;">${element.listName}</td>`
          html += "<td></td>"
          html += `<td>${(element.listAmountMonth10 && element.listAmountMonth10 != '0.00')  ? element.listAmountMonth10 : ""}</td>`
          html += `<td>${(element.listAmountMonth11 && element.listAmountMonth11 != '0.00') ? element.listAmountMonth11 : ""}</td>`
          html += `<td>${element.listAmountMonth12 && element.listAmountMonth12 != '0.00' ? element.listAmountMonth12 : "" }</td>`
          html += `<td>${element.listAmountMonth1 && element.listAmountMonth1!= '0.00' ? element.listAmountMonth1 : "" }</td>`
          html += `<td>${element.listAmountMonth2 && element.listAmountMonth2 != '0.00' ? element.listAmountMonth2 : ""}</td>`
          html += `<td>${element.listAmountMonth3 && element.listAmountMonth3 != '0.00' ? element.listAmountMonth3 : ""}</td>`
          html += `<td>${element.listAmountMonth4 && element.listAmountMonth4 != '0.00' ? element.listAmountMonth4 : ""}</td>`
          html += `<td>${element.listAmountMonth5 && element.listAmountMonth5 != '0.00' ? element.listAmountMonth5 : ""}</td>`
          html += `<td>${element.listAmountMonth6 && element.listAmountMonth6 != '0.00' ? element.listAmountMonth6 : ""}</td>`
          html += `<td>${element.listAmountMonth7 && element.listAmountMonth7 != '0.00' ? element.listAmountMonth7 : ""}</td>`
          html += `<td>${element.listAmountMonth8 && element.listAmountMonth8 != '0.00' ? element.listAmountMonth8 : ""}</td>`
          html += `<td>${element.listAmountMonth9 && element.listAmountMonth9 != '0.00' ? element.listAmountMonth9 : ""}</td>`
          html += `<td></td>`
          html += `<td></td>`
          html += `<td><button type="button" class="btn btn-outline-warning" onclick="addDetail(${element.list_id},'${element.detailName}')">+</button></td>`
          html += "</tr>";
          titleId = element.titleId
        }
          if(element.listId != null){
            html += "<tr>";
            html += `<td class="text-white">${++index}</td>`;
            html +=  "<td></td>"
            html += `<td style=" padding-left: 30px;">${element.detailName}</td>`
            html += `<td></td>`
            html +=  `<td>${(element.detailAmountMonth10 && element.detailAmountMonth10 != '0.00')  ? element.detailAmountMonth10 : ""}</td>`
            html += `<td>${(element.detailAmountMonth11 && element.detailAmountMonth11 != '0.00')  ? element.detailAmountMonth11 : ""}</td>`
            html += `<td>${(element.detailAmountMonth12 && element.detailAmountMonth12 != '0.00')  ? element.detailAmountMonth12 : ""}</td>`
            html += `<td>${(element.detailAmountMonth1 && element.detailAmountMonth1 != '0.00')  ? element.detailAmountMonth1 : ""}</td>`
            html += `<td>${(element.detailAmountMonth2 && element.detailAmountMonth2 != '0.00')  ? element.detailAmountMonth2 : ""}</td>`
            html += `<td>${(element.detailAmountMonth3 && element.detailAmountMonth3 != '0.00')  ? element.detailAmountMonth3 : ""}</td>`
            html += `<td>${(element.detailAmountMonth4 && element.detailAmountMonth4 != '0.00')  ? element.detailAmountMonth4 : ""}</td>`
            html += `<td>${(element.detailAmountMonth5 && element.detailAmountMonth5 != '0.00')  ? element.detailAmountMonth5 : ""}</td>`
            html += `<td>${(element.detailAmountMonth6 && element.detailAmountMonth6 != '0.00')  ? element.detailAmountMonth6 : ""}</td>`
            html += `<td>${(element.detailAmountMonth7 && element.detailAmountMonth7 != '0.00')  ? element.detailAmountMonth7 : ""}</td>`
            html += `<td>${(element.detailAmountMonth8 && element.detailAmountMonth8 != '0.00')  ? element.detailAmountMonth8 : ""}</td>`
            html += `<td>${(element.detailAmountMonth9 && element.detailAmountMonth9 != '0.00')  ? element.detailAmountMonth9 : ""}</td>`
            html += `<td></td>`
            html += `<td></td>`
            html += `<td></td>`
            html += "</tr>";
          }
      });
    }else{
      SoloAlert.alert({
        title:"Empty!!",
        body: "ไม่พบรายการ",
        icon: "warning",
        useTransparency: true,
      });
    }
      $("#tbody").append(html);
      // $('#table').DataTable();
    },
  });
};

const addList = (titleId,titleName) =>{
  $("#formAddList")[0].reset()
  $("#titleId").val(titleId)
  $("#addListModal").modal('show') 
  let name = $("#addListModalLabel").text()
  $("#addListModalLabel").text(name + titleName)
}

const addDetail = (listId,detailName) =>{
  $("#formAddDetail")[0].reset()
  $("#listId").val(listId)
  $("#detailModal").modal('show') 
}
