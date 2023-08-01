function blank3() {
  var x = [3, 6, 2, 89.45, 56, 23, 22, 21, 56, 1];
  x.sort(function (a, b) {
    return a - b;
  });
  //this will serve kind of like a comparator. Kind of like bubble sort.
  document.getElementById("hp").innerHTML = x;
}