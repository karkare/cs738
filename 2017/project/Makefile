include ../Makefile.inc
TARGETS =	taint.html

.PHONY	: 	all clean

all	:	$(TARGETS)

$(TARGETS)	:	%.html	:	%.markdown ../footer.markdown ../htmlheader.html ../htmlfooter.html
	@cat 	$< ../footer.markdown		> tmp.markdown
	@$(LASTMODIFIED) >> tmp.markdown
	@$(MARKDOWN) --ascii	tmp.markdown > tmp.html
	@cat  ../htmlheader.html tmp.html ../htmlfooter.html  > $@
	@echo "Generating : " $@
	-@$(RM) tmp.markdown tmp.html

subdirs	:	$(SUBDIRS)

$(SUBDIRS)	:
	@$(MAKE)	-C	$@
	@echo "Making : " $@

clean	:	
	-@$(RM) $(TARGETS)
