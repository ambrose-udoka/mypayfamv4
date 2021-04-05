function validate2(ev){
var user = document.getElementById('username').value;
var pass = document.getElementById('pwd').value;

document.getElementById('usertext').innerHTML = '';
document.getElementById('passtext').innerHTML = '';
document.getElementById('welcome').innerHTML =''

if(user =='' && pass == ''){
document.getElementById('usertext').innerHTML = ('Email should not be empty.');
document.getElementById('passtext').innerHTML = ('Password should not be empty.');
ev.preventDefault()

}else if(user ==''){
document.getElementById('usertext').innerHTML = ('Email should not be empty.');
ev.preventDefault()

}else if(pass == ''){
document.getElementById('passtext').innerHTML = ('Password should not be empty.');
ev.preventDefault()

}
//else{
// document.getElementById('welcome').innerHTML =(user)
// }

}		

$(document).ready(function(){

		$('#eye').click(function(){
			var s = $('#pwd').attr('type')

			if(s=='password'){
$('#pwd').attr('type','text')
$('#eye').attr('src', 'image/close-eyes1.png')

}else{$('#pwd').attr('type', 'password')
$('#eye').attr('src', 'image/visual1.png')

}
})

})



function validate3(ev3){
var pass = document.getElementById('pwd2').value;
var cpass = document.getElementById('confirmpwd').value;
var fname = document.getElementById('phone').value;
var email = document.getElementById('email2').value;

document.getElementById('passtext2').innerHTML = '';
document.getElementById('cpasstext').innerHTML = '';
document.getElementById('welcome2').innerHTML =''
document.getElementById('phonetext2').innerHTML =''
document.getElementById('emailtext2').innerHTML =''

if(pass == '' && cpass == '' && fname =='' && email ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()

}else if(pass == '' && cpass == '' && fname ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty');
ev3.preventDefault()


}else if(pass == '' && cpass == '' && email ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty');
ev3.preventDefault()


}else if(pass == ''&& fname =='' && email ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()



}else if(pass == '' && cpass == '' && fname =='' && email ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()

}else if(pass == '' && cpass == '' && fname ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty');
ev3.preventDefault()

}else if(pass == '' && fname =='' && email ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()

}else if(pass == '' && cpass == '' && email ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()

}else if(cpass == '' && fname =='' && email ==''){
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()


}else if(pass == '' && cpass =='' ){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
ev3.preventDefault()

}else if(fname =='' && email ==''){
document.getElementById('firsttext2').innerHTML =('Phone Number should not be empty');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()

}else if(pass == '' && fname ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('firsttext2').innerHTML =('Phone Number should not be empty');
ev3.preventDefault()

}else if(cpass == '' && fname ==''){
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('firsttext2').innerHTML =('Phone Number should not be empty');
ev3.preventDefault()

}else if(pass == '' && email ==''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()

}else if(cpass == '' && email ==''){
document.getElementById('cpasstext').innerHTML = (' Confirm Password should not be empty.');
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()

}else if(pass == ''){
document.getElementById('passtext2').innerHTML = ('Password should not be empty.');
ev3.preventDefault()

}else if(cpass ==''){
document.getElementById('cpasstext').innerHTML = ('Confirm Password should not be empty.');
ev3.preventDefault()

}else if(fname ==''){
document.getElementById('phonetext2').innerHTML =('Phone Number should not be empty')
ev3.preventDefault()	

}else if(email ==''){
document.getElementById('emailtext2').innerHTML =('E-mail should not be empty')
ev3.preventDefault()	

}else if(pass != cpass){
document.getElementById('welcome2').innerHTML =('Oops! No Password match, carefully enter them.');
ev3.preventDefault()

}
//else{
// document.getElementById('welcome2').innerHTML =(user)
// }



}		



// $(document).ready(function(){

// 	$('#pwd2').change(function(){

// 		$('#eye3').click(function(){
// 			var s = $('#pwd2').attr('type')

// 			if(s=='password'){
// $('#pwd2').attr('type','text')
// $('#eye3').attr('src', 'image/close-eyes1.png')

// }else{$('#pwd2').attr('type', 'password')
// $('#eye3').attr('src', 'image/visual1.png')

// }
// })

// })


// $('#confirmpwd').change(function(){

// 		$('#eye4').click(function(){
// 			var s = $('#confirmpwd').attr('type')

// 			if(s=='password'){
// $('#confirmpwd').attr('type','text')
// $('#eye4').attr('src', 'image/close-eyes1.png')

// }else{$('#confirmpwd').attr('type', 'password')
// $('#eye4').attr('src', 'image/visual1.png')

// }
// })

// })


// })



$(document).ready(function(){

$('#eye3').click(function(){
var s = $('#pwd2').attr('type')

if(s=='password'){
$('#pwd2').attr('type','text')
$('#eye3').attr('src', 'image/close-eyes1.png')

}else{$('#pwd2').attr('type', 'password')
$('#eye3').attr('src', 'image/visual1.png')

}

})


$('#eye4').click(function(){
var p = $('#confirmpwd').attr('type')

if(p=='password'){
$('#confirmpwd').attr('type','text')
$('#eye4').attr('src', 'image/close-eyes1.png')

}else{$('#confirmpwd').attr('type', 'password')
$('#eye4').attr('src', 'image/visual1.png')

}

})

})



// function passwordtoggle(){

// 	document.getElementById('pwd').type ='text'


// 	document.getElementById('eye').src ='image/close-eyes.png'
	
// }

// function cpasswordtoggle(){

// 	document.getElementById('confirmpwd').type ='text'
// 	document.getElementById('eye2').src ='image/close-eyes.png'

// }

// function passwordtoggle(){

// 	document.getElementById('pwd').type ='text'


// 	document.getElementById('eye').src ='image/close-eyes.png'
	
// }

// function cpasswordtoggle(){

// 	document.getElementById('confirmpwd').type ='text'
// 	document.getElementById('eye2').src ='image/close-eyes.png'

// }