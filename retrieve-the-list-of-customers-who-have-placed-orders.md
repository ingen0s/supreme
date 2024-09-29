# Retrieve the list of customers who have placed orders.

## Query

```
SELECT id AS order_id, customer_id, billing_email AS customer_email, status, total_amount, date_created_gmt
FROM sup_wc_orders;
```

## Result

```
+----------+-------------+-------------------+---------------+--------------+---------------------+
| order_id | customer_id | customer_email    | status        | total_amount | date_created_gmt    |
+----------+-------------+-------------------+---------------+--------------+---------------------+
|       60 |           1 | igor@your****.com | wc-processing |  36.00000000 | 2024-09-29 11:19:29 |
+----------+-------------+-------------------+---------------+--------------+---------------------+
1 row in set (0.00 sec)
```
