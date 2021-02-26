var data =[]
  

    function inplatfoot(){
               const urlParams = new URLSearchParams(window.location.search);
                        const id = urlParams.get('id');
            var api = "http://localhost/mgm/api/inplay-football.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "?id="+id,true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = xmlhttp.responseText;
            
           
            document.getElementById("myass").innerHTML = response1;
            }
            };
            xmlhttp.send();
          }



 const getresult = async function(eveid){

                          const response= await   fetch("https://bet365-sports-odds.p.rapidapi.com/v1/bet365/result?event_id="+eveid, {
                                                      "method": "GET",
                                                      "headers": {
                                                        "x-rapidapi-host": "bet365-sports-odds.p.rapidapi.com",
                                                        "x-rapidapi-key": "2154ae0934mshe44abfa1b9a3d90p1b74b0jsn1d50e61d0934"
                                                      }
                                                    })


                          let resJSON= await response.json()
                             //let resJSON =     {"success":1,"results":[[{"type":"EV","AM":"5","AS":"2501_25","AU":"0","BF":"0","BX":"","C1":"1","C2":"51089516","C3":"91626757","CB":"BGESITSEUS","CC":"ESOC-ARENA-10M","CE":"0","CK":"ESOC-ARENA-10M","CL":"1","CM":" ","CT":"Esoccer Live Arena - 10 mins play","CU":"","DC":"1","DO":"1","DS":"","ED":"","EI":"1-1-5-51089516-2-737","EL":"0","ES":"","ET":"0","EX":"","FB":"0","FF":"","FI":"91626358","FS":"1","HO":"1","HP":"1","ID":"15510895162C1_1_1","IG":"1,0,All,1#2,1480,Minutes,0#3,1470,Asian Lines,0#4,1352,Corners\/Cards,0#5,5,,0#6,6,Goals,1#7,7,Half,0#8,8,Player,0#9,9,Specials,0#999,1,Bet Builder,1","IT":"15510895162C1_1_1","LB":"0","LM":"1","LT":"","MC":"","MD":"1","ML":"10","MM":"","MO":"0","MP":"38","MS":"21752377","NA":"Watford (Quavo) Esports v Everton (praym) Esports","NT":"","RO":"1","SB":"0","SD":"0","SE":"0","SF":"0","SS":"0-1","SV":"1","SY":"","T1":"5","T2":"2","T3":"3","TD":"0","TM":"10","TO":"1~GD","TS":"18","TT":"0","TU":"20200728071002","UC":"","VI":"38","VS":""},{"type":"TG","AD":"","CT":"Soccer","DS":"1","ED":"","ID":"91626358","IT":"91626358C1G_1_1","OR":"0"},{"type":"TE","EX":"","ID":"1","IT":"91626358C1T1_1_1","KC":"#FBED32,#0A0A0A,#FFDF1B,#FFDF1B,#5C8FAE,#FFDF1B,#0A0A0A","KI":"4","NA":"Watford (Quavo) Esports","OR":"0","PI":"0","PO":"0","SC":"0","TC":"#FBED32","TD":"173049"},{"type":"TE","EX":"","ID":"2","IT":"91626358C1T2_1_1","KC":"#0046A8,#0046A8,#0046A8,#0046FF,#0E388C,#0E388C,#F0F0F0","KI":"1","NA":"Everton (praym) Esports","OR":"1","PI":"0","PO":"0","SC":"1","TC":"#0046A8","TD":"173698"},{"type":"ES","AD":"","ID":"","IT":"91626358C1ES_1_1","NA":"","OR":"0","PE":"","SY":""},{"type":"SC","ID":"0","IT":"91626358C1ES0_1_1","NA":"","OR":"0","SY":"13","VL":"1"},{"type":"SL","D1":"Watford (Quavo) Esports","D2":"","ID":"0","IT":"91626358C1ES0-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"Everton (praym) Esports","D2":"","ID":"1","IT":"91626358C1ES0-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"1","IT":"91626358C1ES1_1_1","NA":"IGoal","OR":"1","SY":"14","VL":"1"},{"type":"SL","D1":"0","D2":"","ID":"0","IT":"91626358C1ES1-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"1","D2":"","ID":"1","IT":"91626358C1ES1-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"2","IT":"91626358C1ES2_1_1","NA":"ICorner","OR":"2","SY":"14","VL":"1"},{"type":"SL","D1":"0","D2":"","ID":"0","IT":"91626358C1ES2-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"0","D2":"","ID":"1","IT":"91626358C1ES2-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"3","IT":"91626358C1ES3_1_1","NA":"IYellowCard","OR":"3","SY":"14","VL":"1"},{"type":"SL","D1":"0","D2":"","ID":"0","IT":"91626358C1ES3-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"0","D2":"","ID":"1","IT":"91626358C1ES3-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"4","IT":"91626358C1ES4_1_1","NA":"IRedCard","OR":"4","SY":"14","VL":"1"},{"type":"SL","D1":"0","D2":"","ID":"0","IT":"91626358C1ES4-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"0","D2":"","ID":"1","IT":"91626358C1ES4-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"5","IT":"91626358C1ES5_1_1","NA":"IThrowIn","OR":"5","SY":"14","VL":"1"},{"type":"SL","D1":"-","D2":"","ID":"0","IT":"91626358C1ES5-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"-","D2":"","ID":"1","IT":"91626358C1ES5-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"6","IT":"91626358C1ES6_1_1","NA":"IFreeKick","OR":"6","SY":"14","VL":"1"},{"type":"SL","D1":"-","D2":"","ID":"0","IT":"91626358C1ES6-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"-","D2":"","ID":"1","IT":"91626358C1ES6-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"7","IT":"91626358C1ES7_1_1","NA":"IGoalKick","OR":"7","SY":"14","VL":"1"},{"type":"SL","D1":"-","D2":"","ID":"0","IT":"91626358C1ES7-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"-","D2":"","ID":"1","IT":"91626358C1ES7-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"8","IT":"91626358C1ES8_1_1","NA":"IPenalty","OR":"8","SY":"14","VL":"1"},{"type":"SL","D1":"0","D2":"","ID":"0","IT":"91626358C1ES8-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"0","D2":"","ID":"1","IT":"91626358C1ES8-1_1_1","OR":"1","SY":"0"},{"type":"SC","ID":"9","IT":"91626358C1ES9_1_1","NA":"ISubstitution","OR":"9","SY":"14","VL":"1"},{"type":"SL","D1":"0","D2":"","ID":"0","IT":"91626358C1ES9-0_1_1","OR":"0","SY":"0"},{"type":"SL","D1":"0","D2":"","ID":"1","IT":"91626358C1ES9-1_1_1","OR":"1","SY":"0"},{"type":"MA","CN":"1","DO":"1","FF":"","FI":"91626757","I2":"1,6","IB":"0","ID":"1778","IM":"1","IR":"","IT":"91626358C1-1778_1_1","MM":"","NA":"2nd Goal","OR":"0","OT":"0","PI":"","PT":"","SU":"1","TO":"1~GD","UC":""},{"type":"CO","CN":"3","ID":"1","IT":"91626358C1-1778-1_1_1","NA":"","OR":"0","SY":"0"},{"type":"PA","BS":"Watford (Quavo) Esports to score 2nd goal","FI":"91626757","HA":"","HD":"","ID":"911375770","IT":"P91626757-911375770_1_1","LA":"","NA":"Watford (Quavo) Esports","OD":"0\/0","OR":"0","SU":"1"},{"type":"PA","BS":"","FI":"91626757","HA":"","HD":"","ID":"911375772","IT":"P91626757-911375772_1_1","LA":"","NA":"No 2nd Goal","OD":"0\/0","OR":"1","SU":"1"},{"type":"PA","BS":"Everton (praym) Esports to score 2nd goal","FI":"91626757","HA":"","HD":"","ID":"911375773","IT":"P91626757-911375773_1_1","LA":"","NA":"Everton (praym) Esports","OD":"0\/0","OR":"2","SU":"1"},{"type":"SG","ID":"","IT":"91626358C1U_1_1","OR":"0"},{"type":"ST","IC":"","ID":"66531211","IT":"91626358C1U66531211_1_1","LA":"Score After Full Time - 0-1","OR":"0"},{"type":"ST","IC":"1","ID":"66531094","IT":"91626358C1U66531094_1_1","LA":"Score After First Half - 0-1","OR":"1"},{"type":"ST","IC":"2","ID":"66531069","IT":"91626358C1U66531069_1_1","LA":"5' - 1st Goal -   (Everton (praym) Esports) -  ","OR":"2"},{"type":""}]],"stats":{"event_id":"2581712","update_at":"1595916608","update_dt":"2020-07-28 06:10:08"}};

                                const  data = resJSON.results[0];
                              

                                if(data.success != 0){

                                		 data.reverse();
                                }
                               

                             



                                                    var tmltableR = '<table class="tabe2 table">';

                                                    
                                                        tmltableR += '<thead>';
                                                        tmltableR += '<tr><th>Results</th></tr>';
                                                    
                                                        tmltableR += '</thead>';
                                                        tmltableR += '<tbody>';


                                                          for( let obj in data ){

                                                  

                                                     if(data[obj].type == 'ST'){
                                                       tmltableR += '<tr>';
                                                        tmltableR += '<td>';
                                                           tmltableR += data[obj].LA;
                                                           tmltableR += '</td>';
                                                          tmltableR += '</tr>';
                                                            }

                                                          }

                                                               tmltableR += '</tbody>';
                                                       tmltableR += '</table>';

                                                      document.getElementById('pst2').innerHTML =   tmltableR; 


                                                  
  }

function fractionToDecimal(f) {
  return f.split('/').reduce((n, d, i) => n / (i ? d : 1));
}
                           // THIS FUNCTION WILL GET BETTING ODDS FOR SPECIFIC GAME                                 // TEST IDS 90853735   90638719   90647223  91020918   91372263  90918433  90956489
                          const getallresult = async function(){
                            // THIS WILL RELOAD PAGE
                             const urlParams = new URLSearchParams(window.location.search);
                        const id = urlParams.get('id');
                          const response= await  fetch("https://bet365-sports-odds.p.rapidapi.com/v1/bet365/event?FI="+id, {
                                                      "method": "GET",
                                                      "headers": {
                                                        "x-rapidapi-host": "bet365-sports-odds.p.rapidapi.com",
                                                        "x-rapidapi-key": "2154ae0934mshe44abfa1b9a3d90p1b74b0jsn1d50e61d0934"
                                                      }
                                                    })
    							 let resJSON= await response.json()

                         

                                    // let resJSON= await response.json()
                                                    // console.log(resJSON);  
                                                    // THIS IS OUR ACTUAL RESUTLS CONTAINING ALL ODDS
                                                    data = resJSON.results[0]
                                                    data.reverse();
                                                    stats = resJSON.stats

                                                var eventid = resJSON.stats.event_id;



                                                //getresult(eventid);


                                                    var tmltable2 = '<table class="tabe2 table">';

                                                    
                                                        tmltable2 += '<thead>';
                                                        tmltable2 += '<tr><th>Final Score and Goal-No Goal</th></tr>';
                                                    
                                                        tmltable2 += '</thead>';
                                                        tmltable2 += '<tbody>';


                                                     var tmltable = '<table class="tabel table">';

                                                    
                                                        tmltable += '<thead>';
                                                        tmltable += '<tr><th>1</th><th>X</th><th>2</th></tr>';
                                                    
                                                        tmltable += '</thead>';
                                                        tmltable += '<tbody>';


                                                         var sp1 = 0;
                                                        var sp2 = 0;
                                                        var sp3 = 0;
                                                          var tbs1 = [];
                                                           var tbs2 = [];
                                                          var tbs3 = [];
                                                        var tblss = [];
                                                     var tmltd = [];
                                                      tmltd['sp1'] = [];
                                                      tmltd['sp2'] = [];
                                                      tmltd['sp3'] = [];
                                                 
                                                    for( let obj in data ){

                                                  

                                                     if(data[obj].type == 'ST'){
                                                       tmltable2 += '<tr>';
                                                        tmltable2 += '<td>';
                                                           tmltable2 += data[obj].LA;
                                                           tmltable2 += '</td>';
                                                          tmltable2 += '</tr>';
                                                            }
                                        
                                                      if(data[obj].type == 'PA'){

                                                                      if(data[obj].N2 == 1){
                                                          
                                                          if( data[obj].OD != ''){

                                                            var dps = parseFloat(fractionToDecimal(data[obj].OD));

                                                            tmltd['sp1'][sp1] = '<td>'+ dps.toFixed(2) +'</td>'; 
                                                          }else{

                                                             tmltd['sp1'][sp1] = '<td></td>';
                                                          }
                                                         
                                                          
                                                          sp1++;

                                                        }


                                                         if(data[obj].N2 == 'X'){
                                                        
                                                           if( data[obj].OD != ''){
                                                              var dps = parseFloat(fractionToDecimal(data[obj].OD));
                                                             tmltd['sp2'][sp2] = '<td>'+  dps.toFixed(2) +'</td>'; 
                                                          }else{

                                                             tmltd['sp2'][sp2] = '<td></td>';
                                                          }
                                                            sp2++;
                                                        }



                                                         if(data[obj].N2 == 2){
                                                        

                                                              if( data[obj].OD != ''){
                                                                  var dps = parseFloat(fractionToDecimal(data[obj].OD));
                                                             tmltd['sp3'][sp3] = '<td>'+  dps.toFixed(2) +'</td>'; 
                                                          }else{

                                                             tmltd['sp3'][sp3] = '<td></td>';
                                                          }

                                                            sp3++;
                                                        }    }

                                               
                                                 
                                                 }



                                                
                                                 for (var i = 0; i < tmltd['sp1'].length; i++) {
                                          
                                                   tmltable += '<tr>'+tmltd['sp1'][i]+tmltd['sp2'][i]+tmltd['sp3'][i]+'</tr>';  
                                                 }

                                                     
                                             
                                                      tmltable += '</tbody>';
                                                       tmltable += '</table>';



                                                       tmltable2 += '</tbody>';
                                                       tmltable2 += '</table>';

                                                 document.getElementById('pst').innerHTML =   tmltable;  
                                                 document.getElementById('pst1').innerHTML =   tmltable2;  
                                           	getallresult();

                                                }
                                          
//getallresult();
 setInterval(function() {
inplatfoot();
//getresult(2476212);

} , 3000);
                           // THIS FUNCTION WILL GET BETTING ODDS FOR SPECIFIC GAME                                 // TEST IDS 90853735   90638719   90647223  91020918   91372263  90918433  90956489
                          const getFootballOdds=async function(elementCalled){
                            // THIS WILL RELOAD PAGE
                             // var ids =  document.getElementById(preid).value;
 // alert(ids);

 const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');




                          const response= await  fetch("https://bet365-sports-odds.p.rapidapi.com/v2/bet365/prematch?FI="+id, {
                                                      "method": "GET",
                                                      "headers": {
                                                        "x-rapidapi-host": "bet365-sports-odds.p.rapidapi.com",
                                                        "x-rapidapi-key": "2154ae0934mshe44abfa1b9a3d90p1b74b0jsn1d50e61d0934"
                                                      }
                                                    })
                                                    // WE NEED TO CONVERT RESPONSE TO JSON FORMAT SO WE CAN READ DATA
                                                    let resJSON= await response.json()

                                                    // THIS IS OUR ACTUAL RESUTLS CONTAINING ALL ODDS
                                                    data = resJSON.results[0]
                                                    removeElement()
                                                
                                                    if(elementCalled=="main") mainOdds()
                                                    else if(elementCalled=="minutes") minutesOdds()
                                                    else if(elementCalled=="asian") asianLinesOdds()
                                                    else if(elementCalled=="cards") cardsOdds()
                                                    else if(elementCalled=="corners") cornersOdds()
                                                    else if(elementCalled=="specials") specialOdds()
                                                    else if(elementCalled=="players") playerOdds()
                                                    else if(elementCalled=="half") halfOdds()
                                                    else if(elementCalled=="goal") goalOdds()



                                                }
// setInterval(function() {


// } , 3000);


// THESE FUNCTIONS CALLS CORRESPONDING BET FUNTION DEPENDING ON WHICH BUTTON YOU CLICKED
  const mainFunction= function(){
          let elementCalled="main"
          getFootballOdds(elementCalled)
  }
  const asianFunction=  function(){
    let elementCalled="asian"
    getFootballOdds(elementCalled)
  }
  const minutesFunction= function(){
    let elementCalled="minutes"
    getFootballOdds(elementCalled)
  }
  const cardsFunction= function(){
    let elementCalled="cards"
    getFootballOdds(elementCalled)
  }
  const cornersFunction= function(){
    let elementCalled="corners"
    getFootballOdds(elementCalled)
  }
  const specialFunction= function(){
    let elementCalled="specials"
    getFootballOdds(elementCalled)
  }
  const playerFunction= function(){
    let elementCalled="players"
    getFootballOdds(elementCalled)
  }
  const halfFunction= function(){
    let elementCalled="half"
    getFootballOdds(elementCalled)
  }
  const goalFunction= function(){
    let elementCalled="goal"
    getFootballOdds(elementCalled)
  }
     // REMOVES ELEMENTS
  function removeElement() {
      var array = document.getElementsByTagName("table");
      let length=array.length
      for(let i=0;i<length;i++){
          const element = document.getElementById(array[0].id)
         element.parentNode.removeChild(element)
      }

  }



