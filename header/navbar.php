<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badboy</title>    
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_nav.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


<script>

// ฟังก์ชั่นคลิ๊ก Iconfacebook โชว์ลิ้ง
$(function(){
  // ซ่อนข้อความ Jame Jame
  $("#text-linkfacebook").hide(function(){
    });
  // เมื่อคลิ้กไอคอน facebook จะโชว์ข้อความที่ซ่อน คลิ้กอีกครั้งจะซ่อนข้อความ 
  $("#show-facebook").click(function()
    {$("#text-linkfacebook").toggle();});
  // เมื่อคลิ้กข้อความที่ซ่อน จะลิ้งไปหน้า Facebook พร้อมซ่อนข้อความ
  $("#text-linkfacebook").click(function()
    {$("#text-linkfacebook").toggle();});
});
// จบฟังก์ชั่น คลิ๊ก Iconfacebook โชว์ลิ้ง


// ฟังก์ชั่นคลิ๊ก IconIG โชว์ลิ้ง
$(function(){
  $("#text-linkig").hide(function(){
    });

  $("#show-ig").click(function(){
    $("#text-linkig").toggle();
  });

  $("#text-linkig").click(function(){
    $("#text-linkig").toggle();
  });
});
// จบฟังก์ชั่น คลิ๊ก IconIG โชว์ลิ้ง


// ฟังก์ชั่นคลิ๊ก IconLine โชว์ลิ้ง
$(function(){
  $("#text-linkline").hide(function(){
    });

  $("#show-line").click(function(){
    $("#text-linkline").toggle();
  });

  $("#text-linkline").click(function(){
    $("#text-linkline").toggle();
  });
});
// จบฟังก์ชั่น คลิ๊ก IconLine โชว์ลิ้ง


// ฟังก์ชั่นคลิ๊ก Icontwitter โชว์ลิ้ง
$(function(){
  $("#text-linktwitter").hide(function(){
    });

  $("#show-twitter").click(function(){
    $("#text-linktwitter").toggle();
  });

  $("#text-linktwitter").click(function(){
    $("#text-linktwitter").toggle();
  });
});
// จบฟังก์ชั่น คลิ๊ก Icontwitter โชว์ลิ้ง


// ฟังก์ชั่นคลิ๊ก Iconphone โชว์ลิ้ง
$(function(){
  $("#text-linknumberphone").hide(function(){
    });

  $("#show-numberphone").click(function(){
    $("#text-linknumberphone").toggle();
  });

  $("#text-linknumberphone").click(function(){
    $("#text-linknumberphone").toggle();
  });
});
// จบฟังก์ชั่น คลิ๊ก Icontwitter โชว์ลิ้ง


// ฟังก์ชั่นคลิ๊ก เปลี่ยนโหมดขาว-ดำ
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
// จบฟังก์ชั่น คลิ๊ก เปลี่ยนโหมดขาว-ดำ

</script>



</head>


<body class="fontsaraabun">

<div class="bg-top" > 

  <a id="show-facebook"> <img src="image/facebook1.png" class="picwh"    alt=""></a>
    <a id="text-linkfacebook" class="textshow" href="https://www.facebook.com/freestay.jame" target ="_blank">
      <h1>Jame Jame</h1></a>

  <a id="show-ig"> <img src="image/instagram.png" class="picwh"   alt=""></a>
    <a id="text-linkig" class="textshow" href="https://www.instagram.com/pattamakon_emaj/" target ="_blank">
      <h1>pattamakon_emaj</h1></a>

  <a id="show-line"> <img src="image/line.png" class="picwh"   alt=""></a>
    <a id="text-linkline" class="textshow" href="https://line.me/ti/p/rsLR2JP8ba" target ="_blank">
      <h1>Jamejee</h1></a>

  <a id="show-twitter"> <img src="image/twit.png" class="picwh"  alt=""></a>
    <a id="text-linktwitter" class="textshow" href="https://twitter.com/Jameemaj7" target ="_blank">
      <h1>Jame emaj</h1></a>

  <a id="show-numberphone"> <img src="image/phone.png" class="picwh"  alt=""></a>
    <a id="text-linknumberphone" class="textshow" href="tel:+6614826287" target ="_blank">
      <h1>061-482-6287</h1></a>

</div>

<div class="bg-banner" > 


</div>


<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="#"><img class="hovers" src="image/logo.jpg" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <a class="nav-link "><span class="testcolor">อ่านเพลิน เพลิน</span><span class="sr-only">(current)</span></a>
        <a class="nav-link" ><span class="testcolor">สัตว์โลกน่าเลิฟฟฟ</span></a>
        <a class="nav-link"><span class="testcolor">กระแสแรงแรง</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <span class="testcolor" >Dropdown link</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 " type="search" placeholder="Search" style="width:220px; height:30px; font-size:12px;">
    </form>
    
    <!-- คำสั่งไอคอน -->
    <i onclick="myFunction()" class="fas fa-adjust"></i>


  </div>
  </div>
  
</nav>








    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>