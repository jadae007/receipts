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
      $("#titleName").text(listIntitleObj[0].no +"."+ listIntitleObj[0].titleName + " " + listIntitleObj[0].year)
      if(listIntitleObj && listIntitleObj[0].listName){
        listIntitleObj.forEach((element,index) => {
          $("#tbody").append(`
          <tr>
          <td class="text-white">${++index}</td>
          <td>${element.listName}</td>
          <td>${element.amount}</td>
          <td>${element.listAmountMonth10 ? element.listAmountMonth10 : ""}</td>
          <td>${element.listAmountMonth11 ? element.listAmountMonth11 : ""}</td>
          <td>${element.listAmountMonth12 ? element.listAmountMonth12 : ""}</td>
          <td>${element.listAmountMonth1 ? element.listAmountMonth1 : ""}</td>
          <td>${element.listAmountMonth2 ? element.listAmountMonth2 : ""}</td>
          <td>${element.listAmountMonth3 ? element.listAmountMonth3 : ""}</td>
          <td>${element.listAmountMonth4 ? element.listAmountMonth4 : ""}</td>
          <td>${element.listAmountMonth5 ? element.listAmountMonth5 : ""}</td>
          <td>${element.listAmountMonth6 ? element.listAmountMonth6 : ""}</td>
          <td>${element.listAmountMonth7 ? element.listAmountMonth7 : ""}</td>
          <td>${element.listAmountMonth8 ? element.listAmountMonth8 : ""}</td>
          <td>${element.listAmountMonth9 ? element.listAmountMonth9 : ""}</td>
          <td></td>
          <td><button type="button" class="btn btn-success" id="addList" onclick="addList(${element.titleId})">เพิ่มรายการย่อย</button></td>
          </tr>;
          `)
        });
        console.log(listIntitleObj);
      }else{
        console.log("null jaaa");
      }
    }
  });
}