// THIS FUNCTION WILL SET ALL DATA FOR MAIN WHEN WE GOT DATA FROM THE API
const mainOdds =  function(){

// CREATE VARIABLES
let rowHead, rowData, cell1, cell2, cell3, table, getTable, counter;
  if(typeof data.main!="undefined"){





// ;
// // SET FULL TIME
let FT = data.main.sp.full_time_result
  if(typeof FT !== "undefined"){
// CREATE TABLE FT
table=  document.createElement("table");
  table.setAttribute("class", "table");
      table.setAttribute("id", "FT");
    document.getElementById("apst").appendChild(table);

getTable= document.getElementById("FT")

// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan","3");
cell1.innerHTML = FT.name;

// CREATE HEADER ROW               // INSERT DATA
rowData = getTable.insertRow(1);
cell1 = rowData.insertCell(0);   cell1.innerHTML = FT.odds[0].name;
cell2 = rowData.insertCell(1);   cell2.innerHTML = FT.odds[1].name;
cell3 = rowData.insertCell(2);   cell3.innerHTML = FT.odds[2].name;

// CREATE ODD ROW                   // ISNERT DATA
rowData = getTable.insertRow(2);
cell1 = rowData.insertCell(0);     cell1.innerHTML = FT.odds[0].odds;
cell2 = rowData.insertCell(1);     cell2.innerHTML = FT.odds[1].odds;
cell3 = rowData.insertCell(2);     cell3.innerHTML = FT.odds[2].odds;
}



let PSF  = data.main.sp.money_line
  if(typeof PSF !== "undefined"){
// CREATE TABLE PSF
table=  document.createElement("table");
  table.setAttribute("class", "table");
      table.setAttribute("id", "PSF");
    document.getElementById("apst").appendChild(table);

getTable= document.getElementById("PSF")

// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan","3");
cell1.innerHTML = PSF.name;

// CREATE HEADER ROW               // INSERT DATA
rowData = getTable.insertRow(1);
cell1 = rowData.insertCell(0);   cell1.innerHTML = PSF.odds[0].name;
cell2 = rowData.insertCell(1);   cell2.innerHTML = PSF.odds[1].name;
// cell3 = rowData.insertCell(2);   cell3.innerHTML = PSF.odds[2].name;

// CREATE ODD ROW                   // ISNERT DATA
rowData = getTable.insertRow(2);
cell1 = rowData.insertCell(0);     cell1.innerHTML = PSF.odds[0].odds;
cell2 = rowData.insertCell(1);     cell2.innerHTML = PSF.odds[1].odds;
// cell3 = rowData.insertCell(2);     cell3.innerHTML = PSF.odds[2].odds;
}




let PSA  = data.main.sp.point_spread
  if(typeof PSA !== "undefined"){
// CREATE TABLE PSA
table=  document.createElement("table");
  table.setAttribute("class", "table");
      table.setAttribute("id", "PSA");
    document.getElementById("apst").appendChild(table);

getTable= document.getElementById("PSA")

// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan","3");
cell1.innerHTML = PSA.name;

// CREATE HEADER ROW               // INSERT DATA
rowData = getTable.insertRow(1);
cell1 = rowData.insertCell(0);   cell1.innerHTML = PSA.odds[0].name;
cell2 = rowData.insertCell(1);   cell2.innerHTML = PSA.odds[1].name;
// cell3 = rowData.insertCell(2);   cell3.innerHTML = PSA.odds[2].name;

// CREATE ODD ROW                   // ISNERT DATA
rowData = getTable.insertRow(2);
cell1 = rowData.insertCell(0);     cell1.innerHTML = PSA.odds[0].odds;
cell2 = rowData.insertCell(1);     cell2.innerHTML = PSA.odds[1].odds;
// cell3 = rowData.insertCell(2);     cell3.innerHTML = PSA.odds[2].odds;
}



let PSB  = data.main.sp.game_totals
  if(typeof PSA !== "undefined"){
// CREATE TABLE PSA
table=  document.createElement("table");
  table.setAttribute("class", "table");
      table.setAttribute("id", "PSB");
    document.getElementById("apst").appendChild(table);

getTable= document.getElementById("PSB")

// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan","3");
cell1.innerHTML = PSB.name;

// CREATE HEADER ROW               // INSERT DATA
rowData = getTable.insertRow(1);
cell1 = rowData.insertCell(0);   cell1.innerHTML = PSB.odds[0].name;
cell2 = rowData.insertCell(1);   cell2.innerHTML = PSB.odds[1].name;
cell3 = rowData.insertCell(2);   cell3.innerHTML = PSB.odds[2].name;

// CREATE ODD ROW                   // ISNERT DATA
rowData = getTable.insertRow(2);
cell1 = rowData.insertCell(0);     cell1.innerHTML = PSB.odds[0].odds;
cell2 = rowData.insertCell(1);     cell2.innerHTML = PSB.odds[1].odds;
cell3 = rowData.insertCell(2);     cell3.innerHTML = PSB.odds[2].odds;
}












// SET FULL TIME ENHANCED PRICES
 /*let ASD =""
 let FTenhanced = data.main.sp.full_time_result_–_enhanced_prices
 console.log(FTenhanced)

if(typeof FTenhanced !== "undefined"){
 // CREATE TABLE FT
 table=  document.createElement("table");
       table.setAttribute("id", "FTenhanced");
      document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("FTenhanced")

 // CREATE TITLE ROW
 rowHead = getTable.insertRow(0);
 rowHead.setAttribute("class", "title")
 cell1 = rowHead.insertCell(0);
 cell1.setAttribute("colspan","3");
 cell1.innerHTML = FTenhanced.name;

 // CREATE HEADER ROW               // INSERT DATA
 rowData = getTable.insertRow(1);
 cell1 = rowData.insertCell(0);   cell1.innerHTML = FTenhanced.odds[0].name;
 cell2 = rowData.insertCell(1);   cell2.innerHTML = FTenhanced.odds[1].name;
 cell3 = rowData.insertCell(2);   cell3.innerHTML = FTenhanced.odds[2].name;

 // CREATE ODD ROW                   // ISNERT DATA
 rowData = getTable.insertRow(2);
 cell1 = rowData.insertCell(0);     cell1.innerHTML = FTenhanced.odds[0].odds;
 cell2 = rowData.insertCell(1);     cell2.innerHTML = FTenhanced.odds[1].odds;
 cell3 = rowData.insertCell(2);     cell3.innerHTML = FTenhanced.odds[2].odds;
}
*/



  // SET TO QUALIFY
  let toQualify = data.main.sp.to_qualify

  if(typeof toQualify !== "undefined"){
  // CREATE TABLE TO QUALIFY
  table=  document.createElement("table");
        table.setAttribute("id", "toQualify");
       document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("toQualify")

  // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = toQualify.name;

  // CREATE ODD ROW                   // ISNERT DATA
  rowData = getTable.insertRow(1);
  cell1 = rowData.insertCell(0);    cell1.innerHTML = toQualify.odds[0].name +" "+ toQualify.odds[0].odds;
  cell2 = rowData.insertCell(1);    cell2.innerHTML = toQualify.odds[1].name +" "+ toQualify.odds[1].odds;
}




// SET Method of victory
let methodOfVictory = data.main.sp.method_of_victory

if(typeof methodOfVictory !== "undefined"){
// CREATE TABLE TO QUALIFY
table=  document.createElement("table");
      table.setAttribute("id", "methodOfVictory");
     document.getElementById("apst").appendChild(table);

getTable= document.getElementById("methodOfVictory")

// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan","3");
cell1.innerHTML = methodOfVictory.name;


  // CREATE HEADER ROW               // INSERT DATA
  rowData = getTable.insertRow(1);
  cell1 = rowData.insertCell(0);
  cell2 = rowData.insertCell(1);   cell2.innerHTML = "HOME";
  cell3 = rowData.insertCell(2);   cell3.innerHTML = "AWAY";

  // CREATE ODD ROW                   // INSERT DATA

  for(let i=0;i<3;i++){
  rowData = getTable.insertRow(counter);
  cell1 = rowData.insertCell(0);  if(typeof methodOfVictory.odds[i] !== "undefined")    cell1.innerHTML =methodOfVictory.odds[i].name;
  cell2 = rowData.insertCell(1);  if(typeof methodOfVictory.odds[i] !== "undefined")  cell2.innerHTML =methodOfVictory.odds[i].odds;
  cell3 = rowData.insertCell(2);  if(typeof methodOfVictory.odds[i+1] !== "undefined")  cell3.innerHTML =methodOfVictory.odds[i+3].odds;
  }

}



 // SET GAME DECIDED IN EXTRA TIME
   let gameDecidedET= data.main.sp.game_decided_in_extra_time

   if(typeof gameDecidedET !== "undefined"){
   // CREATE TABLE GAME DECIDED IN EXTRA TIME
   table=  document.createElement("table");
         table.setAttribute("id", "gameDecidedET");
        document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("gameDecidedET")

   // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = gameDecidedET.name;

     // CREATE ODD ROW                         // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);  if(typeof gameDecidedET.odds[0] !== "undefined")  cell1.innerHTML =gameDecidedET.odds[0].name +" " + gameDecidedET.odds[0].odds;
   cell2 = rowData.insertCell(1);  if(typeof gameDecidedET.odds[1] !== "undefined")  cell2.innerHTML =gameDecidedET.odds[1].name +" " + gameDecidedET.odds[1].odds;
}



  // SET GAME DECIDED AFTER PENALTIES
   let gameDecidedAP = data.main.sp.game_decided_after_penalties

   if(typeof gameDecidedAP !== "undefined"){
   // CREATE TABLE GAME DECIDED IN EXTRA TIME
   table=  document.createElement("table");
         table.setAttribute("id", "gameDecidedAP");
        document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("gameDecidedAP")

   // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = gameDecidedAP.name;

   // CREATE ODD ROW                         // INSERT DATA
 rowData = getTable.insertRow(1);
 cell1 = rowData.insertCell(0);  if(typeof gameDecidedAP.odds[0] !== "undefined")  cell1.innerHTML =gameDecidedAP.odds[0].name +" " + gameDecidedAP.odds[0].odds;
 cell2 = rowData.insertCell(1);  if(typeof gameDecidedAP.odds[1] !== "undefined")  cell2.innerHTML =gameDecidedAP.odds[1].name +" " + gameDecidedAP.odds[1].odds;
}





//SET DOUBLE CHANCE
let DC = data.main.sp.double_chance

if(typeof DC !== "undefined"){
// CREATE TABLE DC
table=  document.createElement("table");
       table.setAttribute("id", "DC");
        table.setAttribute("class", "table");
      document.getElementById("apst").appendChild(table);

getTable= document.getElementById("DC")

// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan","3");
cell1.innerHTML = DC.name;


// CREATE HEADER ROW               // INSERT DATA
rowData = getTable.insertRow(1);
cell1 = rowData.insertCell(0);   cell1.innerHTML = DC.odds[0].name;
cell2 = rowData.insertCell(1);   cell2.innerHTML = DC.odds[1].name;
cell3 = rowData.insertCell(2);   cell3.innerHTML = DC.odds[2].name;

// CREATE ODD ROW                   // ISNERT DATA
rowData = getTable.insertRow(2);
cell1 = rowData.insertCell(0);     cell1.innerHTML = DC.odds[0].odds;
cell2 = rowData.insertCell(1);     cell2.innerHTML = DC.odds[1].odds;
cell3 = rowData.insertCell(2);     cell3.innerHTML = DC.odds[2].odds;
}

// SET CORRECT SCORE
let CS = data.main.sp.correct_score
if(typeof CS !== "undefined"){
// CREATE TABLE CS
 table=  document.createElement("table");
         table.setAttribute("id", "CS");
         table.setAttribute("class", "table");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("CS")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = CS.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME WIN";
   cell2 = rowData.insertCell(1);   cell2.innerHTML = "DRAW";
   cell3 = rowData.insertCell(2);   cell3.innerHTML = "AWAY WIN";

   // PUT CELL VALUES IN CORESPONDING ARRAY
   let array1=[]; let array2=[]; let array3=[];
   for(let i=0;i<CS.odds.length;i++){

     if(CS.odds[i].header== "1"){
       array1.push(CS.odds[i])
     }
     else if(CS.odds[i].header=="X"){
       array2.push(CS.odds[i])

     }
     else if(CS.odds[i].header=="2"){
       array3.push(CS.odds[i])
     }
   }
   // DETERMINE HOW MANY ROWS TO ENTER
     counter =Math.max(array1.length,array2.length,array3.length)

   // CREATE ROWS AND INSERT DATA
   for (let i=2;i<=counter+1;i++){
      // CREATE ROW
      rowData = getTable.insertRow(i);
      // CREATE CELL FOR ROW            // INSERT DATA IF THERE IS ANY FOR THAT CELL. OTHERWISE CELL WILL BE EMPTY
      cell1 = rowData.insertCell(0); if(typeof array1[i-2] !== "undefined")  cell1.innerHTML = array1[i-2].name +"  " +array1[i-2].odds;
      cell2 = rowData.insertCell(1); if(typeof array2[i-2] !== "undefined")  cell2.innerHTML = array2[i-2].name +"  " +array2[i-2].odds;
      cell3 = rowData.insertCell(2); if(typeof array3[i-2] !== "undefined")  cell3.innerHTML = array3[i-2].name   +"  " +array3[i-2].odds;
        }


 // SET HALF TIME/ FULL TIME
    let htFT=data.main.sp.half_time_full_time

  // CREATE TABLE htFT
     table=  document.createElement("table");
             table.setAttribute("id", "htFT");
               table.setAttribute("class", "tabel");
            document.getElementById("apst").appendChild(table);

     getTable= document.getElementById("htFT")

     // CREATE TITLE ROW
      rowHead = getTable.insertRow(0);
      rowHead.setAttribute("class", "title")
      cell1 = rowHead.insertCell(0);
      cell1.setAttribute("colspan","3");
      cell1.innerHTML = htFT.name;

      // CREATE ODD ROW                   // ISNERT DATA
      for(let i=0;i<3;i++){
      rowData = getTable.insertRow(i+1);
      cell1 = rowData.insertCell(0);      cell1.innerHTML =htFT.odds[i].name + " " +  htFT.odds[i].odds;
      cell2 = rowData.insertCell(1);     cell2.innerHTML =htFT.odds[i+1].name + " " + htFT.odds[i+1].odds;
      cell3 = rowData.insertCell(2);     cell3.innerHTML =htFT.odds[i+2].name + " " + htFT.odds[i+2].odds;
    }
}


//  SET GOALS OVER/UNDER
    let goalsOU=data.main.sp.goals_over_under
    if(typeof goalsOU !== "undefined"){
    // CREATE TABLE htFT
       table=  document.createElement("table");
          table.setAttribute("class", "table")
               table.setAttribute("id", "goalsOU");
              document.getElementById("apst").appendChild(table);

       getTable= document.getElementById("goalsOU")

       // CREATE TITLE ROW
        rowHead = getTable.insertRow(0);
        rowHead.setAttribute("class", "title")
        cell1 = rowHead.insertCell(0);
        cell1.setAttribute("colspan","3");
        cell1.innerHTML = goalsOU.name;

        // CREATE HEADER ROW               // INSERT DATA
         rowData = getTable.insertRow(1);
         cell1 = rowData.insertCell(0);
         cell2 = rowData.insertCell(1);   cell2.innerHTML = goalsOU.odds[0].header;
         cell3 = rowData.insertCell(2);   cell3.innerHTML = goalsOU.odds[1].header;

         // CREATE ODD ROW                   // ISNERT DATA
         rowData = getTable.insertRow(2);
         cell1 = rowData.insertCell(0);     cell1.innerHTML = goalsOU.odds[0].name;
         cell2 = rowData.insertCell(1);     cell2.innerHTML = goalsOU.odds[0].odds;
         cell3 = rowData.insertCell(2);     cell3.innerHTML = goalsOU.odds[1].odds;
}


//  SET BOTH TEAMS TO SCORE
let bothTeamsTS=data.main.sp.both_teams_to_score
 if(typeof bothTeamsTS !== "undefined"){
    // CREATE TABLE bothTeamsTS
    table=  document.createElement("table");
            table.setAttribute("id", "bothTeamsTS");
               table.setAttribute("class", "tabel");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTS")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTS.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTS.odds[0].name + " " +  bothTeamsTS.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTS.odds[1].name + " " +  bothTeamsTS.odds[1].odds;
}


     //  SET GOALSCORERS
     let goalScorers=data.main.sp.goalscorers

     if(typeof goalScorers !== "undefined"){
     // CREATE TABLE goalscorers
     table=  document.createElement("table");
             table.setAttribute("id", "goalScorers");
                table.setAttribute("class", "tabel");
            document.getElementById("apst").appendChild(table);

     getTable= document.getElementById("goalScorers")

     // CREATE TITLE ROW
      rowHead = getTable.insertRow(0);
      rowHead.setAttribute("class", "title")
      cell1 = rowHead.insertCell(0);
      cell1.setAttribute("colspan","4");
      cell1.innerHTML = goalScorers.name;

      // CREATE HEADER ROW               // INSERT DATA
       rowData = getTable.insertRow(1);
       cell1 = rowData.insertCell(0);
       cell2 = rowData.insertCell(1);   cell2.innerHTML = goalScorers.odds[0].header;
       cell3 = rowData.insertCell(2);   cell3.innerHTML = goalScorers.odds[1].header;
       cell3 = rowData.insertCell(3);   cell3.innerHTML = goalScorers.odds[2].header;

      // CREATE ODD ROW                   // INSERT DATA
      counter =2
      for(let i=0;i<goalScorers.odds.length;i+=3){
      rowData = getTable.insertRow(counter);
      counter ++;
      cell1 = rowData.insertCell(0);  if(typeof goalScorers.odds[i] !== "undefined")    cell1.innerHTML =goalScorers.odds[i].name;
      cell2 = rowData.insertCell(1);  if(typeof goalScorers.odds[i] !== "undefined")  cell2.innerHTML =goalScorers.odds[i].odds;
      cell3 = rowData.insertCell(2);  if(typeof goalScorers.odds[i+1] !== "undefined")  cell3.innerHTML =goalScorers.odds[i+1].odds;
      cell3 = rowData.insertCell(3);  if(typeof goalScorers.odds[i+2] !== "undefined")  cell3.innerHTML =goalScorers.odds[i+2].odds;
      }
}



// SET MULTISCORERS
 let multiScorers=data.main.sp.multi_scorers

 if(typeof multiScorers !== "undefined"){
   // CREATE TABLE multiscorers
   table=  document.createElement("table");
           table.setAttribute("id", "multiScorers");
              table.setAttribute("class", "tabel");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("multiScorers")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","3");
    cell1.innerHTML = multiScorers.name;

    // CREATE HEADER ROW               // INSERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);
     cell2 = rowData.insertCell(1);   cell2.innerHTML = multiScorers.odds[0].header;
     cell3 = rowData.insertCell(2);   cell3.innerHTML = multiScorers.odds[1].header;

     // CREATE ODD ROW                   // INSERT DATA
     counter =2
     for(let i=0;i<multiScorers.odds.length;i+=2){
     rowData = getTable.insertRow(counter);
     counter ++;
     cell1 = rowData.insertCell(0);  if(typeof multiScorers.odds[i] !== "undefined")    cell1.innerHTML =multiScorers.odds[i].name;
     cell2 = rowData.insertCell(1);  if(typeof multiScorers.odds[i] !== "undefined")  cell2.innerHTML =multiScorers.odds[i].odds;
     cell3 = rowData.insertCell(2);  if(typeof multiScorers.odds[i+1] !== "undefined")  cell3.innerHTML =multiScorers.odds[i+1].odds;
     }
}





////






// SET ASIAN HANDICAP
//     let asianHandicap=data.main.sp.asian_handicap

//     if(typeof asianHandicap !== "undefined"){
//       // CREATE TABLE multiscorers
//       table=  document.createElement("table");
//       	table.setAttribute("class", "table");
//               table.setAttribute("id", "asianHandicap");

//              document.getElementById("apst").appendChild(table);

//       getTable= document.getElementById("asianHandicap")

//       // CREATE TITLE ROW
//        rowHead = getTable.insertRow(0);
//        rowHead.setAttribute("class", "title")
//        cell1 = rowHead.insertCell(0);
//        cell1.setAttribute("colspan","2");
//        cell1.innerHTML = asianHandicap.name;

//        // CREATE HEADER ROW               // INSERT DATA
//         rowData = getTable.insertRow(1);
//         cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME"
//         cell2 = rowData.insertCell(1);   cell2.innerHTML = "AWAY";

//         // CREATE ODD ROW                   // ISNERT DATA
//         rowData = getTable.insertRow(2);
//         cell1 = rowData.insertCell(0);     cell1.innerHTML =asianHandicap.odds[0].handicap + " " + asianHandicap.odds[0].odds ;
//         cell2 = rowData.insertCell(1);     cell2.innerHTML =asianHandicap.odds[1].handicap + " " + asianHandicap.odds[1].odds;
// }

 // SET GOAL LINE
//     let goalLine=data.main.sp.goal_line

//     if(typeof goalLine !== "undefined"){
//       // CREATE TABLE multiscorers
//       table=  document.createElement("table");
//       	table.setAttribute("class", "table");
//               table.setAttribute("id", "goalLine");
//              document.getElementById("apst").appendChild(table);

//       getTable= document.getElementById("goalLine")

//       // CREATE TITLE ROW
//        rowHead = getTable.insertRow(0);
//        rowHead.setAttribute("class", "title")
//        cell1 = rowHead.insertCell(0);
//        cell1.setAttribute("colspan","3");
//        cell1.innerHTML = goalLine.name;

//        // CREATE HEADER ROW               // INSERT DATA
//         rowData = getTable.insertRow(1);
//         cell1 = rowData.insertCell(0);
//         cell2 = rowData.insertCell(1);   cell2.innerHTML = goalLine.odds[0].header;
//         cell3 = rowData.insertCell(2);   cell3.innerHTML = goalLine.odds[1].header;

//        // CREATE ODD ROW                   // ISNERT DATA
//        rowData = getTable.insertRow(2);
//        cell1 = rowData.insertCell(0);     cell1.innerHTML =goalLine.odds[0].name;
//        cell2 = rowData.insertCell(1);     cell2.innerHTML =goalLine.odds[0].odds;
//        cell3 = rowData.insertCell(2);     cell3.innerHTML =goalLine.odds[1].odds;

// }



 // SET ALTERNATIVE ASIAN HANDICAP

// let alternativeAH=data.main.sp.alternative_asian_handicap

// if(typeof alternativeAH !== "undefined"){
//   // CREATE TABLE multiscorers
//   table=  document.createElement("table");
//           table.setAttribute("id", "alternativeAH");
//              table.setAttribute("class", "tabel");
//          document.getElementById("apst").appendChild(table);

//   getTable= document.getElementById("alternativeAH")

//   // CREATE TITLE ROW
//    rowHead = getTable.insertRow(0);
//    rowHead.setAttribute("class", "title")
//    cell1 = rowHead.insertCell(0);
//    cell1.setAttribute("colspan","2");
//    cell1.innerHTML = alternativeAH.name;

//    // CREATE HEADER ROW               // INSERT DATA
//     rowData = getTable.insertRow(1);
//     cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME";
//     cell2 = rowData.insertCell(1);   cell2.innerHTML = "AWAY";

//    // SET ODD ARRAYS
//     let array=[]; let array2=[]
//         for(let i=0;i<alternativeAH.odds.length;i++){
//           if(alternativeAH.odds[i].header==1) array.push(alternativeAH.odds[i])
//           else if(alternativeAH.odds[i].header==2) array2.push(alternativeAH.odds[i])
//         }

//         // CREATE ODD ROW                   // ISNERT DATA
//         counter =2
//         for(let i=0; i<alternativeAH.odds.length/2;i++){
//         rowData = getTable.insertRow(counter);
//         counter++;
//         cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap + " " + array[i].odds;
//         cell2 = rowData.insertCell(1);     cell2.innerHTML =array2[i].handicap + " " + array2[i].odds;

//       }
// }



// SET ALTERNATIVE GOAL LINE
//     let alternativeGL = data.main.sp.alternative_goal_line

//     if(typeof alternativeGL !== "undefined"){
//       // CREATE TABLE alternative GL
//       table=  document.createElement("table");
//               table.setAttribute("id", "alternativeGL");
//                  table.setAttribute("class", "tabel");
//              document.getElementById("apst").appendChild(table);

//       getTable= document.getElementById("alternativeGL")

//       // CREATE TITLE ROW
//        rowHead = getTable.insertRow(0);
//        rowHead.setAttribute("class", "title")
//        cell1 = rowHead.insertCell(0);
//        cell1.setAttribute("colspan","3");
//        cell1.innerHTML = alternativeGL.name;

//        // SET ODD ARRAYS
//         let array=[]; let array2=[]
//             for(let i=0;i<alternativeGL.odds.length;i++){
//               if(alternativeGL.odds[i].header=="Over") array.push(alternativeGL.odds[i])
//               else if(alternativeGL.odds[i].header=="Under") array2.push(alternativeGL.odds[i])
//             }

//        // CREATE HEADER ROW               // INSERT DATA
//         rowData = getTable.insertRow(1);
//         cell1 = rowData.insertCell(0);
//         cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
//         cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

//         // CREATE ODD ROW                   // ISNERT DATA
//         counter =2
//         for(let i=0; i<alternativeGL.odds.length/2;i++){
//         rowData = getTable.insertRow(counter);
//         counter++;
//         cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap;
//         cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
//         cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;

//         }
// }




// SET DRAW NO BET
  let drawNoBet = data.main.sp.draw_no_bet

  if(typeof drawNoBet !== "undefined"){
    // CREATE TABLE draw no bet
    table=  document.createElement("table");
            table.setAttribute("id", "drawNoBet");
               table.setAttribute("class", "tabel");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("drawNoBet")

    // CREATE TITLE ROW
     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = drawNoBet.name;


     // CREATE ODD ROW           // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =drawNoBet.odds[0].name +" " + drawNoBet.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =drawNoBet.odds[1].name +" " + drawNoBet.odds[1].odds;
}




// SET result_both_teams_to_score
  let resultBTTS = data.main.sp.result_both_teams_to_score

  if(typeof resultBTTS !== "undefined"){
    // CREATE TABLE resultBTTS
    table=  document.createElement("table");
            table.setAttribute("id", "resultBTTS");
               table.setAttribute("class", "tabel");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("resultBTTS")

    // CREATE TITLE ROW
     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","3");
     cell1.innerHTML = resultBTTS.name;

     // SET ODD ARRAYS
      let array=[]; let array2=[]
          for(let i=0;i<resultBTTS.odds.length;i++){
            if(resultBTTS.odds[i].header=="Yes") array.push(resultBTTS.odds[i])
            else if(resultBTTS.odds[i].header=="No") array2.push(resultBTTS.odds[i])
          }

     // CREATE HEADER ROW               // INSERT DATA
      rowData = getTable.insertRow(1);
      cell1 = rowData.insertCell(0);
      cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
      cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

      // CREATE ODD ROW                   // INSERT DATA
      counter =2
      for(let i=0; i<resultBTTS.odds.length/2;i++){
      rowData = getTable.insertRow(counter);
      counter++;
      cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].name;
      cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
      cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
      }
}



  // SET HANDICAP RESULT
      let handicapResult = data.main.sp.handicap_result

      if(typeof handicapResult !== "undefined"){
        // CREATE TABLE resultBTTS
        table=  document.createElement("table");
        table.setAttribute("class", "table");
                table.setAttribute("id", "handicapResult");
               document.getElementById("apst").appendChild(table);

        getTable= document.getElementById("handicapResult")

        // CREATE TITLE ROW
         rowHead = getTable.insertRow(0);
         rowHead.setAttribute("class", "title")
         cell1 = rowHead.insertCell(0);
         cell1.setAttribute("colspan","3");
         cell1.innerHTML = handicapResult.name;

         // CREATE HEADER ROW               // INSERT DATA
          rowData = getTable.insertRow(1);
          cell1 = rowData.insertCell(0);   cell1.innerHTML = handicapResult.odds[0].name;
          cell2 = rowData.insertCell(1);   cell2.innerHTML = handicapResult.odds[1].name;
          cell3 = rowData.insertCell(2);   cell3.innerHTML = handicapResult.odds[2].name;

          // CREATE ODD ROW           // ISNERT DATA
          rowData = getTable.insertRow(2);
          cell1 = rowData.insertCell(0);     cell1.innerHTML =handicapResult.odds[0].odds;
          cell2 = rowData.insertCell(1);     cell2.innerHTML =handicapResult.odds[1].odds;
          cell2 = rowData.insertCell(2);     cell2.innerHTML =handicapResult.odds[2].odds;
}



// SET ALTERNATIVE HANDICAP RESULT
let alternativeHR = data.main.sp.alternative_handicap_result

if(typeof alternativeHR !== "undefined"){
  // CREATE TABLE resultBTTS
  table=  document.createElement("table");
  table.setAttribute("class", "table");
          table.setAttribute("id", "alternativeHR");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("alternativeHR")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = alternativeHR.name;

   // SET ODD ARRAYS
    let array=[]; let array2=[]; let array3=[];
        for(let i=0;i<alternativeHR.odds.length;i++){
          if(alternativeHR.odds[i].header=="1") array.push(alternativeHR.odds[i])
          else if(alternativeHR.odds[i].header=="Tie") array2.push(alternativeHR.odds[i])
          else if(alternativeHR.odds[i].header=="2") array3.push(alternativeHR.odds[i])
        }

        // CREATE HEADER ROW               // INSERT DATA
         rowData = getTable.insertRow(1);
         cell1 = rowData.insertCell(0);   cell1.innerHTML = array[0].header
         cell2 = rowData.insertCell(1);   cell2.innerHTML = array2[0].header;
         cell3 = rowData.insertCell(2);   cell3.innerHTML = array3[0].header;

         // CREATE ODD ROW                   // INSERT DATA
         counter =2
         for(let i=0; i<alternativeHR.odds.length/3;i++){
         rowData = getTable.insertRow(counter);
         counter++;
         cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap +" "+ array[i].odds;
         cell2 = rowData.insertCell(1);     cell2.innerHTML =array2[i].handicap +" "+ array2[i].odds;
         cell3 = rowData.insertCell(2);     cell3.innerHTML =array3[i].handicap +" "+ array3[i].odds;
         }
}



    // SET WINNING MARGIN
      let winningMargin = data.main.sp.winningMargin

      if(typeof winningMargin !== "undefined"){
        // CREATE TABLE resultBTTS
        table=  document.createElement("table");
        table.setAttribute("class", "table");
                table.setAttribute("id", "winningMargin");
               document.getElementById("apst").appendChild(table);

        getTable= document.getElementById("winningMargin")

        // CREATE TITLE ROW
         rowHead = getTable.insertRow(0);
         rowHead.setAttribute("class", "title")
         cell1 = rowHead.insertCell(0);
         cell1.setAttribute("colspan","3");
         cell1.innerHTML = winningMargin.name;

         // CREATE HEADER ROW               // INSERT DATA
          rowData = getTable.insertRow(1);
          cell1 = rowData.insertCell(0);
          cell2 = rowData.insertCell(1);   cell2.innerHTML = "HOME";
          cell3 = rowData.insertCell(2);   cell3.innerHTML = "AWAY";
         }
   }





