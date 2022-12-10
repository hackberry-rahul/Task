<?php
$emp = [
    [1,"patel meet","ceo",100000],
    [2,"nayak meet","cfo",80000],
    [3,"patel yash","manager",71000],
    [4,"patel raj","hr",50000],
];
echo "<table border='1px' cellpadding='10px' cellspacing='1px'>
<tr>
<th>emp id</th>
<th>name</th>
<th>post</th>
<th>salary</th>
</tr>";
foreach($emp as list($id,$name,$post,$salary)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$post</td> <td>$salary</td></tr> ";
}
echo"</table>";
?>