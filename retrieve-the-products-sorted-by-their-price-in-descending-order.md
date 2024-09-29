# Retrieve the products sorted by their price in descending order.

## Query

```
SELECT p.ID, p.post_title, pm.meta_value AS price
FROM sup_posts p
JOIN sup_postmeta pm ON p.ID = pm.post_id
WHERE p.post_type = 'product' AND pm.meta_key = '_price'
ORDER BY pm.meta_value DESC;
```

## Result

```
+----+--------------------+-------+
| ID | post_title         | price |
+----+--------------------+-------+
| 20 | Sunglasses         | 90    |
| 18 | Belt               | 55    |
| 22 | Hoodie with Zipper | 45    |
| 35 | Logo Collection    | 45    |
| 14 | Hoodie             | 45    |
| 15 | Hoodie with Logo   | 45    |
| 14 | Hoodie             | 42    |
| 21 | Hoodie with Pocket | 35    |
| 23 | Long Sleeve Tee    | 25    |
| 24 | Polo               | 20    |
| 13 | V-Neck T-Shirt     | 20    |
| 26 | Single             | 2     |
| 33 | T-Shirt with Logo  | 18    |
| 34 | Beanie with Logo   | 18    |
| 35 | Logo Collection    | 18    |
| 16 | T-Shirt            | 18    |
| 17 | Beanie             | 18    |
| 19 | Cap                | 16    |
| 25 | Album              | 15    |
| 13 | V-Neck T-Shirt     | 15    |
| 36 | WordPress Pennant  | 11.05 |
+----+--------------------+-------+
21 rows in set (0.00 sec)
```
