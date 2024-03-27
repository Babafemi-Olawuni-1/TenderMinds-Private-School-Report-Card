<html>
<head>


<!-- Global styles BEGIN -->
<link href="style/css/bootstrap.css" rel="stylesheet">
<!-- Global styles END -->
<title>Student Report Card</title>
</head>

<body>
<form action="report.php" method="POST" name="report_card" id="report_card">
<div class="container-fluid">
<img src="img/lg.jpg" style="float:left"/>
<h1 style="text-align:center;font-family:arial;font-size:60px" class="text-danger">Tender Minds Private School </h1>
<h3 style="text-align:center;font-family:britanic bold;font-size:36px" class="text-danger"> Building Heroes</h3>

    


<center>
    <select name="student_session" class="form-control" style="width:200px;color:orange">
<option value="">Select Session</option>
<option value="2016/2017">2016/2017</option>
<option value="2017/2018">2017/2018</option>
<option value="2018/2019">2018/2019</option>
<option value="2019/2020">2019/2020</option>
<option value="2020/2021">2020/2021</option>
<option value="2021/2022">2021/2022</option>
<option value="2022/2023">2022/2023</option>
<option value="2023/2024">2023/2024</option>
<option value="2024/2025">2024/2025</option>
<option value="2025/2026">2025/2026</option>
<option value="2026/2027">2026/2027</option>

</select>
    </center>
<br/>

<div class="row">
<div class="col-sm-4">
<input type="text" name="student_name" placeholder="Student Full Name" class="form-control" autofocus>
</div>

<div class="col-sm-4">
<input type="text" class="form-control" name="student_age" placeholder="Position">
</div>



  <div class="col-sm-4">
<select name="total_subject" class="form-control text-center" id="total_subject" onchange="get_mark_obtaineable(),get_TotalMark()">
<option value="0">Select Total Subject</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>

</select>
</div>
    <script>
        function get_mark_obtaineable()
            
        {
            
            
        
    var total_subject=document.getElementById("tmo");
    var set_total_mark=document.getElementById("set_mark_obtained");
    var mark_obtable=document.getElementById("total_subject").value;
        
            if(mark_obtable>0)
                
            {
                    
                
        set_total_mark.value=mark_obtable * 100;            
        total_subject.value="Total Marks Obtainable: " + mark_obtable * 100;            
                    }
            else{
                       total_subject.value="Total Marks Obtainable: 1000";  
                
                }
            }
        
        
    </script>
<div class="col-sm-4">
<input type="text" name="student_no" class="form-control" placeholder="Admission no">
</div>
    
<div class="col-sm-4">
<input type="text" name="student_no_inclass" class="form-control" placeholder="No in Class">
</div>
    


    
    <div class="col-sm-4">
<input type="text" name="student_obtaineed_mark_calculated" class="form-control" placeholder="Total Marks Obtainable" id="tmo" value="Total Marks Obtainable 1000">
        <input type="hidden" id="set_mark_obtained" name="total_mark_set_by_calcl" value="1000">
</div>

    <div class="col-sm-4">
<select name="class" class="form-control text-center" >
<option value="">Select Class</option>
<option value="KG 2">KG 2</option>
<option value="Reception">Reception</option>
<option value="Primary One">Primary One</option>
<option value="Primary Two">Primary Two</option>
<option value="Primary Three">Primary Three</option>
<option value="Primary Four">Primary Four</option>
<option value="Primary Five">Primary Five</option>
<option value="Jss 1">Primary Five</option>
<option value="Jss 1">JSS 1</option>
<option value="Jss 2">JSS 2</option>
<option value="Jss 3">JSS 3</option>
<option value="Sss 1">SSS 1</option>
<option value="Sss 2">SSS 2</option>
<option value="Sss 3">SSS 3</option>

</select>
</div>
    
    

    
    
    <div class="col-sm-4">
<select name="student_term" class="form-control text-center" id="gettermoption" onchange="get_term_option()">
<option value="">Select Term</option>
<option value="First">First</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
</div>
    
    
    <div class="col-sm-4">
