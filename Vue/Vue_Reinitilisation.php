<?php
function Vue_Reinitilisation($msg = "")
{
    echo "
    <form>
            <H1>Cafe.com : rĂ©initialiser mon Mot de passe</H1>
             <table>
                 <tr>
                    <td>Email</td><td><input type='email' name='email'></td>
                 </tr>
                 <tr>
                     <td>
                        <button type='submit' name='action' value='validerDemandeReinitialisation'>RĂ©initialiser MDP</button>
                     </td>
                 
                     <td>
                        <button type='submit' name='action' value='validerDemandeReinitialisationParToken'>RĂ©initialiser MDP par token</button>
                     </td>
                </tr>
            </table>
           <br>
            <p>$msg</p>
               </form>
   ";


}