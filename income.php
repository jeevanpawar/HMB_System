<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MHB</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

</head>

<body>
<div id="container">
	   
    
    <div id="sub-header">
		<div class="quo">
    	<br />
		<div class="quotation">
        <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li class="selected"><a href="index.php">Home</a></li>
            <li ><a href="income.php">Income</a></li>
            <li><a href="expense.php">Expense</a></li>
            <li><a href="category.php">New Category</a></li>
            <li><a href="quotation.php">Reports</a></li>
           <li class="selected"><a href="index.php">Log Out</a></li>
       
        </ul>
    </div>
        
        </div>
       <div class="left">
       <div class="leftmenu">
       <div class="leftul">
       <ul>
       <li>Income Details</li>
       <li>Monthly Details</li>
       <li>Yearly Details</li>
       <li>Balance Details</li>
       </ul>
       </div>
       </div>
       <div class="right">
       <form action="" method="post">
<table class="addemp_tab">
        <tr>
        <td class="l_form">Amount in Rs.:</td>
        <td><input type="text" class="q_in" name="e_name"></td>
        </tr>
        <tr>
        <td class="l_form">Day:</td>
        <td>
        <select class="a">
        <?php
			for($i=1; $i<=31; $i++)
			{
				echo "<option>";
				echo $i;
				echo "</option>";
			}
		?>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form">Month:</td>
        <td>
        <select class="a">
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
        <option>Apr</option>
        <option>May</option>
        <option>Jun</option>
        <option>Jul</option>
        <option>Aug</option>
        <option>Sep</option>
        <option>Oct</option>
        <option>Nov</option>
        <option>Des</option>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form">Year:</td>
        <td>
        <select class="a">
        <?php
			for($i=2013; $i<=2020; $i++)
			{
				echo "<option>";
				echo $i;
				echo "</option>";
			}
		?>
        </select>
        </td>
        </tr>
        
        </div>
        </table> 
        <div class="addemp_b">
         <input name="e_add" class="formbutton" value=" Add " type="submit" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />
        </div>
        </form>   
       </div>
       </div>
       
    </div>
    
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
