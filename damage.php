<!DOCTYPE html>
<html lang="en">
<head>
  <title>Unison League</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>


<header>

  <div class="name-container">
    <h1>WhalesFargo</h1>
    <h3>Unison League</h3>
  </div>

  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
          <li class="active"><a href="damage.php">Damage Calculator</a></li>

          <li><a href="calendar.html">Event Calendar</a></li>
          <li><a href="">Item 3</a></li>
        </ul>

      </div>
    </div>
  </nav>
</header>
<body>





<div class="container text-center">
  <div class="row content">
    <div class="col-sm-3">
      <ul class="sidemenu">
        <li><a href="index.html">Home</a></li>
        <li><a href="damage.php">Damage Calculator</a></li>
        <li><a href="calendar.html">Unison League Calendar</a></li>
      </ul>
    </div>
    <div class="col-sm-9 text-left">
        <h1>Damage Calculator</h1>
        <p>Thanks goes to the Unison League forums for finding the equation.</p>
        <p><a href="https://forum.a-tm.co.jp/forum/unison-league/strategy-talk-aa/197941-fixed-damage-formula-as-of-5-3">Original Post</a></p>
        <blockquote><small>
AB((C+D+(50E*(1+F)))/100)*(1+GH)*(1-(I+J+K+L)-MN*(1-O)= Final Damage <br>

<b>Key</b>
A- Attack (If paladin using divine smash or Dual sword, this value is attack+defense/2) <br>
B- Attack scaling (Roughly .4)<br>
C- AP<br>
D- AP buffs (Includes attack stance, Ap buffs from abilities and monsters, attack constants, and procs beside fatal, etc)<br>
E-Crit (1 if yes, 0 if no)<br>
F​- additional critical damage multiplier<br>
G- Element multiplier (Roughly 5%)<br>
H- Element count<br>
I- Barrier<br>
J- Constant damage down (10% each)<br>
K- Damage down procs<br>
L- Guard (0 if no, .5 if yes)<br>
M- Defense<br>
N- Defense scaling<br>
O- Reflect<br><br>

<br>
I would like to add an example of 30% reflect versus 30% barrier. Lets say you are hit by a 3 hit attack that does a raw amount of 50k each hit. If your defense reduces damage by 20k (100k defense), the damage would be... <br>

No barrier/Reflect=(50k-20k)*3=90k damage. <br>

30% barrier= (50k*(1-.3)-20k)*3=45k damage. <br>

30% reflect= (50k-20k)*(1-.3)*3=63k damage. <br>
</small>
</blockquote>

<form class="damage-form form-horizontal" action="damage.php" method="post">
<h1>Damage Calculator</h1>

<div class="form-group">
   <label class="control-label col-sm-2" for="A"><b>Total Attack</b><br><small>Archers add both ATK/MATK</small></label>
   <div class="col-sm-10">
     <input type="number" class="form-control" id="A" placeholder="ex, 94543">
   </div>
 </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="C"><b>AP for the Attack</b><br><small>Look <a href="http://unisonleague.wikia.com/wiki/Classes" target="_blank">here</a, under classes</small></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="C" placeholder="ex, 120">
    </div>
  </div>

  <div class="form-group">
     <label class="control-label col-sm-2" for="D"><b>AP buffs</b><br><small>(Includes attack stance, Ap buffs from abilities and monsters, attack constants, and procs beside fatal, etc)</small></label>
     <div class="col-sm-10">
       <input type="number" class="form-control" id="D" placeholder="ex, 120">
     </div>
   </div>


</form>
    </div>



</div>
</div>

<footer class="container-fluid text-center">
    <h3>Funded and founded by WhalesFargo of Unison League</h3>
    <p>If you would like to donate, please send bitcoins to : 16CfUiVaFPdNuuSoaYmJB9T4jTxAinYTRu</p>
    <p>Created by: <a href="https://domnguyen.github.io/" target="_blank">Dominique Nguyen</a></p>
</footer>

</body>
</html>
