<!DOCTYPE html>
<html>
	<body>
		<?php 
			#define digit
			$digit = "17";
			echo "The digit is $digit";
			echo "<br/>";

			#insert digit into array
			$dary = array($digit);

			#function for addition of each character
			function addition($digit)
			{
				#check weather length of string is less then equal to 1, if yes then print that digit
				if (strlen($digit)<=1)
				{
					echo $digit;
				}
				#else
				else
				{
					$i = 0;
					#execute while loop till value of i is less then legth of digit
					while($i <= strlen($digit))
					{
						if($i = 0)
						{
							return ($digit[$i] + $digit[$i-1]);
							$i++;
						}
					}
				}
			}
			#call function
			echo addition($digit);
		?>
	</body>
</html>