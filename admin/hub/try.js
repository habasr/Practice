function multiply(arr, n) {
  var product = 1;
  for (var i = 0; i < n; i++) {
    product *= arr[i];
  }
  return product;
}
console.log(multiply());