var lp = 0;
for (const [key, value] of Object.entries(data.main.sp)) {
  lp++;
  console.log(key);

console.log(value);

if(key != 'correct_score' && key != 'half_time_full_time' && key != 'half_time_full_time_correct_score' && key != 'double_chance' && key != 'full_time_result' && key != 'goals_over_under' && key != 'asian_handicap'){
var  sss  = value;
  if(typeof sss !== "undefined"){
// CREATE TABLE PSA
table=  document.createElement("table");
  table.setAttribute("class", "table");
      table.setAttribute("id", key);
    document.getElementById("apst").appendChild(table);

getTable= document.getElementById(key)
var kpss = sss.odds.length;
// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan",kpss);
cell1.innerHTML = sss.name;
console.log("this is one")
console.log(sss.odds[0].header );
// CREATE HEADER ROW               // INSERT DATA
rowData = getTable.insertRow(1);

// for (var i = 0; i < sss.odds.length; i++) {

  if(typeof sss.odds[0].header !== "undefined"){

   var ccps = sss.odds.length;
   var cpkps = parseInt(ccps) / 2;
   

var ssss = rowData.insertCell(sss.odds[0]);   ssss.innerHTML =  sss.odds[0].header;

ssss.setAttribute("colspan",cpkps);


var pppp = rowData.insertCell(sss.odds[1]);   pppp.innerHTML =  sss.odds[1].header;

pppp.setAttribute("colspan",cpkps);
 }


rowData = getTable.insertRow(2);
for (var i = 0; i < sss.odds.length; i++) {


  
var celc1 = rowData.insertCell(sss.odds[i]);   celc1.innerHTML = sss.odds[i].name;
}



// CREATE ODD ROW                   // ISNERT DATA
rowData = getTable.insertRow(3);

for (var i = 0; i < sss.odds.length; i++) {
  
var celt2 = rowData.insertCell(sss.odds[i]);   celt2.innerHTML = sss.odds[i].odds;
}






}


}

}



}

   // THIS FUNCTION WILL GET ALL ASIAN LINES BEST
   const asianLinesOdds= function(){
       if(typeof data.asian_lines !== "undefined"){
     // SET ASIAN HANDICAP
         let asianHandicap=data.asian_lines.sp.asian_handicap




///
  if(typeof data.asian_lines.sp !== "undefined"){
var lp = 0;
for (const [key, value] of Object.entries(data.asian_lines.sp)) {
  lp++;


var tps = value;
  if(typeof tps !== "undefined"){
// CREATE TABLE PSA
table=  document.createElement("table");
  table.setAttribute("class", "table");
      table.setAttribute("id",key);
    document.getElementById("apst").appendChild(table);

getTable= document.getElementById(key)

// CREATE TITLE ROW
rowHead = getTable.insertRow(0);
rowHead.setAttribute("class", "title")
cell1 = rowHead.insertCell(0);
cell1.setAttribute("colspan","3");
cell1.innerHTML = value.name;






rowData = getTable.insertRow(1);



// for (var i = 0; i < sss.odds.length; i++) {

  if(typeof tps.odds[0].header !== "undefined"){


  
  
var gggg = rowData.insertCell(tps.odds[0]);   gggg.innerHTML =  tps.odds[0].header ;
var bbbb = rowData.insertCell(tps.odds[1]);   bbbb.innerHTML =   tps.odds[1].header ;
}



rowData = getTable.insertRow(2);

if(typeof tps.odds[0].name !== "undefined"){

for (var i = 0; i < tps.odds.length; i++) {


  
var celc1 = rowData.insertCell(tps.odds[i]);   celc1.innerHTML = tps.odds[i].name ;
}

}

// CREATE ODD ROW                   // ISNERT DATA
rowData = getTable.insertRow(3);

for (var i = 0; i < tps.odds.length; i++) {
  
var celt2 = rowData.insertCell(tps.odds[i]);   celt2.innerHTML = tps.odds[i].odds;
}


// CREATE HEADER ROW               // INSERT DATA
// rowData = getTable.insertRow(1);
// cell1 = rowData.insertCell(0);   cell1.innerHTML = value.odds[0].name;
// cell2 = rowData.insertCell(1);   cell2.innerHTML = value.odds[1].name;
// cell3 = rowData.insertCell(2);   cell3.innerHTML = value.odds[2].name;

// // CREATE ODD ROW                   // ISNERT DATA
// rowData = getTable.insertRow(2);
// cell1 = rowData.insertCell(0);     cell1.innerHTML = value.odds[0].odds;
// cell2 = rowData.insertCell(1);     cell2.innerHTML = value.odds[1].odds;
// cell3 = rowData.insertCell(2);     cell3.innerHTML = value.odds[2].odds;
}





}
}




         

     //     if(typeof asianHandicap !== "undefined"){
     //       // CREATE TABLE multiscorers
     //       table=  document.createElement("table");
     //       table.setAttribute("class", "table");
     //               table.setAttribute("id", "asianHandicap");
     //              document.getElementById("apst").appendChild(table);

     //       getTable= document.getElementById("asianHandicap")

     //       // CREATE TITLE ROW
     //        rowHead = getTable.insertRow(0);
     //        rowHead.setAttribute("class", "title")
     //        cell1 = rowHead.insertCell(0);
     //        cell1.setAttribute("colspan","2");
     //        cell1.innerHTML = asianHandicap.name;

     //        // CREATE HEADER ROW               // INSERT DATA
     //         rowData = getTable.insertRow(1);
     //         cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME"
     //         cell2 = rowData.insertCell(1);   cell2.innerHTML = "AWAY";

     //         // CREATE ODD ROW                   // ISNERT DATA
     //         rowData = getTable.insertRow(2);
     //         cell1 = rowData.insertCell(0);     cell1.innerHTML =asianHandicap.odds[0].handicap + " " + asianHandicap.odds[0].odds ;
     //         cell2 = rowData.insertCell(1);     cell2.innerHTML =asianHandicap.odds[1].handicap + " " + asianHandicap.odds[1].odds;
     // }


    
}
}



// FUNCTION THAT GET MINUTES BETS
    const minutesOdds = function(){
        if(typeof data.minutes !== "undefined"){
       // SET  FIRST SET PIECE
      let firstSetPiece = data.minutes.sp["first_set_piece_(00:00_04:59)"]

      if(typeof firstSetPiece !== "undefined"){
       // CREATE TABLE
       table=  document.createElement("table");
       table.setAttribute("class", "table");
               table.setAttribute("id", "firstSetPiece");
              document.getElementById("apst").appendChild(table);

       getTable= document.getElementById("firstSetPiece")

       // CREATE TITLE ROW
        rowHead = getTable.insertRow(0);
        rowHead.setAttribute("class", "title")
        cell1 = rowHead.insertCell(0);
        cell1.setAttribute("colspan","3");
        cell1.innerHTML = firstSetPiece.name;

        // INSERT DATA
        let counter =1
        for(let i=0;i<firstSetPiece.odds.length;i+=3){
        rowData = getTable.insertRow(counter);
        counter ++;
        cell1 = rowData.insertCell(0);     cell1.innerHTML =firstSetPiece.odds[i].name + " "+ firstSetPiece.odds[i].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =firstSetPiece.odds[i+1].name + " "+ firstSetPiece.odds[i+1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =firstSetPiece.odds[i+2].name + " "+ firstSetPiece.odds[i+2].odds;
      }
}





    // SET 10 MINUTE RESULT
   let tenMinResult = data.minutes.sp["10_minute_result"]

   if(typeof tenMinResult !== "undefined"){
    // CREATE TABLE
    table=  document.createElement("table");
    table.setAttribute("class", "table");
            table.setAttribute("id", "tenMinResult");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("tenMinResult")

    // CREATE TITLE ROW
     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","3");
     cell1.innerHTML = tenMinResult.name;

     // CREATE HEADER ROW               // INSERT DATA
      rowData = getTable.insertRow(1);
      cell1 = rowData.insertCell(0);   cell1.innerHTML = tenMinResult.odds[0].name;
      cell2 = rowData.insertCell(1);   cell2.innerHTML = tenMinResult.odds[1].name;
      cell3 = rowData.insertCell(2);   cell3.innerHTML = tenMinResult.odds[2].name;

      // INSERT DATA
      rowData = getTable.insertRow(2);
      cell1 = rowData.insertCell(0);     cell1.innerHTML = tenMinResult.odds[0].odds;
      cell2 = rowData.insertCell(1);     cell2.innerHTML = tenMinResult.odds[1].odds;
      cell3 = rowData.insertCell(2);     cell3.innerHTML = tenMinResult.odds[2].odds;
}




// SET FIRST 10 MINUTES
let firstTenMins = data.minutes.sp["first_10_minutes_(00:00_09:59)"]

if(typeof firstTenMins !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "firstTenMins");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("firstTenMins")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = firstTenMins.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<firstTenMins.odds.length;i++){
         if(firstTenMins.odds[i].header=="Over") array.push(firstTenMins.odds[i])
         else if(firstTenMins.odds[i].header=="Under") array2.push(firstTenMins.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


       // CREATE ODD ROW                   // ISNERT DATA
       counter =2
       for(let i=0; i<firstTenMins.odds.length/2;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
       }

}



// SET FIRST MINUTE

let firstMinute = data.minutes.sp["first_minute_(00:00_00:59)"]

if(typeof firstMinute !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "firstMinute");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("firstMinute")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = firstMinute.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<firstMinute.odds.length;i++){
         if(firstMinute.odds[i].header=="Yes") array.push(firstMinute.odds[i])
         else if(firstMinute.odds[i].header=="No") array2.push(firstMinute.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

        // CREATE ODD ROW                   // ISNERT DATA
        counter =2
        for(let i=0; i<firstMinute.odds.length/2;i++){
        rowData = getTable.insertRow(counter);
        counter++;
        cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].name;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
        }
}

}
}




// THIS FUNCTION CALLS CARDS BETS
  const cardsOdds = function(){

if(typeof data.cards !== "undefined"){
// set Number of cards in match

let numberOfCards = data.cards.sp.number_of_cards_in_match

if(typeof numberOfCards !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "numberOfCards");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("numberOfCards")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = numberOfCards.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = numberOfCards.odds[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = numberOfCards.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = numberOfCards.odds[0].handicap;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = numberOfCards.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = numberOfCards.odds[1].odds;
}



// set player to be booked
let playerTBBooked = data.cards.sp.player_to_be_booked

if(typeof playerTBBooked !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "playerTBBooked");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("playerTBBooked")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = playerTBBooked.name;

  // CREATE ODD ROW                   // ISNERT DATA
  counter =1
  for(let i=1; i<=playerTBBooked.odds.length;i+=2){
  rowData = getTable.insertRow(counter);
  counter++;
  cell1 = rowData.insertCell(0);    if(typeof playerTBBooked.odds[i-1] !== "undefined") cell1.innerHTML =playerTBBooked.odds[i-1].name + " "+ playerTBBooked.odds[i-1].odds;
  cell2 = rowData.insertCell(1);    if(typeof playerTBBooked.odds[i] !== "undefined") cell2.innerHTML =playerTBBooked.odds[i].name + " "+ playerTBBooked.odds[i].odds;
  }
}




// SET card Handicap
let cardHandicap = data.cards.sp.card_handicap

if(typeof cardHandicap !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cardHandicap");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cardHandicap")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = cardHandicap.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);   cell1.innerHTML = cardHandicap.odds[0].name;
   cell2 = rowData.insertCell(1);   cell2.innerHTML = cardHandicap.odds[1].name;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = cardHandicap.odds[2].name;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = cardHandicap.odds[0].handicap +" "+ cardHandicap.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = cardHandicap.odds[1].handicap +" "+ cardHandicap.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = cardHandicap.odds[2].handicap +" "+ cardHandicap.odds[2].odds;
}



