<style type="text/css">
  
  @import url("https://fonts.googleapis.com/css?family=Roboto+Condensed:700");
html {
  height: 100%;
}

body {
  min-height: 100%;
  background-color: #111111;
  font-family: "Roboto Condensed";
  text-transform: uppercase;
  overflow: hidden;
}

.police-tape {
  background-color: #e2bb2d;
  background: linear-gradient(180deg, #eed887 0%, #e2bb2d 5%, #e2bb2d 90%, #e5c243 95%, #0e0b02 100%);
  padding: 0.125em;
  font-size: 3em;
  text-align: center;
  white-space: nowrap;
}

.police-tape--1 {
  transform: rotate(10deg);
  position: absolute;
  top: 40%;
  left: -5%;
  right: -5%;
  z-index: 2;
  margin-top: 0;
}

.police-tape--2 {
  transform: rotate(-8deg);
  position: absolute;
  top: 50%;
  left: -5%;
  right: -5%;
}

.ghost {
  display: flex;
  justify-content: stretch;
  flex-direction: column;
  height: 100vh;
}

.ghost--columns {
  display: flex;
  flex-grow: 1;
  flex-basis: 200px;
  align-content: stretch;
}

.ghost--navbar {
  flex: 0 0 60px;
  background: linear-gradient(0deg, #27292d 0px, #27292d 10px, transparent 10px);
  border-bottom: 2px solid #111111;
}

.ghost--column {
  flex: 1 0 30%;
  border-width: 0px;
  border-style: solid;
  border-color: #27292d;
  border-left-width: 10px;
  background-color: #191a1d;
}
.ghost--column:nth-child(1) .code:nth-child(1) {
  margin-left: 5em;
}
.ghost--column:nth-child(1) .code:nth-child(2) {
  margin-left: 4.5em;
}
.ghost--column:nth-child(1) .code:nth-child(3) {
  margin-left: 4.5em;
}
.ghost--column:nth-child(1) .code:nth-child(4) {
  margin-left: 4.5em;
}
.ghost--column:nth-child(2) .code:nth-child(1) {
  margin-left: 5.5em;
}
.ghost--column:nth-child(2) .code:nth-child(2) {
  margin-left: 1.5em;
}
.ghost--column:nth-child(2) .code:nth-child(3) {
  margin-left: 5em;
}
.ghost--column:nth-child(2) .code:nth-child(4) {
  margin-left: 2em;
}
.ghost--column:nth-child(3) .code:nth-child(1) {
  margin-left: 3.5em;
}
.ghost--column:nth-child(3) .code:nth-child(2) {
  margin-left: 3.5em;
}
.ghost--column:nth-child(3) .code:nth-child(3) {
  margin-left: 3.5em;
}
.ghost--column:nth-child(3) .code:nth-child(4) {
  margin-left: 1.5em;
}

.ghost--main {
  background-color: #111111;
  border-top: 15px solid #303338;
  flex: 1 0 100px;
}

.code {
  display: block;
  width: 100px;
  background-color: #27292d;
  height: 1em;
  margin: 1em;
}

.ghost--main .code {
  height: 2em;
  width: 200px;
}



@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);
.buttons {
  display: flex;
  flex-direction: column;
  height: 100%;
  justify-content: center;
  text-align: center;
  width: 100%;
}

.container {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 1em;
  text-align: center;
}
@media (min-width: 600px) {
  .container {
    flex-direction: row;
    justify-content: space-between;
  }
}

h1 {
  color: #fff;
  font-size: 1.25em;
  font-weight: 900;
  margin: 0 0 2em;
}
@media (min-width: 450px) {
  h1 {
    font-size: 1.75em;
  }
}
@media (min-width: 760px) {
  h1 {
    font-size: 3.25em;
  }
}
@media (min-width: 900px) {
  h1 {
    font-size: 5.25em;
    margin: 0 0 1em;
  }
}

p {
  color: #fff;
  font-size: 12px;
}
@media (min-width: 600px) {
  p {
    left: 50%;
    position: absolute;
    -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    top: 90%;
  }
}
@media (max-height: 500px) {
  p {
    left: 0;
    position: relative;
    top: 0;
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
  }
}
p a {
  background: rgba(255, 255, 255, 0);
  border-bottom: 1px solid;
  color: #fff;
  line-height: 1.4;
  padding: .25em;
  text-decoration: none;
}
p a:hover {
  background: white;
  color: #E1332D;
}

.btn {
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  font-weight: 400;
  line-height: 45px;
  margin: 0 0 2em;
  max-width: 160px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%;

}
@media (min-width: 600px) {
  .btn {
    margin: 0 1em 2em;
  }
}
.btn:hover {
  text-decoration: none;
}

.btn-1 {
  background: #e02c26;
  font-weight: 100;
}
.btn-1 svg {
  height: 45px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.btn-1 rect {
  fill: none;
  stroke: #fff;
  stroke-width: 2;
  stroke-dasharray: 422, 0;
  transition: all 0.35s linear;
}

.btn-1:hover {
  background: rgba(225, 51, 45, 0);
  font-weight: 900;
  letter-spacing: 1px;
}
.btn-1:hover rect {
  stroke-width: 5;
  stroke-dasharray: 15, 310;
  stroke-dashoffset: 48;
  transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
}



</style>


<div class="ghost">
  
<div class="ghost--navbar"></div>
  <div class="ghost--columns">
    <div class="ghost--column">
      <div class="code"></div>
      <div class="code"></div>
      <div class="code"></div>
      <div class="code"></div>
    </div>
    <div class="ghost--column">
      <div class="code"></div>
      <div class="code"></div>
      <div class="code"></div>
      <div class="code"></div>
    </div>
    <div class="ghost--column">
      <div class="code"></div>
      <div class="code"></div>
      <div class="code"></div>
      <div class="code"></div>
    </div>
    
  </div>
  <div class="ghost--main">
    <div class="code"></div>
    <div class="code"></div>
</div>



<h1 class="police-tape police-tape--1">
  &nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403
</h1>
<h1 class="police-tape police-tape--2">Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>

<div class="col-lg-12 text-center">
  <div class="container">
    
    <a href="login.php" class="btn btn-1">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Regresar al Login
    </a>


  </div>
  </div>



