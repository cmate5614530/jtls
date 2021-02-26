function betCalculate() {
    // stake value
    var stake = document.getElementById("mod-KambiBC-betslip-stake-input-outcome-2763068864").value;

    var totalstake = document.getElementById("mod-KambiBC-betslip-stake-input-outcome-2763068864").value;
    document.getElementById("totalstakes").innerHTML = totalstake;
    // odds value
    var odds = document.getElementById("odds").textContent;

    // final price calulation

     var finalprice = stake * odds;
    document.getElementById("totalamnt").innerHTML = finalprice.toFixed(2);
}

