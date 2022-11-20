var table_id = document.currentScript.getAttribute("table_id");
var table_headers = JSON.parse(document.currentScript.getAttribute("table_headers"));
var data = JSON.parse(document.currentScript.getAttribute("data"));

var table = "<div class='table-wrapper'>";
if (table_id) {
  table += "<table id=" + table_id + " class='fl-table'>";
} else {
  table += "<table class='fl-table'>";
}
table += "<thead>";
table += "<tr>";
for (var header of table_headers) {
  table += "<th>" + header + "</th>";
}
table += "</tr>";
table += "</thead>";
table += "<tbody>";
for (var row of data) {
  table += "<tr>";
  for (i = 0; i < row.length; i++) {
    value = row[i];
    table += "<td col="+i+">"+value+"</td>";
  }
  table += "</tr>";
}
table += "</tbody>";
table += "</table>";
table += "</div>";

console.log(table);

document.currentScript.insertAdjacentHTML('afterend', table);
