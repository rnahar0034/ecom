While attempting to compile GEOS for use with [MAMP](http://www.mamp.info/), you will likely encounter errors like the one below.

    Making all in php
    Making all in .
    /bin/sh ../libtool  --tag=CC   --mode=compile gcc-4.0 -DHAVE_CONFIG_H -I. -I../include -I../include/geos   `/usr/bin/php-config --includes` -DCOMPILE_DL_GEOS -I../capi -I../include  -pedantic -Wall -ansi -Wno-long-long  -ffloat-store -std=gnu99 -g -O2 -MT geos_la-geos.lo -MD -MP -MF .deps/geos_la-geos.Tpo -c -o geos_la-geos.lo `test -f 'geos.c' || echo './'`geos.c
    libtool: compile:  gcc-4.0 -DHAVE_CONFIG_H -I. -I../include -I../include/geos -I/Applications/MAMP/bin/php5.3/include/php -I/Applications/MAMP/bin/php5.3/include/php/main -I/Applications/MAMP/bin/php5.3/include/php/TSRM -I/Applications/MAMP/bin/php5.3/include/php/Zend -I/Applications/MAMP/bin/php5.3/include/php/ext -I/Applications/MAMP/bin/php5.3/include/php/ext/date/lib -DCOMPILE_DL_GEOS -I../capi -I../include -pedantic -Wall -ansi -Wno-long-long -ffloat-store -std=gnu99 -g -O2 -MT geos_la-geos.lo -MD -MP -MF .deps/geos_la-geos.Tpo -c geos.c  -fno-common -DPIC -o .libs/geos_la-geos.o
    geos.c:26:17: error: php.h: No such file or directory
    geos.c:27:54: error: ext/standard/info.h: No such file or directory
    geos.c:28:72: error: Zend/zend_exceptions.h: No such file or directory
    ...

This happens because GEOS requires PHP header files from the original PHP source, and MAMP does not include those. Fortunately the MAMP Components package, made available on the [downloads page](http://www.mamp.info/en/downloads/index.html), includes all the original source packages for MAMP.

To fix the errors, follow all the instructions in [this Stack Overflow response](http://stackoverflow.com/questions/3144485/xdebug-not-loading-not-found-in-phpinfo-after-apache-restart/3875996#3875996) to get the necessary files in place. Make sure you choose the PHP package that matches the PHP version you're running with MAMP. After extracting the PHP source files to /Applications/MAMP/bin/php5.3/include/php you still need to run ./configure from that directory in order to generate header files required by GEOS. Now GEOS should compile properly.
