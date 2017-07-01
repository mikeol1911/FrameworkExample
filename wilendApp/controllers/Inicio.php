<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    private $arraycount; //= 0
    private $arraydias; //= 1
    private $fechas;
    private $diasnumero;
    private $listadias;
    private $dayforjavascript;
    private $defaultdays; 

    public function __construct() {
        parent::__construct();

        $this->arraycount = 0;
        $this->arraydias = 1;
        $this->fechas = $this->createDateRangeArray(date('Y-m-d', strtotime("+1 days")), date('Y-m-d', strtotime("+30 days")));
        $this->diasnumero = array();
        $this->listadias = "";
    }

    public function index() {
        
        
        
        foreach ($this->fechas as $today) {
            $dw = date("N", strtotime($today));


            if ($dw < 6) {
                array_push($this->diasnumero, $this->arraydias);
                $this->listadias .= $this->arraydias . ",";
                //var_dump($slidervalues);
            } else {
                unset($this->fechas[$this->arraycount]);
            }

            $this->arraydias++;
            $this->arraycount++;
        }

        $explode = explode(",", $this->listadias);
        $maxslider = count($explode) - 1;
        $calendar = $this->calendar();
        
        $data = array(
            'calendar' => $calendar,
            'listadias' => $this->listadias,
            'defaultdays' => $this->defaultdays,
            'dayforjavascript' => $this->dayforjavascript
        );
        
        $this->load->view('welcome_view',$data);
    }

    function createDateRangeArray($strDateFrom, $strDateTo) {
        // takes two dates formatted as YYYY-MM-DD and creates an
        // inclusive array of the dates between the from and to dates.
        // could test validity of dates here but I'm already doing
        // that in the main script

        $aryRange = array();

        $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
        $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

        if ($iDateTo >= $iDateFrom) {
            array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry
            while ($iDateFrom < $iDateTo) {
                $iDateFrom += 86400; // add 24 hours
                array_push($aryRange, date('Y-m-d', $iDateFrom));
            }
        }
        return $aryRange;
    }

    public function calendar() {

        // Creamos un arreglo con los dÃ­as de la semana
        $daysOfWeek = array('D', 'L', 'M', 'M', 'J', 'V', 'S');

        //Buscamos el primer dÃ­a del intervalo de fechas
        //$firstDayOfMonth = mktime(0,0,0,12,20,2016);
        //Obtenemos la hora actual
        $hora = date("H:i:s");

        //Este IF sirve para definir si el calendario empieza "hoy" o "maÃ±ana"
        //La variable dayforjavascirpt la usamos en el archivo calculadora.php que tiene las en javascript para la calculadora
        if ($hora < "16:30:00") {

            if (date("N") == 6) {
                $firstDayOfMonth = mktime(0, 0, 0, date("m"), date("d"), date("Y")) + (86400 * 2);
                $this->dayforjavascript = "2dias_lunes";
            } else if (date("N") == 7) {
                $firstDayOfMonth = mktime(0, 0, 0, date("m"), date("d"), date("Y")) + (86400);
                $this->dayforjavascript = "tomorrow";
            } else {

                $firstDayOfMonth = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
                $this->dayforjavascript = "today";
            }
        } else {
            if (date("N") == 5) {
                $firstDayOfMonth = mktime(0, 0, 0, date("m"), date("d"), date("Y")) + (86400 * 3);
                $this->dayforjavascript = "3dias_lunes";
            } else if (date("N") == 6) {
                $firstDayOfMonth = mktime(0, 0, 0, date("m"), date("d"), date("Y")) + (86400 * 2);
                $this->dayforjavascript = "2dias_lunes";
            } else {
                $firstDayOfMonth = mktime(0, 0, 0, date("m"), date("d"), date("Y")) + 86400;
                $this->dayforjavascript = "tomorrow";
            }
        }

        //Obtenemos informaciÃ³n del dÃ­a en el que inicia el arrelo
        $dateComponents = getdate($firstDayOfMonth);

        //DÃ­as en el arreglo
        $numberDays = 30;

        //Mes actual setteado en cero para detectar correctamente el primer mes
        $normalFormatMonth = 0;

        // PosiciÃ³n nominal del dÃ­a en que inicia el arreglo
        // (0-6)
        $dayOfWeek = $dateComponents['wday'];

        //Encabezado de la tabla
        $calendar = "<table class='calendar'>";
        $calendar .= "<tr class='tableheaderrow'>";

        //Dump del array de dÃ­as como encabezado
        foreach ($daysOfWeek as $day) {
            $calendar .= "<th class='header'>$day</th>";
        }
        //Cerramos fila de header y abrimos el contenido del resto
        $calendar .= "</tr><tr>";

        // Hacemos el OffSet para empezar con los dÃ­as del calendario
        if ($dayOfWeek > 0) {
            $plusone = $dayOfWeek + 1;
            $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
        }

        // $month = str_pad($month, 2, "0", STR_PAD_LEFT);

        $currentDay = $firstDayOfMonth;

        //NÃºmero de "vueltas" setteado en 0
        $rounds = 0;
        //Establecemos el nÃºmero de dÃ­as por default
        $this->defaultdays = 15;

        while ($rounds <= $numberDays) {

            // Llegamos al final de la semana; hora de reiniciar la fila
            if ($dayOfWeek == 7) {

                $dayOfWeek = 0;
                $calendar .= "</tr><tr>";
            }

            $normalFormatDay = date('Y-m-d', $currentDay);

            //Si van 14 dÃ­as y es viernes (DÃ­a 15 en domingo) lo pasamos al viernes anterior
            if ($rounds == 15) {

                $weekday = date('N', strtotime($normalFormatDay));
                if ($weekday == 6) {
                    $this->defaultdays = 14;
                }
            }
            if ($rounds == 15) {

                $weekday = date('N', strtotime($normalFormatDay));
                if ($weekday == 7) {
                    $this->defaultdays = 17;
                }
            }
            //Agregamos la clase para el cambio de mes.
            if ($normalFormatMonth != date("m", $currentDay)) {

                $clasemes = date("m", $currentDay);
                $tdclass = "mes" . $clasemes;

                //Si estamos en diciembre: Regresamos a Enero en lugar de seguir sumando
                if ($clasemes > 12) {
                    $tdclass = "01";
                }
            } else {
                $tdclass = "";
            }
            $normalFormatMonth = date("m", $currentDay);
            $normalFormatJustDay = date("d", $currentDay);

            if ($rounds == 0) {
                $secondclass = "activeb";
            } else {
                $secondclass = "notactive";
            }
            $calendar .= "<td class='day " . $tdclass . " " . $secondclass . "'>";
            //Hacemos el caso exclusivo para el primer dÃ­a
            if ($rounds == 0) {
                $calendar .= "<span class='firstdate'>" . $normalFormatJustDay . "</span>";
            } else {

                if ($dayOfWeek == 6 || $dayOfWeek == 0) {
                    $calendar .= "<span class='disabledday'>" . $normalFormatJustDay . "</span>";
                } else {
                    $calendar .= "<a href='javascript:changeplazo(" . $rounds . ");'>" . $normalFormatJustDay . "</a>";
                }
            }
            $calendar .= "</td>";
            //Incrementamos DÃ­a, Vueltas y DÃ­a de la semana
            $currentDay += 86400;
            $rounds++;
            $dayOfWeek++;
        }
        if ($dayOfWeek != 7) {
            $remainingDays = 7 - $dayOfWeek;
            $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
        }
        $calendar .= "</tr>";
        $calendar .= "</table>";
        return $calendar;
    }

}
