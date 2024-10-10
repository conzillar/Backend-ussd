php<?php

// $code = readline("Enter ussd code:");

// if ($code == "*312#") {
//     echo "GLO \n purchase data bundle \n 1) Buy data \n 2) Gift data \n 3) Share data \n 4) Check data bal \n 5)Voice/Data Roaming Offers \n 6)Glo My-G Bundles \n 0)Exit";
//     $click = readline("select:");
//     if ($click == 1) {
//         echo "1)proceed (Auto-Renew) \n 2)proceed (One-Off) \n 99)Back \n 0)Exit";
//         $click = readline("select:");
//         if ($click == 1) {
//             echo "1)Mini Plans \n 2)Monthly Plans \n 3)Mega Plans \n 4) Super Mega Plans \n 5)Special Data offer \n 6)Social Bundles \n 7)Night & Weekend Plans \n 8)My-G Bundles \n 9)GLOTV Plans \n 99) Back";
//             $click = readline("select:");
//             if ($click == 1) {
//                 echo "1)N100=150MB 1 Day incl 35MB nite \n 2)N200=350MB 2 Days incl 110MB nite \n 3)N500=1.8GB 14 Days incl 1GB nite \n 4)N50MB=50MB 1 Days incl 5MB nite \n 5)More Plans \n 99)Back \n 0)Exit";
//                 if($click == 5){
//                     echo "CONGRATS! you have succesfully subscribed to N100 data plan giving 150MB (115MB+35MB Night) valid for 1 day.";
//                 }
//                 elseif($click == 4){
//                     echo "CONGRATS! you have succesfully subscribed to N50 data plan giving 150MB (115MB+35MB Night) valid for 1 day.";
//                 }
//                 $click = readline("select:");
//                 if ($click == 3) {
//                     echo "CONGRATS! you have succesfully subscribed to N100 data plan giving 150MB (115MB+35MB Night) valid for 1 day.";
//                 }
//                 $click = readline("select:");
//                 if ($click == 2) {
//                     echo "CONGRATS! you have succesfully subscribed to N100 data plan giving 150MB (115MB+35MB Night) valid for 1 day.";
//                 }
//                 $click = readline("select:");
//                 if ($click == 1) {
//                     echo "CONGRATS! you have succesfully subscribed to N100 data plan giving 150MB (115MB+35MB Night) valid for 1 day.";
//                 }
//             }

//         }
//         $click = readline("select:");
//         if ($click == 3) {
//             echo "1)Share Data \n 2)Unshare Data \n 3)List of Shared Numbers \n 4)Get Data Settings \n 5)Manual Configuration Details \n 6)Easy Share (Credict Share) \n 0)Exit";
//         }
//         $click  = readline("select:");
//         if ($click == 2) {
//             echo "1)Mini Plans \n 2)Monthly Plans \n 3)Mega Plans \n 4) Super Mega Plans \n 5)Special Data offer \n 6)Social Bundles \n 7)Night & Weekend Plans \n 8)My-G Bundles \n 9)GLOTV Plans \n 99) Back";
//         }
//         $click = readline("select:");
//         if ($click == 1) {
//             echo "1)Proceed(Auto-Renew)\n 2)Proceed(One-Off)\n 99)Back \n 0)Exit";