<input type="text" name="student_mark_obtained" id="mark" class="form-control" placeholder="Total Marks Obtained">
</div>
    

<div class="col-sm-4">
<input type="number" name="no_s_op" placeholder="No Of Time School Opened" class="form-control">
</div>    
   

  <div class="col-sm-4">
<input type="number" name="no_s_closed" placeholder="Student Punctuality" class="form-control">
</div>  


    
 
<div class="col-sm-4">
<input type="text" name="student_percentage" id="percentage" class="form-control" placeholder="Percentage">
</div>
 </div>   
    
<div id="third_term_option" style="display:none">    
    


    <div class="panel panel-default">
					<div class="panel-heading">
				
    <small class="text-warning" style="font-size:25px"> Fill in student past performance</small>

			
			
			</div>
			
			
			<div class="panel-body">
<div class="col-sm-4">
<label style="font-size:15px" class="text-info"> First Term</label>
<input type="text" name="first_percentage" id="first_percentage" class="form-control" onkeyup="calculate_average()" placeholder="Enter First Term Percentage">
</div>

    

<div class="col-sm-4">
<label style="font-size:15px" class="text-info"> Second Term</label>
<input type="text" name="second_percentage" id="second_percentage" class="form-control" onkeyup="calculate_average()" placeholder="Enter Second Term Percentage">
</div>
    
<div class="col-sm-4">
<label style="font-size:15px"class="text-info"> Third Term</label>
<input type="text" name="third_percentage" id="third_percentage" class="form-control" onkeyup="calculate_average()" placeholder="Third Term Percentage - (Will be Auto-generated)">
</div>

<div style="float:right;margin-right:10px" class="text-align"><p class="text-info;" style="font-size:25px">Total Performance</p>
    <a href="#" onclick="calculate_average()">refresh average</a><br/>
<span id="average_result" style="font-size:20px"> </span>


<div>
<select name="next_class" class="form-control text-center" style="color:orange" id="gettermoption" onchange="get_term_option()">
<option value="">Select Student Next Class</option>
<option value="KG 2">KG 2</option>
<option value="Reception">Reception</option>
<option value="Primary One">Primary One</option>
<option value="Primary Two">Primary Two</option>
<option value="Primary Three">Primary Three</option>
<option value="Primary Four">Primary Four</option>
<option value="Primary Five">Primary Five</option>
<option value="Jss 1">JSS 1</option>
<option value="Jss 2">JSS 2</option>
<option value="Jss 3">JSS 3</option>
<option value="Sss 1">SSS 1</option>
<option value="Sss 2">SSS 2</option>
<option value="Sss 3">SSS 3</option>
<option value="Repeat">Repeat</option>
</select>
</div>
   
</div>  
			</div>
	</div>

  
    </div>
			





<style>
table,th,td{border:0.8px solid gray;
			border-collapse:collapse;
			
			}
tr,th{font-size:10px;}

td,input{text-align:center;}

