SITE?=databrary datavyu labnanny

PORT_databrary=8001
PORT_datavyu=8002
PORT_labnanny=8003

BASEDIR=$(CURDIR)/$(SITE)

PY=python3
PELICAN=$(PY) $(shell which pelican)
PELICANOPTS=

OUTPUTDIR=$(BASEDIR)/output

CONF=pelicanconf.py

SSH_HOST=localhost
SSH_PORT=22
SSH_USER=root
SSH_TARGET_DIR=/var/www

ifeq ($(DEBUG), 1)
	PELICANOPTS += -D
endif

help:
	@echo 'Makefile for a pelican Web site                                        '
	@echo '                                                                       '
	@echo 'Usage:                                                                 '
	@echo '   make html [SITE=all]             (re)generate the web site          '
	@echo '   make clean                       remove the generated files         '
	@echo '   make regenerate                  regenerate files upon modification '
	@echo '   make publish [SITE=all]          generate using production settings '
	@echo '   make devserver [SITE=]           start/restart develop_server.sh    '
	@echo '   make stopserver                  stop local server                  '
	@echo '                                                                       '
	@echo 'Set the DEBUG variable to 1 to enable debugging, e.g. make DEBUG=1 html'
	@echo '                                                                       '

OUTDIR=$*/output
regenerate: PELICANOPTS+=-r
publish: CONF=publishconf.py
html: $(SITE)

publish: generate
html: generate
regenerate: generate

staging: OUTDIR=/var/www/staging/$*
staging: publish

docs-datavyu:
	$(MAKE) -C ../docs-datavyu html-pelican

generate: $(addprefix generate-,$(SITE))
generate-datavyu: docs-datavyu
generate-%:
	$(PELICAN) -o $(OUTDIR) -s $*/$(CONF) $(PELICANOPTS)

clean:
	rm -rf */output

regenerate: $(SITE)

devserver: $(addprefix devserver-,$(SITE))
devserver-%:
	./devserver.sh restart $(PORT_$*) $* &

stopserver: $(addprefix stopserver-,$(SITE))
stopserver-%:
	./devserver.sh stop $(PORT_$*) $*
	@echo 'Stopped Pelican and SimpleHTTPServer processes running in background.'

.PHONY: html help clean generate regenerate devserver publish staging
