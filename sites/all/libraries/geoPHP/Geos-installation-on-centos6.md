    sudo yum install php-devel
    cd /usr/share
    sudo wget http://download.osgeo.org/geos/geos-3.3.9.tar.bz2  # Note this changes
    sudo tar -xvjf geos-3.3.9.tar.bz2
    cd geos-3.3.9
    sudo ./configure --enable-php && sudo make clean && sudo make
    sudo make install
    sudo ldconfig
    sudo vi /etc/ld.so.conf

Add the line:
    
    /usr/local/lib
    

Save (ESC -> :x) 

Run ldconfig:
    
    sudo /sbin/ldconfig
    

create a /etc/php.d/geos.ini file with the following content:
    
    ; GEOS extension
    extension=geos.so
    
Optional - Add extension to php.ini, usually under "Dynamic Extensions" add the following:

    extension = "geos.so"

example location with WHM would be "/usr/local/lib/php.ini"


## Troubleshooting

If the compile fails with "g++ not found" or libtool gives an error, try running
    
    sudo yum groupinstall 'Development Tools'

Makes sure libraries and other stuff are there to compile.