<?php

/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 29/09/14
 * Time: 23:13
 */
class timecalc
{

    protected $cutoffdaytime;

    //set the cutoff for today
    public function __construct($cutofftime)
    {
        date_default_timezone_set('etc/gmt-1');
        $today = date('Y-m-d');
        $this->cutoffdaytime = $today . ' ' . $cutofftime;
    }

    public function getTimeDiff()
    {
        $time = array();
        $diffsecs = strtotime($this->cutoffdaytime) - strtotime('now');
        $mins = floor($diffsecs / 60);
        $time['secs'] = $diffsecs - ($mins * 60);

        $time['hrs'] = floor($mins / 60);

        $time['mins'] = $mins - ($time['hrs'] * 60);

        $time['cutoffstr'] = $this->cutoffdaytime;

        return $time;
    }
} 