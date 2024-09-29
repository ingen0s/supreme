# Delete a product from the database.

## Query
```
DELETE FROM sup_posts WHERE ID = 36;
DELETE FROM sup_postmeta WHERE post_id = 36;
```

## Result
```
mysql> DELETE FROM sup_posts WHERE ID = 36;
Query OK, 1 row affected (0.00 sec)

mysql> DELETE FROM sup_postmeta WHERE post_id = 36;
Query OK, 23 rows affected (0.00 sec)
```
