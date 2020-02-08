<head>
    <meta charset="utf-8">
    <title>my website</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
    
  </head>
  <style>
  
  body{
  background-color: #EEE;
  font-family: Helvetica, Arial ,sans-serif;
}

a{
  text-decoration: none;
  color: red;
}

#header{
  background-color: #66ccff;
  color: white;
  width: 900px;
  margin-left: auto;
  margin-right: auto;
  text-align:center;
}

#container{
  background-color: white;
  width: 1000px;
  margin-left: auto;
  margin-right: auto;
}

#nav{
  width: 160px;
  float: left;
  padding: 10px;

}

#nav ul{
  list-style-type: none;
}
h1 ,h2 ,h3{
  padding: 0;
}
#contant{
  width: 800px;
  float: right;
  padding: 10px;

}
#footer{
  background-color: #999999;
  clear: both;
  color: white;
  padding: 10px;
  text-align: right;
}
  
  
  </style>
  <body>
     <div id="header">
       <h1>Calculating Sessions of Book include 30 chapters</h1>
     </div>
     <div id="container">
        <div id="nav">
          <h3>Values</h3>
            <ul>
              <li> <a href="">{{$starting_date}}</a></li>
              <li> <a href="">{{$num_days}}</a></li>
              <li> <a href="">{{$chapter_sessions}}</a></li>
            </ul>
        </div>
       
        <div id="footer">
          copyright &copy; 2015 NAMAA co.
        </div>
     </div>



  </body>