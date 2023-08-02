function orderHandler() {
  var x = "Order";
  var y = "Submitted ✓";
  document.getElementById("review").innerHTML = x + " " + y;
}

function total() {
  var add = parseInt(document.getElementById("num").value);
  var message = "Your total is:";
  window.alert(message + " " + add * 15);
}
