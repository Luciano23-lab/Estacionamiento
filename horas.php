<?php
if($_REQUEST['horas']<=2)
{
  $calculo== 300 * $_REQUEST['horas'];
  echo "Debera pagar $", $_REQUEST['horas'];

} elseif ($_REQUEST['horas']>2 && $_REQUEST['horas']<=5)
{
    $calculo= 200 * $_REQUEST['horas'];
    echo "Debera pagar $", $_REQUEST['horas'];
} elseif ($_REQUEST['horas']>=10)
{
    echo "Debera pagar $150 c/u";
}


?>