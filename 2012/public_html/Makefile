include Makefile.inc

SUBDIRS = #projects assignments papercritique
TARGETS =	index.html	 

.PHONY	: 	all clean subdirs $(SUBDIRS)

all	:	$(TARGETS)	$(SUBDIRS)

$(TARGETS)	:	%.html	:	%.markdown footer.markdown htmlheader.html htmlfooter.html
	@cat 	$< footer.markdown		> tmp.markdown
	@$(LASTMODIFIED) >> tmp.markdown
	@$(MARKDOWN)	tmp.markdown > tmp.html
	@cat  htmlheader.html tmp.html htmlfooter.html  > $@
	@echo "Generating : " $@

subdirs	:	$(SUBDIRS)

$(SUBDIRS)	:
	@$(MAKE)	-C	$@
	@echo "Making : " $@

clean	:	
	\rm -f $(TARGETS)
