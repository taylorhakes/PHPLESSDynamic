PHPLESSDynamic
==============

Dynamically compile LESS files server side

REQUIREMENTS
- PHP Server
- Node, LESS (Needs to be accessible by your server,
    I need to sym link /usr/local/bin/node to /usr/bin/node and /usr/local/bin/lessc to /usr/bin/lessc )
- Web browser ( To see results)

GET STARTED

1. Include a LESS file in your html i.e. <link rel="stylesheet" type="text/css" href="test.less">

2. Place less_compile.php in the root of your public folder (might be named something else) => /less_compile.php

2. Redirect all LESS files to less_compile.php?file=<less_filename>
Here is an example Apache rewrite rule

RewriteRule ^(.+\.less)$ /less_compile.php?file=$1 [L]

3. Create a folder in public called "compiled" and give Apache write permissions to the folder

NOTES

The LESS files will not be recompiled on every page refresh, only on first load (This is done so it doesn't write when there are not changes and makes pages laod quicker). To the file to recompile each refresh, do a hard refresh or delete browser cache.