// SET ALTERNATIVE CARD HANDICAP
let alternativeCardH = data.cards.sp.alternative_card_handicap
if(typeof alternativeCardH !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "alternativeCardH");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("alternativeCardH")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = alternativeCardH.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]; let array3=[]
       for(let i=0;i<alternativeCardH.odds.length;i++){
         if(alternativeCardH.odds[i].header=="1") array.push(alternativeCardH.odds[i])
         else if(alternativeCardH.odds[i].header=="Tie") array2.push(alternativeCardH.odds[i])
         else if(alternativeCardH.odds[i].header=="2") array3.push(alternativeCardH.odds[i])
       }

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);   cell1.innerHTML = array[0].header;
   cell2 = rowData.insertCell(1);   cell2.innerHTML = array2[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = array3[0].header;

   // CREATE ODD ROW                   // ISNERT DATA
    counter=2
   for(let i=0; i<array.length;i++){
   rowData = getTable.insertRow(counter);
   counter++
   cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap + " "+ array[i].odds ;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =array2[i].handicap + " "+ array2[i].odds ;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =array3[i].handicap + " "+ array3[i].odds ;
   }

}



// SET ASIAN TOTAL CARDS
let asianTotalCards = data.cards.sp.asian_total_cards


  if(typeof asianTotalCards !== "undefined"){
   // CREATE TABLE
   table=  document.createElement("table");
   table.setAttribute("class", "table");
           table.setAttribute("id", "asianTotalCards");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("asianTotalCards")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","3");
    cell1.innerHTML = asianTotalCards.name;

    // CREATE HEADER ROW               // INSERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);
     cell2 = rowData.insertCell(1);   cell2.innerHTML = asianTotalCards.odds[0].header;
     cell3 = rowData.insertCell(2);   cell3.innerHTML = asianTotalCards.odds[1].header;

     // INSERT DATA
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =asianTotalCards.odds[0].handicap;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =asianTotalCards.odds[0].odds;
     cell3 = rowData.insertCell(2);     cell3.innerHTML =asianTotalCards.odds[1].odds;
}



// SET ASIAN HANDICAP CARDS

let asianHandicapCards = data.cards.sp.asian_handicap_cards

if(typeof asianHandicapCards !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "asianHandicapCards");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("asianHandicapCards")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = asianHandicapCards.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1);   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =asianHandicapCards.odds[0].handicap + " "+ asianHandicapCards.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =asianHandicapCards.odds[1].handicap + " "+ asianHandicapCards.odds[1].odds;
 }



// SET FIRST CARD RECEiVED
let firstCardReceived = data.cards.sp.first_card_received

if(typeof firstCardReceived !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "firstCardReceived");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("firstCardReceived")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = firstCardReceived.name;

  // INSERT DATA
  rowData = getTable.insertRow(1);
  cell1 = rowData.insertCell(0);     cell1.innerHTML =firstCardReceived.odds[0].name + " "+ firstCardReceived.odds[0].odds;
  cell2 = rowData.insertCell(1);     cell2.innerHTML =firstCardReceived.odds[1].name + " "+ firstCardReceived.odds[1].odds;
  cell3 = rowData.insertCell(2);     cell3.innerHTML =firstCardReceived.odds[2].name + " "+ firstCardReceived.odds[2].odds;
}



// SET TIME OF FIRST CARD
let timeOfFirstCard = data.cards.sp.time_of_first_card

if(typeof timeOfFirstCard !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "timeOfFirstCard");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("timeOfFirstCard")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = timeOfFirstCard.name;

  // INSERT DATA
  rowData = getTable.insertRow(1);
  cell1 = rowData.insertCell(0);     cell1.innerHTML =timeOfFirstCard.odds[0].name + " "+ timeOfFirstCard.odds[0].odds;
  cell2 = rowData.insertCell(1);     cell2.innerHTML =timeOfFirstCard.odds[1].name + " "+ timeOfFirstCard.odds[1].odds;
}



// SET TEAM CARDS
let teamCards = data.cards.sp.team_cards

if(typeof teamCards !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "teamCards");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamCards")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = teamCards.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =teamCards.odds[0].name + " "+ teamCards.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =teamCards.odds[1].name + " "+ teamCards.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =teamCards.odds[2].name + " "+ teamCards.odds[2].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML =teamCards.odds[3].name + " "+ teamCards.odds[3].odds;
}




// SET CARD FIRST TEN MINUTES
let cardsFirstTenMins = data.cards.sp["first_10_minutes_(00:00_09:59)"]

if(typeof cardsFirstTenMins !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cardsFirstTenMins");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cardsFirstTenMins")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = cardsFirstTenMins.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = cardsFirstTenMins.odds[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = cardsFirstTenMins.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = cardsFirstTenMins.odds[0].team;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = cardsFirstTenMins.odds[0].handicap+" "+ cardsFirstTenMins.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = cardsFirstTenMins.odds[1].handicap+" "+ cardsFirstTenMins.odds[1].odds;
}


// SET CARD FIRST MINUTE
let cardFirstMinute = data.cards.sp["first_minute_(00:00_00:59)"]

if(typeof cardFirstMinute !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cardFirstMinute");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cardFirstMinute")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = cardFirstMinute.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = cardFirstMinute.odds[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = cardFirstMinute.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = cardFirstMinute.odds[0].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = cardFirstMinute.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = cardsFirstTenMins.odds[1].odds;
}



// SET RED CARD IN MATCH
let redCardInMatch = data.cards.sp.a_red_card_in_the_match

if(typeof redCardInMatch !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "redCardInMatch");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("redCardInMatch")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = redCardInMatch.name;

  // INSERT DATA
  rowData = getTable.insertRow(1);
  cell1 = rowData.insertCell(0);     cell1.innerHTML =redCardInMatch.odds[0].name + " "+ redCardInMatch.odds[0].odds;
  cell2 = rowData.insertCell(1);     cell2.innerHTML =redCardInMatch.odds[1].name + " "+ redCardInMatch.odds[1].odds;
}



// SET 1st player booked
let firstPlayerBooked = data.cards.sp["1st_player_booked"]

if(typeof firstPlayerBooked !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "firstPlayerBooked");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("firstPlayerBooked")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = firstPlayerBooked.name;

  // CREATE ODD ROW                   // ISNERT DATA
  counter =1
  for(let i=1; i<=firstPlayerBooked.odds.length;i+=3){
  rowData = getTable.insertRow(counter);
  counter++;
  cell1 = rowData.insertCell(0);    if(typeof firstPlayerBooked.odds[i-1] !== "undefined") cell1.innerHTML =firstPlayerBooked.odds[i-1].name + " "+ firstPlayerBooked.odds[i-1].odds;
  cell2 = rowData.insertCell(1);    if(typeof firstPlayerBooked.odds[i] !== "undefined") cell2.innerHTML =firstPlayerBooked.odds[i].name + " "+ firstPlayerBooked.odds[i].odds;
  cell3 = rowData.insertCell(2);    if(typeof firstPlayerBooked.odds[i+1] !== "undefined") cell3.innerHTML =firstPlayerBooked.odds[i+1].name + " "+ firstPlayerBooked.odds[i+1].odds;
  }
}




// SET player to be sent off
let playerToBeSentOff = data.cards.sp["player_to_be_sent_off"]

if(typeof playerToBeSentOff !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "playerToBeSentOff");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("playerToBeSentOff")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = playerToBeSentOff.name;

  // CREATE ODD ROW                   // ISNERT DATA
  counter =1
  for(let i=1; i<=playerToBeSentOff.odds.length;i+=3){
  rowData = getTable.insertRow(counter);
  counter++;
  cell1 = rowData.insertCell(0);    if(typeof playerToBeSentOff.odds[i-1] !== "undefined") cell1.innerHTML =playerToBeSentOff.odds[i-1].name + " "+ playerToBeSentOff.odds[i-1].odds;
  cell2 = rowData.insertCell(1);    if(typeof playerToBeSentOff.odds[i] !== "undefined") cell2.innerHTML =playerToBeSentOff.odds[i].name + " "+ playerToBeSentOff.odds[i].odds;
  cell3 = rowData.insertCell(2);    if(typeof playerToBeSentOff.odds[i+1] !== "undefined") cell3.innerHTML =playerToBeSentOff.odds[i+1].name + " "+ playerToBeSentOff.odds[i+1].odds;
  }
}
}
}




// THIS FUNCTION WILL SET UP ODDS FOR corners
    const cornersOdds= function(){
          if(typeof data.corners !== "undefined"){
      // SET corners
      let corners = data.corners.sp.corners

      if(typeof corners !== "undefined"){
       // CREATE TABLE
       table=  document.createElement("table");
       table.setAttribute("class", "table");
               table.setAttribute("id", "corners");
              document.getElementById("apst").appendChild(table);

       getTable= document.getElementById("corners")

       // CREATE TITLE ROW
        rowHead = getTable.insertRow(0);
        rowHead.setAttribute("class", "title")
        cell1 = rowHead.insertCell(0);
        cell1.setAttribute("colspan","4");
        cell1.innerHTML = corners.name;

        // CREATE HEADER ROW               // INSERT DATA
         rowData = getTable.insertRow(1);
         cell1 = rowData.insertCell(0);
         cell2 = rowData.insertCell(1);   cell2.innerHTML = corners.odds[0].name;
         cell3 = rowData.insertCell(2);   cell3.innerHTML = corners.odds[1].name;
         cell4 = rowData.insertCell(3);   cell4.innerHTML = corners.odds[2].name;

         // INSERT DATA
         rowData = getTable.insertRow(2);
         cell1 = rowData.insertCell(0);     cell1.innerHTML = corners.odds[0].handicap;
         cell2 = rowData.insertCell(1);     cell2.innerHTML = corners.odds[0].odds;
         cell3 = rowData.insertCell(2);     cell3.innerHTML = corners.odds[1].odds;
         cell4 = rowData.insertCell(3);     cell4.innerHTML = corners.odds[2].odds;
}




// SET TOTAL CORNERS

let totalCorners = data.corners.sp.total_corners

if(typeof totalCorners !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "totalCorners");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("totalCorners")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = totalCorners.name;

  // INSERT DATA
    counter = 1
    for(let i=0;i<totalCorners.odds.length;i+=3){
  rowData = getTable.insertRow(counter);
  counter++;
  cell1 = rowData.insertCell(0);   if(typeof totalCorners.odds[i] !== "undefined")  cell1.innerHTML = totalCorners.odds[i].name +" "+ totalCorners.odds[i].odds;
  cell2 = rowData.insertCell(1);   if(typeof totalCorners.odds[i+1] !== "undefined")  cell2.innerHTML = totalCorners.odds[i+1].name +" "+ totalCorners.odds[i+1].odds;
  cell3 = rowData.insertCell(2);   if(typeof totalCorners.odds[i+2] !== "undefined")  cell3.innerHTML = totalCorners.odds[i+2].name +" "+ totalCorners.odds[i+2].odds;
  }
}



// SET ALTERNATIVE CORNERS

let alternativeCorners = data.corners.sp.alternative_corners

if(typeof alternativeCorners !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "alternativeCorners");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("alternativeCorners")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = alternativeCorners.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]; let array3=[];
       for(let i=0;i<alternativeCorners.odds.length;i++){
         if(alternativeCorners.odds[i].header=="Over") array.push(alternativeCorners.odds[i])
         else if(alternativeCorners.odds[i].header=="Exactly") array2.push(alternativeCorners.odds[i])
         else if(alternativeCorners.odds[i].header=="Under") array3.push(alternativeCorners.odds[i])
       }
  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;
   cell4 = rowData.insertCell(3);   cell4.innerHTML = array3[0].header;

   // INSERT DATA

   for(let i=0;i<alternativeCorners.odds.length/3;i++){
   rowData = getTable.insertRow(i+2);
   counter++;
   cell1 = rowData.insertCell(0);     cell1.innerHTML = array[i].handicap;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = array[i].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = array2[i].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML = array3[i].odds;
 }
}




// SET CORNERS 2 WAY
let cornersTwoWay = data.corners.sp["corners_2_way"]

if(typeof cornersTwoWay !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cornersTwoWay");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cornersTwoWay")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = cornersTwoWay.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = cornersTwoWay.odds[0].name;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = cornersTwoWay.odds[1].name;


   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = cornersTwoWay.odds[0].handicap;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = cornersTwoWay.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = cornersTwoWay.odds[1].odds;

}




  // FIRST HALF CORNERS
  let firstHalfCorners = data.corners.sp.first_half_corners

  if(typeof firstHalfCorners !== "undefined"){
   // CREATE TABLE
   table=  document.createElement("table");
   table.setAttribute("class", "table");
           table.setAttribute("id", "firstHalfCorners");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("firstHalfCorners")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","4");
    cell1.innerHTML = firstHalfCorners.name;

    // CREATE HEADER ROW               // INSERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);
     cell2 = rowData.insertCell(1);   cell2.innerHTML = firstHalfCorners.odds[0].name;
     cell3 = rowData.insertCell(2);   cell3.innerHTML = firstHalfCorners.odds[1].name;
     cell4 = rowData.insertCell(3);   cell4.innerHTML = firstHalfCorners.odds[2].name;

     // INSERT DATA
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML = firstHalfCorners.odds[0].handicap;
     cell2 = rowData.insertCell(1);     cell2.innerHTML = firstHalfCorners.odds[0].odds;
     cell3 = rowData.insertCell(2);     cell3.innerHTML = firstHalfCorners.odds[1].odds;
     cell4 = rowData.insertCell(3);     cell4.innerHTML = firstHalfCorners.odds[2].odds;
}




 // CORNER MATCH BET
 let cornersMatchBet = data.corners.sp.corner_match_bet

 if(typeof cornersMatchBet !== "undefined"){
  // CREATE TABLE
  table=  document.createElement("table");
  table.setAttribute("class", "table");
          table.setAttribute("id", "cornersMatchBet");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("cornersMatchBet")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = cornersMatchBet.name;

    // INSERT DATA
    rowData = getTable.insertRow(1);
    cell1 = rowData.insertCell(0);     cell1.innerHTML = cornersMatchBet.odds[0].name + " "+ cornersMatchBet.odds[0].odds;
    cell2 = rowData.insertCell(1);     cell2.innerHTML = cornersMatchBet.odds[1].name + " "+ cornersMatchBet.odds[1].odds;
    cell3 = rowData.insertCell(2);     cell3.innerHTML = cornersMatchBet.odds[2].name + " "+ cornersMatchBet.odds[2].odds;
 }



// SET CORNER HANDICAP
let cornerHandicap = data.corners.sp.corner_handicap

if(typeof cornerHandicap !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cornerHandicap");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cornerHandicap")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = cornerHandicap.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);   cell1.innerHTML = cornerHandicap.odds[0].name;
   cell2 = rowData.insertCell(1);   cell2.innerHTML = cornerHandicap.odds[1].name;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = cornerHandicap.odds[2].name;


   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = cornerHandicap.odds[0].handicap + " "+ cornerHandicap.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = cornerHandicap.odds[1].handicap + " "+ cornerHandicap.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = cornerHandicap.odds[2].handicap + " "+ cornerHandicap.odds[2].odds;
}



// set asian total corners
      let asianTotalCorners = data.corners.sp.asian_total_corners


if(typeof asianTotalCorners !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "asianTotalCorners");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("asianTotalCorners")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = asianTotalCorners.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = asianTotalCorners.odds[0].header;
   cell3=  rowData.insertCell(2);   cell3.innerHTML = asianTotalCorners.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =asianTotalCorners.odds[0].handicap;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =asianTotalCorners.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =asianTotalCorners.odds[1].odds;
}




// SET ASIAN HANDICAP CORNERS
      let asianHandicapCorners = data.corners.sp.asian_handicap_corners

      if(typeof asianHandicapCorners !== "undefined"){
       // CREATE TABLE
       table=  document.createElement("table");
       table.setAttribute("class", "table");
               table.setAttribute("id", "asianHandicapCorners");
              document.getElementById("apst").appendChild(table);

       getTable= document.getElementById("asianHandicapCorners")

       // CREATE TITLE ROW
        rowHead = getTable.insertRow(0);
        rowHead.setAttribute("class", "title")
        cell1 = rowHead.insertCell(0);
        cell1.setAttribute("colspan","2");
        cell1.innerHTML = asianHandicapCorners.name;

        // CREATE HEADER ROW               // INSERT DATA
         rowData = getTable.insertRow(1);
         cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME"
         cell2 = rowData.insertCell(1);   cell2.innerHTML = "AWAY";

         // INSERT DATA
         rowData = getTable.insertRow(2);
         cell1 = rowData.insertCell(0);     cell1.innerHTML =asianHandicapCorners.odds[0].handicap + " "+ asianHandicapCorners.odds[0].odds;
         cell2 = rowData.insertCell(1);     cell2.innerHTML =asianHandicapCorners.odds[1].handicap + " "+ asianHandicapCorners.odds[1].odds;
}



// SET FIRST HALF ASIAN CORNERS
let firstHalfAC = data.corners.sp["1st_half_asian_corners"]

  if(typeof firstHalfAC !== "undefined"){
   // CREATE TABLE
   table=  document.createElement("table");
   table.setAttribute("class", "table");
           table.setAttribute("id", "firstHalfAC");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("firstHalfAC")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","3");
    cell1.innerHTML = firstHalfAC.name;

    // CREATE HEADER ROW               // INSERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);
     cell2 = rowData.insertCell(1);   cell2.innerHTML = firstHalfAC.odds[0].header;
     cell3 = rowData.insertCell(2);   cell3.innerHTML = firstHalfAC.odds[1].header;

     // INSERT DATA
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =firstHalfAC.odds[0].handicap;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =firstHalfAC.odds[0].odds;
     cell3 = rowData.insertCell(2);     cell3.innerHTML =firstHalfAC.odds[1].odds;
}




// SET Time of first corner
let timeOfFirstCorner = data.corners.sp.time_of_first_corner

if(typeof timeOfFirstCorner !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "timeOfFirstCorner");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("timeOfFirstCorner")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = timeOfFirstCorner.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =timeOfFirstCorner.odds[0].name + " "+ timeOfFirstCorner.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =timeOfFirstCorner.odds[1].name + " "+ timeOfFirstCorner.odds[1].odds;
}





// SET TEAM CORNERS
let teamCorners = data.corners.sp.team_corners

if(typeof teamCorners !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "teamCorners");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamCorners")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = teamCorners.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =teamCorners.odds[0].name + " "+ teamCorners.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =teamCorners.odds[1].name + " "+ teamCorners.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =teamCorners.odds[2].name + " "+ teamCorners.odds[2].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML =teamCorners.odds[3].name + " "+ teamCorners.odds[3].odds;
}



// SET CORNERS RACE
let cornersRace = data.corners.sp.corners_race

if(typeof cornersRace !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cornersRace");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cornersRace")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = cornersRace.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]; let array3=[];
       for(let i=0;i<cornersRace.odds.length;i++){
         if(cornersRace.odds[i].header=="1") array.push(cornersRace.odds[i])
         else if(cornersRace.odds[i].header=="2") array2.push(cornersRace.odds[i])
         else if(cornersRace.odds[i].header=="Neither") array3.push(cornersRace.odds[i])
       }
  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;
   cell4 = rowData.insertCell(3);   cell4.innerHTML = array3[0].header;

   // INSERT DATA

   for(let i=0;i<cornersRace.odds.length/3;i++){
   rowData = getTable.insertRow(i+2);
   counter++;
   cell1 = rowData.insertCell(0);     cell1.innerHTML = array[i].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = array[i].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = array2[i].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML = array3[i].odds;
 }
}




// SET FIRST MATCH CORNER
let firstMatchCorner = data.corners.sp.first_match_corner

if(typeof firstMatchCorner !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "firstMatchCorner");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("firstMatchCorner")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = firstMatchCorner.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =firstMatchCorner.odds[0].name + " "+ firstMatchCorner.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =firstMatchCorner.odds[1].name + " "+ firstMatchCorner.odds[1].odds;
}




// SET LAST MATCH Corner
let lastMatchCorner = data.corners.sp.last_match_corner

if(typeof lastMatchCorner !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "lastMatchCorner");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("lastMatchCorner")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = lastMatchCorner.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =lastMatchCorner.odds[0].name + " "+ lastMatchCorner.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =lastMatchCorner.odds[1].name + " "+ lastMatchCorner.odds[1].odds;
}





