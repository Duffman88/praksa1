<h1>Kalkulator</h1>
<div>
     <form method="post">
          <table>
               <tr>
                    <td>
                         <input type="text" name="numb1">
                    </td>
                    <td>
                         <input type="text" name="numb2">
                    </td>
               </tr>
               <tr>
                    <td>
                         <select name="operator" id="">
                         <option>None</option>
                         <option>+</option>
                         <option>-</option>
                         <option>*</option>
                         <option>/</option>
                         </select>
                    </td>
               </tr>
               <tr>
                    <td>
                         <button type="submit" name="submit" value="submit">=</button>  
                    </td>
               </tr>
               <tr>
                    <td>
                         <p>Rezultat:</p>
                    </td>
               </tr>
          </table>
     </form>
</div>
     

        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'None':
                        echo "Izaberite jednu od operacija";
                        break;
                    case '+':
                        echo $result1 + $result2;
                        break;
                    case '-':
                        echo $result1 - $result2;
                        break;
                    case '*':
                        echo $result1 * $result2;
                        break;
                    case '/':
                        echo $result1 / $result2;
                        break;
                }
            }


         ?>
