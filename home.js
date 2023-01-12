var abtn = document.getElementById('accountbtn');
var showbtn = document.getElementById('showaccount');
var closebtn = document.getElementById('right-box');
const img = document.querySelector('#photo');
const imgDiv = document.querySelector('.photo');
const uplodbtn = document.querySelector('#uplodbtn');
const file = document.querySelector('#file');


abtn.onclick = function(){
	if (showbtn.style.display == 'block' || closebtn.style.display == 'none') {
		showbtn.style.display = 'none';
		closebtn.style.display = 'block';
	}
	else{
		showbtn.style.display = 'block';
		closebtn.style.display = 'none';
	}
};

// This section is for give like on photo
var like = document.getElementById('like');
like.onclick = function(){
	if (like.style.color == 'black') {
		like.style.color = 'blue';
	}
	else{
		like.style.color = 'black';
	}
}

document.getElementById("image").onchange = function(){
	document.getElementById('form').submit();
}

//profile photo update

file.addEventListener("change", function() {

  const choosedFile = this.files[0];
  if (choosedFile){
  	const reader = new FileReader();

  	reader.addEventListener("load", function(){
  		img.setAttribute('src', reader.result);
  });
  	reader.readAsDataURL(choosedFile);
  }

});