// SET MULTI Corners
let multiCorners = data.corners.sp.multicorners

  if(typeof multiCorners !== "undefined"){
   // CREATE TABLE
   table=  document.createElement("table");
   table.setAttribute("class", "table");
           table.setAttribute("id", "multiCorners");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("multiCorners")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","3");
    cell1.innerHTML = multiCorners.name;

    // CREATE HEADER ROW               // INSERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);
     cell2 = rowData.insertCell(1);   cell2.innerHTML = multiCorners.odds[0].name;
     cell3 = rowData.insertCell(2);   cell3.innerHTML = multiCorners.odds[1].name;

     // INSERT DATA
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =multiCorners.odds[0].handicap;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =multiCorners.odds[0].odds;
     cell3 = rowData.insertCell(2);     cell3.innerHTML =multiCorners.odds[1].odds;
}




// SET FIRST 10 MINUTES CORNERS
let cornersFirstTenMins = data.corners.sp["first_10_minutes_(00:00_09:59)"]

if(typeof cornersFirstTenMins !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cornersFirstTenMins");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cornersFirstTenMins")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = cornersFirstTenMins.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = cornersFirstTenMins.odds[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = cornersFirstTenMins.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = cornersFirstTenMins.odds[0].team;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = cornersFirstTenMins.odds[0].handicap+" "+ cornersFirstTenMins.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = cornersFirstTenMins.odds[1].handicap+" "+ cornersFirstTenMins.odds[1].odds;
}




// SET FIRST MINUTE CORNERS
let cornersFirstMinute = data.corners.sp["first_minute_(00:00_00:59)"]

if(typeof cornersFirstMinute !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "cornersFirstMinute");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cornersFirstMinute")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = cornersFirstMinute.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = cornersFirstMinute.odds[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = cornersFirstMinute.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = cornersFirstMinute.odds[0].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =  cornersFirstMinute.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =  cornersFirstMinute.odds[1].odds;
  }

}
}




// THIS FUNCTION WILL SET ODDS FOR SPECIAL
  const specialOdds = function(){


  if(typeof data.specials !== "undefined"){
// SET special
let specials = data.specials.sp.specials

if(typeof specials !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "specials");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("specials")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = specials.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<specials.odds.length;i++){
         if(specials.odds[i].header=="1") array.push(specials.odds[i])
         else if(specials.odds[i].header=="2") array2.push(specials.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


       // CREATE ODD ROW                   // ISNERT DATA
       counter =2
       for(let i=0; i<specials.odds.length/2;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].name;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
       }

}



// SET TO SCORE IN HALF
    let toScoreInHalf = data.specials.sp.to_score_in_half

    if(typeof toScoreInHalf !== "undefined"){
     // CREATE TABLE
     table=  document.createElement("table");
     table.setAttribute("class", "table");
             table.setAttribute("id", "toScoreInHalf");
            document.getElementById("apst").appendChild(table);

     getTable= document.getElementById("toScoreInHalf")

     // CREATE TITLE ROW
      rowHead = getTable.insertRow(0);
      rowHead.setAttribute("class", "title")
      cell1 = rowHead.insertCell(0);
      cell1.setAttribute("colspan","3");
      cell1.innerHTML = toScoreInHalf.name;

      // SET ODD ARRAYS
       let array=[]; let array2=[]
           for(let i=0;i<toScoreInHalf.odds.length;i++){
             if(toScoreInHalf.odds[i].header=="Yes") array.push(toScoreInHalf.odds[i])
             else if(toScoreInHalf.odds[i].header=="No") array2.push(toScoreInHalf.odds[i])
           }

           // CREATE HEADER ROW               // INSERT DATA
            rowData = getTable.insertRow(1);
            cell1 = rowData.insertCell(0);
            cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
            cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

            // CREATE ODD ROW                   // ISNERT DATA
            counter =2
            for(let i=0; i<toScoreInHalf.odds.length/2;i++){
            rowData = getTable.insertRow(counter);
            counter++;
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].name;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].team +" "+ array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].team +" "+ array2[i].odds;
            }
}




// SET TO SCORE A PENALTY
let scorePenalty = data.specials.sp["to_score_a_penalty"]

if(typeof scorePenalty !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "scorePenalty");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("scorePenalty")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = scorePenalty.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = scorePenalty.odds[0].name +" "+ scorePenalty.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =  scorePenalty.odds[1].name +" "+ scorePenalty.odds[1].odds;
  }



// SET TO MISS A PENALTY
let missPenalty = data.specials.sp["to_miss_a_penalty"]

if(typeof missPenalty !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "missPenalty");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("missPenalty")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = missPenalty.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = missPenalty.odds[0].name +" "+ missPenalty.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =  missPenalty.odds[1].name +" "+ missPenalty.odds[1].odds;
  }



// SET A PENALTY IN THE MATCH

let penaltyInMatch = data.specials.sp["a_penalty_in_the_match"]

if(typeof penaltyInMatch !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "penaltyInMatch");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("penaltyInMatch")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = penaltyInMatch.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = penaltyInMatch.odds[0].name +" "+ penaltyInMatch.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =  penaltyInMatch.odds[1].name +" "+ penaltyInMatch.odds[1].odds;
  }



// SET A RED CARD IN THE MATCH
let redCardInMatch = data.specials.sp["a_red_card_in_the_match"]

if(typeof redCardInMatch !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "redCardInMatch");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("redCardInMatch")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = redCardInMatch.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = redCardInMatch.odds[0].name +" "+ redCardInMatch.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =  redCardInMatch.odds[1].name +" "+ redCardInMatch.odds[1].odds;
  }




// SET OWN GOAL
let ownGoal = data.specials.sp["own_goal"]

if(typeof ownGoal !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "ownGoal");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("ownGoal")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = ownGoal.name;

   // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = ownGoal.odds[0].name +" "+ ownGoal.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =  ownGoal.odds[1].name +" "+ ownGoal.odds[1].odds;
  }



// SET TEAM PERFORMANCE
let teamPerformance = data.specials.sp.team_performances

if(typeof teamPerformance !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "teamPerformance");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamPerformance")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = teamPerformance.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<teamPerformance.odds.length;i++){
         if(teamPerformance.odds[i].header=="1") array.push(teamPerformance.odds[i])
         else if(teamPerformance.odds[i].header=="2") array2.push(teamPerformance.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);   cell1.innerHTML = array[0].header;
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array2[0].header;

        // CREATE ODD ROW                   // ISNERT DATA
        counter =2
        for(let i=0; i<teamPerformance.odds.length/2;i++){
        rowData = getTable.insertRow(counter);
        counter++;
        cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].name +" "+ array[i].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =array2[i].name +" "+ array2[i].odds;
        }
}




// SET MATCH SHOTS ON TARGET
let matchShotsOnTarget = data.specials.sp.match_shots_on_target

if(typeof matchShotsOnTarget !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "matchShotsOnTarget");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("matchShotsOnTarget")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = matchShotsOnTarget.name;

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = matchShotsOnTarget.odds[0].name;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = matchShotsOnTarget.odds[1].name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(2);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =matchShotsOnTarget.odds[0].handicap;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =matchShotsOnTarget.odds[0].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =matchShotsOnTarget.odds[1].odds;
}




// SET MATCH SHOTS
let matchShots = data.specials.sp.match_shots

if(typeof matchShots !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "matchShots");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("matchShots")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = matchShots.name;

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = matchShots.odds[0].name;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = matchShots.odds[1].name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(2);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =matchShots.odds[0].handicap;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =matchShots.odds[0].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =matchShots.odds[1].odds;
}




//SET MATCH TACKLES
let matchTakles = data.specials.sp.match_tackles

if(typeof matchTakles !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "matchTakles");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("matchTakles")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = matchTakles.name;

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = matchTakles.odds[0].name;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = matchTakles.odds[1].name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(2);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =matchTakles.odds[0].handicap;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =matchTakles.odds[0].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =matchTakles.odds[1].odds;
}




// SET MATCH OFFSIDES
let matchOffsides = data.specials.sp.match_offsides

if(typeof matchOffsides !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 table.setAttribute("class", "table");
         table.setAttribute("id", "matchOffsides");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("matchOffsides")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = matchOffsides.name;

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = matchOffsides.odds[0].name;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = matchOffsides.odds[1].name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(2);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =matchOffsides.odds[0].handicap;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =matchOffsides.odds[0].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =matchOffsides.odds[1].odds;
}




// SET TEAM SHOTS ON TARGET
let teamShotsOnTarget = data.specials.sp.team_shots_on_target

if(typeof teamShotsOnTarget !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "teamShotsOnTarget");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamShotsOnTarget")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = teamShotsOnTarget.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =teamShotsOnTarget.odds[0].name + " "+ teamShotsOnTarget.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =teamShotsOnTarget.odds[1].name + " "+ teamShotsOnTarget.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =teamShotsOnTarget.odds[2].name + " "+ teamShotsOnTarget.odds[2].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML =teamShotsOnTarget.odds[3].name + " "+ teamShotsOnTarget.odds[3].odds;
}



// SET TEAM SHOTS
let teamShots = data.specials.sp.team_shots

if(typeof teamShots !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "teamShots");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamShots")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = teamShots.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =teamShots.odds[0].name + " "+ teamShots.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =teamShots.odds[1].name + " "+ teamShots.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =teamShots.odds[2].name + " "+ teamShots.odds[2].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML =teamShots.odds[3].name + " "+ teamShots.odds[3].odds;
}



// SET TEAM TACKLES
let teamTackles = data.specials.sp.team_tackles

if(typeof teamTackles !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "teamTackles");
         table.setAttribute("class", "table");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamTackles")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = teamTackles.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =teamTackles.odds[0].name + " "+ teamTackles.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =teamTackles.odds[1].name + " "+ teamTackles.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =teamTackles.odds[2].name + " "+ teamTackles.odds[2].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML =teamTackles.odds[3].name + " "+ teamTackles.odds[3].odds;
}




// SET TEAM OFFSIDES
let teamOffsides = data.specials.sp.team_offsides

if(typeof teamOffsides !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "teamOffsides");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamOffsides")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = teamOffsides.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =teamOffsides.odds[0].name + " "+ teamOffsides.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =teamOffsides.odds[1].name + " "+ teamOffsides.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =teamOffsides.odds[2].name + " "+ teamOffsides.odds[2].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML =teamOffsides.odds[3].name + " "+ teamOffsides.odds[3].odds;
}



// SET PLAYER SHOTS ON TARGET
let playerPasses = data.specials.sp.player_shots_on_target

if(typeof playerPasses !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "playerPasses");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("playerPasses")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = playerPasses.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<playerPasses.odds.length;i++){
         if(playerPasses.odds[i].header=="Over") array.push(playerPasses.odds[i])
         else if(playerPasses.odds[i].header=="Under") array2.push(playerPasses.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


       // CREATE ODD ROW                   // ISNERT DATA
       counter =2
       for(let i=0; i<playerPasses.odds.length/2;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
       }

}




// SET PLAYER SHOTS
let playerShots = data.specials.sp.player_shots

if(typeof playerShots !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "playerShots");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("playerShots")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = playerShots.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<playerShots.odds.length;i++){
         if(playerShots.odds[i].header=="Over") array.push(playerShots.odds[i])
         else if(playerShots.odds[i].header=="Under") array2.push(playerShots.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


       // CREATE ODD ROW                   // ISNERT DATA
       counter =2
       for(let i=0; i<playerShots.odds.length/2;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
       }

}



// SET PLAYER TACKLES
let playerTackles = data.specials.sp.player_tackles

if(typeof playerTackles !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "playerTackles");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("playerTackles")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = playerTackles.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<playerTackles.odds.length;i++){
         if(playerTackles.odds[i].header=="Over") array.push(playerTackles.odds[i])
         else if(playerTackles.odds[i].header=="Under") array2.push(playerTackles.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


       // CREATE ODD ROW                   // ISNERT DATA
       counter =2
       for(let i=0; i<playerTackles.odds.length/2;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
       }

}




// SET PLAYER ASSISTS
let playerAssists = data.specials.sp.player_assists

if(typeof playerAssists !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "playerAssists");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("playerAssists")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = playerAssists.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<playerAssists.odds.length;i++){
         if(playerAssists.odds[i].header=="Over") array.push(playerAssists.odds[i])
         else if(playerAssists.odds[i].header=="Under") array2.push(playerAssists.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


       // CREATE ODD ROW                   // ISNERT DATA
       counter =2
       for(let i=0; i<playerAssists.odds.length/2;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
       }

}




// PLAYER PASSES
let playerShotsOnTarget = data.specials.sp.player_passes

if(typeof playerShotsOnTarget !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "playerShotsOnTarget");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("playerShotsOnTarget")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = playerShotsOnTarget.name;

  // SET ODD ARRAYS
   let array=[]; let array2=[]
       for(let i=0;i<playerShotsOnTarget.odds.length;i++){
         if(playerShotsOnTarget.odds[i].header=="Over") array.push(playerShotsOnTarget.odds[i])
         else if(playerShotsOnTarget.odds[i].header=="Under") array2.push(playerShotsOnTarget.odds[i])
       }

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


       // CREATE ODD ROW                   // ISNERT DATA
       counter =2
       for(let i=0; i<playerShotsOnTarget.odds.length/2;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
       }

     }
}
}



// THIS FUNCTION WILL GET PLAYERS odds
    const playerOdds=function(){
        if(typeof data.player !== "undefined"){
      //  SET GOALSCORERS
      let goalScorers=data.player.sp.goalscorers

      if(typeof goalScorers !== "undefined"){
      // CREATE TABLE goalscorers
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "goalScorers");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("goalScorers")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","4");
       cell1.innerHTML = goalScorers.name;

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);
        cell2 = rowData.insertCell(1);   cell2.innerHTML = goalScorers.odds[0].header;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = goalScorers.odds[1].header;
        cell3 = rowData.insertCell(3);   cell3.innerHTML = goalScorers.odds[2].header;

       // CREATE ODD ROW                   // INSERT DATA
       counter =2
       for(let i=0;i<goalScorers.odds.length;i+=3){
       rowData = getTable.insertRow(counter);
       counter ++;
       cell1 = rowData.insertCell(0);  if(typeof goalScorers.odds[i] !== "undefined")    cell1.innerHTML =goalScorers.odds[i].name;
       cell2 = rowData.insertCell(1);  if(typeof goalScorers.odds[i] !== "undefined")  cell2.innerHTML =goalScorers.odds[i].odds;
       cell3 = rowData.insertCell(2);  if(typeof goalScorers.odds[i+1] !== "undefined")  cell3.innerHTML =goalScorers.odds[i+1].odds;
       cell3 = rowData.insertCell(3);  if(typeof goalScorers.odds[i+2] !== "undefined")  cell3.innerHTML =goalScorers.odds[i+2].odds;
       }
     }



     // SET MULTISCORERS
     let multiScorers=data.player.sp.multi_scorers

     if(typeof multiScorers !== "undefined"){
     // CREATE TABLE multiscorers
     table=  document.createElement("table");
       table.setAttribute("class", "table");
            table.setAttribute("id", "multiScorers");
           document.getElementById("apst").appendChild(table);

     getTable= document.getElementById("multiScorers")

     // CREATE TITLE ROW
     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","3");
     cell1.innerHTML = multiScorers.name;

     // CREATE HEADER ROW               // INSERT DATA
      rowData = getTable.insertRow(1);
      cell1 = rowData.insertCell(0);
      cell2 = rowData.insertCell(1);   cell2.innerHTML = multiScorers.odds[0].header;
      cell3 = rowData.insertCell(2);   cell3.innerHTML = multiScorers.odds[1].header;

      // CREATE ODD ROW                   // INSERT DATA
      counter =2
      for(let i=0;i<multiScorers.odds.length;i+=2){
      rowData = getTable.insertRow(counter);
      counter ++;
      cell1 = rowData.insertCell(0);  if(typeof multiScorers.odds[i] !== "undefined")    cell1.innerHTML =multiScorers.odds[i].name;
      cell2 = rowData.insertCell(1);  if(typeof multiScorers.odds[i] !== "undefined")  cell2.innerHTML =multiScorers.odds[i].odds;
      cell3 = rowData.insertCell(2);  if(typeof multiScorers.odds[i+1] !== "undefined")  cell3.innerHTML =multiScorers.odds[i+1].odds;
      }
     }



        // SET TEAM GOALSCORER

     let teamGoalscorer = data.player.sp.team_goalscorer

     if(typeof teamGoalscorer !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "teamGoalscorer");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("teamGoalscorer")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = teamGoalscorer.name;

       // SET ODD ARRAYS
        let array=[]; let array2=[]
            for(let i=0;i<teamGoalscorer.odds.length;i++){
              if(teamGoalscorer.odds[i].header=="First") array.push(teamGoalscorer.odds[i])
              else if(teamGoalscorer.odds[i].header=="Last") array2.push(teamGoalscorer.odds[i])
            }

            // CREATE HEADER ROW               // INSERT DATA
             rowData = getTable.insertRow(1);
             cell1 = rowData.insertCell(0);
             cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
             cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

             // CREATE ODD ROW                   // ISNERT DATA
             counter =2
             for(let i=0; i<teamGoalscorer.odds.length/2;i++){
             rowData = getTable.insertRow(counter);
             counter++;                              array[i].team
             cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team +":  "+  array[i].name;
             cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
             cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
             }
     }






     // SET 1st player booked
     let firstPlayerBooked = data.player.sp["1st_player_booked"]

     if(typeof firstPlayerBooked !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "firstPlayerBooked");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("firstPlayerBooked")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = firstPlayerBooked.name;

       // CREATE ODD ROW                   // ISNERT DATA
       counter =1
       for(let i=1; i<=firstPlayerBooked.odds.length;i+=3){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);    if(typeof firstPlayerBooked.odds[i-1] !== "undefined") cell1.innerHTML =firstPlayerBooked.odds[i-1].name + " "+ firstPlayerBooked.odds[i-1].odds;
       cell2 = rowData.insertCell(1);    if(typeof firstPlayerBooked.odds[i] !== "undefined") cell2.innerHTML =firstPlayerBooked.odds[i].name + " "+ firstPlayerBooked.odds[i].odds;
       cell3 = rowData.insertCell(2);    if(typeof firstPlayerBooked.odds[i+1] !== "undefined") cell3.innerHTML =firstPlayerBooked.odds[i+1].name + " "+ firstPlayerBooked.odds[i+1].odds;
       }
     }



     // set player to be booked
     let playerTBBooked = data.player.sp.player_to_be_booked

     if(typeof playerTBBooked !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "playerTBBooked");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("playerTBBooked")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","2");
       cell1.innerHTML = playerTBBooked.name;

       // CREATE ODD ROW                   // ISNERT DATA
       counter =1
       for(let i=1; i<=playerTBBooked.odds.length;i+=2){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);    if(typeof playerTBBooked.odds[i-1] !== "undefined") cell1.innerHTML =playerTBBooked.odds[i-1].name + " "+ playerTBBooked.odds[i-1].odds;
       cell2 = rowData.insertCell(1);    if(typeof playerTBBooked.odds[i] !== "undefined") cell2.innerHTML =playerTBBooked.odds[i].name + " "+ playerTBBooked.odds[i].odds;
       }
     }





     // SET player to be sent off
     let playerToBeSentOff = data.player.sp["player_to_be_sent_off"]

     if(typeof playerToBeSentOff !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "playerToBeSentOff");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("playerToBeSentOff")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = playerToBeSentOff.name;

       // CREATE ODD ROW                   // ISNERT DATA
       counter =1
       for(let i=1; i<=playerToBeSentOff.odds.length;i+=3){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);    if(typeof playerToBeSentOff.odds[i-1] !== "undefined") cell1.innerHTML =playerToBeSentOff.odds[i-1].name + " "+ playerToBeSentOff.odds[i-1].odds;
       cell2 = rowData.insertCell(1);    if(typeof playerToBeSentOff.odds[i] !== "undefined") cell2.innerHTML =playerToBeSentOff.odds[i].name + " "+ playerToBeSentOff.odds[i].odds;
       cell3 = rowData.insertCell(2);    if(typeof playerToBeSentOff.odds[i+1] !== "undefined") cell3.innerHTML =playerToBeSentOff.odds[i+1].name + " "+ playerToBeSentOff.odds[i+1].odds;
       }
     }




     // SET PLAYER SHOTS ON TARGET
     let playerPasses = data.player.sp.player_shots_on_target

     if(typeof playerPasses !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "playerPasses");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("playerPasses")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = playerPasses.name;

       // SET ODD ARRAYS
        let array=[]; let array2=[]
            for(let i=0;i<playerPasses.odds.length;i++){
              if(playerPasses.odds[i].header=="Over") array.push(playerPasses.odds[i])
              else if(playerPasses.odds[i].header=="Under") array2.push(playerPasses.odds[i])
            }

            // CREATE HEADER ROW               // INSERT DATA
             rowData = getTable.insertRow(1);
             cell1 = rowData.insertCell(0);
             cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
             cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


            // CREATE ODD ROW                   // ISNERT DATA
            counter =2
            for(let i=0; i<playerPasses.odds.length/2;i++){
            rowData = getTable.insertRow(counter);
            counter++;
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
            }

     }




     // SET PLAYER SHOTS
     let playerShots = data.player.sp.player_shots

     if(typeof playerShots !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "playerShots");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("playerShots")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = playerShots.name;

       // SET ODD ARRAYS
        let array=[]; let array2=[]
            for(let i=0;i<playerShots.odds.length;i++){
              if(playerShots.odds[i].header=="Over") array.push(playerShots.odds[i])
              else if(playerShots.odds[i].header=="Under") array2.push(playerShots.odds[i])
            }

            // CREATE HEADER ROW               // INSERT DATA
             rowData = getTable.insertRow(1);
             cell1 = rowData.insertCell(0);
             cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
             cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


            // CREATE ODD ROW                   // ISNERT DATA
            counter =2
            for(let i=0; i<playerShots.odds.length/2;i++){
            rowData = getTable.insertRow(counter);
            counter++;
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
            }

     }



     // SET PLAYER TACKLES
     let playerTackles = data.player.sp.player_tackles

     if(typeof playerTackles !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "playerTackles");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("playerTackles")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = playerTackles.name;

       // SET ODD ARRAYS
        let array=[]; let array2=[]
            for(let i=0;i<playerTackles.odds.length;i++){
              if(playerTackles.odds[i].header=="Over") array.push(playerTackles.odds[i])
              else if(playerTackles.odds[i].header=="Under") array2.push(playerTackles.odds[i])
            }

            // CREATE HEADER ROW               // INSERT DATA
             rowData = getTable.insertRow(1);
             cell1 = rowData.insertCell(0);
             cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
             cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


            // CREATE ODD ROW                   // ISNERT DATA
            counter =2
            for(let i=0; i<playerTackles.odds.length/2;i++){
            rowData = getTable.insertRow(counter);
            counter++;
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
            }

     }




     // SET PLAYER ASSISTS
     let playerAssists = data.player.sp.player_assists

     if(typeof playerAssists !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "playerAssists");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("playerAssists")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = playerAssists.name;

       // SET ODD ARRAYS
        let array=[]; let array2=[]
            for(let i=0;i<playerAssists.odds.length;i++){
              if(playerAssists.odds[i].header=="Over") array.push(playerAssists.odds[i])
              else if(playerAssists.odds[i].header=="Under") array2.push(playerAssists.odds[i])
            }

            // CREATE HEADER ROW               // INSERT DATA
             rowData = getTable.insertRow(1);
             cell1 = rowData.insertCell(0);
             cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
             cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


            // CREATE ODD ROW                   // ISNERT DATA
            counter =2
            for(let i=0; i<playerAssists.odds.length/2;i++){
            rowData = getTable.insertRow(counter);
            counter++;
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
            }

     }




     // PLAYER PASSES
     let playerShotsOnTarget = data.player.sp.player_passes

     if(typeof playerShotsOnTarget !== "undefined"){
      // CREATE TABLE
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "playerShotsOnTarget");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("playerShotsOnTarget")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = playerShotsOnTarget.name;

       // SET ODD ARRAYS
        let array=[]; let array2=[]
            for(let i=0;i<playerShotsOnTarget.odds.length;i++){
              if(playerShotsOnTarget.odds[i].header=="Over") array.push(playerShotsOnTarget.odds[i])
              else if(playerShotsOnTarget.odds[i].header=="Under") array2.push(playerShotsOnTarget.odds[i])
            }

            // CREATE HEADER ROW               // INSERT DATA
             rowData = getTable.insertRow(1);
             cell1 = rowData.insertCell(0);
             cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
             cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;


            // CREATE ODD ROW                   // ISNERT DATA
            counter =2
            for(let i=0; i<playerShotsOnTarget.odds.length/2;i++){
            rowData = getTable.insertRow(counter);
            counter++;
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].team;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].name+" "+array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].name+" "+array2[i].odds;
            }

          }

    }
}



 // THIS FUNCTION WILL GET ODDS FOR HALF
      const halfOdds= function(){


        if(typeof data.half !== "undefined"){
// SET HALF TIME result
let halfTimeResult = data.half.sp.half_time_result

if(typeof halfTimeResult !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "halfTimeResult");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("halfTimeResult")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = halfTimeResult.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =halfTimeResult.odds[0].name +" "+ halfTimeResult.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =halfTimeResult.odds[1].name +" "+ halfTimeResult.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =halfTimeResult.odds[2].name +" "+ halfTimeResult.odds[2].odds;
}



// SET HALF TIME DOUBLE CHANCE
let halfTimeDoubleChance = data.half.sp.half_time_double_chance

if(typeof halfTimeDoubleChance !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "halfTimeDoubleChance");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("halfTimeDoubleChance")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = halfTimeDoubleChance.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =halfTimeDoubleChance.odds[0].name +" "+ halfTimeDoubleChance.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =halfTimeDoubleChance.odds[1].name +" "+ halfTimeDoubleChance.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =halfTimeDoubleChance.odds[2].name +" "+ halfTimeDoubleChance.odds[2].odds;
}



