var content=document.getElementsByClassName("content");

var button1=document.getElementById("about");
var button2=document.getElementById("skills");
var button3=document.getElementById("portfolio");
var button4=document.getElementById("contact");
var button5=document.getElementById("portfolio-about");

var submit=document.querySelector('input[type="submit"]');


function changeContent(a,b,c,d) {

	content[a].style.display="block";
	content[b].style.display="none";
	content[c].style.display="none";
	content[d].style.display="none";
	

}

//window.setInterval("changeContent(0,1,2,3)", 1000);

button1.addEventListener("click", function() {
	
    changeContent(0,1,2,3);
});

button2.addEventListener("click", function() {
	
    changeContent(1,0,2,3);
});

button3.addEventListener("click", function() {
    changeContent(2,0,1,3);
});

button4.addEventListener("click", function() {
    changeContent(3,0,1,2);
});

button5.addEventListener("click", function() {
    changeContent(2,0,1,3);
});

function checkForm (){
   var fieldValue = document.querySelector('input[name="imie"]').value;
    
   if (fieldValue.length == 0) {
    alert('Nie wpisałeś żadnej wartości!');
    }
}
    
    
  submit.addEventListener("click", checkForm);

 
    
      
        
        
      

