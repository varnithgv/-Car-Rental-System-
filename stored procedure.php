
Trigger 1
DELIMITER $$
CREATE TRIGGER `update_record` AFTER INSERT ON `booking` FOR EACH ROW insert into book_record (order_no,driver_id) VALUES (new.order_no,new.car_id)
$$
DELIMITER ;
Trigger 1
DELIMITER $$
CREATE TRIGGER `price_check` BEFORE UPDATE ON `product_info` FOR EACH ROW BEGIN
	if new.rent < 0 THEN
    	SET new.rent=100;
    END IF;
END
$$
DELIMITER ;
Stored Procedure 
DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `contactSQL` ()  BEGIN
	select * from contact;
END$$	

DELIMITER ;

