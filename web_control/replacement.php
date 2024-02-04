<?php 
    include 'sidebar.php';
    include 'common/connection.php';
?>
  
<h1>Applied for Admission</h1>
    <br>
    
    <table border="1px">
        <tr>
        <th style="padding: 20px; font-size: 15px;">S.no</th>
            <th style="padding: 20px; font-size: 15px;">Name</th>
            <th style="padding: 20px; font-size:15px;">Blood_Group</th>
            <th style="padding: 20px; font-size:15px;">Unit_Blood</th>
            <th style="padding: 20px; font-size:15px;">Hospital</th>
            <th style="padding: 20px; font-size:15px;">Blood_Bank</th>
            <th style="padding: 20px; font-size:15px;">phone</th>

</tr>
<?php
$c=1;
$sel=mysqli_query($conn,"SELECT * FROM r_form");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){

?> 
<tr>
<td class="tb-col tb-col-check"><?=$c++;?></td>

    <td style="padding: 20px; font-size: 15px;"><?php echo"{$fe['name']}";?></td>
    <td style="padding: 20px; font-size: 15px;"><?php echo"{$fe['blood_group']}";?></td>
    <td style="padding: 20px; font-size: 15px;"><?php echo"{$fe['unit_blood']}";?></td>
    <td style="padding: 20px; font-size: 15px;"><?php echo"{$fe['hospital']}";?></td>
    <td style="padding: 20px; font-size: 15px;"><?php echo"{$fe['blood_bank']}";?></td>
    <td style="padding: 20px; font-size: 15px;"><?php echo"{$fe['phone']}";?></td>
    

</tr>
<?php
}
    }
?>
</table>
</div>
</center>

</body>
</html>