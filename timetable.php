<html>
<head>
<script>

function addSub(){
var nos = document.getElementById('nos').value;
if(nos==0){
alert('no subjects');
}
else{
for(let i=0;i<nos;i++)
{alert('jfdkk');}
}
}
</script>
</head>
<body>
<table>

<tr><td><h4>Enter number of subjects &nbsp&nbsp</h4></td><td><input type="number" id='nos'></td></tr>
<button type="button" onClick=" addSub()">Click ME</button>
</table>
</body>
</html>
