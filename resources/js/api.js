function iceHocky(){
            var api = "http://localhost/mgm/api/icehocky.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
           getrespo(response1.results[i].id);
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-08'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
          }
            document.getElementById("icehocky").innerHTML = tbltop;
            }
            };
            xmlhttp.send();
          }function baskerBall(){
            var api = "http://localhost/mgm/api/basketball.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
            getrespo(response1.results[i].id);
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-04'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
           }
            document.getElementById("basketball").innerHTML = tbltop;
            }
            };
            xmlhttp.send();
          }
          function tennis(){
            var api = "http://localhost/mgm/api/tennisapi.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){

                 getrespo(response1.results[i].id);
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-02'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
          }
           document.getElementById("tennis").innerHTML = tbltop;
            }
            };
            xmlhttp.send();
          }
          function vollyball(){
            var api = "http://localhost/mgm/api/vollyball.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){

                 getrespo(response1.results[i].id);
           
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-09'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
          }
            document.getElementById("vollyball").innerHTML = tbltop;
            }
            };
            xmlhttp.send();
          }


          function getrespo(id){



    

              var apis = "http://localhost/mgm/api/inplay-result.php";

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",apis  + "?id="+id ,true);
            xmlhttp.onreadystatechange = function() {
            
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var respct = JSON.parse(xmlhttp.responseText);


    console.log(respct['ICorner'][0]);
    console.log(respct['IGoal']);
    console.log(respct['IRedCard']);
    console.log(respct['IYellowCard']);

var ttps = parseInt(respct['IRedCard'][0]) + parseInt(respct['IYellowCard'][0]); 
var ttps2 = parseInt(respct['IRedCard'][1]) + parseInt(respct['IYellowCard'][1]); 
    var dtps = '<span class="sport-table-title-score"><span>'+respct['ICorner'][0]+'</span><span>'+respct['IGoal'][0]+'</span><span>'+ ttps +'</span></span><span class="sport-table-title-score"><span>'+respct['ICorner'][1]+'</span><span>'+respct['IGoal'][1]+'</span><span>'+ttps2+'</span></span>';

document.getElementById('tpss'+id).innerHTML = dtps;
                
                 }
             }
            xmlhttp.send();

          }
          function badminton(){
            var api = "http://localhost/mgm/api/badminton.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
          

           getrespo(response1.results[i].id);
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-03'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
           }
            document.getElementById("badminton").innerHTML = tbltop;
            }
            };
            xmlhttp.send();
          }
          function baseball(){
            var api = "http://localhost/mgm/api/baseball.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){

                 getrespo(response1.results[i].id);
          
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-05'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
          }
            document.getElementById("baseball").innerHTML = tbltop;
            }
            };
            xmlhttp.send();
          }
          function tableTennis(){
            var api = "http://localhost/mgm/api/tabletennis.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){

                 getrespo(response1.results[i].id);
           tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-06'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
             }
            document.getElementById("tableTennis").innerHTML = tbltop;
            }
            };
            xmlhttp.send();
          }
          function football(){
            var api = "http://localhost/mgm/api/football.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState === 4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){


                    getrespo(response1.results[i].id);
          
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/in-played-detail.php?id="+response1.results[i].id+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-07'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right' id='tpss"+response1.results[i].id+"'><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>0</span><span>0</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
           

            }
            document.getElementById("football").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          window.onload = function(){
            iceHocky();
            baskerBall();
            tennis();
            vollyball();
            badminton();
            baseball();
            tableTennis();
            football();
            
            
          }

          