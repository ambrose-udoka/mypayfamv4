<script>

$(document).ready(function(){
	$('#amount').hide()
$('#producttblhead').hide()
$('.productinvoice').hide()
$('#invoice').hide()
$('#save').attr('disabled', 'disabled')
$('#submits').attr('disabled', 'disabled')
var count = 1
var kount =1
var maxkount =5

$('#adds').click(function(){
	
var prod_cat = $('#productcategory').val()
var prod_name = $('#productname').val()
var prod_qnt = $('#productquantity').val()
var prod_descript = $('#productdescription').val()
var prod_amt = $('#productamount').val()

var partner = $('#partnerid').val()
var duration = $('#duration').val()
var user = $('#userid').text()
if(partner != '' && duration != ''){
	
if(prod_cat.trim() != '' && prod_name.trim() != '' && prod_qnt.trim() != '' && prod_descript.trim() != '' && prod_amt.trim() != ''){

$('#producttblhead').show()

$('#addproduct').append("<tr><td>" +count +"</td><td>" +prod_cat +"</td><td>" +prod_name +"</td><td>" + prod_qnt +"</td><td>" +prod_descript +"</td><td>" +prod_amt +" </td></tr>")

$('#productcategory').val('')
$('#productname').val('')
$('#productquantity').val('')
$('#productdescription').val('')
$('#productamount').val('')
$('#save').removeAttr('disabled')

$('#kount').text(kount)
kount = kount+1
if(kount>maxkount){
	$('#adds').attr('disabled', 'disabled')
	alert(count(prod_qnt))
	alert("You have reached the maximum order limit for this Transactions")

} 
count = count+1


}
}else{
	alert("Enter your Partner ID and select transaction duration first, then proceed to add your products. All fields should be filled")
}
})

 	$('#save').click(function(){

var duration = $('#duration').val()
var partner = $('#partnerid').val()
var user = $('#userid').text()
$('.productinvoice').show()
$('#invoice').show()
$('#invoice').append("<p>  Order No:    " + count + "<br> Order_date:    "+ <?php echo date('Y');?> + "<br> Duration:      " + duration + "<br>  Buyer ID:      " + user+ "<br> Partner ID:      " + partner + "<br><br>")

$('#submits').removeAttr('disabled')
$('#save').attr('disabled', 'disabled')

})


$('#amount').hide()
// alert(count(prod_qnt))

})

	</script>