// SET HALF TIME RESULT/ BOTH TEAMS TO SCORE
let halfTimeResultBTTS = data.half.sp.half_time_result_both_teams_to_score

if(typeof halfTimeResultBTTS !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "halfTimeResultBTTS");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("halfTimeResultBTTS")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = halfTimeResultBTTS.name;

       // CREATE ODD ROW                   // ISNERT DATA
       for(let i=0; i<halfTimeResultBTTS.odds.length;i++){
       rowData = getTable.insertRow(i+1);
       cell1 = rowData.insertCell(0);     cell1.innerHTML =halfTimeResultBTTS.odds[i].name;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =halfTimeResultBTTS.odds[i].odds;
       }
}



// SET HALF TIME RESULT TOTAL GOALS
let halfTimeResultTG = data.half.sp.half_time_result_total_goals

if(typeof halfTimeResultTG !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "halfTimeResultTG");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("halfTimeResultTG")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","2");
  cell1.innerHTML = halfTimeResultTG.name;

       // CREATE ODD ROW                   // ISNERT DATA
       for(let i=0; i<halfTimeResultTG.odds.length;i++){
       rowData = getTable.insertRow(i+1);
       cell1 = rowData.insertCell(0);     cell1.innerHTML =halfTimeResultTG.odds[i].name;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =halfTimeResultTG.odds[i].odds;
       }
}



// SET HALF TIME CORRECT SCORE
let halfTimeCS = data.half.sp.half_time_correct_score
if(typeof halfTimeCS !== "undefined"){
// CREATE TABLE halfTimeCS
 table=  document.createElement("table");
   table.setAttribute("class", "table");
         table.setAttribute("id", "halfTimeCS");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("halfTimeCS")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = halfTimeCS.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME WIN";
   cell2 = rowData.insertCell(1);   cell2.innerHTML = "DRAW";
   cell3 = rowData.insertCell(2);   cell3.innerHTML = "AWAY WIN";

   // PUT CELL VALUES IN CORESPONDING ARRAY
   let array1=[]; let array2=[]; let array3=[];
   for(let i=0;i<halfTimeCS.odds.length;i++){

     if(halfTimeCS.odds[i].header== "1"){
       array1.push(halfTimeCS.odds[i])
     }
     else if(halfTimeCS.odds[i].header=="X"){
       array2.push(halfTimeCS.odds[i])

     }
     else if(halfTimeCS.odds[i].header=="2"){
       array3.push(halfTimeCS.odds[i])
     }
   }
   // DETERMINE HOW MANY ROWS TO ENTER
     counter =Math.max(array1.length,array2.length,array3.length)

   // CREATE ROWS AND INSERT DATA
   for (let i=2;i<=counter+1;i++){
      // CREATE ROW
      rowData = getTable.insertRow(i);
      // CREATE CELL FOR ROW            // INSERT DATA IF THERE IS ANY FOR THAT CELL. OTHERWISE CELL WILL BE EMPTY
      cell1 = rowData.insertCell(0); if(typeof array1[i-2] !== "undefined")  cell1.innerHTML = array1[i-2].name +"  " +array1[i-2].odds;
      cell2 = rowData.insertCell(1); if(typeof array2[i-2] !== "undefined")  cell2.innerHTML = array2[i-2].name +"  " +array2[i-2].odds;
      cell3 = rowData.insertCell(2); if(typeof array3[i-2] !== "undefined")  cell3.innerHTML = array3[i-2].name   +"  " +array3[i-2].odds;
        }
}



// SET BOTH TEAMS TO SCORE IN FIRST HALF

let bothTeamsTSFH=data.half.sp["both_teams_to_score_in_1st_half"]
 if(typeof bothTeamsTSFH !== "undefined"){
    // CREATE TABLE bothTeamsTSFH
    table=  document.createElement("table");
      table.setAttribute("class", "table");
            table.setAttribute("id", "bothTeamsTSFH");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTSFH")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTSFH.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSFH.odds[0].name + " " +  bothTeamsTSFH.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSFH.odds[1].name + " " +  bothTeamsTSFH.odds[1].odds;
}



// SET BOTH TEAMS TO SCORE IN SECOND HALF

let bothTeamsTSSH=data.half.sp["both_teams_to_score_in_2nd_half"]
 if(typeof bothTeamsTSSH !== "undefined"){
    // CREATE TABLE bothTeamsTSSH
    table=  document.createElement("table");
      table.setAttribute("class", "table");
            table.setAttribute("id", "bothTeamsTSSH");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTSSH")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTSSH.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSSH.odds[0].name + " " +  bothTeamsTSSH.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSSH.odds[1].name + " " +  bothTeamsTSSH.odds[1].odds;
}


// SET BOTH TEAMS TO SCORE FIRST HALF/ SECOND HALF
let bothTeamsTSFSH=data.half.sp["both_teams_to_score_1st_half_2nd_half"]
 if(typeof bothTeamsTSFSH !== "undefined"){
    // CREATE TABLE bothTeamsTSFSH
    table=  document.createElement("table");
      table.setAttribute("class", "table");
            table.setAttribute("id", "bothTeamsTSFSH");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTSFSH")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTSFSH.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSFSH.odds[0].name + " " +  bothTeamsTSFSH.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSFSH.odds[1].name + " " +  bothTeamsTSFSH.odds[1].odds;
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSFSH.odds[2].name + " " +  bothTeamsTSFSH.odds[2].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSFSH.odds[3].name + " " +  bothTeamsTSFSH.odds[3].odds;
}




// SET 1st half asian handicap
  let firstHalfAH = data.half.sp["1st_half_asian_handicap"]

  if(typeof firstHalfAH !== "undefined"){
    // CREATE TABLE alternative GL
    table=  document.createElement("table");
      table.setAttribute("class", "table");
            table.setAttribute("id", "firstHalfAH");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("firstHalfAH")


    // CREATE TITLE ROW
     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = firstHalfAH.name;

     // CREATE HEADER ROW               // INSERT DATA
      rowData = getTable.insertRow(1);
      cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME"
      cell2 = rowData.insertCell(1);   cell2.innerHTML = "AWAY";

      // CREATE ODD ROW                   // ISNERT DATA

      rowData = getTable.insertRow(2);
      cell1 = rowData.insertCell(0);     cell1.innerHTML =firstHalfAH.odds[0].handicap +" "+ firstHalfAH.odds[0].odds;
      cell2 = rowData.insertCell(1);     cell2.innerHTML =firstHalfAH.odds[1].handicap +" "+ firstHalfAH.odds[1].odds;
}



// SET 1st half goal line
   let firstHalfGL = data.half.sp["1st_half_goal_line"]

   if(typeof firstHalfGL !== "undefined"){
     // CREATE TABLE alternative GL
     table=  document.createElement("table");
       table.setAttribute("class", "table");
             table.setAttribute("id", "firstHalfGL");
            document.getElementById("apst").appendChild(table);

     getTable= document.getElementById("firstHalfGL")

     // CREATE TITLE ROW
      rowHead = getTable.insertRow(0);
      rowHead.setAttribute("class", "title")
      cell1 = rowHead.insertCell(0);
      cell1.setAttribute("colspan","3");
      cell1.innerHTML = firstHalfGL.name;

      // CREATE HEADER ROW               // INSERT DATA
       rowData = getTable.insertRow(1);
       cell1 = rowData.insertCell(0);
       cell2 = rowData.insertCell(1);   cell2.innerHTML = firstHalfGL.odds[0].header;
       cell3 = rowData.insertCell(2);   cell3.innerHTML = firstHalfGL.odds[1].header;

       // CREATE ODD ROW                   // ISNERT DATA
       rowData = getTable.insertRow(2);
       cell1 = rowData.insertCell(0);     cell1.innerHTML =firstHalfGL.odds[0].handicap
       cell2 = rowData.insertCell(1);     cell2.innerHTML =firstHalfGL.odds[0].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =firstHalfGL.odds[1].odds;
}



// SET alternative_1st_half_asian_handicap
 let alternativeFHAH = data.half.sp["alternative_1st_half_asian_handicap"]

 if(typeof alternativeFHAH !== "undefined"){
   // CREATE TABLE
   table=  document.createElement("table");
     table.setAttribute("class", "table");
           table.setAttribute("id", "alternativeFHAH");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("alternativeFHAH")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","2");
    cell1.innerHTML = alternativeFHAH.name;

    // SET ODD ARRAYS
     let array=[]; let array2=[]
         for(let i=0;i<alternativeFHAH.odds.length;i++){
           if(alternativeFHAH.odds[i].header=="1") array.push(alternativeFHAH.odds[i])
           else if(alternativeFHAH.odds[i].header=="2") array2.push(alternativeFHAH.odds[i])
         }

    // CREATE HEADER ROW               // INSERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);   cell1.innerHTML = "HOME";
     cell2 = rowData.insertCell(1);   cell2.innerHTML = "AWAY";

     // CREATE ODD ROW                   // ISNERT DATA
     counter =2
     for(let i=0; i<alternativeFHAH.odds.length/2;i++){
     rowData = getTable.insertRow(counter);
     counter++;
     cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap +" "+ array[i].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =array2[i].handicap +" "+ array2[i].odds;
     }
}



// SET alternative_1st_half_goal_line
 let alternativeFHGL = data.half.sp["alternative_1st_half_goal_line"]


 if(typeof alternativeFHGL !== "undefined"){
   // CREATE TABLE
   table=  document.createElement("table");
     table.setAttribute("class", "table");
           table.setAttribute("id", "alternativeFHGL");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("alternativeFHGL")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","3");
    cell1.innerHTML = alternativeFHGL.name;

    // SET ODD ARRAYS
     let array=[]; let array2=[]
         for(let i=0;i<alternativeFHGL.odds.length;i++){
           if(alternativeFHGL.odds[i].header=="Over") array.push(alternativeFHGL.odds[i])
           else if(alternativeFHGL.odds[i].header=="Under") array2.push(alternativeFHGL.odds[i])
         }

         // CREATE HEADER ROW               // INSERT DATA
          rowData = getTable.insertRow(1);
          cell1 = rowData.insertCell(0);
          cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
          cell3=  rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

          // CREATE ODD ROW                   // ISNERT DATA
          counter =2
          for(let i=0; i<alternativeFHGL.odds.length/2;i++){
          rowData = getTable.insertRow(counter);
          counter++;
          cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap;
          cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
          cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
          }
}



// SET FIRST HALF HANDICAP RESULT
    let firstHalfHandicap = data.half.sp["1st_half_handicap"]

    if(typeof firstHalfHandicap !== "undefined"){
      // CREATE TABLE resultBTTS
      table=  document.createElement("table");
        table.setAttribute("class", "table");
              table.setAttribute("id", "firstHalfHandicap");
             document.getElementById("apst").appendChild(table);

      getTable= document.getElementById("firstHalfHandicap")

      // CREATE TITLE ROW
       rowHead = getTable.insertRow(0);
       rowHead.setAttribute("class", "title")
       cell1 = rowHead.insertCell(0);
       cell1.setAttribute("colspan","3");
       cell1.innerHTML = firstHalfHandicap.name;

       // CREATE HEADER ROW               // INSERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);   cell1.innerHTML = firstHalfHandicap.odds[0].name;
        cell2 = rowData.insertCell(1);   cell2.innerHTML = firstHalfHandicap.odds[1].name;
        cell3 = rowData.insertCell(2);   cell3.innerHTML = firstHalfHandicap.odds[2].name;

        // CREATE ODD ROW           // ISNERT DATA
        rowData = getTable.insertRow(2);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =firstHalfHandicap.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =firstHalfHandicap.odds[1].odds;
        cell2 = rowData.insertCell(2);     cell2.innerHTML =firstHalfHandicap.odds[2].odds;
}



// SET ALTERNATIVE FIRST HALF HANDICAP RESULT
let alternativeFirstHalfHandicap = data.half.sp["alternative_1st_half_handicap_result"]

if(typeof alternativeFirstHalfHandicap !== "undefined"){
// CREATE TABLE resultBTTS
table=  document.createElement("table");
  table.setAttribute("class", "table");
        table.setAttribute("id", "alternativeFirstHalfHandicap");
       document.getElementById("apst").appendChild(table);

getTable= document.getElementById("alternativeFirstHalfHandicap")

// CREATE TITLE ROW
 rowHead = getTable.insertRow(0);
 rowHead.setAttribute("class", "title")
 cell1 = rowHead.insertCell(0);
 cell1.setAttribute("colspan","3");
 cell1.innerHTML = alternativeFirstHalfHandicap.name;

 // SET ODD ARRAYS
  let array=[]; let array2=[]; let array3=[];
      for(let i=0;i<alternativeFirstHalfHandicap.odds.length;i++){
        if(alternativeFirstHalfHandicap.odds[i].header=="1") array.push(alternativeFirstHalfHandicap.odds[i])
        else if(alternativeFirstHalfHandicap.odds[i].header=="Tie") array2.push(alternativeFirstHalfHandicap.odds[i])
        else if(alternativeFirstHalfHandicap.odds[i].header=="2") array3.push(alternativeFirstHalfHandicap.odds[i])
      }

      // CREATE HEADER ROW               // INSERT DATA
       rowData = getTable.insertRow(1);
       cell1 = rowData.insertCell(0);   cell1.innerHTML = array[0].header
       cell2 = rowData.insertCell(1);   cell2.innerHTML = array2[0].header;
       cell3 = rowData.insertCell(2);   cell3.innerHTML = array3[0].header;

       // CREATE ODD ROW                   // INSERT DATA
       counter =2
       for(let i=0; i<alternativeFirstHalfHandicap.odds.length/3;i++){
       rowData = getTable.insertRow(counter);
       counter++;
       cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap +" "+ array[i].odds;
       cell2 = rowData.insertCell(1);     cell2.innerHTML =array2[i].handicap +" "+ array2[i].odds;
       cell3 = rowData.insertCell(2);     cell3.innerHTML =array3[i].handicap +" "+ array3[i].odds;
       }
}



// SET FIRST HALF GOALS
let firstHalfGoals = data.half.sp["first_half_goals"]

