
# Supreme MySQL 
```USE supreme;```

## Retrieve a list of all products.

### Query

```SELECT * FROM sup_posts WHERE post_type = 'product';```

### Output

```
+----+-------------+---------------------+---------------------+---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------+------------------------------------+-------------+----------------+-------------+---------------+--------------------+---------+--------+---------------------+---------------------+-----------------------+-------------+-----------------------------------------------------------------+------------+-----------+----------------+---------------+
| ID | post_author | post_date           | post_date_gmt       | post_content




                                                                   | post_title         | post_excerpt
     | post_status | comment_status | ping_status | post_password | post_name          | to_ping | pinged | post_modified       | post_modified_gmt   | post_content_filtered | post_parent | guid
              | menu_order | post_type | post_mime_type | comment_count |
+----+-------------+---------------------+---------------------+---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------+------------------------------------+-------------+----------------+-------------+---------------+--------------------+---------+--------+---------------------+---------------------+-----------------------+-------------+-----------------------------------------------------------------+------------+-----------+----------------+---------------+
| 13 |           1 | 2024-09-29 07:18:05 | 2024-09-29 11:18:05 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | V-Neck T-Shirt     | This is a variable product.        | publish     | open           | closed      |               | v-neck-t-shirt     |         |        | 2024-09-29 07:18:14 | 2024-09-29 11:18:14 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=13 |          0 | product   |                |             0 |
| 14 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Hoodie             | This is a variable product.        | publish     | open           | closed      |               | hoodie             |         |        | 2024-09-29 07:18:14 | 2024-09-29 11:18:14 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=14 |          0 | product   |                |             0 |
| 15 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Hoodie with Logo   | This is a simple product.          | publish     | open           | closed      |               | hoodie-with-logo   |         |        | 2024-09-29 07:18:09 | 2024-09-29 11:18:09 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=15 |          0 | product   |                |             0 |
| 16 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | T-Shirt            | This is a simple product.          | publish     | open           | closed      |               | t-shirt            |         |        | 2024-09-29 07:18:09 | 2024-09-29 11:18:09 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=16 |          0 | product   |                |             0 |
| 17 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Beanie             | This is a simple product.          | publish     | open           | closed      |               | beanie             |         |        | 2024-09-29 07:18:10 | 2024-09-29 11:18:10 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=17 |          0 | product   |                |             0 |
| 18 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Belt               | This is a simple product.          | publish     | open           | closed      |               | belt               |         |        | 2024-09-29 07:18:10 | 2024-09-29 11:18:10 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=18 |          0 | product   |                |             0 |
| 19 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.

                                                                   | Cap                | This is a simple product.          | publish     | open           | closed      |               | cap                |         |        | 2024-09-29 07:18:10 | 2024-09-29 11:18:10 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=19 |          0 | product   |                |             0 |
| 20 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Sunglasses         | This is a simple product.          | publish     | open           | closed      |               | sunglasses         |         |        | 2024-09-29 07:18:11 | 2024-09-29 11:18:11 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=20 |          0 | product   |                |             0 |
| 21 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Hoodie with Pocket | This is a simple product.          | publish     | open           | closed      |               | hoodie-with-pocket |         |        | 2024-09-29 07:18:11 | 2024-09-29 11:18:11 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=21 |          0 | product   |                |             0 |
| 22 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Hoodie with Zipper | This is a simple product.          | publish     | open           | closed      |               | hoodie-with-zipper |         |        | 2024-09-29 07:18:11 | 2024-09-29 11:18:11 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=22 |          0 | product   |                |             0 |
| 23 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Long Sleeve Tee    | This is a simple product.          | publish     | open           | closed      |               | long-sleeve-tee    |         |        | 2024-09-29 07:18:12 | 2024-09-29 11:18:12 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=23 |          0 | product   |                |             0 |
| 24 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Polo               | This is a simple product.          | publish     | open           | closed      |               | polo               |         |        | 2024-09-29 07:18:12 | 2024-09-29 11:18:12 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=24 |          0 | product   |                |             0 |
| 25 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis orci ac odio dictum tincidunt. Donec ut metus leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed luctus, dui eu sagittis sodales, nulla nibh sagittis augue, vel porttitor diam enim non metus. Vestibulum aliquam augue neque. Phasellus tincidunt odio eget ullamcorper efficitur. Cras placerat ut turpis pellentesque vulputate. Nam sed consequat tortor. Curabitur finibus sapien dolor. Ut eleifend tellus nec erat pulvinar dignissim. Nam non arcu purus. Vivamus et massa massa. | Album              | This is a simple, virtual product. | publish     | open           | closed      |               | album              |         |        | 2024-09-29 07:18:12 | 2024-09-29 11:18:12 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=25 |          0 | product   |                |             0 |
| 26 |           1 | 2024-09-29 07:18:06 | 2024-09-29 11:18:06 | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis orci ac odio dictum tincidunt. Donec ut metus leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed luctus, dui eu sagittis sodales, nulla nibh sagittis augue, vel porttitor diam enim non metus. Vestibulum aliquam augue neque. Phasellus tincidunt odio eget ullamcorper efficitur. Cras placerat ut turpis pellentesque vulputate. Nam sed consequat tortor. Curabitur finibus sapien dolor. Ut eleifend tellus nec erat pulvinar dignissim. Nam non arcu purus. Vivamus et massa massa. | Single             | This is a simple, virtual product. | publish     | open           | closed      |               | single             |         |        | 2024-09-29 07:18:13 | 2024-09-29 11:18:13 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=26 |          0 | product   |                |             0 |
| 33 |           1 | 2024-09-29 07:18:07 | 2024-09-29 11:18:07 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | T-Shirt with Logo  | This is a simple product.          | publish     | open           | closed      |               | t-shirt-with-logo  |         |        | 2024-09-29 07:18:13 | 2024-09-29 11:18:13 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=33 |          0 | product   |                |             0 |
| 34 |           1 | 2024-09-29 07:18:07 | 2024-09-29 11:18:07 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Beanie with Logo   | This is a simple product.          | publish     | open           | closed      |               | beanie-with-logo   |         |        | 2024-09-29 07:18:13 | 2024-09-29 11:18:13 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=34 |          0 | product   |                |             0 |
| 35 |           1 | 2024-09-29 07:18:07 | 2024-09-29 11:18:07 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | Logo Collection    | This is a grouped product.         | publish     | open           | closed      |               | logo-collection    |         |        | 2024-09-29 07:18:14 | 2024-09-29 11:18:14 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=35 |          0 | product   |                |             0 |
| 36 |           1 | 2024-09-29 07:18:07 | 2024-09-29 11:18:07 | Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.


                                                                   | WordPress Pennant  | This is an external product.       | publish     | open           | closed      |               | wordpress-pennant  |         |        | 2024-09-29 07:18:14 | 2024-09-29 11:18:14 |                       |           0 | http://localhost/supreme/wordpress/?post_type=product&#038;p=36 |          0 | product   |                |             0 |
+----+-------------+---------------------+---------------------+---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------+------------------------------------+-------------+----------------+-------------+---------------+--------------------+---------+--------+---------------------+---------------------+-----------------------+-------------+-----------------------------------------------------------------+------------+-----------+----------------+---------------+
```

### Result Screenshot

![6b8ff4671c6f52da565c8479496928cd.png](:/cfc55c69afd84554bd889c07af3492bf)
