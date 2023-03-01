<style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: Arial;
}
.header {
  text-align: center;
  padding: 32px;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}
.column img {
  margin-top: 12px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<!-- Header -->
<div class="header">
  <h1>Image Gallery</h1>
</div>
<!-- Photo Grid -->
<div class="row"> 
    <div class="column">
        <img src="collection/deco5.jpg" style="width:100%">
        <img src="collection/0.jpg" style="width:100%">
        <img src="collection/2.jpg" style="width:100%">
        <img src="collection/6.jpg" style="width:100%">
    </div> 

    <div class="column">
        <img src="collection/20.jpg" style="width:100%">
        <img src="collection/21.jpg" style="width:100%">
        <img src="collection/22.jpg" style="width:100%">
        <img src="collection/1.jpg" style="width:100%">
    </div>

    </div>
    <div class="column">
    <img src="collection/deco1.jpg" style="width:100%">
    <img src="collection/deco2.jpg" style="width:100%">
    <img src="collection/deco3.jpg" style="width:100%">
    <img src="collection/deco4.jpg" style="width:100%">
    <img src="collection/16.jpg" style="width:100%">
    <img src="collection/17.jpg" style="width:100%">
    <img src="collection/18.jpg" style="width:100%">
    <img src="collection/4.jpg" style="width:100%">
    </div> 

    <div class="column">
        <img src="collection/4.jpg" style="width:100%">
        <img src="collection/5.jpg" style="width:100%">
        <img src="collection/8.jpg" style="width:100%">
        <img src="collection/7.jpg" style="width:100%">
    </div>

    <div class="column">
    <img src="collection/11.jpg" style="width:100%">
    <img src="collection/12.jpg" style="width:100%">
    <img src="collection/13.jpg" style="width:100%">
    <img src="collection/14.jpg" style="width:100%">
    </div>
</div>