if(typeof firstHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
    table.setAttribute("class", "table");
          table.setAttribute("id", "firstHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("firstHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = firstHalfGoals.name;

   // SET ODD ARRAYS
    let array=[]; let array2=[];
        for(let i=0;i<firstHalfGoals.odds.length;i++){
          if(firstHalfGoals.odds[i].header=="Over") array.push(firstHalfGoals.odds[i])
          else if(firstHalfGoals.odds[i].header=="Under") array2.push(firstHalfGoals.odds[i])
        }

   // CREATE HEADER ROW               // INSERT DATA
    rowData = getTable.insertRow(1);
    cell1 = rowData.insertCell(0);
    cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
    cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

    // CREATE ODD ROW                   // ISNERT DATA
    for(let i=0;i<array.length;i++){
    rowData = getTable.insertRow(i+2);
    cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap;
    cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
    cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
  }
}



// SET EXACT FIRST HALF GOALS
let exactFirstHalfGoals = data.half.sp["exact_1st_half_goals"]

if(typeof exactFirstHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
    table.setAttribute("class", "table");
          table.setAttribute("id", "exactFirstHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("exactFirstHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = exactFirstHalfGoals.name;

   // CREATE ODD ROW                   // ISNERT DATA
   for(let i=0;i<exactFirstHalfGoals.odds.length;i++){
   rowData = getTable.insertRow(i+1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =exactFirstHalfGoals.odds[i].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =exactFirstHalfGoals.odds[i].odds;
    }
}


    // SET FIRST HALF CORNERS
let firstHalfCorners = data.half.sp.first_half_corners

if(typeof firstHalfCorners !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "firstHalfCorners");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("firstHalfCorners")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = firstHalfCorners.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = firstHalfCorners.odds[0].name;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = firstHalfCorners.odds[1].name;
   cell4 = rowData.insertCell(3);   cell4.innerHTML = firstHalfCorners.odds[2].name;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = firstHalfCorners.odds[0].handicap;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = firstHalfCorners.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = firstHalfCorners.odds[1].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML = firstHalfCorners.odds[2].odds;
}



 // SET FIRST HALF ASIAN CORNERS
let firstHalfAC = data.half.sp["1st_half_asian_corners"]

  if(typeof firstHalfAC !== "undefined"){
   // CREATE TABLE
   table=  document.createElement("table");
     table.setAttribute("class", "table");
           table.setAttribute("id", "firstHalfAC");
          document.getElementById("apst").appendChild(table);

   getTable= document.getElementById("firstHalfAC")

   // CREATE TITLE ROW
    rowHead = getTable.insertRow(0);
    rowHead.setAttribute("class", "title")
    cell1 = rowHead.insertCell(0);
    cell1.setAttribute("colspan","3");
    cell1.innerHTML = firstHalfAC.name;

    // CREATE HEADER ROW               // INSERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);
     cell2 = rowData.insertCell(1);   cell2.innerHTML = firstHalfAC.odds[0].header;
     cell3 = rowData.insertCell(2);   cell3.innerHTML = firstHalfAC.odds[1].header;

     // INSERT DATA
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =firstHalfAC.odds[0].handicap;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =firstHalfAC.odds[0].odds;
     cell3 = rowData.insertCell(2);     cell3.innerHTML =firstHalfAC.odds[1].odds;
}



    // SET FIRST HALF GOALS ODD /EVEN
let firstHalfGoalsOddEven=data.half.sp["1st_half_goals_odd_even"]
 if(typeof firstHalfGoalsOddEven !== "undefined"){
    // CREATE TABLE firstHalfGoalsOddEven
    table=  document.createElement("table");
      table.setAttribute("class", "table");
            table.setAttribute("id", "firstHalfGoalsOddEven");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("firstHalfGoalsOddEven")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = firstHalfGoalsOddEven.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =firstHalfGoalsOddEven.odds[0].name + " " +  firstHalfGoalsOddEven.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =firstHalfGoalsOddEven.odds[1].name + " " +  firstHalfGoalsOddEven.odds[1].odds;
}



// SET TO SCORE IN HALF
    let toScoreInHalf = data.half.sp.to_score_in_half

    if(typeof toScoreInHalf !== "undefined"){
     // CREATE TABLE
     table=  document.createElement("table");
             table.setAttribute("id", "toScoreInHalf");
            document.getElementById("apst").appendChild(table);

     getTable= document.getElementById("toScoreInHalf")

     // CREATE TITLE ROW
      rowHead = getTable.insertRow(0);
      rowHead.setAttribute("class", "title")
      cell1 = rowHead.insertCell(0);
      cell1.setAttribute("colspan","3");
      cell1.innerHTML = toScoreInHalf.name;

      // SET ODD ARRAYS
       let array=[]; let array2=[]
           for(let i=0;i<toScoreInHalf.odds.length;i++){
             if(toScoreInHalf.odds[i].header=="Yes") array.push(toScoreInHalf.odds[i])
             else if(toScoreInHalf.odds[i].header=="No") array2.push(toScoreInHalf.odds[i])
           }

           // CREATE HEADER ROW               // INSERT DATA
            rowData = getTable.insertRow(1);
            cell1 = rowData.insertCell(0);
            cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
            cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

            // CREATE ODD ROW                   // ISNERT DATA
            counter =2
            for(let i=0; i<toScoreInHalf.odds.length/2;i++){
            rowData = getTable.insertRow(counter);
            counter++;
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].name;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].team +" "+ array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].team +" "+ array2[i].odds;
            }
}



// SET HALF WITH MOST GOALS
let halfWithMostGoals = data.half.sp.half_with_most_goals

if(typeof halfWithMostGoals !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "halfWithMostGoals");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("halfWithMostGoals")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = halfWithMostGoals.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =halfWithMostGoals.odds[0].name +" "+ halfWithMostGoals.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =halfWithMostGoals.odds[1].name +" "+ halfWithMostGoals.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =halfWithMostGoals.odds[2].name +" "+ halfWithMostGoals.odds[2].odds;
}


// SET HOME TEAM HIGHEST SCORING half
let homeTeamHighestScoringHalf = data.half.sp.home_team_highest_scoring_half

if(typeof homeTeamHighestScoringHalf !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "homeTeamHighestScoringHalf");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("homeTeamHighestScoringHalf")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = homeTeamHighestScoringHalf.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =homeTeamHighestScoringHalf.odds[0].name +" "+ homeTeamHighestScoringHalf.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =homeTeamHighestScoringHalf.odds[1].name +" "+ homeTeamHighestScoringHalf.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =homeTeamHighestScoringHalf.odds[2].name +" "+ homeTeamHighestScoringHalf.odds[2].odds;
}




// SET AWAY TEAM HIGHEST SCORING half
let awayTeamHighestScoringHalf = data.half.sp.away_team_highest_scoring_half

if(typeof awayTeamHighestScoringHalf !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "awayTeamHighestScoringHalf");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("awayTeamHighestScoringHalf")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = awayTeamHighestScoringHalf.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =awayTeamHighestScoringHalf.odds[0].name +" "+ awayTeamHighestScoringHalf.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =awayTeamHighestScoringHalf.odds[1].name +" "+ awayTeamHighestScoringHalf.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =awayTeamHighestScoringHalf.odds[2].name +" "+ awayTeamHighestScoringHalf.odds[2].odds;
}



// SET SECOND HALF RESULT
let secondHalfResult = data.half.sp["2nd_half_result"]

if(typeof secondHalfResult !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "secondHalfResult");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("secondHalfResult")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = secondHalfResult.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =secondHalfResult.odds[0].name +" "+ secondHalfResult.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =secondHalfResult.odds[1].name +" "+ secondHalfResult.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =secondHalfResult.odds[2].name +" "+ secondHalfResult.odds[2].odds;
}



// SET SECOND HALF GOALS
let secondHalfGoals = data.half.sp["2nd_half_goals"]

if(typeof secondHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "secondHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("secondHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = secondHalfGoals.name;

   // SET ODD ARRAYS
    let array=[]; let array2=[];
        for(let i=0;i<secondHalfGoals.odds.length;i++){
          if(secondHalfGoals.odds[i].header=="Over") array.push(secondHalfGoals.odds[i])
          else if(secondHalfGoals.odds[i].header=="Under") array2.push(secondHalfGoals.odds[i])
        }

   // CREATE HEADER ROW               // INSERT DATA
    rowData = getTable.insertRow(1);
    cell1 = rowData.insertCell(0);
    cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
    cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

    // CREATE ODD ROW                   // ISNERT DATA
    for(let i=0;i<array.length;i++){
    rowData = getTable.insertRow(i+2);
    cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap;
    cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
    cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
  }
}



// SET EXACT SECOND HALF GOALS
let exactSecondHalfGoals = data.half.sp["exact_2nd_half_goals"]

if(typeof exactSecondHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "exactSecondHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("exactSecondHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = exactSecondHalfGoals.name;

   // CREATE ODD ROW                   // ISNERT DATA
   for(let i=0;i<exactSecondHalfGoals.odds.length;i++){
   rowData = getTable.insertRow(i+1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =exactSecondHalfGoals.odds[i].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =exactSecondHalfGoals.odds[i].odds;
    }
}




// SET SECOND HALF GOALS ODD /EVEN
let secondHalfGoalsOddEven=data.half.sp["2nd_half_goals_odd_even"]
if(typeof secondHalfGoalsOddEven !== "undefined"){
// CREATE TABLE secondHalfGoalsOddEven
table=  document.createElement("table");
        table.setAttribute("id", "secondHalfGoalsOddEven");
       document.getElementById("apst").appendChild(table);

getTable= document.getElementById("secondHalfGoalsOddEven")

// CREATE TITLE ROW

 rowHead = getTable.insertRow(0);
 rowHead.setAttribute("class", "title")
 cell1 = rowHead.insertCell(0);
 cell1.setAttribute("colspan","2");
 cell1.innerHTML = secondHalfGoalsOddEven.name;

 // CREATE ODD ROW                   // ISNERT DATA
 rowData = getTable.insertRow(1);
 cell1 = rowData.insertCell(0);     cell1.innerHTML =secondHalfGoalsOddEven.odds[0].name + " " +  secondHalfGoalsOddEven.odds[0].odds;
 cell2 = rowData.insertCell(1);     cell2.innerHTML =secondHalfGoalsOddEven.odds[1].name + " " +  secondHalfGoalsOddEven.odds[1].odds;
  }
}
}



// THIS FUNCTION WILL GET GOALS ODDS
      const goalOdds= function(){




        if(typeof data.goals !== "undefined"){






 
// var lp = 0;
// for (const [key, value] of Object.entries(data.goals.sp)) {
//   lp++;
//   console.log(key);

// console.log(value);

// var sss = value;
//   if(typeof sss !== "undefined"){
// // CREATE TABLE PSA
// table=  document.createElement("table");
//   table.setAttribute("class", "table");
//       table.setAttribute("id", key);
//     document.getElementById("apst").appendChild(table);

// getTable= document.getElementById(key)

// // CREATE TITLE ROW
// rowHead = getTable.insertRow(0);
// rowHead.setAttribute("class", "title")
// cell1 = rowHead.insertCell(0);
// cell1.setAttribute("colspan","3");
// cell1.innerHTML = value.name;



// rowData = getTable.insertRow(1);


//   if(typeof sss.odds[0].header !== "undefined"){

//    var ccps = sss.odds.length;
//    var cpkps = parseInt(ccps) / 2;
   

// var ssss = rowData.insertCell(sss.odds[0]);   ssss.innerHTML =  sss.odds[0].header;

// ssss.setAttribute("colspan",cpkps);


// var pppp = rowData.insertCell(sss.odds[1]);   pppp.innerHTML =  sss.odds[1].header;

// pppp.setAttribute("colspan",cpkps);
//  }


// rowData = getTable.insertRow(2);
// for (var i = 0; i < sss.odds.length; i++) {


  
// var celc1 = rowData.insertCell(sss.odds[i]);   celc1.innerHTML = sss.odds[i].name;
// }



// // CREATE ODD ROW                   // ISNERT DATA
// rowData = getTable.insertRow(3);

// for (var i = 0; i < sss.odds.length; i++) {
  
// var celt2 = rowData.insertCell(sss.odds[i]);   celt2.innerHTML = sss.odds[i].odds;
// }

// }


// }

        //  SET GOALS OVER/UNDER
            let goalsOU=data.goals.sp.goals_over_under
            if(typeof goalsOU !== "undefined"){
            // CREATE TABLE htFT
               table=  document.createElement("table");
                       table.setAttribute("id", "goalsOU");
                      document.getElementById("apst").appendChild(table);

               getTable= document.getElementById("goalsOU")

               // CREATE TITLE ROW
                rowHead = getTable.insertRow(0);
                rowHead.setAttribute("class", "title")
                cell1 = rowHead.insertCell(0);
                cell1.setAttribute("colspan","3");
                cell1.innerHTML = goalsOU.name;

                // CREATE HEADER ROW               // INSERT DATA
                 rowData = getTable.insertRow(1);
                 cell1 = rowData.insertCell(0);
                 cell2 = rowData.insertCell(1);   cell2.innerHTML = goalsOU.odds[0].header;
                 cell3 = rowData.insertCell(2);   cell3.innerHTML = goalsOU.odds[1].header;

                 // CREATE ODD ROW                   // ISNERT DATA
                 rowData = getTable.insertRow(2);
                 cell1 = rowData.insertCell(0);     cell1.innerHTML = goalsOU.odds[0].name;
                 cell2 = rowData.insertCell(1);     cell2.innerHTML = goalsOU.odds[0].odds;
                 cell3 = rowData.insertCell(2);     cell3.innerHTML = goalsOU.odds[1].odds;
        }



        // SET FIRST HALF GOALS
        let alternativeTotalGoals = data.goals.sp["alternative_total_goals"]

        if(typeof alternativeTotalGoals !== "undefined"){
          // CREATE TABLE alternative GL
          table=  document.createElement("table");
                  table.setAttribute("id", "alternativeTotalGoals");
                 document.getElementById("apst").appendChild(table);

          getTable= document.getElementById("alternativeTotalGoals")

          // CREATE TITLE ROW
           rowHead = getTable.insertRow(0);
           rowHead.setAttribute("class", "title")
           cell1 = rowHead.insertCell(0);
           cell1.setAttribute("colspan","3");
           cell1.innerHTML = alternativeTotalGoals.name;

           // SET ODD ARRAYS
            let array=[]; let array2=[];
                for(let i=0;i<alternativeTotalGoals.odds.length;i++){
                  if(alternativeTotalGoals.odds[i].header=="Over") array.push(alternativeTotalGoals.odds[i])
                  else if(alternativeTotalGoals.odds[i].header=="Under") array2.push(alternativeTotalGoals.odds[i])
                }

           // CREATE HEADER ROW               // INSERT DATA
            rowData = getTable.insertRow(1);
            cell1 = rowData.insertCell(0);
            cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
            cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

            // CREATE ODD ROW                   // ISNERT DATA
            for(let i=0;i<array.length;i++){
            rowData = getTable.insertRow(i+2);
            cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap;
            cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
            cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
          }
        }




        // SET RESULT TOTAL GOALS
        let resultTotalGoals = data.goals.sp.result_total_goals

        if(typeof resultTotalGoals !== "undefined"){
         // CREATE TABLE
         table=  document.createElement("table");
                 table.setAttribute("id", "resultTotalGoals");
                document.getElementById("apst").appendChild(table);

         getTable= document.getElementById("resultTotalGoals")

         // CREATE TITLE ROW
          rowHead = getTable.insertRow(0);
          rowHead.setAttribute("class", "title")
          cell1 = rowHead.insertCell(0);
          cell1.setAttribute("colspan","2");
          cell1.innerHTML = resultTotalGoals.name;

               // CREATE ODD ROW                   // ISNERT DATA
               for(let i=0; i<resultTotalGoals.odds.length;i++){
               rowData = getTable.insertRow(i+1);
               cell1 = rowData.insertCell(0);     cell1.innerHTML =resultTotalGoals.odds[i].name;
               cell2 = rowData.insertCell(1);     cell2.innerHTML =resultTotalGoals.odds[i].odds;
               }
        }




// TOTAL GOALS BOTH TEAMS TO SCORE
let totalGoalsBTTS=data.goals.sp["total_goals_both_teams_to_score"]
 if(typeof totalGoalsBTTS !== "undefined"){
    // CREATE TABLE totalGoalsBTTS
    table=  document.createElement("table");
            table.setAttribute("id", "totalGoalsBTTS");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("totalGoalsBTTS")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = totalGoalsBTTS.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =totalGoalsBTTS.odds[0].name + " " +  totalGoalsBTTS.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =totalGoalsBTTS.odds[1].name + " " +  totalGoalsBTTS.odds[1].odds;
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =totalGoalsBTTS.odds[2].name + " " +  totalGoalsBTTS.odds[2].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =totalGoalsBTTS.odds[3].name + " " +  totalGoalsBTTS.odds[3].odds;
}



// EXACT TOTAL GOALS
let exactTotalGoals = data.goals.sp["exact_total_goals"]

if(typeof exactTotalGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "exactTotalGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("exactTotalGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = exactTotalGoals.name;

   // CREATE ODD ROW                   // ISNERT DATA
   for(let i=0;i<exactTotalGoals.odds.length;i++){
   rowData = getTable.insertRow(i+1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =exactTotalGoals.odds[i].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =exactTotalGoals.odds[i].odds;
    }
}



// NUMBER OF GOALS IN MATCH
let numberOfGoalsInMatch = data.goals.sp["number_of_goals_in_match"]

if(typeof numberOfGoalsInMatch !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "numberOfGoalsInMatch");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("numberOfGoalsInMatch")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = numberOfGoalsInMatch.name;

   // CREATE ROW INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =numberOfGoalsInMatch.odds[0].name +" "+ numberOfGoalsInMatch.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =numberOfGoalsInMatch.odds[1].name +" "+ numberOfGoalsInMatch.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =numberOfGoalsInMatch.odds[2].name +" "+ numberOfGoalsInMatch.odds[2].odds;
}


// SET BOTH TEAMS TO SCORE
let bothTeamsTS=data.goals.sp.both_teams_to_score
 if(typeof bothTeamsTS !== "undefined"){
    // CREATE TABLE bothTeamsTS
    table=  document.createElement("table");
            table.setAttribute("id", "bothTeamsTS");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTS")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTS.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTS.odds[0].name + " " +  bothTeamsTS.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTS.odds[1].name + " " +  bothTeamsTS.odds[1].odds;
}



// TEAMS TO SCORE
let teamsToScore=data.goals.sp["teams_to_score"]
 if(typeof teamsToScore !== "undefined"){
    // CREATE TABLE teamsToScore
    table=  document.createElement("table");
            table.setAttribute("id", "teamsToScore");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("teamsToScore")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = teamsToScore.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =teamsToScore.odds[0].name + " " +  teamsToScore.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =teamsToScore.odds[1].name + " " +  teamsToScore.odds[1].odds;
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =teamsToScore.odds[2].name + " " +  teamsToScore.odds[2].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =teamsToScore.odds[3].name + " " +  teamsToScore.odds[3].odds;
}



// SET BOTH TEAMS TO SCORE IN FIRST HALF

let bothTeamsTSFH=data.goals.sp["both_teams_to_score_in_1st_half"]
 if(typeof bothTeamsTSFH !== "undefined"){
    // CREATE TABLE bothTeamsTSFH
    table=  document.createElement("table");
            table.setAttribute("id", "bothTeamsTSFH");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTSFH")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTSFH.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSFH.odds[0].name + " " +  bothTeamsTSFH.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSFH.odds[1].name + " " +  bothTeamsTSFH.odds[1].odds;
}



// SET BOTH TEAMS TO SCORE IN SECOND HALF

let bothTeamsTSSH=data.goals.sp["both_teams_to_score_in_2nd_half"]
 if(typeof bothTeamsTSSH !== "undefined"){
    // CREATE TABLE bothTeamsTSSH
    table=  document.createElement("table");
            table.setAttribute("id", "bothTeamsTSSH");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTSSH")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTSSH.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSSH.odds[0].name + " " +  bothTeamsTSSH.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSSH.odds[1].name + " " +  bothTeamsTSSH.odds[1].odds;
}


// SET BOTH TEAMS TO SCORE FIRST HALF/ SECOND HALF
let bothTeamsTSFSH=data.goals.sp["both_teams_to_score_1st_half_2nd_half"]
 if(typeof bothTeamsTSFSH !== "undefined"){
    // CREATE TABLE bothTeamsTSFSH
    table=  document.createElement("table");
            table.setAttribute("id", "bothTeamsTSFSH");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("bothTeamsTSFSH")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = bothTeamsTSFSH.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSFSH.odds[0].name + " " +  bothTeamsTSFSH.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSFSH.odds[1].name + " " +  bothTeamsTSFSH.odds[1].odds;
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =bothTeamsTSFSH.odds[2].name + " " +  bothTeamsTSFSH.odds[2].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =bothTeamsTSFSH.odds[3].name + " " +  bothTeamsTSFSH.odds[3].odds;
}




// SET FIRST HALF GOALS
let firstHalfGoals = data.goals.sp["first_half_goals"]

if(typeof firstHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "firstHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("firstHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = firstHalfGoals.name;

   // SET ODD ARRAYS
    let array=[]; let array2=[];
        for(let i=0;i<firstHalfGoals.odds.length;i++){
          if(firstHalfGoals.odds[i].header=="Over") array.push(firstHalfGoals.odds[i])
          else if(firstHalfGoals.odds[i].header=="Under") array2.push(firstHalfGoals.odds[i])
        }

   // CREATE HEADER ROW               // INSERT DATA
    rowData = getTable.insertRow(1);
    cell1 = rowData.insertCell(0);
    cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
    cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

    // CREATE ODD ROW                   // ISNERT DATA
    for(let i=0;i<array.length;i++){
    rowData = getTable.insertRow(i+2);
    cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap;
    cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
    cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
  }
}



// SET EXACT FIRST HALF GOALS
let exactFirstHalfGoals = data.goals.sp["exact_1st_half_goals"]

if(typeof exactFirstHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "exactFirstHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("exactFirstHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = exactFirstHalfGoals.name;

   // CREATE ODD ROW                   // ISNERT DATA
   for(let i=0;i<exactFirstHalfGoals.odds.length;i++){
   rowData = getTable.insertRow(i+1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =exactFirstHalfGoals.odds[i].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =exactFirstHalfGoals.odds[i].odds;
    }
}




// SET TOTAL GOALS MINUTES

let totalGoalMinutes = data.goals.sp["total_goal_minutes"]

if(typeof totalGoalMinutes !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "totalGoalMinutes");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("totalGoalMinutes")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = totalGoalMinutes.name;

   // CREATE ROW INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =totalGoalMinutes.odds[0].name+" "+ totalGoalMinutes.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =totalGoalMinutes.odds[1].name+" "+ totalGoalMinutes.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =totalGoalMinutes.odds[2].name+" "+ totalGoalMinutes.odds[2].odds;
}



// SET FIRST TEAM TO SCORE
let firstTeamToScore = data.goals.sp["first_team_to_score"]

if(typeof firstTeamToScore !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "firstTeamToScore");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("firstTeamToScore")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = firstTeamToScore.name;

   // CREATE ROW INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =firstTeamToScore.odds[0].name+" "+ firstTeamToScore.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =firstTeamToScore.odds[1].name+" "+ firstTeamToScore.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =firstTeamToScore.odds[2].name+" "+ firstTeamToScore.odds[2].odds;
}



// SET FIRST GOAL METHOD
let firstGoalMethod = data.goals.sp["first_goal_method"]

if(typeof firstGoalMethod !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "firstGoalMethod");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("firstGoalMethod")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = firstGoalMethod.name;

   // CREATE ROW INSERT DATA
   let counter=1
    for(let i=0;i<firstGoalMethod.odds.length;i+=3){
   rowData = getTable.insertRow(counter);
   counter++;
   cell1 = rowData.insertCell(0);     cell1.innerHTML =firstGoalMethod.odds[i].name+" "+ firstGoalMethod.odds[i].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =firstGoalMethod.odds[i+1].name+" "+ firstGoalMethod.odds[i+1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =firstGoalMethod.odds[i+2].name+" "+ firstGoalMethod.odds[i+2].odds;
 }
}



// SET EARLY GOAL
let earlyGoal = data.goals.sp["early_goal"]

if(typeof earlyGoal !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "earlyGoal");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("earlyGoal")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = earlyGoal.name;

   // CREATE ROW AND INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =earlyGoal.odds[0].name+" "+ earlyGoal.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =earlyGoal.odds[1].name+" "+ earlyGoal.odds[1].odds;
}


