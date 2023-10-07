function calculateNetAmount() {
  var totalAmount = parseFloat(
    document.getElementById("totalAmountInput").value
  );

  if (isNaN(totalAmount)) {
    totalAmount = 0;
  }
  var cgst = parseFloat(document.getElementById("cgst").value) || 0;
  var sgst = parseFloat(document.getElementById("sgst").value) || 0;
  var igst = parseFloat(document.getElementById("igst").value) || 0;

  // CGST SGST and IGST teeno value ka code

  var cgstAmt = (cgst / 100) * totalAmount;
  var sgstAmt = (sgst / 100) * totalAmount;
  var igstAmt = (igst / 100) * totalAmount;

  var totalTax = ((cgst + sgst + igst) / 100) * totalAmount;
  var netAmount = totalTax + totalAmount;

  // Adding calculated amounts on fields and display
  document.getElementById("totalAmountDisplay").innerText =
    totalAmount.toFixed(2);
  document.getElementById("taxDisplay").innerText = totalTax.toFixed(2);
  document.getElementById("taxAmount").value = totalTax.toFixed(2);

  document.getElementById("netAmountDisplay").innerText = netAmount.toFixed(2);
  document.getElementById("netAmount").value = netAmount.toFixed(2);

  document.getElementById("cgstDisplay").innerText = cgstAmt.toFixed(2);
  document.getElementById("cgstAmount").value = cgstAmt.toFixed(2);

  document.getElementById("sgstDisplay").innerText = sgstAmt.toFixed(2);
  document.getElementById("sgstAmount").value = sgstAmt.toFixed(2);

  document.getElementById("igstDisplay").innerText = igstAmt.toFixed(2);
  document.getElementById("igstAmount").value = igstAmt.toFixed(2);
}

function calculateTotalAmount() {
  var oneAmount = parseFloat(document.getElementById("totalInput").value);

  console.log(oneAmount);
  if (isNaN(oneAmount)) {
    oneAmount = 0;
  }
  document.getElementById("totalDisplay").innerText = oneAmount.toFixed(2);
}
