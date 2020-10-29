let inputs = document.querySelectorAll('.passInput input'),
  eyes = document.querySelectorAll('.passInput i');

eyes.forEach(x => x.addEventListener('click', function() {

  if(x.classList.contains('1')){
    inputs[1].type = inputs[1].type == 'text' ? 'password' : 'text'
  }else{
    inputs[0].type = inputs[0].type == 'text' ? 'password' : 'text'
  }

  if (x.classList.contains('fa-eye')) {
    x.classList.remove("fa-eye")
    x.classList.add("fa-eye-slash")
  } else {
    x.classList.remove("fa-eye-slash")
    x.classList.add("fa-eye")
  }
}));

document.querySelector("[type=file]").addEventListener("change", function(){
	let file = this.files[0].name,
  lbl = document.querySelector("#curriculoLbl");

	if(file != ""){
		lbl.innerText = file
	}else{
		lbl.innerText = this.attributes.placeholder.value
	}
})




