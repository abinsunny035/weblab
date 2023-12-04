<?php
$ar=array(array("id"=>1,"name"=>"Ajai","physic"=>28,"maths"=>38,"python"=>40),
         array("id"=>2,"name"=>"Ajith","physic"=>28,"maths"=>38,"python"=>40),
         array("id"=>3,"name"=>"Akhil","physic"=>28,"maths"=>38,"python"=>40),
         array("id"=>4,"name"=>"Arjun","physic"=>28,"maths"=>38,"python"=>40));
         $id=4;
?>
<html>
    <head>
        <title>Mace</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <style>   body{
                background-color: rgba(12, 30, 31, 0.058);
            }
            td,th{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <main>
            <center><h3>MACE</h3>
            <form method="post">
                <table width="50%" cellpadding="10">
                    
                    <tr>
                        <td>NAME:</td>
                        <td><input type="text" name="name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input type="number" name="id" class="form-control"></td>
                    </tr>
                </table>
                <div class="col-2"><input type="submit" name="btn" class="form-control btn btn-dark" value="check" ></div>
            </form>
            </center>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
             <?php if (isset($_POST['btn']))
                    { 
                        foreach($ar as $student)
                             {
                              if($student["id"]==$_POST['id'] && $student['name']==$_POST['name'])
                                  { $total=0;
                                    $fail=0;
            ?>                     <CENTER> <h2>FIRST SERIES EXAMINATION RESULT</h2><CENTER>
                                    <table width="40%" cellpadding="10" text-align="center" class="table">
                                     <thead class="thead-dark">
                                             
                                             <tr>
                                                 <th>Subject</th>
                                                 <th>Mark</th>
                                                 <th>status</th>
                                                 </tr>
                                     </thead>
                                    <?php  foreach($student as $key=>$value)
                                            { 
                                               if($key!="id" and $key!="name")
                                               	  {
                                            ?>
                                                <tr>
                                                     <td><?php echo $key ?></td>
                                                     <td><?php echo $value ?></td>
                                                     <td><?php if($value>=30) {echo "pass";} else {echo "fail" ;$fail=1;}?></td>
                                               </tr>
                                    <?php   $total=$total+$value;
                                                   }
                                            } ?> 
                                               <tr>
                                               	     <td>TOTAL</td>
                                               	     <td><?php echo $total ?></td>
                                               	     <td><?php if($fail=1){echo "fail";} else {echo "pass";} ?> </td>
                                               </tr>
                   
                             <?php break;
                                   }
                             }
                   } ?>        
                                    </table>
            

                </div>
                <div class="col-3"></div>
            </div>
        </main>
    </body>
</html>