/// SET Late GOAL
let lateGoal = data.goals.sp["late_goal"]

if(typeof lateGoal !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "lateGoal");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("lateGoal")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = lateGoal.name;

   // CREATE ROW AND INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =lateGoal.odds[0].name+" "+ lateGoal.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =lateGoal.odds[1].name+" "+ lateGoal.odds[1].odds;
}


// SET TIME OF FIRST GOAL BRACKETS
let timeOfFirstGoalBrackets = data.goals.sp["time_of_first_goal_brackets"]

if(typeof timeOfFirstGoalBrackets !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "timeOfFirstGoalBrackets");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("timeOfFirstGoalBrackets")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = timeOfFirstGoalBrackets.name;

   // CREATE ODD ROW                   // ISNERT DATA
   for(let i=0;i<timeOfFirstGoalBrackets.odds.length;i++){
   rowData = getTable.insertRow(i+1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =timeOfFirstGoalBrackets.odds[i].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =timeOfFirstGoalBrackets.odds[i].odds;
    }
}





// SET SECOND HALF GOALS
let secondHalfGoals = data.goals.sp["2nd_half_goals"]

if(typeof secondHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "secondHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("secondHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = secondHalfGoals.name;

   // SET ODD ARRAYS
    let array=[]; let array2=[];
        for(let i=0;i<secondHalfGoals.odds.length;i++){
          if(secondHalfGoals.odds[i].header=="Over") array.push(secondHalfGoals.odds[i])
          else if(secondHalfGoals.odds[i].header=="Under") array2.push(secondHalfGoals.odds[i])
        }

   // CREATE HEADER ROW               // INSERT DATA
    rowData = getTable.insertRow(1);
    cell1 = rowData.insertCell(0);
    cell2 = rowData.insertCell(1);   cell2.innerHTML = array[0].header;
    cell3 = rowData.insertCell(2);   cell3.innerHTML = array2[0].header;

    // CREATE ODD ROW                   // ISNERT DATA
    for(let i=0;i<array.length;i++){
    rowData = getTable.insertRow(i+2);
    cell1 = rowData.insertCell(0);     cell1.innerHTML =array[i].handicap;
    cell2 = rowData.insertCell(1);     cell2.innerHTML =array[i].odds;
    cell3 = rowData.insertCell(2);     cell3.innerHTML =array2[i].odds;
  }
}



// SET EXACT SECOND HALF GOALS
let exactSecondHalfGoals = data.goals.sp["exact_2nd_half_goals"]

if(typeof exactSecondHalfGoals !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "exactSecondHalfGoals");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("exactSecondHalfGoals")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = exactSecondHalfGoals.name;

   // CREATE ODD ROW                   // ISNERT DATA
   for(let i=0;i<exactSecondHalfGoals.odds.length;i++){
   rowData = getTable.insertRow(i+1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =exactSecondHalfGoals.odds[i].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =exactSecondHalfGoals.odds[i].odds;
    }
}




// SET HALF WITH MOST GOALS
let halfWithMostGoals = data.goals.sp.half_with_most_goals

if(typeof halfWithMostGoals !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "halfWithMostGoals");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("halfWithMostGoals")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = halfWithMostGoals.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =halfWithMostGoals.odds[0].name +" "+ halfWithMostGoals.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =halfWithMostGoals.odds[1].name +" "+ halfWithMostGoals.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =halfWithMostGoals.odds[2].name +" "+ halfWithMostGoals.odds[2].odds;
}


// SET HOME TEAM HIGHEST SCORING half
let homeTeamHighestScoringHalf = data.goals.sp.home_team_highest_scoring_half

if(typeof homeTeamHighestScoringHalf !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "homeTeamHighestScoringHalf");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("homeTeamHighestScoringHalf")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = homeTeamHighestScoringHalf.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =homeTeamHighestScoringHalf.odds[0].name +" "+ homeTeamHighestScoringHalf.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =homeTeamHighestScoringHalf.odds[1].name +" "+ homeTeamHighestScoringHalf.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =homeTeamHighestScoringHalf.odds[2].name +" "+ homeTeamHighestScoringHalf.odds[2].odds;
}




// SET AWAY TEAM HIGHEST SCORING half
let awayTeamHighestScoringHalf = data.goals.sp.away_team_highest_scoring_half

if(typeof awayTeamHighestScoringHalf !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "awayTeamHighestScoringHalf");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("awayTeamHighestScoringHalf")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = awayTeamHighestScoringHalf.name;

        // CREATE ODD ROW                   // ISNERT DATA
        rowData = getTable.insertRow(1);
        cell1 = rowData.insertCell(0);     cell1.innerHTML =awayTeamHighestScoringHalf.odds[0].name +" "+ awayTeamHighestScoringHalf.odds[0].odds;
        cell2 = rowData.insertCell(1);     cell2.innerHTML =awayTeamHighestScoringHalf.odds[1].name +" "+ awayTeamHighestScoringHalf.odds[1].odds;
        cell3 = rowData.insertCell(2);     cell3.innerHTML =awayTeamHighestScoringHalf.odds[2].name +" "+ awayTeamHighestScoringHalf.odds[2].odds;
}




// SET CLEAN SHEET
let cleanSheet = data.goals.sp.clean_sheet

if(typeof cleanSheet !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "cleanSheet");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("cleanSheet")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = cleanSheet.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =cleanSheet.odds[0].name + " "+ cleanSheet.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =cleanSheet.odds[1].name + " "+ cleanSheet.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =cleanSheet.odds[2].name + " "+ cleanSheet.odds[2].odds;
   cell4 = rowData.insertCell(3);     cell4.innerHTML =cleanSheet.odds[3].name + " "+ cleanSheet.odds[3].odds;
}



// SET TEAMS TOTAL GOALS
let teamTotalGoals = data.goals.sp.team_total_goals

if(typeof teamTotalGoals !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "teamTotalGoals");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("teamTotalGoals")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","4");
  cell1.innerHTML = teamTotalGoals.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0); cell1.setAttribute("colspan","2");   cell1.innerHTML = "HOME"
   cell2 = rowData.insertCell(1); cell2.setAttribute("colspan","2");   cell2.innerHTML = "AWAY";


   // SET ODD ARRAYS
    let array=[]; let array2=[];
        for(let i=0;i<teamTotalGoals.odds.length;i++){
          if(teamTotalGoals.odds[i].header=="1") array.push(teamTotalGoals.odds[i])
          else if(teamTotalGoals.odds[i].header=="2") array2.push(teamTotalGoals.odds[i])
        }

   // INSERT DATA
    let counter=2
    let max=Math.max(array.length,array2.length)
    for(let i=0;i<max;i+=2){
   rowData = getTable.insertRow(counter);
   counter++;
   cell1 = rowData.insertCell(0);  if(typeof array[i]  !== "undefined")   cell1.innerHTML =array[i].name + " "+ array[i].odds;
   cell2 = rowData.insertCell(1);   if(typeof array[i] !== "undefined")  cell2.innerHTML =array[i+1].name + " "+ array[i+1].odds;
   cell3 = rowData.insertCell(2);   if(typeof array2[i] !== "undefined")  cell3.innerHTML =array2[i].name + " "+ array2[i].odds;
   cell4 = rowData.insertCell(3);   if(typeof array2[i] !== "undefined")  cell4.innerHTML =array2[i+1].name + " "+ array2[i+1].odds;
  }
}



// SET HOME TEAM EXACT GOALS
let homeTeamExactGoals=data.goals.sp["home_team_exact_goals"]
 if(typeof homeTeamExactGoals !== "undefined"){
    // CREATE TABLE homeTeamExactGoals
    table=  document.createElement("table");
            table.setAttribute("id", "homeTeamExactGoals");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("homeTeamExactGoals")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = homeTeamExactGoals.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =homeTeamExactGoals.odds[0].name + " " +  homeTeamExactGoals.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =homeTeamExactGoals.odds[1].name + " " +  homeTeamExactGoals.odds[1].odds;
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =homeTeamExactGoals.odds[2].name + " " +  homeTeamExactGoals.odds[2].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =homeTeamExactGoals.odds[3].name + " " +  homeTeamExactGoals.odds[3].odds;
}



// AWAY TEAM EXACT GOALS
let awayTeamExactGoals=data.goals.sp["away_team_exact_goals"]
 if(typeof awayTeamExactGoals !== "undefined"){
    // CREATE TABLE awayTeamExactGoals
    table=  document.createElement("table");
            table.setAttribute("id", "awayTeamExactGoals");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("awayTeamExactGoals")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = awayTeamExactGoals.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =awayTeamExactGoals.odds[0].name + " " +  awayTeamExactGoals.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =awayTeamExactGoals.odds[1].name + " " +  awayTeamExactGoals.odds[1].odds;
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =awayTeamExactGoals.odds[2].name + " " +  awayTeamExactGoals.odds[2].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =awayTeamExactGoals.odds[3].name + " " +  awayTeamExactGoals.odds[3].odds;
}



// SET TIME OF FIRST TEAM GOAL
let timeOfFirstTeamGoal=data.goals.sp["time_of_1st_team_goal"]
 if(typeof timeOfFirstTeamGoal !== "undefined"){
    // CREATE TABLE timeOfFirstTeamGoal
    table=  document.createElement("table");
            table.setAttribute("id", "timeOfFirstTeamGoal");
           document.getElementById("apst").appendChild(table);

    getTable= document.getElementById("timeOfFirstTeamGoal")

    // CREATE TITLE ROW

     rowHead = getTable.insertRow(0);
     rowHead.setAttribute("class", "title")
     cell1 = rowHead.insertCell(0);
     cell1.setAttribute("colspan","2");
     cell1.innerHTML = timeOfFirstTeamGoal.name;

     // CREATE ODD ROW                   // ISNERT DATA
     rowData = getTable.insertRow(1);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =timeOfFirstTeamGoal.odds[0].name + " " +  timeOfFirstTeamGoal.odds[0].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =timeOfFirstTeamGoal.odds[1].name + " " +  timeOfFirstTeamGoal.odds[1].odds;
     rowData = getTable.insertRow(2);
     cell1 = rowData.insertCell(0);     cell1.innerHTML =timeOfFirstTeamGoal.odds[2].name + " " +  timeOfFirstTeamGoal.odds[2].odds;
     cell2 = rowData.insertCell(1);     cell2.innerHTML =timeOfFirstTeamGoal.odds[3].name + " " +  timeOfFirstTeamGoal.odds[3].odds;
}




// SET GOALS ODD EVEN
let goalsOddEven = data.goals.sp["goals_odd_even"]

if(typeof goalsOddEven !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "goalsOddEven");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("goalsOddEven")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = goalsOddEven.name;

   // CREATE ROW AND INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =goalsOddEven.odds[0].name+" "+ goalsOddEven.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =goalsOddEven.odds[1].name+" "+ goalsOddEven.odds[1].odds;
}


// SET HOME TEAM GOALS ODD EVEN
let homeTeamGoalsOddEven = data.goals.sp["home_team_odd_even_goals"]

if(typeof homeTeamGoalsOddEven !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
     table.setAttribute("class", "tabel");
          table.setAttribute("id", "homeTeamGoalsOddEven");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("homeTeamGoalsOddEven")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = homeTeamGoalsOddEven.name;

   // CREATE ROW AND INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =homeTeamGoalsOddEven.odds[0].name+" "+ homeTeamGoalsOddEven.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =homeTeamGoalsOddEven.odds[1].name+" "+ homeTeamGoalsOddEven.odds[1].odds;
}



// SET AWAY TEAM GOALS ODD EVEN
let awayTeamGoalsOddEven = data.goals.sp["away_team_odd_even_goals"]

if(typeof awayTeamGoalsOddEven !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
     table.setAttribute("class", "tabel");
          table.setAttribute("id", "awayTeamGoalsOddEven");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("awayTeamGoalsOddEven")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = awayTeamGoalsOddEven.name;

   // CREATE ROW AND INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =awayTeamGoalsOddEven.odds[0].name+" "+ awayTeamGoalsOddEven.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =awayTeamGoalsOddEven.odds[1].name+" "+ awayTeamGoalsOddEven.odds[1].odds;
}



// SET FIRST HALF GOALS ODD EVEN
let firstHalfGoalsOddEven = data.goals.sp["1st_half_goals_odd_even"]

if(typeof firstHalfGoalsOddEven !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
     table.setAttribute("class", "tabel");
          table.setAttribute("id", "firstHalfGoalsOddEven");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("firstHalfGoalsOddEven")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","2");
   cell1.innerHTML = firstHalfGoalsOddEven.name;

   // CREATE ROW AND INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =firstHalfGoalsOddEven.odds[0].name+" "+ firstHalfGoalsOddEven.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =firstHalfGoalsOddEven.odds[1].name+" "+ firstHalfGoalsOddEven.odds[1].odds;
}



// SET LAST TEAM TO SCORE
let lastTeamToScore = data.goals.sp["last_team_to_score"]

if(typeof lastTeamToScore !== "undefined"){
  // CREATE TABLE alternative GL
  table=  document.createElement("table");
          table.setAttribute("id", "lastTeamToScore");
             table.setAttribute("class", "tabel");
         document.getElementById("apst").appendChild(table);

  getTable= document.getElementById("lastTeamToScore")

  // CREATE TITLE ROW
   rowHead = getTable.insertRow(0);
   rowHead.setAttribute("class", "title")
   cell1 = rowHead.insertCell(0);
   cell1.setAttribute("colspan","3");
   cell1.innerHTML = lastTeamToScore.name;

   // CREATE ROW AND INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);     cell1.innerHTML =lastTeamToScore.odds[0].name+" "+ lastTeamToScore.odds[0].odds;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =lastTeamToScore.odds[1].name+" "+ lastTeamToScore.odds[1].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =lastTeamToScore.odds[2].name+" "+ lastTeamToScore.odds[2].odds;
}



// SET FIRST 10 MINUTES GOAL
let goalsFirstTenMins = data.goals.sp["first_10_minutes_(00:00_09:59)"]

if(typeof goalsFirstTenMins !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
         table.setAttribute("id", "goalsFirstTenMins");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("goalsFirstTenMins")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = goalsFirstTenMins.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = goalsFirstTenMins.odds[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = goalsFirstTenMins.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = goalsFirstTenMins.odds[0].team;
   cell2 = rowData.insertCell(1);     cell2.innerHTML = goalsFirstTenMins.odds[0].handicap+" "+ goalsFirstTenMins.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML = goalsFirstTenMins.odds[1].handicap+" "+ goalsFirstTenMins.odds[1].odds;
}




// SET FIRST MINUTE goals
let goalsFirstMinute = data.goals.sp["first_minute_(00:00_00:59)"]

if(typeof goalsFirstMinute !== "undefined"){
 // CREATE TABLE
 table=  document.createElement("table");
 	table.setAttribute("class", "table");
         table.setAttribute("id", "goalsFirstMinute");
        document.getElementById("apst").appendChild(table);

 getTable= document.getElementById("goalsFirstMinute")

 // CREATE TITLE ROW
  rowHead = getTable.insertRow(0);
  rowHead.setAttribute("class", "title")
  cell1 = rowHead.insertCell(0);
  cell1.setAttribute("colspan","3");
  cell1.innerHTML = goalsFirstMinute.name;

  // CREATE HEADER ROW               // INSERT DATA
   rowData = getTable.insertRow(1);
   cell1 = rowData.insertCell(0);
   cell2 = rowData.insertCell(1);   cell2.innerHTML = goalsFirstMinute.odds[0].header;
   cell3 = rowData.insertCell(2);   cell3.innerHTML = goalsFirstMinute.odds[1].header;

   // INSERT DATA
   rowData = getTable.insertRow(2);
   cell1 = rowData.insertCell(0);     cell1.innerHTML = goalsFirstMinute.odds[0].name;
   cell2 = rowData.insertCell(1);     cell2.innerHTML =  goalsFirstMinute.odds[0].odds;
   cell3 = rowData.insertCell(2);     cell3.innerHTML =  goalsFirstMinute.odds[1].odds;
  }
}
}
      getFootballOdds("main")
