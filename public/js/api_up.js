

function getresult(eveid){
eveid = "2579293";
                          const response=   fetch("https://bet365-sports-odds.p.rapidapi.com/v1/bet365/result?event_id="+eveid, {
                                                      "method": "GET",
                                                      "headers": {
                                                        "x-rapidapi-host": "bet365-sports-odds.p.rapidapi.com",
                                                        "x-rapidapi-key": "2154ae0934mshe44abfa1b9a3d90p1b74b0jsn1d50e61d0934"
                                                      }
                                                    })



                          console.log(response);

                                                  
  }
function tennisUp(){
            var api = "http://localhost/mgm/api/tennis_up.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
          
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/played-detail.php?id="+response1.results[i].id+"&name="+response1.results[i].home.name+' vs '+response1.results[i].away.name+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-06'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right'><span class='sport-table-title-score'><span>7</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
            }
            document.getElementById("tennis_upcome").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          function football_upcome(){
            var api = "http://localhost/mgm/api/football_upcome.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){

                var eventid = response1.results[i].our_event_id;
                getresult(eventid);
                console.log(response1.results[i])
         
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/played-detail.php?id="+response1.results[i].id+"&name="+response1.results[i].home.name+' vs '+response1.results[i].away.name+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-07'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right'><span class='sport-table-title-score'><span>7</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
            }
            document.getElementById("football_upcom").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          function baseballUp(){
            var api = "http://localhost/mgm/api/baseball_up.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
           
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/played-detail.php?id="+response1.results[i].id+"&name="+response1.results[i].home.name+' vs '+response1.results[i].away.name+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-09'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right'><span class='sport-table-title-score'><span>7</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
            }
            document.getElementById("baseball_up").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          function iceUp(){
            var api = "http://localhost/mgm/api/ice_up.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
          
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/played-detail.php?id="+response1.results[i].id+"&name="+response1.results[i].home.name+' vs '+response1.results[i].away.name+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-08'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right'><span class='sport-table-title-score'><span>7</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
             }
            document.getElementById("icehocky_up").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          function vollyUp(){
            var api = "http://localhost/mgm/api/vollyball_up.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
           
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/played-detail.php?id="+response1.results[i].id+"&name="+response1.results[i].home.name+' vs '+response1.results[i].away.name+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-09'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right'><span class='sport-table-title-score'><span>7</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
            }
            document.getElementById("vollyball_up").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          function basketUp(){
            var api = "http://localhost/mgm/api/basketball_up.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
          
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/played-detail.php?id="+response1.results[i].id+"&name="+response1.results[i].home.name+' vs '+response1.results[i].away.name+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-04'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right'><span class='sport-table-title-score'><span>7</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
            }
            document.getElementById("basket_up").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          function tabletennisUp(){
            var api = "http://localhost/mgm/api/tabletennis_up.php";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET",api  + "/all",true);
            xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState ===4 && xmlhttp.status ===200){
            var response1 = JSON.parse(xmlhttp.responseText);
            var tbltop="";
            for (i = 0; i < response1.results.length; i++){
           
            tbltop += "<div class='sport-table-header'><p id='personinfo'>"+response1.results[i].league.name+"</p></div><div class='sport-table'><div class='sport-table-tr'><a href='/mgm/played-detail.php?id="+response1.results[i].id+"&name="+response1.results[i].home.name+' vs '+response1.results[i].away.name+"'><div class='row sport-row align-items-center row-15'><div class='col-sm-1 col-md-1 col-lg-1'><div class='sport-table-icon'><div class='sprite sprite-sport-icon-02'></div></div></div><div class='col-sm-9 col-md-4 col-lg-3'><div class='sport-table-title'><div class='sport-table-title-item sport-table-title-item-left' id='matchesname'><span class='sport-table-title-team'>"+response1.results[i].home.name+"</span><span class='sport-table-title-team'>"+response1.results[i].away.name+"</span></div><div class='sport-table-title-item sport-table-title-item-right'><span class='sport-table-title-score'><span>7</span><span>0</span><span>0</span></span><span class='sport-table-title-score'><span>6</span><span>1</span><span>0</span></span></div></div></div></div><div class='col-sm-2 col-md-1 col-lg-1'><div class='sport-table-bonus'><span class='sport-table-bonus-count'>+25</span><span class='sport-table-bonus-icon material-icons-chevron_right'></span></div></div></a></div></div></div>";
           }


            document.getElementById("tabletennis_up").innerHTML = tbltop;
            }
            
            };
            xmlhttp.send();
          }
          
          window.onload = function(){
            tennisUp();
            football_upcome();
            baseballUp();
            iceUp();
            vollyUp();
            basketUp();
            tabletennisUp();
            
            
            
          }