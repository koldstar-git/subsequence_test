1. Copy folder in root directory
	i.e. C:\xampp\htdocs\test

2. Run 
	php artisan serve

3. Enter virus composition

4. Enter Numner Of People -> Submit
	provide input field for blood composition

5.Submit-> 
	Return Output

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 Logic: 

Subsequence: Form from origanal string with out chnging characters order.


    while($i<$m && $j<$n)
    {
        if($str1[$i]==$str2[$j])
        {
            $i++;
        }

        if($m===$i)
        {
            return "POSITIVE";
        }
        $j++;
    }
    return "NEGATIVE";

