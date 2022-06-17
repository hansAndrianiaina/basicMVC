<h1>OUR COFFEE ARE DELICIOUS</h1>

<ul>
<?php 
    foreach($result as $value)
    {
?>
    <li> A <?= $value->getName() ?> for <?= $value->getPrice() ?> </li>
<?php
    }
?>
</ul>
