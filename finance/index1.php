<html>
<head>
<script type="application/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> 
document.getElementById('import').onclick = function() {
	var files = document.getElementById('selectFiles').files;
  console.log(files);
  if (files.length <= 0) {
    return false;
  }
  
  var fr = new FileReader();
  
  fr.onload = function(e) { 
  console.log(e);
    var result = JSON.parse(e.target.result);
    var formatted = JSON.stringify(result, null, 2);
		document.getElementById('result').value = formatted;
  }
  
  fr.readAsText(files.item(0));
};
</script>
</head>
<style>
#result {
  display:block;
  width:400px;
  height:200px;
}

#import {
  margin:10px 0;
}
</style>
<body>
<form class="form-group" method="POST" action="func.php" >
<input type="file" id="selectFiles" name="pat_submit" value="Import" /><br />
<button id="import" name="pat_submit">Import</button>
<textarea id="result">


  
</textarea>


</body>
</html                         