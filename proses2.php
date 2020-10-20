
<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="logoekoji.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>EKAS-Ekoji Athletic Simulation</title>
<style>
#container {
  width: 1600px;
  height: 60px;
  position: relative;
  background: rgb(130, 206, 241);
  
}
.animate {
    margin-top: 10px;
  width: 40px;
  height: 40px;
  position: absolute;
  background-color: red;
  border-radius: 50%;
}

p{
    text-align: center;
    color: white;
}
#rute{
    margin-top: 10px;
}

.lapangan{
    background-color: black;
    margin-top: 50px;
}
.start{
    margin-left: 100px;
    width: 60px;
    height: 270px;
    position: absolute;
    background-color: rgb(0, 0, 0);
    z-index: 100;
}

.finish{
    left: 1400px;
    width: 60px;
    height: 270px;
    position: absolute;
    background-color: rgb(0, 0, 0);
    z-index: 200;
}
/* h1{
    color: white;
} */

.start h6{
-webkit-transform:rotate(0deg);
-moz-transform:rotate(180deg);
-o-transform:rotate(180deg);
transform:rotate(180deg);
writing-mode:tb-rl;
/* white-space:nowrap; */
/* width: 40px; */
letter-spacing: 6px;
color: white;
font-size: 50px;
margin: 0px;
padding-top: 50px;
}
.finish h6{

-webkit-transform:rotate(0deg);
-moz-transform:rotate(180deg);
-o-transform:rotate(180deg);
writing-mode:tb-rl;
/* white-space:nowrap; */
/* width: 40px; */
letter-spacing: 6px;
color: white;
font-size: 50px;
margin: 0px;
padding-top: 50px;
}

.score{
    /* margin-left: 30%; */
    margin-top: 50px;
    /* width: 500px;
    height: 270px;
    background-color: rgb(0, 217, 255);
    border: 1px solid black; */
}

