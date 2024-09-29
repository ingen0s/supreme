# Retrieve the list of customers who have placed orders.

## Query

```
SELECT 
    wo.id AS order_id, 
    wo.customer_id, 
    wo.billing_email AS customer_email, 
    cl.first_name, 
    cl.last_name, 
    cl.city, 
    cl.state, 
    cl.country, 
    cl.postcode, 
    wo.status, 
    wo.total_amount, 
    wo.date_created_gmt
FROM sup_wc_orders wo
JOIN sup_wc_customer_lookup cl ON wo.customer_id = cl.customer_id
WHERE wo.billing_email IS NOT NULL;
```

## Result

```
+----------+-------------+-------------------+------------+-----------+--------------------------+-------+---------+----------+---------------+--------------+---------------------+
| order_id | customer_id | customer_email    | first_name | last_name | city                     | state | country | postcode | status        | total_amount | date_created_gmt    |
+----------+-------------+-------------------+------------+-----------+--------------------------+-------+---------+----------+---------------+--------------+---------------------+
|       60 |           1 | igor@your****.com |            |           | Toronto, Ontario, Canada | ON    | CA      | M6C 2T6  | wc-processing |  36.00000000 | 2024-09-29 11:19:29 |
+----------+-------------+-------------------+------------+-----------+--------------------------+-------+---------+----------+---------------+--------------+---------------------+
1 row in set (0.00 sec)
```
