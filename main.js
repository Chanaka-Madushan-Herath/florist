function validateForm() {
	var  alertmessage="";
  var fields = ["name","mail","phonenum","message"]

  var i, l = fields.length;
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
  var x = document.forms["myForm"][fieldname].value;
  if (x == "" || x == null) {
    alertmessage+="\n"+"Please enter "+fieldname;
  }}

if(alertmessage=="")
        {
            alertmessage=" Successfully sent !!!!";
            alert(alertmessage);
            window.location.replace("index.html");
        }
        else
        {
            alert(alertmessage);
        }
}

function price() {
        var price;
        if (document.getElementById('standard').checked) {
            price = document.getElementById('standard').value;
        }
        else if (document.getElementById('deluxe').checked) {
            price = document.getElementById('deluxe').value;
        }
        else if (document.getElementById('premium').checked) {
            price = document.getElementById('premium').value;
        }
        document.getElementById("demo").innerHTML ="Total: "+price+"(dilivery included)";
        document.getElementById("demo1").innerHTML ="The smile "+price;
    }