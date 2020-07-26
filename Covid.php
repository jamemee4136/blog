<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="covid.css">        

<script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    document.getElementById("demo").innerHTML = myObj.Confirmed;
    document.getElementById("NewConfirmed").innerHTML = myObj.NewConfirmed;
    document.getElementById("Recovered").innerHTML = myObj.Recovered;
    document.getElementById("NewRecovered").innerHTML = myObj.NewRecovered;
    document.getElementById("Hospitalized").innerHTML = myObj.Hospitalized;
    document.getElementById("Deaths").innerHTML = myObj.Deaths;
    document.getElementById("UpdateDate").innerHTML = myObj.UpdateDate;
  }
};
  xmlhttp.open("GET", "https://covid19.th-stat.com/api/open/today", true);
  xmlhttp.send();
</script>

</head>

<body>
<div class="container"> 
    <h1 class="covid-report">รายงานสถานการณ์ โควิด-19</h1>
    <h1 class="covid-report" id="UpdateDate"></h1>

  <div class="row">
    <div class="col-sm-12 covid-head">
      <center>
        <div class="bg-covid">
          <span >ติดเชื้อสะสม</span>
            <h1 id="demo"></h1>
              ( <span>เพิ่มขึ้น</span> <span id="NewConfirmed"></span> )
    </div>
      </center>
    </div>
  </div>

</br>

  <div class="row">
    <div class="col-sm-4 covid-padding">
      <div class="bg-Recover">
        <span >หายแล้ว</span>
          <h1 id="Recovered"></h1>
          ( <span>เพิ่มขึ้น</span> <span id="NewRecovered"></span> )
    </div>
      </div>

</br>
    <div class="col-sm-4 covid-padding">
    <div class="bg-Hospitalized">
      <span >กำลังรักษา</span>
      <h1 id="Hospitalized"></h1>
        </div>
    </div> 
    </br>

    <div class="col-sm-4 covid-padding">
    <div class="bg-Deaths">
      <span >เสียชีวิต</span>
      <h1 id="Deaths"></h1>
     </div>
    </div> 

    
  </div>







  </div>
</body>
</html>