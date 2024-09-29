# Retrieve the details of a specific product by its ID.

## Query
```SELECT post_title FROM sup_posts WHERE post_type = 'product' AND ID = 17;```

## Output

```
+-------------+---------------------+------------+-------------+-----------+---------------------+
| post_author | post_date           | post_title | post_status | post_name | post_modified       |
+-------------+---------------------+------------+-------------+-----------+---------------------+
|           1 | 2024-09-29 07:18:06 | Beanie     | publish     | beanie    | 2024-09-29 07:18:10 |
+-------------+---------------------+------------+-------------+-----------+---------------------+
1 row in set (0.00 sec)
```
