
<?=template_header('Place Order');?>

<?php
function buy() {
echo <<<EOT
 <form action="index.php?page=op" method="post">
        	<input type="submit" value="Buy">
    
            <p>if you want hard Copy for Free Book or Buy Book.</p>
        </form>
EOT;
}
 
function free() {
echo <<<EOT
 <form action="Gift of Therapy ( PDFDrive ).pdf"download="file"  method="post" style="margin-left:190px;">
            <input type="submit" value="Free PDF Download">
            <p>if you want only pdf on Phone,Tablet or PC.</p>
        </form>
EOT;
}      
?>
<style type="text/css">
	 form {
	display: flex;
	flex-flow: column;
	margin: 40px 0;
}
form input[type="number"] {
	width: 400px;
	padding: 10px;
	margin-bottom: 15px;
	border: 1px solid #ccc;
	color: #555555;
	border-radius: 5px;
}
form input[type="submit"] {
	background: #4e5c70;
	border: 0;
	color: #FFFFFF;
	width: 400px;
	padding: 12px 0;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: bold;
	border-radius: 5px;
	cursor: pointer;
}
form input[type="submit"]:hover {
	background: #434f61;
}

</style>
<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
<table >
	<tr>
		<td>
			<?php buy(); ?>
		</td>
		<td>
			<?php free(); ?>
		</td>
	</tr>
</table>
    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
</div>
<?=template_footer();?>

