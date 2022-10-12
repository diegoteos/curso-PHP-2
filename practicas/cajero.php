<?php



$retiro = "1452";

//echo strlen($retiro);



if (strlen($retiro) == 4) {
    echo '<br />' . "Su retiro es de mas de 1000 quetzales";
    $doscientos = $retiro / 200;
    $residuo = $retiro % 200;
    echo '<br />';
    echo '<br />' . number_format($doscientos) . " Billetes de doscientos";
    if ($residuo >= 100) {
        echo '<br />' . 1 . " Billete de cien";
        $residuo = $residuo - 100;
        if ($residuo >= 50) {
            echo '<br />' . "1 Billete de cincuenta";
            $residuo = $residuo - 50;
            if ($residuo >= 40) {
                echo '<br />' . "2 Billetes de veinte";
            } elseif ($residuo < 40 && $residuo > 20) {
                echo '<br />' . "1 Billete de veinte";
                $residuo = $residuo - 20;
                if ($residuo >= 10) {
                    echo '<br />' . "1 Billete de diez";
                    $residuo = $residuo - 10;
                    if ($residuo >= 5) {
                        echo '<br />' . "1 Billete de cinco";
                        $residuo = $residuo - 5;
                        if ($residuo > 0) {
                            echo '<br />' . "$residuo Billete(s) de cinco";
                            $residuo = $residuo - 5;
                        } elseif ($residuo < 40) {
                            echo "1 Billete de cincuenta";
                        }
                    }
                }
            } else {
                if ($residuo >= 10) {
                    echo '<br />' . "1 Billete de diez";
                    $residuo = $residuo - 10;
                    if ($residuo >= 5) {
                        echo '<br />' . "1 Billete de cinco";
                        $residuo = $residuo - 5;
                        if ($residuo > 0) {
                            echo '<br />' . "$residuo Billete(s) de cinco";
                            $residuo = $residuo - 5;
                        } elseif ($residuo < 40) {
                            echo "1 Billete de cincuenta";
                        }
                    } else {
                        echo '<br />' . "1 Billete de cinco";
                        $residuo = $residuo - 5;
                        if ($residuo > 0) {
                            echo '<br />' . "$residuo Billete(s) de cinco";
                            $residuo = $residuo - 5;
                        } elseif ($residuo < 40) {
                            echo "1 Billete de cincuenta";
                        }
                    }
                }
            }
        }
    } else {
        if ($residuo >= 50) {
            echo '<br />' . "1 Billete de cincuenta";
            $residuo = $residuo - 50;
            if ($residuo >= 40) {
                echo '<br />' . "2 Billetes de veinte";
            } elseif ($residuo < 40 && $residuo > 20) {
                echo '<br />' . "1 Billete de veinte";
                $residuo = $residuo - 20;
                if ($residuo >= 10) {
                    echo '<br />' . "1 Billete de diez";
                    $residuo = $residuo - 10;
                    if ($residuo >= 5) {
                        echo '<br />' . "1 Billete de cinco";
                        $residuo = $residuo - 5;
                        if ($residuo > 0) {
                            echo '<br />' . "$residuo Billete(s) de quetzal";
                            $residuo = $residuo - 5;
                        } elseif ($residuo < 40) {
                            echo "1 Billete de cincuenta";
                        }
                    }
                }
            } else {
                if ($residuo >= 10) {
                    echo '<br />' . "1 Billete de diez";
                    $residuo = $residuo - 10;
                    if ($residuo >= 5) {
                        echo '<br />' . "1 Billete de cinco";
                        $residuo = $residuo - 5;
                        if ($residuo > 0) {
                            echo '<br />' . "$residuo Billete(s) de quetzal";
                            $residuo = $residuo - 5;
                        } elseif ($residuo < 40) {
                            echo "1 Billete de cincuenta";
                        }
                    }
                }
            }
        }
    }
}
