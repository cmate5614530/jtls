
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
  
   
function openCity(evt, cityName) {
  var i, tabcontent, tablinks,kambili;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

 
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

$('.KambiBC-tabs__tabs').on('click', 'li', function() {
  $('.KambiBC-tabs__tabs li.KambiBC-tabs__tab--selected').removeClass('KambiBC-tabs__tab--selected');
  $(this).addClass('KambiBC-tabs__tab--selected');
});

$("#min_max").click(function(){
  $(".mod-KambiBC-betslip__header-btn").toggleClass("rotate");  
  $(".mod-KambiBC-betslip__content").toggleClass("hide");
}); 

// Update Betslip List & Clear Betslip 


// clear ul list and close popup
 $("#betslip_clear-btn").click(function(){
    $('#betsliplist li:not(:first-child)').remove();
  $("#betslipModal").removeClass("show-betslip");
 });
 
 // add list in ul with data
 $(".place-link").click(function(){   
  if ($('#betslipModal').hasClass("show-betslip")==true){ 
  }   else { 
    $("#betslipModal").addClass("show-betslip"); 
  }
  
      var template = $("#betslipdesc").clone().removeAttr("id").html();

      var teamName = $(this).data('team-name'),
    confrontation = $(this).data('confrontation'),
    vager = $(this).data('wager-count'),
    score = $(this).data('score');
      var str = [];
    $('.modal-sport-wager').each(function(){
       str.push($(this).text());
    })
    // for dynamic id creation  
    var idLength = $("[id^=betslipdesc]").length;
    var className = teamName.replace(/\s/g,'');
    var idLength = idLength+''+className;
    console.log(idLength);
    
    var list = '<li class="mod-KambiBC-betslip__outcome mod-KambiBC-betslip__outcome--has-stake-input '+className+'" id="betslipdesc'+idLength+'">'
          +  template + '</li>';

      // check if alrady selected list is there if yes then not add 
      if(str.indexOf(teamName) == -1) {
        $("#betsliplist").append(list);
      } else {
        $("."+className).remove();
      } 
       
      
      console.log(str.indexOf(teamName));

      $('#betslipdesc'+idLength+' .modal-sport-wager').html(teamName);
      $('#betslipdesc'+idLength+' .modal-sport-wager-count').html(vager);
      $('#betslipdesc'+idLength+' .modal-sport-confrontation').html(confrontation);
      $('#betslipdesc'+idLength+' .modal-sport-live-count').html('[' + score + ']');
      // uncomment this code if you have getRandomInt function working 
      /* $('#betslipdesc'+idLength+' .modal-sport-bets-right').html(getRandomInt(1, 100));
      $('#betslipdesc'+idLength+' .modal-sport-stake-right').html(getRandomInt(1, 100));
      $('#betslipdesc'+idLength+' .modal-sport-win-right').html(getRandomInt(1, 32));  */
   
});
