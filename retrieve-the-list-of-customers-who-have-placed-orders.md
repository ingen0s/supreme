# Retrieve the list of customers who have placed orders.

## Query

```
SELECT 
    wo.id AS order_id, 
    IF(wo.customer_id != 0, wo.customer_id, 'Guest') AS customer_id, 
    cl.user_id, 
    cl.username,
    cl.first_name, 
    cl.last_name, 
    wo.billing_email AS customer_email, 
    cl.country, 
    cl.postcode, 
    cl.city, 
    cl.state, 
    wo.status, 
    wo.total_amount, 
    wo.date_created_gmt
FROM sup_wc_orders wo
LEFT JOIN sup_wc_customer_lookup cl ON wo.billing_email = cl.email
WHERE wo.billing_email IS NOT NULL;


```

## Result

```
+----------+-------------+---------+---------------+------------+-----------+----------------------------+---------+----------+--------------------------+-------+---------------+--------------+---------------------+
| order_id | customer_id | user_id | username      | first_name | last_name | customer_email             | country | postcode | city
        | state | status        | total_amount | date_created_gmt    |
+----------+-------------+---------+---------------+------------+-----------+----------------------------+---------+----------+--------------------------+-------+---------------+--------------+---------------------+
|       60 | 1           |       1 | supreme_admin |            |           | igor@your****.com          | CA      | M6C 2T6  | Toronto, Ontario, Canada | ON    | wc-processing |  36.00000000 | 2024-09-29 11:19:29 |
|       61 | Guest       |    NULL |               | George     | Volomok   | igor+woo+test@your****.com | CA      | M6S 3Z3  | Toronto
        | ON    | wc-processing | 108.00000000 | 2024-09-29 14:04:39 |
+----------+-------------+---------+---------------+------------+-----------+----------------------------+---------+----------+--------------------------+-------+---------------+--------------+---------------------+
2 rows in set (0.00 sec)
```