.left{text-align:left;}
</style>
<p> &nbsp</p>

    
    <script>
	function calculate_average()
	{
		
	var first= document.getElementById("first_percentage").value; 
	var second= document.getElementById("second_percentage").value; 
	var third= document.getElementById("third_percentage").value; 
	var average_result= document.getElementById("average_result"); 
		
		
	var	sum_average= +first + +second + +third;
	var	round_sum_average= Math.round(sum_average / 3);

		average_result.innerHTML="Average: " + round_sum_average + " %";
	}
	
    function get_term_option()
    {
        
    
   var x= document.getElementById("gettermoption").value; 
    if(x=="Third")
        {
           
                document.getElementById("third_term_option").style.display="";
				 document.getElementById("report_card").action = "third_term_report.php"; 
                    }
    else{
            
                document.getElementById("third_term_option").style.display="none";
				document.getElementById("report_card").action = "report.php"; 
                    }
        
        }

        
        
        function get_TotalMark()
        {

            
            
            
    var mark=document.getElementById("mark");
    var set_total_mark=document.getElementById("set_total_mark");
    var update_total_mark_obtianed=document.getElementById("tmo");
    var percentage=document.getElementById("percentage");
    var third_percentage=document.getElementById("third_percentage");
    
        
    mark.value=+document.getElementById("e_total").value+
    +document.getElementById("m_total").value+
    +document.getElementById("h_total").value+
    +document.getElementById("s_total").value+
    +document.getElementById("sc_total").value+
    +document.getElementById("r_total").value+
    +document.getElementById("a_total").value+
    +document.getElementById("f_total").value+
    +document.getElementById("i_total").value+
    +document.getElementById("d_total").value+
    +document.getElementById("q_total").value+
    +document.getElementById("v_total").value+
    +document.getElementById("mc_total").value+
    +document.getElementById("c_total").value+
    +document.getElementById("ar_total").value;
            
    mark_value=+document.getElementById("e_total").value+
    +document.getElementById("m_total").value+
    +document.getElementById("h_total").value+
    +document.getElementById("s_total").value+
    +document.getElementById("sc_total").value+
    +document.getElementById("r_total").value+
    +document.getElementById("a_total").value+
    +document.getElementById("f_total").value+
    +document.getElementById("i_total").value+
    +document.getElementById("d_total").value+
    +document.getElementById("q_total").value+
    +document.getElementById("v_total").value+
    +document.getElementById("mc_total").value+
    +document.getElementById("c_total").value+
    +document.getElementById("ar_total").value;        
            
            
      var total_subject=document.getElementById("total_subject").value;
            
            
            percentage.value=Math.round(mark_value / total_subject) + "%";
            third_percentage.value=Math.round(mark_value / total_subject);
			
	calculate_average();
        }
    
    </script>
<table style="width:100%;border:1px solid gray">
<tr>
<td></td>
<td> Test</td>
<td>Term's Exam</td>
<td>Total</td>
<td>Grade</td>
<td>Class Average</td>
<td>Teachers Remark</td>
</tr>


<tr style="color:gray;font-size:22px	">
<td class="left">	Marks Obtainable</td>
<td>	40</td>
<td>	60</td>
<td>	100</td>
<td>	</td>
<td>	</td>
<td>	</td>




</tr>



<tr>
<td class="left"><input type="text" name="1" value="English Language">	</td>
<td><input type="number" placeholder="" style="width:50%;" name="e_ca" id="e_ca" onkeyup="calc_e(),get_TotalMark()" max="40"> 	</td>

<td><input type="number" placeholder="" style="width:50%" name="e_te" id="e_te" onkeyup="calc_e(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="e_total" id="e_total" >	</td>
<td><input type="" placeholder="" style="width:50%" name="e_grade" id="e_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="e_sp">	</td>
<td>
    <select name="e_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>


</tr>

