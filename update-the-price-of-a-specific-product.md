# Update the price of a specific product.

## Query

```
UPDATE sup_postmeta
SET meta_value = 20
WHERE post_id = 17 AND meta_key = '_price';

```

## Result

```
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0
```

## Confirm Price Update

```
mysql> SELECT p.ID, p.post_title, pm.meta_value AS price
    -> FROM sup_posts p
    -> JOIN sup_postmeta pm ON p.ID = pm.post_id
    -> WHERE p.post_type = 'product' AND pm.meta_key = '_price' AND p.ID = 17;
+----+------------+-------+
| ID | post_title | price |
+----+------------+-------+
| 17 | Beanie     | 20    |
+----+------------+-------+
1 row in set (0.00 sec)
```