table {
  border-collapse: collapse;
  border: 1px solid black;
  width: 30%;
  font-size: large;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<div class="button" style="position:fixed;">
<form action="input1.php">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width:500px; height:60px;margin-top:300px; margin-left:600px;font-size:30px;" >
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"style="margin-top:-5px;">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
</svg>
BACK
</button>
</form>
</div>

<div style="background-color:white; border: 1px solid; width: 420px; height:225px; position:absolute; margin-top:200px; margin-left:30%; filter:blur(8px)"></div>
<img src="s2.jpeg" alt=""width="1600px" height="900px">
<div class="logo" style="position:absolute">

</div>
<div class="lapangan" style="margin-top:-400px;">
    <div class="start"><h6 style="margin-top:50px;">Start</h6></div>
    <div class="finish" id="finish"><h6 style="margin-top:40px;">Finish</h6></div>

<div id ="container">
    <div id="rute">
        <!-- <input id="input_animate1" type="hidden" name="jenis" value="1" > -->
        <span class="animate" id ="animate1" value="A"><p>A</p></span>
    </div>
</div>
<div id ="container">
    <div id="rute">
        <div class="animate" id ="animate2" value="B"><p>B</p></div>
    </div>
</div>
<div id ="container">
    <div id="rute">
        <div class="animate" id ="animate3" value="C"><p>C</p></div>
    </div>
</div>
<div id ="container">
    <div id="rute">
        <div class="animate" id ="animate4" value="D"><p>D</p></div>
    </div>
</div>



</div>
<div style="">
    <button id="start" type="button" class="btn btn-primary btn-lg" style="position:absolute; margin-top:-420px; margin-left:1000px;width:200px;">RUN</button>
</div>
<div class="score" style="position:absolute; margin-left:500px; margin-top:-670px;">
    <table style="width:400px; margin-left:-4px; margin-top:90px">
        <tr>
          <th>Juara</th>
          <th>Nama</th>
         
        </tr>
        <tr>
          <td>Juara 1</td>
          <td id="j1"></td>
       
        </tr>
        <tr>
          <td>Juara 2</td>
          <td id="j2"></td>
       
        </tr>
        <tr>
          <td>Juara 3</td>
          <td id="j3"></td>
       
        </tr>
        <tr>
          <td>Juara 4</td>
          <td id="j4"></td>
        
      </tr>
      </table>
</div>
<div>
    <div style="background-color:black; position: absolute; margin-left:40px;margin-top:-520px;" >
    <table border="1" cellpadding="10" cellspacing="0" width="600px">
        <tr>
            <th>Player</th>
            <th>Langkah</th>
            <th>Kategori</th>
        </tr>
        <tr>
            <td><?= $_POST["nama"] ?></td>
            <td><?= $_POST["langkah"]?></td>
            <td><?= $_POST["kategori"]?></td>
        </tr>
    </table>
</div>
</div>
<script src="tes.min.js"></script>

<script>

$(document).ready(function(){

    

    panggilID = function (element) {
        document.getElementById('jenis').value = element.value;
        return true;    
    }

    function Queue () { 
    collection = [];
    this.print = function() {
        $('#j1').text(collection[0]);
        $('#j2').text(collection[1]);
        $('#j3').text(collection[2]);
        $('#j4').text(collection[3]);
        // console.log(collection[0]);
        // console.log(collection[1]);
        // console.log(collection[2]);
    };
    this.enqueue = function(element) {
        collection.push(element);
    };
    this.dequeue = function() {
        return collection.shift(); 
    };
    this.front = function() {
        return collection[0];
    };
    this.size = function() {
        return collection.length; 
    };
    this.isEmpty = function() {
        return (collection.length === 0); 
    };
}

var q = new Queue(); 
// q.enqueue('a'); 
// q.enqueue('b');
// q.enqueue('c');

// q.dequeue();
// console.log(q.front());
// q.print();
    

$('#start').click('click',function(){
    
   
    // var elem2 =  $('#animate2');
    // var elem3 =  $('#animate3');
    // var elem4 =  $('#animate4');
    animate1();
    animate2();
    animate3();
    animate4();

    

   

});



function score(){

}

function getRndInteger(min, max) {
    min = Math.ceil(min); 
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) ) + min;
}

var animate1 = function(){
    
    var x1 = getRndInteger(5, 20);
    var elem1 = document.getElementById("animate1");  
    var xid = $('#animate1').text();
    // q.enqueue(xid); 
    var pos = 0;
    var id = setInterval(function(){
        if (pos == 1450) {
            q.enqueue(xid); 
            q.print();
            clearInterval(id);
        } else {
            pos++;    
            elem1.style.left = pos + "px"; 
        }
    }, x1);
    
}


function animate2(){
    var x2 = getRndInteger(5, 20);
    var elem2 = document.getElementById("animate2");  
    var xid = $('#animate2').text();
    var pos = 0;
    var id = setInterval(function(){
        if (pos == 1450) {
            q.enqueue(xid); 
            q.print();
            clearInterval(id);
        } else {
            pos++;    
            elem2.style.left = pos + "px"; 
        }
    }, x2);
}

function animate3(){
    var x3 = getRndInteger(5, 20);
    var elem3 = document.getElementById("animate3");  
    var xid = $('#animate3').text();
    var pos = 0;
    var id = setInterval(function(){
        if (pos == 1450) {
            q.enqueue(xid); 
            q.print();
            clearInterval(id);
        } else {
            pos++;    
            elem3.style.left = pos + "px"; 
        }
    }, x3);
}

function animate4(){
    var x4 = getRndInteger(5, 20);
    var elem4 = document.getElementById("animate4");  
    var xid = $('#animate4').text();
    var pos = 0;
    var id = setInterval(function(){
        if (pos == 1450) {
            q.enqueue(xid); 
            q.print();
            clearInterval(id);
        } else {
            pos++;    
            elem4.style.left = pos + "px"; 
        }
    }, x4);
}


});

</script>

</body>
</html>