<tr>
<td class="left">	<input type="text" name="2" value="Mathematics"></td>
<td><input type="number" placeholder="" style="width:50%" name="m_ca" id="m_ca" onkeyup="calc_m(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="m_te" id="m_te" onkeyup="calc_m(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="m_total" id="m_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="m_grade" id="m_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="m_sp">	</td>
<td>
    <select name="m_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>



</tr>


<tr>
<td class="left">	<input type="text" name="3" value="Hand Writing"></td>
<td><input type="number" placeholder="" style="width:50%" name="h_ca" id="h_ca" onkeyup="calc_h(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="h_te" id="h_te" onkeyup="calc_h(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="h_total" id="h_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="h_grade" id="h_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="h_sp">	</td>
<td>
    <select name="h_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>



</tr>

<tr>
<td class="left">	<input type="text" name="4" value="Social Studies"></td>
<td><input type="number" placeholder="" style="width:50%" name="s_ca" id="s_ca" onkeyup="calc_s(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="s_te" id="s_te" onkeyup="calc_s(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="s_total" id="s_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="s_grade" id="s_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="s_sp">	</td>
<td>
    <select name="s_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>



</tr>

<tr>
<td class="left">	<input type="text" name="5" value="Basic Science"></td>
<td><input type="number" placeholder="" style="width:50%" name="sc_ca" id="sc_ca" onkeyup="calc_sc(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="sc_te" id="sc_te" onkeyup="calc_sc(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="sc_total" id="sc_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="sc_grade" id="sc_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="sc_sp">	</td>
<td>
    <select name="sc_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>



</tr>

<tr>
<td class="left">	<input type="text" name="6" value="Home Economics"></td>
<td><input type="number" placeholder="" style="width:50%" name="r_ca" id="r_ca" onkeyup="calc_r(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="r_te" id="r_te" onkeyup="calc_r(),get_TotalMark()" max="60"> 	</td>
<td><input type="" placeholder="" style="width:50%" name="r_total" id="r_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="r_grade" id="r_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="r_sp">	</td>
<td>
    <select name="r_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>


</tr>

<tr>
<td class="left"> 	<input type="text" name="7" value="Agricultural Science"></td>
<td><input type="number" placeholder="" style="width:50%" name="a_ca" id="a_ca" onkeyup="calc_a(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="a_te" id="a_te" onkeyup="calc_a(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="a_total" id="a_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="a_grade" id="a_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="a_sp">	</td>
<td>
    <select name="a_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>


</tr>

<tr>
<td class="left">	<input type="text" name="8" value="Computer Studies"></td>
<td><input type="number" placeholder="" style="width:50%" name="f_ca" id="f_ca" onkeyup="calc_f(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="f_te" id="f_te" onkeyup="calc_f(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="f_total" id="f_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="f_grade" id="f_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="f_sp">	</td>
<td>
    <select name="f_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>


</tr>

<tr>
<td class="left">	<input type="text" name="9" value="Vocational Aptitude"></td>
<td><input type="number" placeholder="" style="width:50%" name="i_ca" id="i_ca" onkeyup="calc_i(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="i_te" id="i_te" onkeyup="calc_i(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="i_total" id="i_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="i_grade" id="i_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="i_sp">	</td>
<td>
    <select name="i_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>


</tr>

<tr>
<td class="left">	<input type="text" name="10" value="Civic Education"></td>
<td><input type="number" placeholder="" style="width:50%" name="ar_ca" id="ar_ca" onkeyup="calc_ar(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="ar_te" id="ar_te" onkeyup="calc_ar(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="ar_total" id="ar_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="ar_grade" id="ar_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="ar_sp">	</td>
    
<td>
    <select name="ar_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>

</tr>

<tr>
<td class="left">	<input type="text" name="11" value="Drawing"></td>
<td><input type="number" placeholder="" style="width:50%" name="d_ca" id="d_ca" onkeyup="calc_d(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="d_te" id="d_te" onkeyup="calc_d(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="d_total" id="d_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="d_grade" id="d_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="d_sp">	</td>
    
<td>
    <select name="d_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>

</tr>



<tr>
<td class="left">	<input type="text" name="12" value="Quantitative Aptitude"></td>
<td><input type="number" placeholder="" style="width:50%" name="q_ca" id="q_ca" onkeyup="calc_q(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="q_te" id="q_te" onkeyup="calc_q(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="q_total" id="q_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="q_grade" id="q_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="q_sp">	</td>
    
<td>
    <select name="q_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>

</tr>

<tr>
<td class="left">	<input type="text" name="13" value="Verbal Reasoning"></td>
<td><input type="number" placeholder="" style="width:50%" name="v_ca" id="v_ca" onkeyup="calc_v(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="v_te" id="v_te" onkeyup="calc_v(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="v_total" id="v_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="v_grade" id="v_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="v_sp">	</td>
    
<td>
    <select name="v_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>

</tr>

<tr>
<td class="left">	<input type="text" name="14" value="Music"></td>
<td><input type="number" placeholder="" style="width:50%" name="mc_ca" id="mc_ca" onkeyup="calc_mc(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="mc_te" id="mc_te" onkeyup="calc_mc(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="mc_total" id="mc_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="mc_grade" id="mc_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="mc_sp">	</td>
    
<td>
    <select name="mc_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>

</tr>
<tr>
<td class="left">	<input type="text" name="15" value="C.R.S"></td>
<td><input type="number" placeholder="" style="width:50%" name="c_ca" id="c_ca" onkeyup="calc_c(),get_TotalMark()" max="40">	</td>
<td><input type="number" placeholder="" style="width:50%" name="c_te" id="c_te" onkeyup="calc_c(),get_TotalMark()" max="60">	</td>
<td><input type="" placeholder="" style="width:50%" name="c_total" id="c_total">	</td>
<td><input type="" placeholder="" style="width:50%" name="c_grade" id="c_grade">	</td>
<td><input type="" placeholder="" style="width:50%" name="c_sp">	</td>
    
<td>
    <select name="c_tr" style="width:90%">
    <option value="" selected> -- select --</option><option value="Excellent"> Excellent</option>
    <option value="Very Good">Very Good </option>
    <option value="Good">Good </option>
    <option value="Fair">Fair </option>

    </select>
    </td>

</tr>



</table>
    <blockquote>
<small class="text-danger" style="font-size:20px">Select Observation on Conducts where Appropriate </small>
    <div class="col-sm-2">
<select name="haw" class="form-control">
<option value="">Handwritting</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>

<div class="col-sm-2">
<select name="ps" class="form-control">
<option value="">Physical skills</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>



<div class="col-sm-2">
<select name="ut" class="form-control">
<option value="">Uses Time to Good Advantage</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>

<div class="col-sm-2">
<select name="dn" class="form-control">
<option value="">Does neat work</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>

<div class="col-sm-2">
<select name="hwr" class="form-control">
<option value="">Home work regularly</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>

<div class="col-sm-2">
<select name="rau" class="form-control">
<option value="">Respect Authority</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
    
    
    </blockquote>
<br/>
<table style="width:100%">




<tr>
<td>Teacher's Comment</td>
<td style="width:70%"><textarea style="width:100%" name="teacher_coment" placeholder="Enter comment here..."></textarea></td>
</tr>


<tr>
<td>Proprietress' Comment</td>
<td><textarea style="width:100%" name="program_director" placeholder="Enter comment here..."></textarea></td>
</tr>

<tr>
<td>This Term Ends</td>
<td><textarea style="width:100%" name="this_term_ends" placeholder="E:G 9th December 2017..."></textarea></td>

</tr>

<tr>
<td>Next Term Begins</td>
    <td><textarea style="width:100%" name="next_term_begins" placeholder="E:G 9th January 2017..."></textarea></td>
</tr>




</table>
<center>
<input type="submit" value="GENERATE REPORT CARD" style="background:#a94442;color:white;font-size:30px">
</center>
</form>

</div>

<script>
function calc_e()
{
a=document.getElementById("e_ca").value;
c=document.getElementById("e_te").value;
var grade = +a + +c;
    
document.getElementById("e_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("e_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("e_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("e_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("e_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("e_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("e_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("e_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("e_grade").value="";
            
                }
    
    
    
			};
			
            function calc_m()
{
a=document.getElementById("m_ca").value;
c=document.getElementById("m_te").value;
var grade = +a + +c;
    
document.getElementById("m_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("m_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("m_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("m_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("m_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("m_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("m_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("m_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("m_grade").value="";
            
                }
    
    
    
			};
            function calc_h()
{
a=document.getElementById("h_ca").value;
c=document.getElementById("h_te").value;
var grade = +a + +c;
    
document.getElementById("h_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("h_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("h_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("h_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("h_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("h_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("h_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("h_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("h_grade").value="";
            
                }
    
    
    
			};
			
            function calc_s()
{
a=document.getElementById("s_ca").value;
c=document.getElementById("s_te").value;
var grade = +a + +c;
    
document.getElementById("s_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("s_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("s_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("s_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("s_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("s_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("s_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("s_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("s_grade").value="";
            
                }
    
    
    
			};
            function calc_sc()
{
a=document.getElementById("sc_ca").value;
c=document.getElementById("sc_te").value;
var grade = +a + +c;
    
document.getElementById("sc_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("sc_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("sc_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("sc_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("sc_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("sc_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("sc_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("sc_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("sc_grade").value="";
            
                }
    
    
    
			};

            function calc_r()
{
a=document.getElementById("r_ca").value;
c=document.getElementById("r_te").value;
var grade = +a + +c;
    
document.getElementById("r_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("r_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("r_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("r_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("r_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("r_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("r_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("r_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("r_grade").value="";
            
                }
    
    
    
			};
            function calc_a()
{
a=document.getElementById("a_ca").value;
c=document.getElementById("a_te").value;
var grade = +a + +c;
    
document.getElementById("a_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("a_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("a_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("a_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("a_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("a_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("a_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("a_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("a_grade").value="";
            
                }
    
    
    
			};
            function calc_f()
{
a=document.getElementById("f_ca").value;
c=document.getElementById("f_te").value;
var grade = +a + +c;
    
document.getElementById("f_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("f_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("f_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("f_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("f_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("f_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("f_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("f_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("f_grade").value="";
            
                }
    
    
    
			};
            function calc_i()
{
a=document.getElementById("i_ca").value;
c=document.getElementById("i_te").value;
var grade = +a + +c;
    
document.getElementById("i_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("i_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("i_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("i_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("i_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("i_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("i_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("i_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("i_grade").value="";
            
                }
    
    
    
			};
            function calc_e()
{
a=document.getElementById("ar_ca").value;
c=document.getElementById("ar_te").value;
var grade = +a + +c;
    
document.getElementById("ar_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("ar_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("ar_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("ar_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("ar_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("ar_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("ar_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("ar_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("ar_grade").value="";
            
                }
    
    
    
			};
	
            function calc_d()
{
a=document.getElementById("d_ca").value;
c=document.getElementById("d_te").value;
var grade = +a + +c;
    
document.getElementById("d_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("d_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("d_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("d_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("d_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("d_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("d_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("d_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("d_grade").value="";
            
                }
    
    
    
			};

	
            function calc_q()
{
a=document.getElementById("q_ca").value;
c=document.getElementById("q_te").value;
var grade = +a + +c;
    
document.getElementById("q_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("q_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("q_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("q_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("q_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("q_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("q_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("q_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("q_grade").value="";
            
                }
    
    
    
			};

	
            function calc_v()
{
a=document.getElementById("v_ca").value;
c=document.getElementById("v_te").value;
var grade = +a + +c;
    
document.getElementById("v_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("v_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("v_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("v_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("v_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("v_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("v_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("v_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("v_grade").value="";
            
                }
    
    
    
			};

            function calc_mc()
{
a=document.getElementById("mc_ca").value;
c=document.getElementById("mc_te").value;
var grade = +a + +c;
    
document.getElementById("mc_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("mc_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("mc_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("mc_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("mc_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("mc_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("mc_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("mc_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("mc_grade").value="";
            
                }
    
    
    
			};

            function calc_c()
{
a=document.getElementById("c_ca").value;
c=document.getElementById("c_te").value;
var grade = +a + +c;
    
document.getElementById("c_total").value=grade;
    
if(+a + +c<=49)
        {
            
document.getElementById("c_grade").value="D";
            
                }
    
    else if(grade>0 && grade<=59)
        {
            
document.getElementById("c_grade").value="C";
            
                }
    
    else if(grade>44 && grade<=69)
        {
            
document.getElementById("c_grade").value="B";
            
                }
    
    else if(grade>49 && grade<=54)
        {
            
document.getElementById("c_grade").value="A";
            
                }
    
    else if(grade>54 && grade<=59)
        {
            
document.getElementById("c_grade").value="C+";
            
                }
    
    else if(grade>59 && grade<=74)
        {
            
document.getElementById("c_grade").value="B";
            
                }
    
    
    else if(grade>74 && grade<=100)
        {
            
document.getElementById("c_grade").value="A";
            
                }
    

    
    else
        {
            
document.getElementById("c_grade").value="";
            
                }
    
    
    
			};
</script>
</body>
</html>