<?


$max = null;
$max_key = null;
foreach($_POST as $k => $v)
{
    if($v > $max)
    {
        $max = $v;
        $max_key = $k;
    }

}
echo $max;