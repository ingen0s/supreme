# Retrieve the customer who has placed the highest total order value.

## Query
```
SELECT 
    wo.customer_id, 
    cl.first_name, 
    cl.last_name, 
    cl.email AS customer_email, 
    SUM(wo.total_amount) AS total_revenue
FROM sup_wc_orders wo
LEFT JOIN sup_wc_customer_lookup cl ON wo.billing_email = cl.email
GROUP BY wo.customer_id, cl.first_name, cl.last_name, cl.email
ORDER BY total_revenue DESC
LIMIT 1;
```

## Result
```
+-------------+------------+-----------+----------------------------+---------------+
| customer_id | first_name | last_name | customer_email             | total_revenue |
+-------------+------------+-----------+----------------------------+---------------+
|           0 | George     | Volomok   | igor+woo+test@yourfuse.com |  108.00000000 |
+-------------+------------+-----------+----------------------------+---------------+
1 row in set (0.00 sec)
```
