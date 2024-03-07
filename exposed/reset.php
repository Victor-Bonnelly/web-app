<?php
require_once('../framework.php');
session_destroy_all();

$title = "Reset";

sql_exec($database,'DELETE FROM user');
$insert_query = <<<END
INSERT INTO user (id,user,first_name,last_name,password,blocked,salt)
VALUES
(1,'kqui','Kevin','QUI','47f6fcd17d0e0223f3c00933161fcd4b',0,20fa851407c3b052),
(2,'jbon','Jean','BON','b91a4e66124a968b31d40634ba75efbb',0,82f826bbf83c1515),
(3,'echirac','Evelyne','CHIRAC','334ec3a525302869a847b67f1e111494',0,f0075bb16cb2ab76),
(4,'mpage','Marc','PAGE','08fcc711b4bb515c93a90956fb362f87',1,501e200e06ffca88)
END;
sql_exec($database,$insert_query);

html_send_page($title,"",FALSE);