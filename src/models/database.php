<?php

namespace Sportsy\models;

class Database
{
	function connect()
	{
		$username = "root";
		$password = "testing12";
		$hostname = "localhost"; 

		//connection to the database
		$dbhandle = mysql_connect($hostname, $username, $password)
		  or die("Unable to connect to MySQL");
		$selected = mysql_select_db("sportsy_db",$dbhandle)
          or die("Could not select examples");
        // $result = mysql_query("SELECT id, full_name FROM tbl_trainers"); //ORDER BY rating/price DESC 
                                                                         //LIMIT ($offset, $rec_limit)
        //GET ALL TRAINERS MATCHING LOCATION
        // $result = mysql_query("SELECT trainer_id FROM tbl_trainer_location 
        //                       where city_id IN (1) AND location_id IN (1) "); 
                                                                         //ORDER BY rating/price DESC 
                                                                         //LIMIT ($offset, $rec_limit)
        //GET ALL TRAINERS MATCHING CATEGORY
        $result = mysql_query("SELECT trainer_id FROM tbl_trainer_category 
        	                     where trainer_id IN (SELECT trainer_id FROM tbl_trainer_location 
                              where city_id IN (1) AND location_id IN (1)) AND category_id IN (1)");

        return $result;

        //mysql_close($dbhandle);
	}
}