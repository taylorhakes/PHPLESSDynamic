PHPLESSDynamic
==============

Dynamically compile LESS files server side

REQUIREMENTS
- PHP Server
- Node, LESS (Needs to be accessible by your server,
    I need to sym link /usr/local/bin/node to /usr/bin/node and /usr/local/bin/lessc to /usr/bin/lessc )
- Web browser ( To see results)

GET STARTED

1. Include a LESS file in your html i.e. ```<link rel="stylesheet" type="text/css" href="test.less">```

2. Place less_compile.php in the root of your public folder (might be named something else) => /less_compile.php

3. Redirect all LESS files to ```less_compile.php?file=<less_filename>```
Here is an example Apache rewrite rule: RewriteRule ^(.+\\.less)$ /less_compile.php?file=$1 [L]

4. Create a folder in public called "compiled" and give Apache write permissions to the folder

NOTES

The LESS files will not be recompiled on every page refresh, only on first load (This is done so it doesn't write when there are not changes and makes pages laod quicker). To the file to recompile each refresh, do a hard refresh or delete browser cache.


The MIT License (MIT)

Copyright (c) 2013 Taylor Hakes

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
