<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="tv/css/bootstrap.min.css" rel="stylesheet">
<link href="tv/css/font-awesome.css" rel="stylesheet">
<script src="tv/js/modernizr.js"></script>
<link rel="stylesheet" href="tv/css/flexslider.css" />
<meta name="viewport" content="width=320">
</head>

<!--==============mask telefone=================-->
<script src="js/form1.js"></script>
<script src="js/form2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $("#telefone").inputmask({
	mask: ["(99) 9999-9999", "(99) 99999-9999", ],
	keepStatic: true
  });
  
  $("#cnpj").inputmask({
	mask: ["99.999.999/9999-99", ],
	keepStatic: true
  });
});
</script>
<!--==============mask telefone=================-->
</head>
<body background="tv/fundo.jpg" style="background-attachment: fixed">

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: /tv/font/1Ptug8zYS_SKggPNyC0ITw.woff2;
  padding: 40px;
  width: 20%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 30%;
  font-size: 12px;
  font-family: /tv/font/1Ptug8zYS_SKggPNyC0ITw.woff2;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: /tv/font/1Ptug8zYS_SKggPNyC0ITw.woff2;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>


<script> 
function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'none';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>

<form id="regForm" action="liga.php" method="GET">
<h1>LIGA RÁPIDO</h1>
	<div class="limiter">
		<div class="container-login100">										
			<div id="divnumero">
				NUMERO: <input class="form-control" type="text" name="numero" id="numero" onfocus="Mudarestado('divagenda')">
			</div>
    <br>
      
      <div id="divagenda">
				AGENDA: <select name="agenda" class="form-control" id="agenda" onfocus="Mudarestado('divnumero')">
            <option value=""></option>
            <option value="035997641971">OSNI</option> 
            <option value="035998991029">GEORGE</option>
            <option value="035999384279">RILDO</option>
            <option value="035991764734">GUILHERME</option>
            <option value="035999607462">MATEUS</option>
            <option value="035991248627">LUIZ FERNANDO</option>
            <option value="035998856997">ELTER</option>
            <option value="035998681548">MARCELO</option>
            <option value="035997225821">AUGUSTO</option>
            <option value="035997220396">MAYCON</option>
            <option value="035998306496">LEANDRO</option>
            </select>
			</div>
		<br> 

		<div>
      QUEM ESTA REALIZANDO A LIGAÇÃO:<select name="ramal" class="form-control">
        <option value=""></option>
        <option value="SIP/20">20.LUARA</option>
        <option value="SIP/21">21.CAROL</option>
        <option value="SIP/22">22.LUCAS</option>
        <option value="SIP/24">24.JOAO</option>
        <option value="SIP/26">26.OSNI</option>
        <option value="SIP/27">27.GEORGE</option> 
      </select>
		</div>										

		<br><br>
		<div align='center'>
		<button class="btn btn-success btn-lg">
		LIGAR !
		</button>
		
		
		</div>
	</div>
	
	
</form>
</body>
</html>
<!--
<iframe marginwidth="0" marginheight="0" class="frameModule"" src="../admin/modules/fw_fop/index.php?menu=fop" name="myframe" id="myframe" frameborder="0" width="80%" onLoad="calcHeight();"></iframe>
-->
