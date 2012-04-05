CC=gcc
CFLAGS=-g
INSTALL_DIR=/usr/local/bin/

default: all

all: pbm2lwxl

pbm2lwxl: pbm2lwxl.c
	$(CC) $(CFLAGS) -o pbm2lwxl pbm2lwxl.c

tarball: download_html pbm2lwxl.tar.gz 

pbm2lwxl.tar.gz: Makefile pbm2lwxl.c license.html index.html README ps2lwxl txt2lwxl small2lwxl
	tar zcvf pbm2lwxl.tar.gz Makefile pbm2lwxl.c license.html index.html README ps2lwxl txt2lwxl small2lwxl

upload: pbm2lwxl.tar.gz
	scp pbm2lwxl.tar.gz whitis@guestweb.dbd.com:public_html/software/pbm2lwxl/

download_html: 
	lynx --source http://www.freelabs.com/~whitis/software/license.html >license.html
	lynx --source http://www.freelabs.com/~whitis/software/pbm2lwxl/index.html >license.html

install:
	cp pbm2lwxl ps2lwxl txt2lwxl small2lwxl $(INSTALL_DIR)




