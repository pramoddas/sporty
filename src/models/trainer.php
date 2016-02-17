<?php

namespace Sportsy\models;

class Trainer
{
	function run()
	{
		return "1234";
	}

	function getTrainers($category_id, $location_id, $city_id, $limit, $offset, $ratingorprice, $ascordesc)
	{
        ///ORDER BY rating/price DESC LIMIT ($offset, $rec_limit)
        //GET ALL TRAINERS MATCHING CATEGORY
        $result = mysql_query("SELECT trainer_id FROM tbl_trainer_category 
        	                  where trainer_id IN (SELECT trainer_id FROM tbl_trainer_location 
                              where city_id IN (1) AND location_id IN (1)) AND category_id IN (1)");
    }

    function getTrainersCount($category_id, $location_id, $city_id)
	{
        //LIMIT ($offset, $rec_limit)
        //GET ALL TRAINERS MATCHING CATEGORY
        $result = mysql_query("SELECT trainer_id FROM tbl_trainer_category 
        	                  where trainer_id IN (SELECT trainer_id FROM tbl_trainer_location 
                              where city_id IN (1) AND location_id IN (1)) AND category_id IN (1)");
    }
}