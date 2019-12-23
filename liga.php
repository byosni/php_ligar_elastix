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

<form id="regForm" >
    <?php
    $timeout = 10;
    $ramal = $_REQUEST["ramal"];
    $numero = $_REQUEST["numero"];
    $agenda = $_REQUEST["agenda"];

    $socket = fsockopen("127.0.0.1", "5038", $errno, $errstr, $timeout);
    fputs($socket, "Action: Login\r\n");
    fputs($socket, "UserName: admin\r\n");
    fputs($socket, "Secret: admin\r\n\r\n");
    Sleep(1);
    fputs($socket, "Action: Originate\r\n");
    fputs($socket, "Channel:" . $ramal ."\r\n");
    fputs($socket, "Context: from-internal\r\n");
    fputs($socket, "Exten:" . $numero . $agenda . "\r\n");
    fputs($socket, "Priority: 1\r\n");
    fputs($socket, "Callerid:LIGA RÁPIDO\r\n");
    fputs($socket, "Async: yes\r\n\r\n");
    fputs($socket, "Action: Logoff\r\n\r");
    Sleep(1);
    $wrets=fgets($socket,128);

    echo "<h1> Ligando para: <font color='RED'>" . $numero . $agenda . "</h1></font> <br>";
    echo "<h1> Do ramal: <font color='RED'>" . $ramal . "</h1></font>";
    ?>

    <button class="btn btn-success btn-lg" onClick="JavaScript: window.history.back();"> VOLTAR </button>

</form>

</body>
</html>
