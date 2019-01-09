<?php
$no = 5;

for ($i = 0; $i < 5; $i++)
{ 
	for ($j = 0; $j<=$i; $j++)
	{
		echo "*";
	}
	echo "<br>";
}
?>
------------------------------------------<br>
<?php
$no = 5;

for ($i = 5; $i >= 1; $i--)
{ 
	for ($j = $i; $j>=1; $j--)
	{
		echo ("*");
	}
	echo "<br>";
}
?>
--------------------------------------------<br>
<?php

$no = 5;

?>

<table style="border: 1px solid black">
	


	<?php

	for ($i = 0; $i < 5	; $i++){

		?>

		<tr style='border: 1px solid black'>
			

			<?php

			for ($j = ($no-1); $j>$i; $j--)
			{
			  ?>
			  <td style="border: 1px solid black;"> _ </td>
			  <?php
			}

			for ($k=0 ; $k <=$i ; $k++) 
			{ 
				?>
				<td style="border: 1px solid black"> * </td>
				<?php
			}
			?>
	
			</tr>
		<?php
		}
		?>
	</table>


	--------------------------------------------------------<br>
<!-- 	<?php

	$no= 4;

	for ($i=0; $i < 4 ; $i++)
	{
		for ($j= ($no-1); $j > $i ; $j--) 
		{ 
			echo " _ ";
		}

		for ($k=0; $k <=$i ; $k++)
		{ 
			echo " * ";
		}
		for ($l=0; $l <$i ; $l++) 
		{ 
			echo " * ";
		}
		echo "<br>";
	}
	?> -->



	-------------------------------------------------------------------------<br>
<?php

$no = 4;

?>

<table style="border: 1px solid black">
	


	<?php

	for ($i = 0; $i < 4	; $i++){

		?>

		<tr style='border: 1px solid black'>
			

			<?php

			for ($j = ($no-1); $j>$i; $j--)
			{
			  ?>

			  <td style="border: 1px solid black;"> _ </td>
			  <?php
			}
			for ($k=0 ; $k <=$i ; $k++) 
			{ 
				?>
				<td style="border: 1px solid black"> * </td>
				<?php
			}
			for ($l=0; $l <$i ; $l++)
			{
			 ?>
			<td style="border: 1px solid black"> * </td>
			<?php
			}
			?>
			</tr>
		<?php
		}
		?>
	</table>