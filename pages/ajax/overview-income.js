$(document).ready(function () {
  var year = $("#year").val()
  showAllIncome(year);
});

const showAllIncome = (year) => {
  console.log(year);
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
          html += `</tr>`;
          no = no +1;
        }
        if(element.titleId != null && element.titleId != titleId){
          html += "<tr>";
          html += `<td class="text-white">${++index}</td>`;
          html +=  "<td></td>"
          html += `<td style=" padding-left: 20px;">${element.listName}</td>`
          html += "<td></td>"
          html += `<td>${element.listAmountMonth10 ? element.listAmountMonth10 : ""}</td>`
          html += `<td>${element.listAmountMonth11 ? element.listAmountMonth11 : ""}</td>`
          html += `<td>${element.listAmountMonth12 ? element.listAmountMonth12 : "" }</td>`
          html += `<td>${element.listAmountMonth1 ? element.listAmountMonth1 : "" }</td>`
          html += `<td>${element.listAmountMonth2 ? element.listAmountMonth2 : ""}</td>`
          html += `<td>${element.listAmountMonth3 ? element.listAmountMonth3 : ""}</td>`
          html += `<td>${element.listAmountMonth4 ? element.listAmountMonth4 : ""}</td>`
          html += `<td>${element.listAmountMonth5 ? element.listAmountMonth5 : ""}</td>`
          html += `<td>${element.listAmountMonth6 ? element.listAmountMonth6 : ""}</td>`
          html += `<td>${element.listAmountMonth7 ? element.listAmountMonth7 : ""}</td>`
          html += `<td>${element.listAmountMonth8 ? element.listAmountMonth8 : ""}</td>`
          html += `<td>${element.listAmountMonth9 ? element.listAmountMonth9 : ""}</td>`
          html += `<td></td>`
          html += `<td></td>`
          html += "</tr>";
          titleId = element.titleId
   
        }
          if(element.listId != null){
            html += "<tr>";
            html += `<td class="text-white">${++index}</td>`;
            html +=  "<td></td>"
            html += `<td style=" padding-left: 30px;">${element.detailName}</td>`
            html +=  "<td></td>"
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
