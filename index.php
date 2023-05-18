<?php


/*----------------------------------------------------------- */
$arr = [1,2,3];

for ($i = 0; $i < count($arr)-1; $i++){
            if ($arr[$i] < $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                echo $i;
                print_r($arr);
            }

}

/*----------------------------------------------------------- */










$arr = [3,2,1];
for ($i = 0; $i < count($arr); $i++){

    if($i+1 == count($arr))
    {
        $new =0;
    }
    else
        {
       $new =$i+1;
    }

    if ( $i <  $new)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$new];
        $arr[$new] = $temp;
        print_r($arr);
    }
    else
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$new];
        $arr[$new] = $temp;
        print_r($arr);
    }

}
