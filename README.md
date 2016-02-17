Hi Pramod,

It was good talking to you today.

Further to our conversation, please find the assignment below:

Assume a web platform where a user can find sports instructors and facilities. The functionality is:

> User can search from a database of some dummy listings
> The listings should be pulled up from a database of sports instructors
> User should be able to sort and filter the listings

The code will not be used for any project or client, but make sure coding standards and best practices are followed. 

The purpose of the assignment is to review coding best practices.


**********************************************************************************************************
DATABASE TABLES 

Trainers - image/s , name, locations, description, (last_updated), sports categories, price, average_rating, years_of_experience

Categories - category_name   ..... hierarchial categories

City - city_name ...... for similar city names ..... state should be appended

Locations - location_name , city_name (some issues)


trainer_id +++ category_id --> tbl_trainer_category

trainer_id +++ location_id ++ city_id --> tbl_trainer_location




select from tbl_trainer where trainer_id IN (select traner_id from tbl_trainer_category WHERE category_id in tbl_trainer_category 
                                             and city_id & location_id in tbl_trainer_location)
**********************************************************************************************************
BOOKING
user_id, trainer_id, duration, price, date_of_booking

ADD TO WISHLIST
user_id, trainer_id, price , notify_on_price_drop

**********************************************************************************************************

Question/FUrther clarifications -

Rating :  average

Auto-complete - 

Additional tags

Stored_procedure and compound index for complex queries

URL router needed...

security??

git version control


trainer in locations ...trainer ids
if trainer have the same category

used a templating engine


