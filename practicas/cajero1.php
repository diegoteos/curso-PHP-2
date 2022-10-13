<?php


$retiro = "1658";

    if ($retiro <= 2000) {
        $doscientos = $retiro / 200;
        $billetesDoscientos = bcdiv($doscientos, '1', 0);
        $residuo = $retiro % 200;
        echo '<br />';
        echo '<br />' . $billetesDoscientos . " Billetes de doscientos";
        if ($residuo >= 100) {

            echo '<br />' . " 1 Billete de cien";
            $residuo = $residuo - 100;
            if ($residuo >= 50) {
                echo '<br />' . " 1 Billete de cincuenta";
                $residuo = $residuo - 50;
                if ($residuo >= 40) {
                    echo '<br />' . " 2 Billetes de veinte";
                    $residuo = $residuo - 40;
                    if ($residuo >= 5) {
                        echo '<br />' . " 1 Billete de cinco";
                        $residuo = $residuo - 5;
                        if ($residuo >= 1) {
                            echo '<br />' . "$residuo  Billete(s) de quetzal";
                        }
                    } else {
                        echo '<br />' . "$residuo  Billete(s) de quetzal";
                    }
                } elseif ($residuo >= 20){
                        echo '<br />' . " 1 Billete de veinte";
                        $residuo = $residuo - 20;
                    } elseif ($residuo >= 10){
                        echo '<br />' . " 1 Billete de diez";

                    }
                }
            } else {
                if ($residuo >= 40) {
                    echo '<br />' . " 2 Billetes de veinte";
                    $residuo = $residuo - 40;
                } else {

                    if ($residuo >= 20) {
                        echo '<br />' . " 1 Billetes de veinte";
                        $residuo = $residuo - 20;
                        if ($residuo >= 10) {
                            echo '<br />' . " 1 Billetes de diez";
                            $residuo = $residuo - 10;
                            if ($residuo >= 5) {
                                echo '<br />' . " 1 Billete de cinco";
                                $residuo = $residuo - 5;
                                echo '<br />' . " $residuo Billete(s) de cinco";
                            } else {
                            }
                        } else {
                            if ($residuo >= 5) {
                                echo '<br />' . " 1 Billete de cinco";
                                $residuo = $residuo - 5;
                                echo '<br />' . " $residuo Billete(s) de quetzal";
                            } else {
                                echo '<br />' . " $residuo Billete(s) de quetzal";
                            }
                        }
                    } else {
                        if ($residuo >= 10) {
                            echo '<br />' . " 1 Billetes de diez";
                            $residuo = $residuo - 10;
                            if ($residuo >= 5) {
                                echo '<br />' . " 1 Billete de cinco";
                                $residuo = $residuo - 5;
                                echo '<br />' . " $residuo Billete(s) de cinco";
                            } else {
                                if ($residuo >= 5) {
                                    echo '<br />' . " 1 Billete de cinco";
                                    $residuo = $residuo - 5;
                                    echo '<br />' . " $residuo Billete(s) de cinco";
                                } else {
                                    echo '<br />' . "$residuo  Billete(s) de quetzal";
                                }
                            }
                        }
                    }
                }
            }
        } else {
            if ($residuo >= 50) {
                echo '<br />' . " 1 Billete de cincuenta";
                $residuo = $residuo - 50;
                if ($residuo >= 40) {
                    echo '<br />' . " 2 Billetes de veinte";
                    $residuo = $residuo - 40;
                    if ($residuo >= 5) {
                        echo '<br />' . " 1 Billete de cinco";
                        $residuo = $residuo - 5;
                        if ($residuo >= 1) {
                            echo '<br />' . "$residuo  Billete(s) de quetzal";
                        }
                    } else {
                        echo '<br />' . "$residuo  Billete(s) de quetzal";
                    }
                }
              }else {
        echo "No puede hacer retiros mayores a Q2000.ºº";
        }
    

