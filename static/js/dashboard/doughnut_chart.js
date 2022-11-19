var canvas_id = document.currentScript.getAttribute("canvas_id");
var data_string = document.currentScript.getAttribute("data");
var data = JSON.parse(data_string.replaceAll("%20%", " "));
var title = document.currentScript.getAttribute("title");

config = {
  type: "doughnut",
  data: data,
  options: {
    responsive: true,
    title: {
      display: true,
      text: title,
    },
  },
};

new Chart(canvas_id, config);
