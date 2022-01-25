<?php namespace TNEFDecoder;

/**
  * SquirrelMail TNEF Decoder Plugin
  *
  * Copyright (c) 2010- Paul Lesniewski <paul@squirrelmail.org>
  * Copyright (c) 2003  Bernd Wiegmann <bernd@wib-software.de>
  * Copyright (c) 2002  Graham Norburys <gnorbury@bondcar.com>
  *
  * Licensed under the GNU GPL. For full terms see the file COPYING.
  *
  * @package plugins
  * @subpackage tnef_decoder
  *
  */

class TNEFDate
{

   var $year;
   var $month;
   var $day;
   var $hour;
   var $minute;
   var $second;

   function setTnefBuffer($buffer)
   {
      $this->year = tnef_geti16($buffer);
      $this->month = tnef_geti16($buffer);
      $this->day = tnef_geti16($buffer);
      $this->hour = tnef_geti16($buffer);
      $this->minute = tnef_geti16($buffer);
      $this->second = tnef_geti16($buffer);
   }

   function getString()
   {
      return sprintf("%04d-%02d-%02d %02d:%02d:%02d",
                     $this->year, $this->month, $this->day,
                     $this->hour, $this->minute, $this->second);
   }

}



