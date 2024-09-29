# Retrieve the average price of all products.

## Query
```SELECT AVG(meta_value) AS average_price FROM sup_postmeta WHERE meta_key = '_price';```

## Result

```
+--------------------+
| average_price      |
+--------------------+
| 30.287499999999998 |
+--------------------+
1 row in set (0.00 sec)
```
