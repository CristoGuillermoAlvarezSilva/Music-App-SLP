<?php 
{
        function generar_calendario($month,$year,$holidays = null){          
                    
            $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

            $headings = array('L','M','Mi','J','V','S','D');
           
            $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
        
            $running_day = date('w',mktime(0,0,0,$month,1,$year));
            $running_day = ($running_day > 0) ? $running_day-1 : $running_day;
            $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
            $days_in_this_week = 1;
            $day_counter = 0;
            $dates_array = array();
        
            $calendar.= '<tr class="calendar-row">';
        
            for($x = 0; $x < $running_day; $x++):
                $calendar.= '<td class="calendar-day-np "> </td>';
                $days_in_this_week++;
            endfor;
        
            for($list_day = 1; $list_day <= $days_in_month; $list_day++):
                $calendar.= '<td class="calendar-day">';
                
                $class="day-number ";
                if($running_day == 0 || $running_day == 6 ){
                    $class.=" not-work ";
                }
                
                $key_month_day = "month_{$month}_day_{$list_day}";
        
                if($holidays != null && is_array($holidays)){
                    $month_key = array_search($key_month_day, $holidays);
                    
                    if(is_numeric($month_key)){
                        $class.=" not-work-holiday ";
                    }
                }
                
                    $calendar.= "
                    <div class='{$class}'>
                        <button onclick='getDay();' class='dateDay' type='button' id='$list_day' data-toggle='modal' data-target='#miModal'>".$list_day."</button><br>
                    </div>";

                $calendar.= '</td>';
                if($running_day == 6):
                    $calendar.= '</tr>';
                    if(($day_counter+1) != $days_in_month):
                        $calendar.= '<tr class="calendar-row">';
                    endif;
                    $running_day = -1;
                    $days_in_this_week = 0;
                endif;
                $days_in_this_week++; $running_day++; $day_counter++;
            endfor;
        
            if($days_in_this_week < 8):
                for($x = 1; $x <= (8 - $days_in_this_week); $x++):
                    $calendar.= '<td class="calendar-day-np"> </td>';
                endfor;
            endif;
        
            $calendar.= '</tr>';
        
            $calendar.= '</table>';
            
            return $calendar;
        }                                           
    

    function mesToString($month) {
        $mes = null;
        switch($month)
        {
            case 1:
            {
            $mes = 'Enero';
            }break;
            case 2:
            {
            $mes = 'Febrero';
            }break;
            case 3:
            {
            $mes = 'Marzo';
            }break;
            case 4:
            {
            $mes = 'Abril';
            }break;
            case 5:
            {
            $mes = 'Mayo';
            }break;
            case 6:
            {
            $mes = 'Junio';
            }break;
            case 7:
            {
            $mes = 'Julio';
            }break;
            case 8:
            {
            $mes = 'Agosto';
            }break;
            case 9:
            {
            $mes = 'Septiembre';
            }break;
            case 10:
            {
            $mes = 'Octubre';
            }break;
            case 11:
            {
            $mes = 'Noviembre';
            }break;
            case 12:
            {
            $mes = 'Diciembre';
            }break;
        }
        return $mes;
    }
}
?>