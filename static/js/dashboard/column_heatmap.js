var table_id = document.currentScript.getAttribute("table_id");
var columns = document.currentScript.getAttribute("columns").split(",");
var colors = document.currentScript.getAttribute("colors").split(",");

console.log(table_id);
console.log(columns);
console.log(colors);

for (var col of columns) {
  console.log(col);
  try {
    $("#" + table_id + " td[col=" + col + "]").hottie({ colorArray: colors });
  } catch (e) {
    console.log(e);
  }
}