//             $click = readline("select:");
//             if ($click == 1) {
//             }
//         }
//     }
// } else {
//     echo "invaild code";
// }
$code = readline("Enter Ussd Code: ");
if ($code == "*312#") {
    echo " echo GLO \n purchase data bundle \n 1) Buy data \n 2) Gift data \n 3) Share data \n 4) Check data bal \n 5)Voice/Data Roaming Offers \n 6)Glo My-G Bundles \n 0)Exit";
}
$click = readline("select: ");
if ($click == 1) {
    echo "1)proceed (Auto-Renew) \n 2)proceed (One-Off) \n 99)Back \n 0)Exit";
    $click = readline("select: ");
    if ($click == 1) {
        echo "1)Mini Plans \n 2)Monthly Plans \n 3)Mega Plans \n 4) Super Mega Plans \n 5)Special Data offer \n 6)Social Bundles \n 7)Night & Weekend Plans \n 8)My-G Bundles \n 9)GLOTV Plans \n 99) Back";
        $click = readline("select: ");
        if ($click == 1) {
            echo "1)N100=150MB 1 Day incl 35MB nite \n 2)N200=350MB 2 Days incl 110MB nite \n 3)N500=1.8GB 14 Days incl 1GB nite \n 4)N50=50MB 1 Days incl 5MB nite \n 5)More Plans \n 99)Back \n 0)Exit";
            $click = readline("select: ");
            if($click ==1){
                echo "CONGRATS! you have succesfully subscribed to N100 data plan giving 150MB (115MB+35MB Night) valid for 1 day.";
            }elseif($click ==2){
                echo "CONGRATS! you have succesfully subscribed to N200 data plan giving 350MB (315MB+110 Night) valid for 2 days.";
            }elseif($click ==3){
                echo "CONGRATS! you have succesfully subscribed to N500 data plan giving 1.8GB (650MB+1GB Night) valid for 1 day.";
            }elseif($click ==4){
                echo "CONGRATS! you have succesfully subscribed to N50 data plan giving 50MB (50MB+5MB Night) valid for 1 day.";
            }
        } elseif ($click == 2) {
            echo "1)N1000=3.9GB 30Days incl 2GB nite \n 2)N1500=7.5GB 30Days incl 4GB nite \n 3)N2000=9.2GB 30Days incl 4GB nite \n 4)N2500=10.8GB 30Days incl 4GB nite \n 5)More \n 99)Back \n 0)Exit";
            $click = readline("select: ");
            if($click ==1){
                echo "CONGRATS! you have succesfully subscribed to N1000 data plan giving 3.9GB (3GB+2GB Night) valid for 30 days.";
            }elseif($click ==2){
                echo "CONGRATS! you have succesfully subscribed to N1500 data plan giving 7.5GB (7GB+4GB Night) valid for 30 days.";
            }elseif($click ==3){
                echo "CONGRATS! you have succesfully subscribed to N2000 data plan giving 9.2GB (9GB+4GB Night) valid for 30 days.";
            }elseif($click ==4){
                echo "CONGRATS! you have succesfully subscribed to N2500 data plan giving 10.8GB (9GB+4GB Night) valid for 30 days.";
            }
        }elseif($click ==3){
            echo "1)N10000=50GB 30Days incl 4GB nite \n 2)N15000=93GB 30Days incl 7GB nite \n 3)N18000=119GB 30Days incl 10GB nite \n 4)N20000=138G 30Days incl 12GB nite \n 5)More Plans \n 99)Backs \n 0)Exit";
            $click = readline("select: ");
            if($click ==1){
                echo "";
            }elseif($click ==2){
                echo "CONGRATS! you have succesfully subscribed to N10000 data plan giving 50GB (50GB+4GB Night) valid for 30 days.";
            }elseif($click ==3){
                echo "CONGRATS! you have succesfully subscribed to N15000 data plan giving 93GB (90GB+7GB Night) valid for 30 days.";
            }elseif($click ==4){
                echo "CONGRATS! you have succesfully subscribed to N2500 data plan giving 10.8GB (9GB+4GB Night) valid for 30 days.";
            }elseif($click ==5){
                echo "CONGRATS! you have succesfully subscribed to N2500 data plan giving 10.8GB (9GB+4GB Night) valid for 30 days.";
            }
        }elseif($click ==4){

        }elseif($click ==5){

        }elseif($click ==6){

        }elseif($click ==7){

        }elseif($click ==8){

        }elseif($click ==9){

        }
    } elseif ($click = 2) {
        echo "";
    }
} elseif ($click == 2) {
    echo "1)Mini Plans \n 2)Monthly Plans \n 3)Mega Plans \n 4) Super Mega Plans \n 5)Special Data offer \n 6)Social Bundles \n 7)Night & Weekend Plans \n 8)My-G Bundles \n 9)GLOTV Plans \n 99) Back";
    $click = readline("select: ");
    if ($click == 1) {
        echo "1)N100=150MB 1 Day incl 35MB nite \n 2)N200=350MB 2 Days incl 110MB nite \n 3)N500=1.8GB 14 Days incl 1GB nite \n 4)N50MB=50MB 1 Days incl 5MB nite \n 5)More Plans \n 99)Back \n 0)Exit";
    } elseif ($click == 2) {
        echo "1)N1000=3.9GB 30Days incl 2GB nite \n 2)N1500=7.5GB 30Days incl 4GB nite \n 3)N2000=9.2GB 30Days incl 4GB nite \n 4)N2500=10.8GB 30Days incl 4GB nite \n 5)More \n 99)Back \n 0)Exit \n";
    }
} elseif ($click == 3) {
    echo "1)Share Data \n 2)Unshare Data \n 3)List of Shared Numbers \n 4)Get Data Settings \n 5)Manual Configuration Details \n 6)Easy Share (Credict Share) \n 0)Exit";
    $click = readline("select: ");
    if ($click == 1) {
        echo "Please enter subcriber number, you want to share data with";
    } elseif ($click == 2) {
        echo "Please enter the Glo subscriber number you want to unshare data.";
    } elseif ($click == 4) {
        echo "";
    } elseif ($click == 5) {
        echo "";
    }
} else {
    echo "Invalid code";
}
