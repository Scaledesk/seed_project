TYPE=VIEW
query=select `breezeof_seed`.`user_registration`.`user_registration_name` AS `Buyer`,`breezeof_seed`.`approved_product`.`product_name` AS `Product`,`breezeof_seed`.`approved_seller`.`approved_seller_name` AS `Seller`,`breezeof_seed`.`buyer_pending_order`.`price` AS `Price`,`breezeof_seed`.`buyer_pending_order`.`product_quantity_units` AS `Quantity` from (((`breezeof_seed`.`buyer_pending_order` join `breezeof_seed`.`approved_product` on((`breezeof_seed`.`buyer_pending_order`.`product_id` = `breezeof_seed`.`approved_product`.`product_id`))) join `breezeof_seed`.`approved_seller` on((`breezeof_seed`.`approved_product`.`approved_product_seller_id` = `breezeof_seed`.`approved_seller`.`approved_seller_id`))) join `breezeof_seed`.`user_registration` on((`breezeof_seed`.`buyer_pending_order`.`buyer_id` = `breezeof_seed`.`user_registration`.`user_registration_id`)))
md5=8421d65f57e4da7cbcb4d1fb0f5947c3
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2015-06-17 14:34:48
create-version=1
source=select user_registration_name as Buyer,product_name as Product, approved_seller_name as Seller ,buyer_pending_order.price as Price,buyer_pending_order.product_quantity_units as Quantity from ((buyer_pending_order inner join approved_product on buyer_pending_order.product_id = approved_product.product_id) inner join approved_seller on approved_product.approved_product_seller_id = approved_seller.approved_seller_id) inner join user_registration on buyer_pending_order.buyer_id= user_registration.user_registration_id
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `breezeof_seed`.`user_registration`.`user_registration_name` AS `Buyer`,`breezeof_seed`.`approved_product`.`product_name` AS `Product`,`breezeof_seed`.`approved_seller`.`approved_seller_name` AS `Seller`,`breezeof_seed`.`buyer_pending_order`.`price` AS `Price`,`breezeof_seed`.`buyer_pending_order`.`product_quantity_units` AS `Quantity` from (((`breezeof_seed`.`buyer_pending_order` join `breezeof_seed`.`approved_product` on((`breezeof_seed`.`buyer_pending_order`.`product_id` = `breezeof_seed`.`approved_product`.`product_id`))) join `breezeof_seed`.`approved_seller` on((`breezeof_seed`.`approved_product`.`approved_product_seller_id` = `breezeof_seed`.`approved_seller`.`approved_seller_id`))) join `breezeof_seed`.`user_registration` on((`breezeof_seed`.`buyer_pending_order`.`buyer_id` = `breezeof_seed`.`user_registration`.`user_registration_id`)))
