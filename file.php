<?php
if(isset($_POST["csvYukle"]))
{

    $fileName = $_FILES["dosya"]["tmp_name"];
    if($_FILES["dosya"]["size"]>0)
    {
        $file = fopen($fileName,"r");
        while(($column = fgetcsv($file,1000,",")) !== FALSE)
        {
            echo('<table class="table">
            <thead>
              <tr>             
                <th scope="col">'.$column[0].'</th>
                <th scope="col">'.$column[1].'</th>
              </tr>
            </thead>          
          </table>');
        }
    }
}
?>